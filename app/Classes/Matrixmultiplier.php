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

    public function mult_matrix(): array
    {
        $row1 = count($this->firstMatrix);

        $row2 = count($this->secondMatrix);
        $col2 = count($this->secondMatrix[0]);

        $prod = array_fill(0, $col2, array_fill(0, $row1, 0));

//        return $prod;








        //Performs product of matrices a and b. Store the result in matrix prod
        for ($i = 0; $i < $row1; $i++) {
            for ($j = 0; $j < $col2; $j++) {
                for ($k = 0; $k < $row2; $k++) {
                    $prod[$i][$j] = $prod[$i][$j] + $this->firstMatrix[$i][$k] * $this->secondMatrix[$k][$j];
                }
            }
        }
        return $prod;
    }
}
