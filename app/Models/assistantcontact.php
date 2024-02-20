<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assistantcontact extends Model
{
    use HasFactory;
    protected $table = 'assistantcontacts';
    protected $fillable = [
        'name',
        'photo',
        'ascode',
        'nohp',
        'instagram',
        'idline',
    ];
}
