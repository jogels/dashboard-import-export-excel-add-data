<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modelinactive extends Model
{
    use HasFactory;
    protected $table = 'rtd_v_detailinactive';
    protected $primaryKey = 'urutan';
    public $timestamps = false;
}
