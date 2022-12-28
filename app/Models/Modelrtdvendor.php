<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modelrtdvendor extends Model
{
    use HasFactory;
    protected $table = 'rtd_vendor';
    protected $primaryKey = 'noauto';
    public $timestamps = false;
}
