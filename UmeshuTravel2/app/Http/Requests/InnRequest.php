<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InnRequest extends FormRequest
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
           'name'=>'required',
           'postal'=>'numeric|required',
           'address'=>'required',
           'tel'=>'numeric|required',
           'code'=>'required',
         ];
     }

     public function messages()
    {
        return
            [
                'name.required' => '宿名は必ず入力してください。',
                'postal.required' => '郵便番号は必ず入力してください。',
                'postal.numeric' => '郵便番号を正しく入力してください。',
                'address.required' => '住所は必ず入力してください。',
                'tel.required' => '電話番号は必ず入力してください。',
                'tel.numeric' => '電話番号は数字だけで入力してください。',
                'code.required' => '分類を選択してください。',
            ];
    }
}
