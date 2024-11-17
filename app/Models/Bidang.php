<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Bidang extends Model
{
    /** @use HasFactory<\Database\Factories\BidangFactory> */
    use HasFactory, HasUlids;

    public function opd(): BelongsTo
    {
        return $this->belongsTo(Opd::class);
    }
}
