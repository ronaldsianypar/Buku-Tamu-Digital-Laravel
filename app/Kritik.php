<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kritik extends Model
{
    
    protected $table = "kritiks";
    protected $primaryKey = "id";
    protected $fillable = [
    	'id',
    	'nama',
    	'kritik_saran'
    ];
}
