<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBichoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            "nome" => 'required|min:0|max:50',
            "idade"=> 'required|min:0|max:999|integer',
            "cor" => 'required|min:2|max:50',
            "tipo_bicho_id"=> 'required|integer'
        ];
    }
}
