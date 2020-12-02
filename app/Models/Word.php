<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Word extends Model
{
    use HasFactory;

    // Define the One to One Relationship
    public function match() {
        return $this->hasOne(Match::class);
    }
}
