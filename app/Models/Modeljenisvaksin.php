<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modeljenisvaksin extends Model
{
    use HasFactory;

    protected $table = 'rtd_v_jenisvaksin';
    protected $primaryKey = 'kode';
    public $timestamps = false;
}
