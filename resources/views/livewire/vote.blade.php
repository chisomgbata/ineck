<div>
    <button
        wire:click="openModal"
        class="px-6 py-3 bg-yellow-500 text-sm text-yellow-900 font-bold hover:bg-yellow-400 focus:ring focus:ring-yellow-200 transition duration-200"
    >VOTE NOW
    </button>

    @if($voteModal)
        <div class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center">
            @if($hasVotedBefore)
                <div class="bg-white p-6 rounded-lg">
                    <h2 class="text-2xl font-bold text-gray-800">You have already voted!</h2>
                    <p class="text-gray-600 mt-2">You can only vote once.</p>
                    <button
                        wire:click="closeModal"
                        class="px-6 py-3 bg-yellow-500 text-sm text-yellow-900 font-bold hover:bg-yellow-400 focus:ring focus:ring-yellow-200 transition duration-200 mt-4"
                    >Close
                    </button>
                </div>
            @else
                <div class="bg-white p-4 w-1/2">
                    <div class="flex justify-between items-center">
                        <h2 class="text-xl font-bold">Vote</h2>
                        <button wire:click="closeModal" class="text-xl font-bold">&times;</button>
                    </div>
                    <form wire:submit.prevent="vote">

                        {{--                    radio buttons for all candidates--}}

                        @foreach($candidates as $candidate)
                            <div class="my-4">
                                <label for="{{$candidate->id}}">
                                    <input type="radio" id="{{$candidate->id}}" name="candidate_id"
                                           wire:model="candidate"
                                           value="{{$candidate->id}}">
                                    {{$candidate->name}}
                                </label>
                            </div>
                        @endforeach

                        <div class="my-4 mt-8">
                            <button type="submit" class="bg-yellow-500 text-white p-2">Vote</button>
                        </div>
                    </form>
                </div>
            @endif
        </div>
    @endif


</div>
