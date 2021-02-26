<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RekapRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            // 'nama_bayi' => "unique:bayis,nama_bayi,{$this->bayi->id}|required|min:3",
            'jenis_kelamin' => 'required',
            'tanggal_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'alamat'    =>  'required',
            'nama_orangtua' => 'required'
        ];
    }
}
