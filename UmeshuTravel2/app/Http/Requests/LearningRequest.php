<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LearningRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if ($this->path() == 'learning') {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|max:10',
            'id' => 'between:8,16',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => '名前は必ず入力してください。',
            'name.max' => '名前は10文字以下で入力してください。',
            'id.between' => 'idは8〜16文字で入力してください。'
        ];
    }
}
