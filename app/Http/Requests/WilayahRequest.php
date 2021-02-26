<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class WilayahRequest extends FormRequest
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
            'nama_wilayah' => 'required'
        ];
    }
}
