<?php

namespace App\Http\Controllers;

use App\Classes\Matrixmultiplier;
use App\Http\Requests\MatrixmultiplierRequest;
use Illuminate\Http\Request;

class MatrixmultiplierController extends Controller
{
    public function mult(MatrixmultiplierRequest $request){

        $validated  = $request->validated();

        $matrix_multiplier = new Matrixmultiplier($request->a,$request->b);

        $result = $matrix_multiplier->mult_matrix();

//        $result = $matrix_multiplier->encryptMatrixResult($result);

        return response()->json(['result'=>$result],200);
    }

}
