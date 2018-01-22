<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Subject extends Model
{  use Searchable;
    public function degree() {
        return $this->belongsTo(Degree::class);
    }

    public function exams() {
        return $this->hasMany(Exam::class);
    }}
