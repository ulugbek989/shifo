<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $table="posts";
    protected $fillable=["title","ctn","img","user_id"];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
    public function comment()
    {
        return $this->hasMany('App\Models\Comment');
    }
    protected $dates = [
        'created_at',
        'updated_at',

    ];
//    public function getFormattedDateAttribute()
//    {
//        return $this->created_at->diffForHumans();
//    }
//
//    protected $appends = ['formatted_date'];

}
