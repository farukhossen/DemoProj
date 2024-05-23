<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \App\Models\Course;

class Student extends Model
{
    use HasFactory;
    protected $table = 'students';
    protected $fillable = array('name', 'age');
    public function courses()
    {
        return $this->belongsToMany(Course::class);
    }
}
