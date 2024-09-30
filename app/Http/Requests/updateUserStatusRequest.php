<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class updateUserStatusRequest extends FormRequest
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
            'isAdmin' => ['boolean', 'required'],
            'userid' => ['required'],
        ];
    }

    public function messages(): array
    {
        return [
            'required' => 'Data :attribute harus diisi',
            'boolean' => 'Tipe data harus boolean',
        ];
    }
}
