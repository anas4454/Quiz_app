<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    /** @use HasFactory<\Database\Factories\QuizFactory> */
    use HasFactory;

    public function questions()
    {
        return $this->hasMany(Question::class);
    }

      public function quiz()
    {
        return $this->hasMany(Result::class);
    }
    protected $fillable = [
        'title',
        'slug',
        'description',
        'question',
        'minutes',
        'stage',
    ];


}
