<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modelpendidikan extends Model
{
    use HasFactory;
    protected $table = 'rtd_v_pendidikan';
    protected $primaryKey = 'id';
    public $timestamps = false;
}
