<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Level;
use App\Models\Student;

class Classroom extends Model
{
    protected $table='classerooms';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','id_level'
    ];

    public function student(){
        return $this->hasMany('App\Models\Student', 'class_id', 'id');
    }

    public function level(){
        return $this->hasOne(Level::class, 'id_level', 'id');
    }
    public function infos(){
        return $this->hasMany('App\Models\Info');
    }

    public function informations()
    {
        return $this->hasMany(\App\Models\Classroom_Info::class,'class_id','id')->orderByDesc('Created_at');

    }



}
