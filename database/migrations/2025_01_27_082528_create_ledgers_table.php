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
            $table->timestamp('became_invalid_at')->nullable();
            $table->timestamps();

            // Add generated columns for JSON fields
            $table->string('voter_id')->storedAs("JSON_UNQUOTE(JSON_EXTRACT(data, '$.voter_id'))");
            $table->unsignedBigInteger('candidate_id')->storedAs("JSON_UNQUOTE(JSON_EXTRACT(data, '$.candidate_id'))");

            // Add indexes on the generated columns
            $table->index('voter_id', 'voter_id_index');
            $table->index('candidate_id', 'candidate_id_index');
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
