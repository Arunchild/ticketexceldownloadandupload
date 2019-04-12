<?php

namespace Arun\Excel\Http\Controllers;

use App\Http\Controllers\Controller;

class ExcelController extends Controller
{
    public function index(){
        return view('excel::download');
    }
}