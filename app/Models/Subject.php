<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;

    protected $table = 'subjects';
    protected $guarded = ['id'];

    public function attendance(){
        return $this->hasMany(Attendance::class);
    }
}
