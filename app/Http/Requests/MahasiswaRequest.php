<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MahasiswaRequest extends FormRequest
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
            //
            'npm' => 'required',
            'nik' => 'required',
            'nama' => 'required',
            'nomor_telepon' => 'required',
            'jenis_kelamin' => 'required',
            'Jurusan' => 'required',
            'email' => 'required',
            'username' => 'required',
            'password' => 'required',
        ];
    }
}
