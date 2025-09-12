<?php

namespace App\Models;

use App\Models\Group;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Location extends Model
{
    protected $fillable = [
        'title',
        'seats',
    ];

    public function group(): HasMany
    {
        return $this->hasMany(Group::class, 'location_id', 'id');
    }
}
