<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modelvalidasibank extends Model
{
    use HasFactory;
    protected $table = 'rtd_v_validasibank';
    protected $primaryKey = 'pajangrekening';
    public $timestamps = false;
}
