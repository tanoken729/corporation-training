<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $guarded = array('id');

    public static $rules = array(
        'family_name' => 'required',
         'first_name' => 'required',
             'postal' => 'required',
            'address' => 'required',
                'tel' => 'required',
              'email' => 'required',
           'birthday' => 'required',
    );


    public function getData()
    {
        return
        $this->id . ':' .
        $this->family_name . ':' .
        $this->first_name . ':' .
        $this->postal . ':' .
        $this->tel . ':' .
        $this->email . ':' .
        $this->birthday . ':';
    }
}


