<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modelprovinsi extends Model
{
    use HasFactory;

    protected $table = 'rtd_v_prov';
    protected $primaryKey = 'kode';
    public $timestamps = false;
}
