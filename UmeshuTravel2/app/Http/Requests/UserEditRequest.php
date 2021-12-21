<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserEditRequest extends FormRequest
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
        return
            [
                'name' => 'required|string',
                'birthday' => 'required',
                'address' => 'required',
                'tel' => 'required|digits_between:10,11',
                'email' => 'required|string',
            ];
    }

    public function messages()
    {
        return
            [
                'name.required' => '名前は必ず入力してください。',
                'name.string' => '名前は必ず文字列で入力してください。',
                'birthday.required' => '誕生日は必ず入力してください。',
                'address.required' => '住所は必ず入力してください。',
                'tel.required' => '電話番号は必ず入力してください。',
                'tel.digits_between' => '電話番号は10〜11桁で入力してください。',
                'email.required' => 'メールアドレスは必ず入力してください。',
                'email.string' => 'メールアドレスは正しく入力してください。',
            ];
    }
}
