<?php

namespace App\Exports;

use App\Exports\GroupsManExport;
use App\Exports\GroupsWomanExport;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;

class AllExport implements WithMultipleSheets
{
    public function sheets(): array
    {
        return [
            new GroupsManExport(),
            new GroupsWomanExport(),
        ];
    }
}