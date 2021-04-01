<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    protected $guarded = [];

    public function titles(){
        return $this->hasMany(Title::class);
    }

    public static function boot(){
        
        parent::boot();

        static::deleting(function($character) {
            
            $character->titles()->delete();

        });
    }
}
