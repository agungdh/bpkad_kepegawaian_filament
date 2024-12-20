<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Opd extends Model
{
    /** @use HasFactory<\Database\Factories\OpdFactory> */
    use HasFactory, HasUlids;

    public function bidangs(): HasMany
    {
        return $this->hasMany(Opd::class);
    }
}
