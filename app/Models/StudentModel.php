<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentModel extends Model
{
    use HasFactory;

    public function users()
    {
        return $this->hasOne(User::class, 'user_id');
    }

    public function class()
    {
        return $this->belongsTo(ClassModel::class, 'student_id', 'id');
    }
}