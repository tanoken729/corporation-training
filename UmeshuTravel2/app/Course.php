<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $guarded = ['id', 'created_at', 'updated_at'];

    public $timestamps = false;

    public static $rules = [
        'title' => 'required',
        'price' => 'required',
    ];

    public function messages()
    {
        return [
            'title.required' => 'タイトルは必ず入力してください。',
            'price.email' => '価格は必ず入力してください。',
        ];
    }
}
