<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    /** @use HasFactory<\Database\Factories\QuestionFactory> */
    use HasFactory;

    public function question(){
        return $this->belongsTo(Quiz::class);
    }


    public function options(){
        return $this->hasMany(Option::class);
    }


    protected $fillable = [
        'quiz_id',
        'question_text',
        ];
}
