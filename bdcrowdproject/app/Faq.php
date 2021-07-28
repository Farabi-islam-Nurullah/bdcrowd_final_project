<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\PorjectModel;

class Faq extends Model
{

    function project(){
        return $this->belongsTo('App\PorjectModel');
    }

    public $table='Faq';
    public $primaryKey='id';
    public $incrementing=true;
    public $keyType='int';
    public  $timestamps=true;
}
