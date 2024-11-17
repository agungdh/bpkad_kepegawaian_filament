<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUlids;

class Opd extends Model
{
    /** @use HasFactory<\Database\Factories\OpdFactory> */
    use HasFactory, HasUlids;
}
