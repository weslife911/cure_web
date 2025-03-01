<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Result extends Model
{
    public function user(): BelongsTo {
        return $this->belongsTo(User::class, "user_id");
    }

    public function subject(): BelongsTo {
        return $this->belongsTo(Subject::class, "subject_id");
    }

    use HasFactory;

    // protected $guarded = [];
    protected $fillable = [
        'user_id',
        'score',
        'subject_id',
    ];

}
