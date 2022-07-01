<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class comments extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'commment', 'post_id'];

    public function post()
    {
        return $this->belongsTo(posts::class);
    }
    public function user()
    {
        return $this->hasMany(User::class);
    }

}
