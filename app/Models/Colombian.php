<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Colombian extends Model
{
    use HasFactory;

    public function loans(): HasMany
    {
        return $this->hasMany(Loan::class);
    }
}
