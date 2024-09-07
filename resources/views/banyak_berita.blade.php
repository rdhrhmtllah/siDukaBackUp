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
    <div class="grid lg:grid-cols-2 gap-6">
        @foreach ($posts as $post)
      <!-- Card -->
      <a class="group sm:flex rounded-xl focus:outline-none" href="/moreberita/{{ $post->slug }}">
        <div class="shrink-0 relative rounded-xl overflow-hidden h-[200px] sm:w-[250px] sm:h-[350px] w-full">
          @if ($post->foto == null)
          <img class="size-full absolute top-0 start-0 object-cover" src="https://images.unsplash.com/photo-1664574654529-b60630f33fdb?ixlib=rb-4.0.3&ixid=MnwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=560&q=80" alt="Blog Image">
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
            <h3 class="text-lg sm:text-2xl font-semibold text-gray-800 group-hover:text-blue-600 group-focus:text-blue-600">
                {{ $post['title'] }}
            </h3>
            <p class="mt-2 text-gray-600">
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
            <div class="mt-5 sm:mt-auto">
              <!-- Avatar -->
              <div class="flex items-center">
                <div class="shrink-0">
                  <img class="size-[46px] rounded-full" src="https://images.unsplash.com/photo-1492562080023-ab3db95bfbce?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80" alt="Avatar">
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
    {{ $posts->links() }}
  </div>
  <!-- End Card Blog -->
   

    {{-- footer --}}
    <x-footer></x-footer>





    <script src="./node_modules/preline/dist/preline.js"></script>
</body>

</html>
