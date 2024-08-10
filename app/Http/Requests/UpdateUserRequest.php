<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Validator;

class UpdateUserRequest extends FormRequest
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
        ];
    }

    public function messages(): array
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
                } elseif(!$user->verifiedaccount->isVerified) {
                    $validator->errors()->add(
                        'email',
                        'Email belum diverifikasi, lakukan verifikasi terlebih dahulu pada email yang telah dikirimkan.'
                    );
                } elseif(!$user->verifiedaccount->isChanged) {
                    $validator->errors()->add(
                        'email',
                        'Anda telah melakukan permintaan ganti password sebelumnya, silahkan cek pesan yang kami kirimkan pada email anda!'
                    );
                }
            }
        ];
    }
}
