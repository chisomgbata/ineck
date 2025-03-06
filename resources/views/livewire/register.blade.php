<div>
    <div class="">

        <section class="py-32 bg-gray-50 relative">
            <div class="mb-10 flex lg:hidden"><img class="w-40" src="cronos-assets/elements/left-top-corner.svg" alt="">
            </div>
            <img class="absolute hidden lg:block top-0 left-0" src="cronos-assets/elements/left-top-corner.svg" alt="">
            <img
                class="absolute hidden lg:block top-0 right-0" src="cronos-assets/elements/right-top-corner.svg" alt="">
            <img class="absolute hidden lg:block bottom-0 left-0" src="cronos-assets/elements/left-bottom-corner.svg"
                 alt=""> <img class="absolute hidden lg:block bottom-0 right-0"
                              src="cronos-assets/elements/right-bottom-corner.svg" alt="">
            <div class="container mx-auto px-4">
                <div class="max-w-xl mx-auto">
                    <div class="bg-white p-12">
                        <div class="flex justify-center mb-6">
                            <div class="bg-yellow-100 px-2 py-1 text-xs font-bold"> VOTE NOW <br></div>
                        </div>
                        <h2 class="font-heading text-center text-4xl font-bold mb-8"> Get Accredated <br></h2>
                        <form wire:submit="accreditate">
                            <input
                                class="px-6 py-3 w-full border border-gray-200 placeholder-gray-500 text-sm focus:ring focus:ring-gray-300 transition duration-200 outline-none mb-6"
                                type="text" placeholder="FAKE ID NUMBER" id="" name="nin" wire:model="nin"> <input
                                class="px-6 py-3 w-full border border-gray-200 placeholder-gray-500 text-sm focus:ring focus:ring-gray-300 transition duration-200 outline-none mb-6"
                                type="text" placeholder="FIRST NAME" id="" name="first_name" wire:model="first_name">
                            <input
                                class="px-6 py-3 w-full border border-gray-200 placeholder-gray-500 text-sm focus:ring focus:ring-gray-300 transition duration-200 outline-none mb-6"
                                type="text" placeholder="LAST NAME" id="" name="last_name" wire:model="last_name">
                            <input
                                class="px-6 py-3 w-full border border-gray-200 placeholder-gray-500 text-sm focus:ring focus:ring-gray-300 transition duration-200 outline-none mb-6"
                                type="text"
                                placeholder="6 DIGIT PIN"
                                id="pin"
                                name="pin"
                                wire:model="pin"
                                maxlength="6"
                                pattern="\d{6}"
                                inputmode="numeric"
                                oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 6)">
                            <button
                                class="px-6 py-3 block text-center w-full bg-green-500 text-white text-sm font-bold hover:bg-green-600 focus:ring focus:ring-green-300 transition duration-200"
                                type="submit">Get Started
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="mt-10 flex lg:hidden"><img class="ml-auto w-40"
                                                   src="cronos-assets/elements/right-bottom-corner.svg"
                                                   alt=""></div>

        </section>
    </div>

    @if($modalOpen)
        <section class="absolute inset-0 w-full py-48">
            <div class="bg-gray-900 bg-opacity-80 absolute inset-0"></div>
            <div class="container mx-auto px-4 relative">
                <div class="max-w-xl mx-auto">
                    <div class="bg-white p-12">

                        <svg xmlns="http://www.w3.org/2000/svg" width="120" class="mx-auto" height="120" fill="#000000"
                             viewBox="0 0 256 256">
                            <path
                                d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24ZM74.08,197.5a64,64,0,0,1,107.84,0,87.83,87.83,0,0,1-107.84,0ZM96,120a32,32,0,1,1,32,32A32,32,0,0,1,96,120Zm97.76,66.41a79.66,79.66,0,0,0-36.06-28.75,48,48,0,1,0-59.4,0,79.66,79.66,0,0,0-36.06,28.75,88,88,0,1,1,131.52,0Z"></path>
                        </svg>
                        <h1 class="font-heading text-center mt-12 mb-2 text-xl font-bold">Your Account is been
                            Created</h1>
                        <p class="text-gray-400 text-center text-sm mb-16 ">
                            Copy and Keep Voter ID Safe,
                            You will need it to access your account,
                            And Losing it means you will lose access to your account.
                        </p>

                        <p class="text-xl font-bold font-mono bg-gray-200 text-center rounded-lg">
                            {{$hash}}
                        </p>

                        <div class="flex flex-wrap justify-center gap-4 mt-4"><a
                                class="px-6 py-3 block text-center w-full sm:w-auto bg-green-500 text-white text-sm font-bold hover:bg-green-600 focus:ring focus:ring-green-300 transition duration-200"
                                href="{{ route('votes') }}">Okay</a></div>
                    </div>
                </div>
            </div>
        </section>
    @endif
</div>
