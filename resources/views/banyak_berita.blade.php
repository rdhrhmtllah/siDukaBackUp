<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="icon" type="image/x-icon" href="{{ asset('garuda.png') }}">
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <title>Berita</title>
</head>

<body>
    {{-- Navbar --}}
    <x-navbar></x-navbar>

    <!-- Card Blog -->
    <!-- Card Blog -->
<div class="max-w-[85rem] px-4 pb-10 sm:px-6 lg:px-8 lg:pb-14 mx-auto">
  <form class="flex gap-2 justify-center mb-10" action="{{ route('searchMoreBerita') }}" method="get">
    @csrf
  <div class="relative border rounded-md">
      <div class="absolute inset-y-0 start-0 flex items-center pointer-events-none z-20 ps-3.5">
        <svg class="shrink-0 size-4 text-gray-400 dark:text-white/60" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <circle cx="11" cy="11" r="8"></circle>
          <path d="m21 21-4.3-4.3"></path>
        </svg>
      </div>
      <input name="search" type="text" class="py-2 ps-10 pe-16 block w-full bg-white border-gray-200 rounded-lg text-sm focus:outline-none focus:border-[#ffb588] focus:ring-[#ffb588] disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder:text-neutral-400 dark:focus:ring-neutral-600" placeholder="Search">
      
    </div>
    <button type="submit" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-[#e6b9a6] text-white hover:bg-[#e8987c] focus:outline-none focus:bg-[#e8987c] disabled:opacity-50 disabled:pointer-events-none" >
      Search
    </button>
</form>
    <!-- Grid -->
    <div class="grid lg:grid-cols-2 gap-6">
        @foreach ($posts as $post)
      <!-- Card -->
      <a class="group sm:flex rounded-xl focus:outline-none" href="{{ route('satuBerita', $post['slug']) }}">
        <div class="shrink-0 relative rounded-xl overflow-hidden h-[200px] sm:w-[250px] sm:h-[350px] w-full">
          @if ($post->foto == null)
          <img class="size-full absolute top-0 start-0 object-cover" src="{{ asset('garuda.png') }}" alt="Blog Image">
          @else
          <img class="size-full absolute top-0 start-0 object-cover" src="{{ asset('/storage/post-image/' . $post->foto) }}" alt="Blog Image">
          @endif
        </div>
  
        <div class="grow">
          <div class="p-4 flex flex-col h-full sm:p-6">
            <div class="mb-3">
              <p class="inline-flex items-center gap-1.5 py-1.5 px-3 rounded-md text-xs font-medium bg-gray-100 text-gray-800">
                @if ($post->status == "1")
                Darurat
                @else
                Normal
                @endif
              </p>
            </div>
            <h3 class="text-lg sm:text-2xl font-semibold text-gray-800 group-hover:text-[#e8987c] group-focus:text-[#e8987c]">
                {{ $post['title'] }}
            </h3>
            <p class="mt-2 text-gray-600">
                {{ Str::limit($post['isi'], 150) }}
            </p>
            <p
                                class="mt-4 inline-flex items-center gap-x-1 text-sm text-[#e8987c] decoration-2 group-hover:underline group-focus:underline font-medium">
                                Read more
                                <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="m9 18 6-6-6-6" />
                                </svg>
                            </p>
            <div class="mt-5 sm:mt-auto">
              <!-- Avatar -->
              <div class="flex items-center">
                <div class="shrink-0 my-3">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-9 ">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                  </svg>
                  
                </div>
                <div class="ms-2.5 sm:ms-4">
                  <h4 class="font-semibold text-gray-800">
                    {{$post->author->name}}
                  </h4>
                  <p class="text-xs text-gray-500">
                    {{date('M d, Y', strtotime($post->created_at));}}
                  </p>
                </div>
              </div>
              <!-- End Avatar -->
            </div>
          </div>
        </div>
      </a>
      @endforeach

      <!-- End Card -->
  
      
    </div>
    <!-- End Grid -->
    <div class="my-4">

      {{ $posts->links() }}
    </div>
  </div>
  <!-- End Card Blog -->
   

    {{-- footer --}}
    <x-footer></x-footer>





    <script src="./node_modules/preline/dist/preline.js"></script>
</body>

</html>
