<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $guarded = ['_token'];
    public function type(){
        return $this->belongsTo(Type::class);
    }
    public function tecnologies(){
        return $this->belongsToMany(Technology::class);
    }
}
