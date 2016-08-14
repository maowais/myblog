<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class blog extends Model
{
    protected $table = 'blog' ;


    public function User()
    {
        return $this->belongsTo('User');
    }


}
