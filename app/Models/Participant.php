<?php

namespace App\Models;

use App\Models\Group;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Participant extends Model
{
    protected $fillable = [
        'surname',
        'name',
        'patronymic',
        'email',
        'phone',
        'church',
        'pol',
        'group_id',
        'date_bird',
        'age',
        'diseases'
    ];

    public function group(): BelongsTo
    {
        return $this->belongsTo(Group::class);
    }
}
