@php use App\Models\Ledger; @endphp
<div>
    {{$this->table}}

    <p class="font-mono mt-8">
        GENESIS HASH : {{Ledger::first()->hash}}
    </p>

    @auth
        <p class="font-mono mt-8">
            Your ID: {{auth()->user()->id}}
        </p>

    @endauth
</div>
