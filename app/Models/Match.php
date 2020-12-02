<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Match extends Model
{
    use HasFactory;

    // Define the inverse of the relationship
    public function word()
    {
        return $this->belongsTo(Word::class);
    }
}
