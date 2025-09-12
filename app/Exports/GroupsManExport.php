<?php

namespace App\Exports;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Events\AfterSheet;
use Maatwebsite\Excel\Concerns\WithTitle;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class GroupsManExport implements FromView, WithEvents, ShouldAutoSize, WithTitle
{
    public function view(): View
    {
        $groups = \App\Models\Group::where('pol', '=', 'man')->orderBy('pol')->get();

        return view('exports.groups', ['groups' => $groups, 'pol' => 'man']);
    }

    public function title(): string
    {
        return 'Братья';
    }

    public function registerEvents(): array
    {
        return [
            AfterSheet::class => function(AfterSheet $event) {

                $event->sheet->getDelegate()->getPageSetup()
                    ->setPaperSize(\PhpOffice\PhpSpreadsheet\Worksheet\PageSetup::PAPERSIZE_A4);

                // Ориентация: книжная (PORTRAIT), альбомная (LANDSCAPE)
                $event->sheet->getDelegate()->getPageSetup()
                    ->setOrientation(\PhpOffice\PhpSpreadsheet\Worksheet\PageSetup::ORIENTATION_LANDSCAPE);

                // Поля страницы (в дюймах)
                $event->sheet->getDelegate()->getPageMargins()
                    ->setTop(0)
                    ->setBottom(0)
                    ->setLeft(0)
                    ->setRight(0);

                // Автоподгонка содержимого под ширину листа (на 1 страницу по горизонтали)
                $event->sheet->getDelegate()->getPageSetup()
                    ->setFitToWidth(1)
                    ->setFitToHeight(0);

                $event->sheet->getSheetView()->setZoomScale(75);
            }
        ];
    }
}