<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Convocation extends Model
{
    protected $table='convocations';


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'titre_conv',
        'description',
        'date_envoie',
        'jour',
        'student_id',
    ];

    protected $hidden =[
        'created_at','deleted_at','updated_at',
    ];

    public function student(){
        return $this->belongsTo('App\Models\Student','student_id', 'id');
    }


}
