<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inn extends Model
{
    //近藤5/21 1400
    protected $guarded = array('id');
    //近藤5/21 1400

    //土井5/21 1400
    public function getData()
    {
        return $this->name; //$this->id . ': ' . $this->name;
    }
    public function plans()
    {
        return $this->hasMany('App\Plan');
    }
    //土井5/21 1400

    public static $rules = array(
        'name' => 'required',
        'postal' => 'required|max:7',
        'adress' => 'required',
    );
}
