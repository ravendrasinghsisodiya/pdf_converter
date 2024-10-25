<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Barryvdh\DomPDF\Facade\Pdf;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return view('students.index', compact('students'));
    }

    public function export($format)
    {
        $students = Student::all();

        if ($format === 'csv' || $format === 'xlsx') {
            return Excel::download(new \App\Exports\StudentsExport, "students.$format");
        } elseif ($format === 'pdf') {
            $pdf = Pdf::loadView('students.pdf', compact('students'));
            return $pdf->download('students.pdf');
        }

        return redirect()->route('students.index')->with('error', 'Invalid format');
    }
}
