<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dailyreg extends Model
{
    use HasFactory;
    protected $fillable = [
        'uname', 'utemp', 'ucheck', 'ucomp', 'utype', 'ufever', 'ucough', 'ukey', 'utime'
    ];
}
