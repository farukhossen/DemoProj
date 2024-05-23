<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \App\Models\Student;
class Course extends Model
{
    use HasFactory;
    protected $table = 'courses';
    protected $fillable = array('number', 'title');
    public function students()
    {
        return $this->belongsToMany(Student::class);
    }
}
