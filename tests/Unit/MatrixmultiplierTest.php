<?php


use App\Classes\Matrixmultiplier;
use PHPUnit\Framework\TestCase;

class MatrixmultiplierTest extends TestCase
{
    public function test_matrix_product(){

        $a = [
            [1,2],
            [3,4]
        ];
        $b = [[5,6], [7,8]];

        $matrix_multiplier = new Matrixmultiplier($a,$b);


        $answer = [
            ["S","V"],
            ["AQ","AX"]
        ];

        $this->assertEquals($answer, $matrix_multiplier->mult_matrix());
    }
}
