<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Model;

class Ledger extends Model
{
    use HasUlids;
    protected $fillable = [
        'block_index',
        'previous_hash',
        'hash',
        'nonce',
        'data',
    ];

    protected function casts(): array
    {
        return [
            'data' => 'array',
        ];
    }
}
