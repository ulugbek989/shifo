<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;
    protected $table='authors';
    protected $fillable=["fname","lname"];
    protected $dates = [
        'created_at',
        'updated_at',

    ];
    public function getFormattedDateAttribute()
    {
        return $this->created_at->diffForHumans();
    }

    protected $appends = ['formatted_date'];

}
