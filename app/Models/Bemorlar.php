<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bemorlar extends Model
{
    use HasFactory;
    protected $table="bemorlars";
    protected $fillable=["user_id","author_id","harorat","shikoyat","kurik","tashxis","tavsiya"];

    
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
    public function author()
    {
        return $this->belongsTo('App\Models\User');
    }


}
