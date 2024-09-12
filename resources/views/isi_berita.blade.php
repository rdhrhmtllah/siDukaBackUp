<!DOCTYPE html>
<html lang="en" class="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/style.css">
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <title>{{$post->judul}}</title>
</head>

<body>
    <x-navbar></x-navbar>

    <!-- Blog Article -->
    <div class="max-w-[85rem] px-4 sm:px-6 lg:px-8 mx-auto">
        <div class="grid lg:grid-cols-3 gap-y-8 lg:gap-y-0 lg:gap-x-6">
            <!-- Content -->
            <div class="lg:col-span-2">
                <div class="py-8 lg:pe-8">
                    <div class="space-y-5 lg:space-y-8">
                        <a class="inline-flex items-center gap-x-1.5 text-sm text-gray-600 decoration-2 hover:underline "
                            href="{{ url()->previous() }}">
                            <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path d="m15 18-6-6 6-6" />
                            </svg>
                            Back to Blog
                        </a>

                        <h2 class="text-3xl font-bold lg:text-5xl ">{{ $post['title'] }}</h2>

                        <div class="flex items-center gap-x-5">
                            <a class="inline-flex items-center gap-1.5 py-1 px-3 sm:py-2 sm:px-4 rounded-full text-xs sm:text-sm bg-gray-100 text-gray-800 hover:bg-gray-200 "
                                href="#">
                                {{ $post['status'] == 0 ? 'Darurat' : 'Laporan' }}
                            </a>
                            <p class="text-xs sm:text-sm text-gray-800 ">{{date('F, d Y', strtotime($post->created_at));}}</p>
                        </div>
                        <div class="space-y-3">

                            <p class="text-lg text-gray-800 ">{{ $post['isi'] }}</p>
                        </div>

                        <figure>
                            @if ($post->foto == null)
                                   <img class="w-full object-cover rounded-xl" 
                                        src="{{ asset('garuda.png') }}"
                                        alt="Image Description">
                                    @else
                                    <img class="w-full object-cover rounded-xl" 
                                    src="{{ asset('/storage/post-image/' . $post->foto) }}"
                                    alt="Image Description">
                                    @endif 
                         
                        </figure>

                        <div class="grid lg:flex lg:justify-between lg:items-center gap-y-5 lg:gap-y-0 ">
                       
                            <div class="flex justify-end items-center gap-x-1.5 mb-5">
                                <!-- Button -->
                                <div class="hs-tooltip inline-block">
                                    <button type="button"
                                        class="hs-tooltip-toggle flex items-center gap-x-2 text-sm text-gray-500 hover:text-gray-800 ">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                          </svg>
                                          
                                            <path
                                                d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z" />
                                        </svg>
                                        {{$post->count}} Views
                                        <span
                                            class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible opacity-0 transition-opacity inline-block absolute invisible z-10 py-1 px-2 bg-gray-900 text-xs font-medium text-white rounded shadow-sm "
                                            role="tooltip">
                                           Views
                                        </span>
                                    </button>
                                </div>
                                <!-- Button -->

                                <div class="block h-3 border-e border-gray-300 mx-3 "></div>

                               

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Content -->

            <!-- Sidebar -->
            <div
                class="lg:col-span-1 lg:w-full lg:h-full lg:bg-gradient-to-r lg:from-gray-50 lg:via-transparent lg:to-transparent ">
                <div class="sticky top-0 start-0 py-8 lg:ps-8">
                    <!-- Avatar Media -->
                    <div class="group flex items-center gap-x-3 border-b border-gray-200 pb-8 mb-8 ">
                        <a class="block flex-shrink-0" href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-9">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                              </svg>
                        </a>

                        <a class="group grow block" href="">
                            <h5 class="group-hover:text-gray-600 text-sm font-semibold text-gray-800  ">
                                {{ $post->author->name }}
                            </h5>
                            <p class="text-sm text-gray-500 ">
                                Admin
                            </p>
                        </a>


                    </div>
                    <!-- End Avatar Media -->

                    <div class="space-y-6">
                        <!-- Media -->
                        @foreach ($posts as $single)
                            <a class="group flex items-center gap-x-6" href="/moreberita/{{ $single['slug'] }}">
                                <div class="grow">
                                    <span class="text-sm font-bold text-gray-800 group-hover:text-blue-600  ">
                                        {{ $single['title'] }}
                                    </span>
                                </div>

                                <div class="flex-shrink-0 relative rounded-lg overflow-hidden size-20">
                                   @if ($single->foto == null)
                                   <img class="size-full absolute top-0 start-0 object-cover rounded-lg"
                                        src="{{ asset('garuda.png') }}"
                                        alt="Image Description">
                                    @else
                                    <img class="size-full absolute top-0 start-0 object-cover rounded-lg"
                                    src="{{ asset('/storage/post-image/' . $single->foto) }}"
                                    alt="Image Description">
                                    @endif 
                                </div>
                            </a>
                        @endforeach

                        <!-- End Media -->


                    </div>
                </div>
            </div>
            <!-- End Sidebar -->
        </div>
    </div>
    <!-- End Blog Article -->

    <script src="./node_modules/preline/dist/preline.js"></script>
</body>

</html>
