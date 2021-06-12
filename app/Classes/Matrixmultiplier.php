<?php

declare(strict_types=1);

namespace App\Classes;


class Matrixmultiplier
{

    protected $firstMatrix;
    protected $secondMatrix;

    public function __construct($a,$b)
    {
        $this->firstMatrix = $a;
        $this->secondMatrix = $b;
    }

    public function mult_matrix()
    {
        $row1 = count($this->firstMatrix);

        $row2 = count($this->secondMatrix);
        $col2 = count($this->secondMatrix[0]);

        $prod = array_fill(0, $col2, array_fill(0, $row1, 0));

        //Performs product of matrices a and b. Store the result in matrix prod
        for ($i = 0; $i < $row1; $i++) {
            for ($j = 0; $j < $col2; $j++) {
                for ($k = 0; $k < $row2; $k++) {
                    $prod[$i][$j] = $prod[$i][$j] + $this->firstMatrix[$i][$k] * $this->secondMatrix[$k][$j];
                }
            }
        }


        for ($i = 0; $i < count($prod); $i++){
            for ($j = 0 ; $j < count($prod[$i]);$j++){
                $prod[$i][$j] = $this->encryptMatrixResult($prod[$i][$j]);
            }
        }
        return $prod;
    }

    public function encryptMatrixResult($value)
    {

        $alphabets = ['A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z'];

//        return $alphabets[0];
        if ($value > 0){ // no letter is assigned to 0 value hence return 0
            if ($value >= 26){

                $letter = $alphabets[0];

                $times = ($value - ($value % 26)) / 26 ;

                $str = str_repeat($letter,$times);

                if ($value % 26 == 0){
                    $letter = $alphabets[25];
                    $str = str_repeat($letter,$times);
                }else{
                    $reminder = $value % 26;
                    $str = $str.$alphabets[$reminder-1];
                }

                return $str;

            }else{
                return $alphabets[$value-1];
            }
        }else{
            return $value;
        }

    }
}
