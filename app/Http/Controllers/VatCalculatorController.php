<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class VatCalculatorController extends Controller
{
    public function index()
    {
        return view('dashboard.valCalculator.index');
    }

    public function vatCalculation(Request $request)
    {
        $rules = [
            'grossSum' => 'required',
            'vatPercentage' => 'required',
            'operation' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            $errors = $validator->errors()->all();
            return response()->json([
                'status' => 'error',
                'message' => $errors,
            ], 422);

        }
        $grossSum = $request->grossSum;
        $vatPercentage = $request->vatPercentage;
        $operation = $request->operation;

        if ($operation === 'exclude') {

            $baseAmount = $grossSum / (1 + ($vatPercentage / 100));
            $vatAmount = round(($baseAmount - $grossSum) * -1, 2);
            $netAmount = $grossSum - $vatAmount;


        } else {
            $vatAmount = round($grossSum * ($vatPercentage / 100), 2);
            $netAmount = $grossSum + $vatAmount;
        }

        return response()->json([
            'status' => 'success',
            'netAmount' => $netAmount,
            'vatAmount' => $vatAmount
        ]);
    }

}
