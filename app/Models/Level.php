<?php

namespace App\Models;

use App\Models\Classroom;
use Illuminate\Database\Eloquent\Model;

class Level extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'level',
    ];
    protected $casts=[
        'created_at', 'updated_at','deleted_at',
    ];

    public function classes(){
        return $this->hasMany(App\Models\Classroom::class, 'id_level', 'id');
    }


}

