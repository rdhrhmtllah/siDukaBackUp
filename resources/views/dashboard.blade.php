<!DOCTYPE html>
<html lang="en" class="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/style.css">
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <title>Home</title>
</head>

<body>
    {{-- header --}}
    <x-headerAdmin></x-headerAdmin>

    {{-- sidebar --}}
    <x-sidebar><x-slot:hitungDarurat>{{ $hitungDarurat }}</x-slot:hitungDarurat><x-slot:hitungNormal>{{ $hitungNormal }}</x-slot:hitungNormal><x-slot:hitungSelesai>{{ $hitungSelesai }}</x-slot:hitungSelesai></x-sidebar>


    <!-- Content -->
    <div class="w-full lg:ps-64">
        <div class="p-4 sm:p-6 space-y-4 sm:space-y-6">
            <!-- Card Section -->
            <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
                <!-- Grid -->
                <div class="grid md:grid-cols-4 border border-gray-200 shadow-sm rounded-xl overflow-hidden">
                    <!-- Card -->
                    <a class="block p-4 md:p-5 relative bg-white hover:bg-gray-50 focus:outline-none focus:bg-gray-50 before:absolute before:top-0 before:start-0 before:w-full before:h-px md:before:w-px md:before:h-full before:bg-gray-200 before:first:bg-transparent"
                        href="#">
                        <div class="flex md:flex flex-col lg:flex-row gap-y-3 gap-x-5">
                            <svg class="shrink-0 size-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" />
                                <circle cx="9" cy="7" r="4" />
                                <path d="M22 21v-2a4 4 0 0 0-3-3.87" />
                                <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                            </svg>

                            <div class="grow">
                                <p class="text-xs uppercase tracking-wide font-medium text-gray-800">
                                    Total users
                                </p>
                                <h3 class="mt-1 text-xl sm:text-2xl font-semibold text-blue-600">
                                    72,540
                                </h3>
                                <div class="mt-1 flex justify-between items-center">
                                    <p class="text-sm text-gray-500">
                                        from <span class="font-semibold text-gray-800">70,104</span>
                                    </p>
                                    <span
                                        class="ms-1 inline-flex items-center gap-1.5 py-1 px-2 rounded-md text-xs font-medium bg-gray-200 text-gray-800">
                                        <svg class="inline-block size-3 self-center" xmlns="http://www.w3.org/2000/svg"
                                            width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                            <path
                                                d="m7.247 4.86-4.796 5.481c-.566.647-.106 1.659.753 1.659h9.592a1 1 0 0 0 .753-1.659l-4.796-5.48a1 1 0 0 0-1.506 0z" />
                                        </svg>
                                        <span class="inline-block">
                                            12.5%
                                        </span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </a>
                    <!-- End Card -->

                    <!-- Card -->
                    <a class="block p-4 md:p-5 relative bg-white hover:bg-gray-50 focus:outline-none focus:bg-gray-50 before:absolute before:top-0 before:start-0 before:w-full before:h-px md:before:w-px md:before:h-full before:bg-gray-200 before:first:bg-transparent"
                        href="#">
                        <div class="flex md:flex flex-col lg:flex-row gap-y-3 gap-x-5">
                            <svg class="shrink-0 size-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path d="M5 22h14" />
                                <path d="M5 2h14" />
                                <path d="M17 22v-4.172a2 2 0 0 0-.586-1.414L12 12l-4.414 4.414A2 2 0 0 0 7 17.828V22" />
                                <path d="M7 2v4.172a2 2 0 0 0 .586 1.414L12 12l4.414-4.414A2 2 0 0 0 17 6.172V2" />
                            </svg>

                            <div class="grow">
                                <p class="text-xs uppercase tracking-wide font-medium text-gray-800">
                                    Sessions
                                </p>
                                <h3 class="mt-1 text-xl sm:text-2xl font-semibold text-blue-600">
                                    29.4%
                                </h3>
                                <div class="mt-1 flex justify-between items-center">
                                    <p class="text-sm text-gray-500">
                                        from <span class="font-semibold text-gray-800">29.1%</span>
                                    </p>
                                    <span
                                        class="ms-1 inline-flex items-center gap-1.5 py-1 px-2 rounded-md text-xs font-medium bg-gray-200 text-gray-800">
                                        <svg class="inline-block size-3 self-center" xmlns="http://www.w3.org/2000/svg"
                                            width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                            <path
                                                d="m7.247 4.86-4.796 5.481c-.566.647-.106 1.659.753 1.659h9.592a1 1 0 0 0 .753-1.659l-4.796-5.48a1 1 0 0 0-1.506 0z" />
                                        </svg>
                                        <span class="inline-block">
                                            1.7%
                                        </span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </a>
                    <!-- End Card -->

                    <!-- Card -->
                    <a class="block p-4 md:p-5 relative bg-white hover:bg-gray-50 focus:outline-none focus:bg-gray-50 before:absolute before:top-0 before:start-0 before:w-full before:h-px md:before:w-px md:before:h-full before:bg-gray-200 before:first:bg-transparent"
                        href="#">
                        <div class="flex md:flex flex-col lg:flex-row gap-y-3 gap-x-5">
                            <svg class="shrink-0 size-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path d="M21 11V5a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h6" />
                                <path d="m12 12 4 10 1.7-4.3L22 16Z" />
                            </svg>

                            <div class="grow">
                                <p class="text-xs uppercase tracking-wide font-medium text-gray-800">
                                    Avg. Click Rate
                                </p>
                                <h3 class="mt-1 text-xl sm:text-2xl font-semibold text-blue-600">
                                    56.8%
                                </h3>
                                <div class="mt-1 flex justify-between items-center">
                                    <p class="text-sm text-gray-500">
                                        from <span class="font-semibold text-gray-800">61.2%</span>
                                    </p>
                                    <span
                                        class="ms-1 inline-flex items-center gap-1.5 py-1 px-2 rounded-md text-xs font-medium bg-gray-200 text-gray-800">
                                        <svg class="inline-block size-3 self-center" xmlns="http://www.w3.org/2000/svg"
                                            width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                            <path
                                                d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z" />
                                        </svg>
                                        <span class="inline-block">
                                            4.4%
                                        </span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </a>
                    <!-- End Card -->

                    <!-- Card -->
                    <a class="block p-4 md:p-5 relative bg-white hover:bg-gray-50 focus:outline-none focus:bg-gray-50 before:absolute before:top-0 before:start-0 before:w-full before:h-px md:before:w-px md:before:h-full before:bg-gray-200 before:first:bg-transparent"
                        href="#">
                        <div class="flex md:flex flex-col lg:flex-row gap-y-3 gap-x-5">
                            <svg class="shrink-0 size-5 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path d="M5 12s2.545-5 7-5c4.454 0 7 5 7 5s-2.546 5-7 5c-4.455 0-7-5-7-5z" />
                                <path d="M12 13a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                                <path d="M21 17v2a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-2" />
                                <path d="M21 7V5a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v2" />
                            </svg>

                            <div class="grow">
                                <p class="text-xs uppercase tracking-wide font-medium text-gray-800">
                                    Pageviews
                                </p>
                                <h3 class="mt-1 text-xl sm:text-2xl font-semibold text-blue-600">
                                    92,913
                                </h3>
                                <div class="mt-1 flex justify-between items-center">
                                    <p class="text-sm text-gray-500">
                                        from <span class="font-semibold text-gray-800">94,012</span>
                                    </p>
                                    <span
                                        class="ms-1 inline-flex items-center gap-1.5 py-1 px-2 rounded-md text-xs font-medium bg-gray-200 text-gray-800">
                                        <svg class="inline-block size-3 self-center"
                                            xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" viewBox="0 0 16 16">
                                            <path
                                                d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z" />
                                        </svg>
                                        <span class="inline-block">
                                            0.1%
                                        </span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </a>
                    <!-- End Card -->
                </div>
                <!-- End Grid -->
            </div>
            <!-- End Card Section -->
        </div>
    </div>
    <!-- End Content -->

    <script src="./node_modules/preline/dist/preline.js"></script>
</body>

</html>
