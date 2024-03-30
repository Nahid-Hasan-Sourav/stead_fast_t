<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VatCalculatorController extends Controller
{
    public function index(){
        return view('dashboard.valCalculator.index');
    }
}
