<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class validMatrix implements Rule
{
    protected $firstMatrix;
    protected $secondMatrix;

    public function __construct($a,$b)
    {
        $this->firstMatrix = $a;
        $this->secondMatrix = $b;
    }

    public function passes($attribute, $value): bool
    {
        if (sizeof($this->firstMatrix[0]) != 0 && sizeof($this->secondMatrix) != 0){
            return sizeof($this->firstMatrix[0]) === sizeof($this->secondMatrix);
        }
        return false;
    }

    public function message(): string
    {
        return 'Matrix b is incompatible with a for multiplication.';
    }
}
