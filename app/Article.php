<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'topic','description','user_id','topic_id',
    ];

    protected $hidden = [
        'created_at', 'updated_at',
    ];
    public $timestamps = false;

    public function user(){
        return $this->belongsTo('App\User','user_id');
    }
    public function topic(){
        return $this->belongsTo('App\Topic', 'topic_id');
    }
}
