<!DOCTYPE html>
<html lang="en" class="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="icon" type="image/x-icon" href="{{ asset('garuda.png') }}">
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <title>Home</title>
</head>

<body>
    {{-- Notif Laporan --}}


    {{-- Navbar --}}
    <x-navbar></x-navbar>

    {{-- Hero --}}
    <x-hero></x-hero>

    {{-- berita --}}
    <section class="bg-white text-[#2F3645] ">
        <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
            <div class="mx-auto max-w-screen-sm text-center lg:mb-16 mb-8">
                <h2 class="mb-4 text-3xl lg:text-4xl tracking-tight font-extrabold text-gray-900 ">
                    Berita Laporan Terbaru</h2>
                <p class="font-light text-gray-500 sm:text-xl dark:text-gray-400">kami akan selalu memantau aplikasi
                    demi keselamatan masyarakat. </p>
            </div>
            <div class="grid gap-8 lg:grid-cols-2">
                @foreach ($posts as $post)
                    <article class="p-6 bg-white rounded-lg border border-gray-200 shadow-md ">
                        <div class="flex justify-between items-center mb-5 text-gray-500">
                            <span
                                class="bg-primary-100 text-primary-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded ">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor"
                                    class="size-4">
                                    <path fill-rule="evenodd"
                                        d="M6.701 2.25c.577-1 2.02-1 2.598 0l5.196 9a1.5 1.5 0 0 1-1.299 2.25H2.804a1.5 1.5 0 0 1-1.3-2.25l5.197-9ZM8 4a.75.75 0 0 1 .75.75v3a.75.75 0 1 1-1.5 0v-3A.75.75 0 0 1 8 4Zm0 8a1 1 0 1 0 0-2 1 1 0 0 0 0 2Z"
                                        clip-rule="evenodd" />
                                </svg>

                                <p>{{ $post['status'] == 0 ? 'Darurat' : 'Laporan' }}</p>
                            </span>
                            <span class="text-sm">{{ $post->created_at->diffForHumans() }}</span>
                        </div>
                        <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 "><a
                                href="{{ route('satuBerita', $post['slug']) }}">{{ $post['title'] }}</a></h2>
                        <p class="mb-5 font-light text-gray-500 dark:text-gray-400">{{ Str::limit($post['isi'], 150) }}
                        </p>
                        <div class="flex justify-between items-center">
                            <div class="flex items-center space-x-4">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-9">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                  </svg>
                                <span class="font-medium ">
                                    {{ $post->author->name }}
                                </span>
                            </div>
                            <a href="{{ route('satuBerita', $post['slug']) }}"
                                class="inline-flex items-center font-medium text-primary-600 ">
                                Read more
                                <svg class="ml-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </a>
                        </div>
                    </article>
                @endforeach


            </div>
            <div class="my-6 place-self-center">
                <a href="{{ route('moreBerita') }}" class=" items-center font-medium text-primary-600 inline-flex ">Lebih Banyak <svg
                        class="ml-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg></a>
            </div>
        </div>
    </section>

    {{-- footer --}}
    <x-footer></x-footer>


    <script>
        const x = document.getElementById("location");
        
        function getLocation() {
          if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(showPosition);
          } else { 
            x.value = "Geolocation is not supported by this browser.";
          }
        }
        
        function showPosition(position) {
          x.value = position.coords.latitude + ','+ position.coords.longitude;
        }
        </script>

   
    <script src="./node_modules/preline/dist/preline.js"></script>

</body>

</html>
