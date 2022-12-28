<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modelstepvaksin extends Model
{
    use HasFactory;

    protected $table = 'rtd_v_stepvaksin';
    protected $primaryKey = 'urutan';
    public $timestamps = false;
}
