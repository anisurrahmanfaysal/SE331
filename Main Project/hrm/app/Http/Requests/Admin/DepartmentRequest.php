<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class DepartmentRequest extends FormRequest
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
                'dName' => 'required', 'string', 'max:255',
                'dArea' => 'required', 'string', 'max:255',
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
