<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Parente;
use App\Models\Classroom;

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
        return $this->hasOne(Classroom::class, 'class_id', 'id');
    }




}
