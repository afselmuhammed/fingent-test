<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $guarded = [];
    use HasFactory;

    public function mark()
    {
        return $this->hasMany(StudentMark::class);
    }

    public function teacher()
    {
        return $this->hasOne(Teacher::class, "id", "teacher_id");
    }
}
