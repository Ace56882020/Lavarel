<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    protected $fillable = [
        'name', 'author',
    ];

    protected $hidden = [
        'created_at', 'updated_at',
    ];
    public function article(){
        return $this->hasMany('App\Article');
    }
}
