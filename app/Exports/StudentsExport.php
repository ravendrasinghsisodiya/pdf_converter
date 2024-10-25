<?php

namespace App\Exports;

use App\Models\Student;
use Maatwebsite\Excel\Concerns\FromCollection;

class StudentsExport implements FromCollection
{
    /**
     * Return a collection of students for export.
     */
    public function collection()
    {
        return Student::all();
    }
}
