<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\LaravelPdf\Facades\Pdf;

class TestController extends Controller
{
    public function laravelPdf()
    {
        Pdf::view('tests.laravelPdf')
            ->format('a4')
            ->save('invoice.pdf');
    }
}
