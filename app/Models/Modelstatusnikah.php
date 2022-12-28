<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modelstatusnikah extends Model
{
    use HasFactory;
    protected $table = 'rtd_v_statusnikah';
    protected $primaryKey = 'urutan';
    public $timestamps = false;
}
