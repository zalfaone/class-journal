<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClassModel extends Model
{
    use HasFactory;

    public function students()
    {
        return $this->hasOne(StudentModel::class, 'class_id');
    }

    public function journals()
    {
        return $this->belongsTo(JournalModel::class, 'class_id');
    }
}
