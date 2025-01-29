<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Candidate extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'party',
        'description',
        'image',
        'color',
    ];

    public function ledgers(): HasMany
    {
        return $this->hasMany(Ledger::class, 'candidate_id')->whereNotNull('hash');
    }

}
