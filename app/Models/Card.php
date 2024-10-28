<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Card extends Model
{
    public function color(): BelongsTo
    {
        return $this->belongsTo(Color::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
