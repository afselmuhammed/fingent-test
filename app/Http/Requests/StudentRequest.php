<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "name" => "required",
            "age" => "integer",
            "gender" => "required|in:m,f",
            "teacher_id" => "required",
        ];
    }

    public function attributes()
    {
        return [
            "teacher_id" => "Teacher",
        ];
    }
}
