<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubjectStrands extends Model
{
    protected $fillable = ['subject_id', 'section_id', 'semester', 'grade_level'];
}
