<?php

namespace App\Models;

use App\Models\Group;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Mentor extends Model
{
    protected $fillable = [
        'surname',
        'name',
        'patronymic',
        'main',
        'group_id',

    ];

    public function group(): BelongsTo
    {
        return $this->belongsTo(Group::class);
    }
}
