<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class libro extends Model
{
    //
    protected $table = 'libro';
    protected $primaryKey = 'idLibro';
	public $timestamps = false;
	public $connection = 'mysql';
}
