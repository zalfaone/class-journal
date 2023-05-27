<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeacherModel extends Model
{
    use HasFactory;

    protected $table = 'teacher';

    protected $fillable = [
        'user_id',
    ];

    public function journals()
    {
        return $this->belongsTo(JournalModel::class, 'teacher_id','id');
    }

    public function users()
    {
        return $this->hasOne(User::class, 'user_id');
    }

    public function subjects()
    {
        return $this->hasOne(SubjectModel::class, 'teacher_id');
    }
}