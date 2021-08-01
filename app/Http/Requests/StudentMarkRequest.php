<?php

namespace App\Http\Requests;

use App\Models\StudentMark;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Validator;

class StudentMarkRequest extends FormRequest
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
        Validator::extend("check_already_exist", function (
            $attribute,
            $value,
            $parameters,
            $validator
        ) {
            $exist = StudentMark::where("student_id", $value)->where(
                "term",
                $this->term
            );
            if (!empty($this->route("mark"))) {
                $exist = $exist->where("id", "!=", $this->route("mark"));
            }
            $exist = $exist->first();
            if ($exist) {
                return false;
            }
            return true;
        });
        return [
            "student_id" =>"required|integer|exists:students,id|check_already_exist",
            "term" => "required|in:one,two",
            "maths" => "required|integer",
            "science" => "required|integer",
            "history" => "required|integer",
        ];
    }

    public function messages()
    {
        return [
            "check_already_exist" =>
                "This student already submit mark in this term",
        ];
    }
}
