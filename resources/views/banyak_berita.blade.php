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
    {{-- Navbar --}}
    <x-navbar></x-navbar>

    <!-- Card Blog -->
    <!-- Card Blog -->
    <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
        <!-- Grid -->
        <div class="grid mb-4 lg:grid-cols-2 lg:gap-y-16 gap-10">
            @foreach ($posts as $post)
                <!-- Card -->
                <a class="group block rounded-xl overflow-hidden focus:outline-none"
                    href="/moreberita/{{ $post->slug }}">
                    <div class="flex flex-col sm:flex-row sm:items-center gap-3 sm:gap-5">
                        <div class="shrink-0 relative rounded-xl overflow-hidden w-full sm:w-56 h-44">
                            <img class="group-hover:scale-105 group-focus:scale-105 transition-transform duration-500 ease-in-out size-full absolute top-0 start-0 object-cover rounded-xl"
                                src="https://images.unsplash.com/photo-1540575861501-7cf05a4b125a?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=320&q=80"
                                alt="Blog Image">
                        </div>

                        <div class="grow">
                            <h3 class="text-xl font-semibold text-gray-800 group-hover:text-gray-600">
                                {{ $post['title'] }}
                            </h3>
                            <p class="mt-3 text-gray-600">
                                {{ Str::limit($post['isi'], 150) }}
                            </p>
                            <p
                                class="mt-4 inline-flex items-center gap-x-1 text-sm text-blue-600 decoration-2 group-hover:underline group-focus:underline font-medium">
                                Read more
                                <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="m9 18 6-6-6-6" />
                                </svg>
                            </p>
                        </div>
                    </div>
                </a>
                <!-- End Card -->
            @endforeach

        </div>
        <!-- End Grid -->
        {{ $posts->links() }}
    </div>
    <!-- End Card Blog -->

    {{-- footer --}}
    <x-footer></x-footer>





    <script src="./node_modules/preline/dist/preline.js"></script>
</body>

</html>
