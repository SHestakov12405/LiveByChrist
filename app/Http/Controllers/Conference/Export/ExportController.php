<?php

namespace App\Http\Controllers\Conference\Export;

use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\Conference\SleepHelpExport;
use App\Exports\Conference\SleepRequiredExport;
use App\Exports\Conference\AllRegistrationsExport;

class ExportController extends Controller
{
    public function exportSleepRequired()
    {
        return Excel::download(new SleepRequiredExport, 'Список_участников_кому_нужен_ночлег2025.xlsx');
    }

    public function exportSleepHelp()
    {
        return Excel::download(new SleepHelpExport, 'Список_участников_кто_может_предоставить_ночлег2025.xlsx');
    }

    public function exportAll()
    {
        return Excel::download(new AllRegistrationsExport, 'Список_всех_участников_конференции2025.xlsx');
    }
}
