<?php

namespace laravel_5_3;

use Illuminate\Database\Eloquent\Model;

class Coursetype extends Model
{
    //
    protected $table = 'course_type';
    protected $fillable = ['image','status','remark'];
}
