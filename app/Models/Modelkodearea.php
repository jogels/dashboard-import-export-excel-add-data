<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modelkodearea extends Model
{
    use HasFactory;

    protected $table = 'rtd_v_kodearea';
    protected $primaryKey = 'kodearea';
    public $timestamps = false;
}
