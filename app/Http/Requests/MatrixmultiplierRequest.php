<?php

namespace App\Http\Requests;

use App\Rules\validMatrix;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\JsonResponse;
use Illuminate\Validation\ValidationException;

/**
 * @property mixed a
 * @property mixed b
 */
class MatrixmultiplierRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'a' => 'required',
            'b' => [
                'required',
                new validMatrix($this->getA(),$this->getB())
            ]
        ];
    }

    public function getA(){
        return $this->a;
    }

    public function getB(){
        return $this->b;
    }

    protected function failedValidation(Validator $validator)
    {
        $errors = (new ValidationException($validator))->errors();

        throw new HttpResponseException(
            response()->json(['errors' => $errors],JsonResponse::HTTP_UNPROCESSABLE_ENTITY)
        );
    }
}
