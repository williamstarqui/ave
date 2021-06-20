<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PdfController extends Controller
{
    public function PDF(){
        $pdf = \PDF::loadView('prueba');
        $pdf->setPaper('A4', 'landscape');
        return $pdf->download('prueba.pdf');
    }
}
