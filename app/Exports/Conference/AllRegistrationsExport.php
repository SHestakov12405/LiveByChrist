<?php

namespace App\Exports\Conference;

use App\Models\ConferenceRegistration;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithStyles;
use Maatwebsite\Excel\Concerns\WithColumnWidths;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class AllRegistrationsExport implements FromCollection, WithHeadings, WithStyles, WithColumnWidths, WithEvents
{
    public function collection()
    {
        $registrations = ConferenceRegistration::orderBy('surname')->get();

        return $registrations->map(function($item, $key) {
            return [
                '№' => $key + 1,
                'Фамилия' => $item->surname,
                'Имя' => $item->name,
                'Email' => $item->email,
                'Пол' => $item->gender === 'brother' ? 'Брат' : 'Сестра',
                'Возраст' => $item->age,
                'Регион' => $item->region,
                'Город' => $item->city,
                'Церковь' => $item->church,
                'Деноминация' => $item->denomination,
                'Семейное положение' => $item->maritalstatus === 'married' ? 'Женат/Замужем' : 'Не женат/Не замужем',
                'Нужен ночлег' => $item->sleep === 'required' ? 'Да' : '',
                'Может предоставить ночлег' => $item->sleep === 'help' ? 'Да' : '',
                'Пожелания' => $item->wishes,
            ];
        });
    }

    public function headings(): array
    {
        return [
            '№','Фамилия','Имя','Email','Пол','Возраст','Регион','Город','Церковь','Деноминация','Семейное положение','Нужен ночлег','Может предоставить ночлег','Пожелания',
        ];
    }

    public function styles(Worksheet $sheet)
    {
        return [
            1 => [
                'font' => ['bold' => true, 'color' => ['rgb' => '1F2937']],
                'fill' => ['fillType' => 'solid', 'startColor' => ['rgb' => 'CFCFCF']],
                'alignment' => ['horizontal' => 'center', 'vertical' => 'center'],
            ],
        ];
    }

    public function columnWidths(): array
    {
        return [
            'A' => 5,
            'B' => 20,
            'C' => 15,
            'D' => 25,
            'E' => 10,
            'F' => 10,
            'G' => 20,
            'H' => 15,
            'I' => 20,
            'J' => 20,
            'K' => 20,
            'L' => 15,
            'M' => 40,
        ];
    }

    public function registerEvents(): array
    {
        return [
            AfterSheet::class => function(AfterSheet $event) {
                $sheet = $event->sheet->getDelegate();
                $highestRow = $sheet->getHighestRow();
                $highestColumn = $sheet->getHighestColumn();

                $sheet->getStyle("A1:{$highestColumn}{$highestRow}")
                      ->getBorders()->getAllBorders()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN);

                for ($row = 2; $row <= $highestRow; $row++) {
                    $sheet->getStyle("A{$row}:{$highestColumn}{$row}")
                          ->getFill()
                          ->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)
                          ->getStartColor()->setRGB('FFFFFF');
                }
                $sheet->getStyle("A2:A{$highestRow}")->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);
            },
        ];
    }
}
