<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCourseRequest extends FormRequest
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
            "course_name" => ['required'],
            "course_code" => ['required'],
            "description" => ['required'],
            "credits" => ['required'],
            "semester" => ['required'],
            "instructor_id" => ['required'],
            "max_enrollment" => ['required'],
            "start_date" => ['required'],
            "end_date" => ['required']
        ];
    }
}
