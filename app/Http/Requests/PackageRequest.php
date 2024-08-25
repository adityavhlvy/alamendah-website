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
        $rules = [
            'package_name' => ['required'],
            'package_slogan' => ['required'],
            'package_price.*' => ['required'],
            'minimum_person.*' => ['required'],
            'description_package' => ['required'],
            'name_activity.*' => ['required'],
            'description_activity.*' => ['required'],
        ];
        if($this->hasFile('img_package') || !$this->filled('img_package_old')) {
            $rules['img_package'] = ['required', 'mimes:jpg,bmp,png'];
        }
        if($this->hasFile('img_activity.*') || !$this->filled('img_activity_old.*')) {
            $rules['img_activity.*'] = ['required', 'mimes:jpg,bmp,png'];
        }
        return $rules;
    }

    public function messages() :array 
    {
        return [
            'required' => ':attribute harus ditambahkan!',
            'mimes' => 'Tipe file yang diupload harus jpg, bmp, atau png',
            'name_activity.*.required' => 'Nama Aktifitas harus ditambahkan!',
            'description_activity.*.required' => 'Deskripsi Aktifitas harus ditambahkan!',
            'img_activity.*.required' => 'Gambar Aktifitas harus ditambahkan!',
            'package_price.*.required' => 'Semua harga paket harus diisi!',
            'minimum_person.*.required' => 'Semua Syarat minimal pemesan harus ditambahkan!',
        ];
    }
}
