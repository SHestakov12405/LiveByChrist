<?php

namespace App\Exports\Conference;

use App\Models\ConferenceRegistration;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithStyles;
use Maatwebsite\Excel\Concerns\WithColumnWidths;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;
use Maatwebsite\Excel\Events\AfterSheet;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class AllRegistrationsExport implements WithMultipleSheets
{
    public function sheets(): array
    {
        return [
            new AllParticipantsSheet(),
            new ExcludeBryanskParticipantsSheet(),
            new BryanskParticipantsSheet(),
            new SleepRequiredParticipantsSheet(),
        ];
    }
}

class AllParticipantsSheet implements FromCollection, WithHeadings, WithStyles, WithColumnWidths, WithEvents
{
    public function collection()
    {
        $registrations = ConferenceRegistration::orderBy('surname')->get();

        return $registrations->map(function($item, $key) {
            $registrationDate = $item->created_at;
            $amount = $registrationDate < '2025-10-21' ? 2000 : 2500;

            return [
                '№' => $key + 1,
                'Фамилия' => $item->surname,
                'Имя' => $item->name,
                'Email' => $item->email,
                'Телефон' => $item->phone,
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
                'Дата регистрации' => $registrationDate->format('Y-m-d'),
                'Сумма' => $amount,
            ];
        });
    }

    public function headings(): array
    {
        return [
            '№','Фамилия','Имя','Email','Телефон','Пол','Возраст','Регион','Город','Церковь','Деноминация','Семейное положение','Нужен ночлег','Может предоставить ночлег','Пожелания','Дата регистрации','Сумма',
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
            'E' => 20,
            'F' => 10,
            'G' => 10,
            'H' => 20,
            'I' => 15,
            'J' => 20,
            'K' => 20,
            'L' => 20,
            'M' => 15,
            'N' => 15,
            'O' => 40,
            'P' => 15,
            'Q' => 10,
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

                $sheet->getStyle("A2:A{$highestRow}")
                      ->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);
            },
        ];
    }
}

class ExcludeBryanskParticipantsSheet extends AllParticipantsSheet
{
    public function collection()
    {
        $registrations = ConferenceRegistration::where('region', '!=', 'bryansk')->where('sleep', '!=', 'required')->orderBy('surname')->get();

        return $registrations->map(function($item, $key) {
            $registrationDate = $item->created_at;
            $amount = $registrationDate < '2025-10-21' ? 2000 : 2500;

            return [
                '№' => $key + 1,
                'Фамилия' => $item->surname,
                'Имя' => $item->name,
                'Email' => $item->email,
                'Телефон' => $item->phone,
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
                'Дата регистрации' => $registrationDate->format('Y-m-d'),
                'Сумма' => $amount,
            ];
        });
    }
}

class BryanskParticipantsSheet extends AllParticipantsSheet
{
    public function collection()
    {
        $registrations = ConferenceRegistration::where('region', '=', 'bryansk')->where('sleep', '!=', 'required')->orderBy('surname')->get();

        return $registrations->map(function($item, $key) {
            $registrationDate = $item->created_at;
            $amount = $registrationDate < '2025-10-21' ? 2000 : 2500;

            return [
                '№' => $key + 1,
                'Фамилия' => $item->surname,
                'Имя' => $item->name,
                'Email' => $item->email,
                'Телефон' => $item->phone,
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
                'Дата регистрации' => $registrationDate->format('Y-m-d'),
                'Сумма' => $amount,
            ];
        });
    }
}

class SleepRequiredParticipantsSheet extends AllParticipantsSheet
{
    public function collection()
    {
        $registrations = ConferenceRegistration::where('sleep', '=', 'required')->orderBy('surname')->get();

        return $registrations->map(function($item, $key) {
            $registrationDate = $item->created_at;
            $amount = $registrationDate < '2025-10-21' ? 2000 : 2500;

            return [
                '№' => $key + 1,
                'Фамилия' => $item->surname,
                'Имя' => $item->name,
                'Email' => $item->email,
                'Телефон' => $item->phone,
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
                'Дата регистрации' => $registrationDate->format('Y-m-d'),
                'Сумма' => $amount,
            ];
        });
    }
}
