<?php

namespace LabSys;

use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    protected $table = 'exams';
    protected $guarded = [];
    public $timestamps = false;
}
