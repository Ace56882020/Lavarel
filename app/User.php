<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = [
        'user', 'city',
    ];
    protected $hidden = [
        'created_at', 'updated_at',
    ];
    //relacion 

    public function article(){
        return $this->hasMany('App\Article');
    }
}
