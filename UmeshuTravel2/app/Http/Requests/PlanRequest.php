<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PlanRequest extends FormRequest
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
          'price'=>'numeric|required',
        ];
    }

    public function messages()
   {
       return
           [
               'name.required' => 'プラン名は必ず入力してください。',
               'price.required' => '価格は必ず入力してください。',
               'price.numeric' => '価格は数字で入力してください。',
           ];
   }
}
