<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CarStoreRequest extends FormRequest
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
            'size' => ['required', new \App\Rules\EngineSizeFormatRule],
            'make' => [new \App\Rules\NotDefaultOption],
            'year' => ['required', new \App\Rules\YearFormatRule],
            'mileage' => 'required|min:0',
        ];
    }
}
