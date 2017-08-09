<?php

namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;

class CreateUserRequest extends FormRequest
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
            'password' => 'required|string|min:6|confirmed',
            'verify_password'   =>  'required|same:password',
        ];
    }

    public function messages()
    {
        return[
            'password.required' => 'vui lòng nhập mật khẩu',
            'password.confirmed' => 'nhập lại mật khẩu chưa chính xác',
            'password.min' => 'mật khẩu phải lớn hơn 5 kí tự',
            'verify_password.required' => 'vui lòng nhập lại password',
            'verify_password.same' => 
        ];
    }
}
