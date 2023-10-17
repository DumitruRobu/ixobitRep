<?php

namespace App\Http\Requests\ParamsControllers;

use Illuminate\Foundation\Http\FormRequest;

class UpdateParamRequest extends FormRequest
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
            'memory'=>"required|string",
            'display'=>"required|string",
            'ram'=>"required|string",
            'battery'=>"required|string",
            'model'=>"required|string",
            'sim'=>"required|string",
            'refreshRate'=>"required|string",
            'color'=>"required|string",
            'processor'=>"required|string",
            'connection'=>"required|string",
            'displayType'=>"required|string",
            'nfc'=>"required|string",
            'processorModel'=>"required|string",
            'isRecommended'=>"required|string",
        ];
    }
}
