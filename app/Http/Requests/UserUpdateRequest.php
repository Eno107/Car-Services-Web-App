<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;
use libphonenumber\PhoneNumberUtil;

class UserUpdateRequest extends FormRequest
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
        $currentUserid = auth()->user()->id;

        return [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', Rule::unique('users')->ignore($currentUserid)],
            'password' => ['nullable', 'string', 'min:8'],
            'tel' => [
                'required',
                function ($attribute, $value, $fail) {
                    $phoneNumberUtil = PhoneNumberUtil::getInstance();

                    try {
                        $phoneNumber = $phoneNumberUtil->parse($value, null);
                        if ($phoneNumberUtil->isValidNumber($phoneNumber)) {
                            return;
                        }
                    } catch (\libphonenumber\NumberParseException $e) {
                    }

                    $fail('The ' . $attribute . ' is not a valid phone number.');
                },
            ],
        ];
    }
}
