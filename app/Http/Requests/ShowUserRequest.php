<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\User;
use App\Rules\Verified;
use Illuminate\Validation\Validator;

class ShowUserRequest extends FormRequest
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
            'email' => ['required','email'],
            'password' => ['required'],
        ];
    }

    public function messages() :array 
    {
        return [
            'required' => 'Data :attribute harus diisi.',
            'email' => 'Data email harus sesuai dengan format email',
            
        ];
    }

    public function after(): array
    {
        return [
            function (Validator $validator) {
                $email = $this->input('email');
                $user = User::where('email', $email)->first();
                if (!$user) {
                    $validator->errors()->add(
                        'email',
                        'Email belum terdaftar, lakukan registrasi terlebih dahulu.'
                    );
                } 
            }
        ];
    } 
}
