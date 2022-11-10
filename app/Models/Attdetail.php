<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attdetail extends Model
{
    use HasFactory;

    protected $table = 'attdetails';
    protected $guarded = ['id'];

    public function teacher(){
        return $this->belongsTo(User::class, 'teacher_id');
    }

    public function subject(){
        return $this->belongsTo(Subject::class, 'subject_id');
    }

    public function kelas(){
        return $this->belongsTo(Kelas::class, 'kelas_id');
    }

    public function attendance(){
        return $this->belongsTo(Attendance::class, 'attendance_id');
    }

    public function student(){
        return $this->belongsTo(User::class, 'student_id');
    }
}
