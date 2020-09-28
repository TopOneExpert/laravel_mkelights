<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commands extends Model
{
    use HasFactory;

    protected $table = 'tbl_commands';

    public $timestamps = false;

    protected $fillable = [
        'id', 'device_id', 'device_state', 'entry_date', 'status',
    ];
}
