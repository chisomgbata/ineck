<?php

use App\Models\Ledger;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('ledgers', function (Blueprint $table) {
            $table->ulid('id')->primary();
            $table->string('previous_hash')->nullable();
            $table->string('hash')->unique()->nullable();
            $table->unsignedBigInteger('nonce');
            $table->json('data');
            $table->timestamps();

            $table->index([DB::raw("json_extract(data, '$.voter_id')")], 'voter_id_index');
            $table->index([DB::raw("json_extract(data, '$.candidate_id')")], 'candidate_id_index');
        });

        $data = json_encode([
            'data' => 'Genesis Block',
            'previous_hash' => null,
            'nonce' => 0,
        ]);

        // Generate the hash for the genesis block
        $genesisBlockHash = hash('sha256', $data);

        // Create the genesis block in the ledger
       Ledger::create([
            'previous_hash' => null,
            'hash' => $genesisBlockHash,
            'nonce' => 0,
            'data' => $data,
        ]);
    }

    public function down(): void
    {
        Schema::dropIfExists('ledgers');
    }
};
