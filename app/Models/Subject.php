<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Subject extends Model
{
    public function user(): BelongsTo {
        return $this->belongsTo(User::class, "user_id");
    }

    public function results(): HasMany {
        return $this->hasMany(Result::class, "subject_id");
    }
}
