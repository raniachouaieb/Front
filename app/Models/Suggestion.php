<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Suggestion extends Model
{
    protected $table= 'suggestions';

    protected $fillable=[
        'sujet',
        'detail',
    ];

     protected $casts=[
         'created_at','deleted_at','updated_at'
];
}
