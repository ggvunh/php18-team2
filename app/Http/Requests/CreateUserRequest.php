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
            'name' => 'required|string|max:255|min:5',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ];
    }

    public function messages()
    {
        return[
            'name.required' => 'vui lòng nhập tên của bạn',
            'name.max' => 'tên quá dài',
            'name.min' => 'tên phải lớn hơn 4 kí tự',
            'email.required' => 'vui lòng nhập email',
            'email.unique' => 'địa chỉ email đã tồn tại',
            'password.required' => 'vui lòng nhập mật khẩu',
            'password.confirmed' => 'nhập lại mật khẩu chưa chính xác',
            'password.min' => 'mật khẩu phải lớn hơn 5 kí tự',
        ];
    }
}
