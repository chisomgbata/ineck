<!DOCTYPE html>
<html lang="en">
<head>
    <title>Page title</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
          rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap"
          rel="stylesheet">

    @vite(['resources/css/app.css'])
</head>
<body class="antialiased bg-body text-body font-body">
<div class="">

    <section class="py-32 bg-gray-50 relative">
        <div class="mb-10 flex lg:hidden"><img class="w-40" src="cronos-assets/elements/left-top-corner.svg" alt="">
        </div>
        <img class="absolute hidden lg:block top-0 left-0" src="cronos-assets/elements/left-top-corner.svg" alt=""> <img
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
                    <form action="">
                        @csrf
                        <input
                                class="px-6 py-3 w-full border border-gray-200 placeholder-gray-500 text-sm focus:ring focus:ring-gray-300 transition duration-200 outline-none mb-6"
                                type="text" placeholder="FAKE ID NUMBER" id="" name="nin"> <input
                                class="px-6 py-3 w-full border border-gray-200 placeholder-gray-500 text-sm focus:ring focus:ring-gray-300 transition duration-200 outline-none mb-6"
                                type="text" placeholder="DATE OF BIRTH" id="" name="dob"> <input
                                class="px-6 py-3 w-full border border-gray-200 placeholder-gray-500 text-sm focus:ring focus:ring-gray-300 transition duration-200 outline-none mb-6"
                                type="text" placeholder="FIRST NAME" id="" name="first_name"> <input
                                class="px-6 py-3 w-full border border-gray-200 placeholder-gray-500 text-sm focus:ring focus:ring-gray-300 transition duration-200 outline-none mb-6"
                                type="text" placeholder="LAST NAME" id="" name="last_name"> <input
                                class="px-6 py-3 w-full border border-gray-200 placeholder-gray-500 text-sm focus:ring focus:ring-gray-300 transition duration-200 outline-none mb-6"
                                type="text" placeholder="STATE OF ORIGIN" id="" name="state_of_origin"> <input
                                class="px-6 py-3 w-full border border-gray-200 placeholder-gray-500 text-sm focus:ring focus:ring-gray-300 transition duration-200 outline-none mb-6"
                                type="text" placeholder="6 DIGIT PIN" id="" name="pin">
                        <button class="px-6 py-3 block text-center w-full bg-green-500 text-white text-sm font-bold hover:bg-green-600 focus:ring focus:ring-green-300 transition duration-200"
                                type="submit">Get Started
                        </button>
                    </form>
                </div>
            </div>
        </div>
        <div class="mt-10 flex lg:hidden"><img class="ml-auto w-40" src="cronos-assets/elements/right-bottom-corner.svg"
                                               alt=""></div>
    </section>
</div>
@livewireScripts
</body>
