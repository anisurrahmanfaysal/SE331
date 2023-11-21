<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class EmployeeRequest extends FormRequest
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
        
        $rules = [
            'fName' => 'required', 'string', 'max:255',
            'lName' => 'required', 'string', 'max:255',
            'email' => 'required', 'email', 'max:255',
            'phone' => 'required', 'numeric', 'min:11','max:14',
            'address' => 'required', 'string', 'max:255',
            'joindate' => 'required','date',
            'gender' => 'required',
            'department' => 'required'
        ];
            if ($this->getMethod() == 'POST') {
                $rules += ['image' => 'required |image|mimes:jpeg,png,jpg,gif,svg'];
            }
            else{
                $rules += ['image' => 'image|mimes:jpeg,png,jpg,gif,svg'];
            }

        return $rules;

    }
}
