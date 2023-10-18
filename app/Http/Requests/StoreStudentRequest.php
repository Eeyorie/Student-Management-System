<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreStudentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'first_name'=>['required', 'min:2', 'alpha'],
            'last_name'=>['required'],
            'date_of_birth'=>['required'],
            'email'=>['required'],
            'phone_number'=>['required', 'min:2', 'alpha'],
            'gender'=>['required'],
            'address'=>['required'],
            'enrollment_date'=>['required'],
            'guardian_name'=>['required'],
            'guardian_email'=>['required'],
            'guardian_phone_number'=>['required'],
        ];
    }
}
