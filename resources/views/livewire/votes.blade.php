@php use App\Models\Ledger; @endphp
<div>
    <x-top-header/>
    <main class="container mx-auto mt-4 flex flex-col lg:flex-row gap-4 p-2">
        <div class="w-full lg:w-1/2">
            <livewire:list-votes/>
        </div>
        <div class="w-full lg:w-1/2 h-full mt-8 lg:mt-0">
            <livewire:vote-bar-chart/>

            <p class="font-mono mt-8">
                GENESIS HASH : {{Ledger::first()->hash}}
            </p>

            @auth
                <p class="font-mono mt-8">
                    Your ID: {{auth()->user()->id}}
                </p>

            @endauth
        </div>
    </main>
</div>


