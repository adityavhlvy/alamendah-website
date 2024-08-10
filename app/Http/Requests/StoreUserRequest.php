<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
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
            'name' => 'required|max:30',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:9|max:20',
            'address' => 'required',
            'telephone' => 'required',
        ];
    }

    public function messages(): array 
    {
        return [
            'required' => 'Data :attribute harus diisi.',
            'email' => 'Data email harus sesuai dengan format email',
            'min' => 'Data :attribute harus memiliki panjang minimal :min karakter.',
            'max' => 'Data :attribute harus memiliki panjang maximal :max karakter.',
            'unique' => ':attribute sudah terdaftar sebelumnya',
        ];
    }
}
