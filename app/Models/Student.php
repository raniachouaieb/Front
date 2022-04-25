<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Parente;
use App\Models\Classroom;
use App\Models\Travail;

class Student extends Model
{

    protected $fillable=[
        'nomEleve','prenomEleve','gender','classe','class_id',
        'niveau', 'parent_id','birth',
    ];
    protected $hidden=[
        'created_at','deleted_at','updated_at'
    ];
    //each student have one parent
    public function parent(){
        return $this->belongsTo(Parente::class,'parent_id', 'id');
    }
    public function class(){
        return $this->hasOne('App\Models\Classroom', 'class_id', 'id');
    }

    public function travails(){
        return $this->hasMany('App\Models\Travail','student_id','id');
        //return $this->hasMany(Travail::class, 'student_id','id');
    }




}
