<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    //近藤5/22 1700
    protected $guarded = array('id');

    public static $rules = [
        'reservation_date' => 'required',
        'num_people' => 'required',
        'checkin_time' => 'required',
        'checkout_time' => 'required',
    ];
    // public static $messages = [];
    public function plan()
    {
        return $this->belongsTo('App\Plan');
    }
    //近藤5/22 1700
}
