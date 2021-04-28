<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tamu extends Model
{
    protected $table = "tamu";
    protected $primaryKey = "id";
    protected $fillable = [
    	'id',
    	'nama',
    	'no_telp',
    	'alamat',
    	'keperluan',
        'jenistamu_id',
        'signature'
    ];
    public function jenistamu()
    {
    	return $this->belongsTo(Jenistamu::class);
    }
}
