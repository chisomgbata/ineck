<!DOCTYPE html>
<html lang="en">
<head>
    <title>Page title</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap"
        rel="stylesheet">

    @vite(['resources/css/app.css'])
</head>
<body class="antialiased bg-body text-body font-body">
<div class="">

    <section x-data="{ mobileNavOpen: false, activeSlide: 1, slideCount: 3 }" class="bg-orange-50 relative">
        <div class="absolute top-0 bottom-0 left-0 bg-white w-1/3 hidden lg:block"></div>

        <x-top-header/>

        <div class="container mx-auto p-4 mt-8 pb-16">
            <div class="flex flex-wrap items-center -m-4">
                <div class="w-full lg:w-1/2 p-4">
                    <div class="relative max-w-md mb-16">
                        <div class="mt-6 -mr-6 ml-6 -mb-6 absolute inset-0 bg-green-500"></div>
                        <div class="overflow-hidden">
                            <div :style="'transform: translateX(-' + (activeSlide - 1) * 100 + '%)'"
                                 class="flex -mx-4 transition-transform duration-500"
                                 style="transform: translateX(-0%)">
                                <div class="flex-shrink-0 px-4 w-full"><img class="relative object-cover"
                                                                            style="height: 564px"
                                                                            src="https://images.unsplash.com/photo-1603321592481-cd028bee3305?crop=entropy&amp;cs=srgb&amp;fm=jpg&amp;ixid=M3wzMzIzMzB8MHwxfHNlYXJjaHwyM3x8Vm90ZXxlbnwwfHx8fDE3Mzc4ODIzNjF8MA&amp;ixlib=rb-4.0.3&amp;q=85&amp;w=1920"
                                                                            alt=""></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full lg:w-1/2 p-4"><h1
                        class="font-heading text-green-500 text-4xl md:text-5xl font-bold mb-5 max-w-xs md:max-w-md">
                        Through Blockchain Your Vote Counts : Future of Voting with BlockChain - INECK <br></h1>
                    <p class="text-gray-600 mb-6 max-w-lg">What is the National Electoral Board's innovative solution
                        for secure and transparent voting? Discover the power of Blockchain technology with Ineck.</p>
                    <div class="flex flex-wrap -m-2 mb-20">
                        <div class="p-2 w-full sm:w-auto"><a
                                class="px-6 py-3 block text-center bg-green-500 text-white text-sm font-bold hover:bg-green-600 focus:ring focus:ring-green-300 transition duration-200"
                                href="{{ route('register') }}"> Get Accredicted <br> </a></div>
                        <div class="p-2 w-full sm:w-auto"><a
                                class="px-6 py-3 block text-center bg-orange-900 text-white text-sm font-bold hover:bg-orange-800 focus:ring focus:ring-orange-700 transition duration-200"
                                href="#">LOGIN
                            </a></div>
                    </div>
                    <div class="flex flex-wrap -m-4">
                        <div class="w-full sm:w-1/3 lg:w-1/6 p-4"><img class="h-6 mx-auto" src="images/unn.png" alt="">
                        </div>
                        <div class="w-full sm:w-1/3 lg:w-1/6 p-4"><img class="h-6 mx-auto" src="images/funz-logo.svg"
                                                                       alt=""></div>
                        <div class="w-full sm:w-1/3 lg:w-1/6 p-4"><img class="h-6 mx-auto" src="images/nacos.jpg"
                                                                       alt=""></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20">
        <div class="container mx-auto px-4">
            <div class="flex justify-center mb-6">
                <div class="bg-yellow-100 px-2 py-1 text-xs font-bold inline-block">CONTESTANTS</div>
            </div>
            <h1 class="font-heading text-center text-4xl lg:text-5xl font-bold mb-4 max-w-3xl mx-auto">ELECTORAL
                CONTESTANTS
            </h1>

            <div class="flex flex-wrap -m-4">
                @foreach($candidates as $candidate)
                    <div class="w-full lg:w-1/2 p-4">
                        <div class="bg-gray-50 p-8">
                            <div class="flex flex-wrap items-center -m-4">
                                <div class="w-full lg:w-1/2 p-4">
                                    <img class="w-full object-cover" style="height: 223px;" src="{{$candidate->image}}"
                                         alt="">
                                </div>
                                <div class="w-full lg:w-1/2 p-4">
                                    <h3 class="text-green-500 text-xl font-bold"> {{$candidate->name}}
                                    </h3>
                                    <p class="font-bold mb-3"> {{$candidate->party}}
                                    </p>
                                    <p class="text-gray-500">
                                        {{$candidate->description}}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>
        </div>
    </section>
</div>
@livewireScripts
</body>
</html>
