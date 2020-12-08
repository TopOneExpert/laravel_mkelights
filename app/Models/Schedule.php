<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;

    protected $table = 'tbl_schedules';

    public $timestamps = false;

    protected $fillable = [
        'id', 'from_time', 'to_time',
    ];
}
