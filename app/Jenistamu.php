<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jenistamu extends Model
{
    protected $table = "jenistamu";
    protected $primaryKey = "id";
    protected $fillable = [
    	'id',
    	'jenistamu'];

    public function tamu()
    {
    	return $this->hasMany(Tamu::class);
    }
}
