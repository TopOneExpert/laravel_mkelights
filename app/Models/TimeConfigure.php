<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TimeConfigure extends Model
{
    use HasFactory;

    protected $table = 'tbl_timeconfigure';

    protected $fillable = [
        'id', 'config_type', 'config_value',
    ];
}
