<?php

namespace App\Models;

use App\Models\Student;
use App\Models\Travail;
use Illuminate\Database\Eloquent\Model;


class Matiere extends Model
{
    protected $table='matieres';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'nom',
        'coefficient',
        'module_id',
        'niveau_id'
    ];
    protected $hidden=[
        'created_at','deleted_at','updated_at',

    ];

    public function student(){
        return $this->hasMany(Student::class);
    }



    public function travail(){
        return $this->belongsTo('App\Models\Travail', 'matiere_id', 'id');
    }



}
