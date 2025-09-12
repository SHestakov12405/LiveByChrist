<?php

namespace App\Models;

use App\Models\Location;
use App\Models\Participant;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Group extends Model
{
    protected $fillable = [
        'title',
        'pol',
        'age',
        'location_id',
    ];

    public function location(): BelongsTo
    {
        return $this->belongsTo(Location::class);
    }

    public function mentors(): HasMany
    {
        return $this->hasMany(Mentor::class, 'group_id', 'id');
    }

    public function participants(): HasMany
    {
        return $this->hasMany(Participant::class, 'group_id', 'id');
    }


}
