<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Announcecheck extends Model
{
    use HasFactory;

    protected $table = 'announcechecks';

    protected $dates = [
        'created_at',
        'updated_at'
    ];

    protected $fillable = [
        'isMessageActive',
        'isPlotActive',
        'isRoleActive',
        'created_at',
        'updated_at'
    ];
}
