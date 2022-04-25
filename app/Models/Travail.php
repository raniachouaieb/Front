<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Classroom;
use App\Models\Student;

class Travail extends Model
{
    protected $table = 'travails';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'titre_travail',
        'detail_travail',
        'date_depot',
        'date_limite',
        'matiere_id',
        'class_id',
        'student_id',
        'file',
        'extension',

    ];
    protected $hidden=[
        'created_at','deleted_at','updated_at',
    ];


    public function class(){
        return $this->belongsTo(Classroom::class, 'class_id', 'id');
    }

    public function student(){
        return $this->belongsTo('App\Models\Student', 'student_id','id');
        //return $this->belongsTo(Student::class, 'student_id', 'id');
    }
}
