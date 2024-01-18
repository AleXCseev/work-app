<?php

namespace App\Http\Requests\Worker;

use Illuminate\Foundation\Http\FormRequest;

class IndexRequest extends FormRequest
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
            'name' => 'nullable|string',
            'surname' => 'nullable|string',
            'email' => 'nullable|string',
            'from' => 'nullable|integer',
            'to' => 'nullable|integer',
            'age' => 'nullable|integer',
            'description' => 'nullable|string',
            'is_married' => 'nullable|string',
        ];
    }

    public function messages(): array
    {
        return [
            'name.string' => 'Неверный формат имени',
            'surname.string' => 'Неверный формат фамилии',  
            'from.integer' => 'Неверный формат возраста',
            'to.integer' => 'Неверный формат возраста',
            'description.string' => 'Неверный формат описания',
        ];
    }
}
