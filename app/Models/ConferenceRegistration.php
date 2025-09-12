<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ConferenceRegistration extends Model
{
    use HasFactory;

    protected $fillable = [
        'name','surname','email','gender','age','region','city','church',
        'denomination','maritalstatus','sleep','wishes', 'phone'
    ];
}
