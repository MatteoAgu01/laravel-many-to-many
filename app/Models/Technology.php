<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Technology extends Model
{
    use HasFactory;
    protected $guarded = ['_token'];

    public function posts(){
        return $this->belongsToMany(Posts::class);
    }
}
