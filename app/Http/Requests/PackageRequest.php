<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PackageRequest extends FormRequest
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
            'package_name' => ['required'],
            'package_slogan' => ['required'],
            'package_price' => ['required'],
            'minimum_person' => ['required'],
            'img_package' => ['required', 'mimes:jpg,bmp,png'],
            'description_package' => ['required'],
            'name_activity' => ['required'],
            'img_activity.*' => ['required', 'mimes:jpg,bmp,png'],
            'description_activity' => ['required'],
        ];
    }

    public function messages() :array 
    {
        return [
            'required' => ':attribute harus ditambahkan!',
            'mimes' => 'Tipe file yang diupload harus jpg, bmp, atau png',
        ];
    }
}
