<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    //近藤5/21 1200
    public function inn()
    {
        return $this->belongsTo('App\Inn');
    }
    //近藤5/21 1200
}
