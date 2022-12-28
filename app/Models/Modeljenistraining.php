<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modeljenistraining extends Model
{
    use HasFactory;

    protected $table = 'rtd_v_jenistraining';
    protected $primaryKey = 'kode';
    public $timestamps = false;
}
