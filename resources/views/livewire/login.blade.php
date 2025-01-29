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
                        <h2 class="font-heading text-center text-4xl font-bold mb-8"> LOGIN <br></h2>
                        <form wire:submit="login">
                            <input
                                class="px-6 py-3 w-full border border-gray-200 placeholder-gray-500 text-sm focus:ring focus:ring-gray-300 transition duration-200 outline-none mb-6"
                                type="text" placeholder="VOTER ID" id="" name="first_name" wire:model="voter_id">
                            <input
                                class="px-6 py-3 w-full border border-gray-200 placeholder-gray-500 text-sm focus:ring focus:ring-gray-300 transition duration-200 outline-none mb-6"
                                type="password" placeholder="6 DIGIT PIN" id="" name="last_name" wire:model="pin">

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
    

</div>
