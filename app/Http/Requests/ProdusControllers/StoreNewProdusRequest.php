<?php

namespace App\Http\Requests\ProdusControllers;

use Illuminate\Foundation\Http\FormRequest;

class StoreNewProdusRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'barcode'=>"required|string",
            'idBrand'=>"required|string",
            'name'=>"required|string",
            'price'=>"required|string",
            'image'=>"required|string",
            'id_params'=>"required|string",
        ];
    }
}
