<?php

namespace App\Http\Requests\Worker;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'name' => 'required|string',
            'surname' => 'required|string',
            'email' => 'required|email',
            'age' => 'nullable|integer',
            'description' => 'nullable|string',
            'is_married' => 'nullable|string',
        ];
    }

    public function messages(): array
    {
        return [
            'name.string' => 'Неверный формат имени',
            'name.required' => 'Имя обязательно',
            'surname.string' => 'Неверный формат фамилии',  
            'surname.required' => 'Фамилия обязательна',
            'age.integer' => 'Неверный формат возраста',
            'description.string' => 'Неверный формат описания',
            'email.email' => 'Неверный email',
            'email.required' => 'email обязателен',
        ];
    }
}
