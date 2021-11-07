<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminRequest extends FormRequest
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
            'email' => 'required|email',
            'password'=>'required|min:3|max:12'
        ];
    }
    public function messages(){
        return [
            'email.required'=>'ban phai nhap email',
            'password.required'=>'ban phai nhap mat khau',
            'password.min'=>'mat khau it nhat 3 ky tu',
            'password.max'=>'mat khau nhieu nhat 12 ky tu'
        ];
    }
}
