<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Datacaas extends Authenticatable
{
    use HasFactory;
    protected $guard = 'caas';
    protected $table = 'datacaas';
    protected $hidden = [
        'password', 'remember_token'
    ];
    protected $fillable = [
        'name',
        'nim',
        'major',
        'class',
        'email',
        'password',
        'created_at',
        'updated_at',
    ];

    public function plots()
    {
        return $this->hasOne(Plotting::class, 'caas_id', 'id');
    }

    public function status()
    {
        return $this->hasOne(Status::class, 'caas_id', 'id');
    }

    public function role()
    {
        return $this->hasOne(Grouprole::class, 'caas_id', 'id');
    }

    public function stages()
    {
        return Stage::where('isActive', 1)->first();
    }

    public function announcecheck()
    {
        return Announcecheck::first();
    }
}
