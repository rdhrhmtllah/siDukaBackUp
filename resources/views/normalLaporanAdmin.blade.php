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
    <title>Dashboard | Laporan</title>
</head>

<body class="bg-[#f9fafb]">
    {{-- header --}}
    <x-headerAdmin></x-headerAdmin>

    {{-- sidebar --}}
    <x-sidebar><x-slot:hitungDarurat>{{ $hitungDarurat }}</x-slot:hitungDarurat><x-slot:hitungNormal>{{ $hitungNormal }}</x-slot:hitungNormal><x-slot:hitungSelesai>{{ $hitungSelesai }}</x-slot:hitungSelesai></x-sidebar>


    <!-- Content -->
    <div class="w-full lg:ps-64">
        <div class="p-4 sm:p-6 space-y-4 sm:space-y-6 ">
            <div class=" overflow-x-auto mb-5">
                <div class="p-1.5 min-w-full inline-block align-middle mb-3 ">
                    <div class="overflow-hidden">
        
                        <div class="flex flex-col">
                            <div class="-m-1.5 overflow-x-auto">
                              <div class="p-1.5 min-w-full inline-block align-middle">
                                <div class="bg-white border border-gray-200 rounded-xl shadow-sm overflow-hidden ">
                                  <!-- Header -->
                                  <div class="px-6 py-4 gap-3 flex md:justify-between md:items-center border-b border-gray-200 dark:border-neutral-700">
                                    <div class="flex gap-6 justify-start items-center">
                                      <h2 class="text-xl font-semibold text-gray-800 dark:text-neutral-200">
                                       Laporan Normal
                                      </h2>
                                      <form class="flex gap-2" action="{{ route('adminNormalSearch') }}" method="get">
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
                                    </div>
                    
                                    
                                  </div>
        
        
                                  <table class="min-w-full divide-y divide-gray-200 ">
                                    <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col"
                                        class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Pelapor
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Judul
                                        Kejadian
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">No.Hp
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Lokasi
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Gambar
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">
                                        Kronologi
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Dibuat
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200">
                                @foreach ($datas as $laporan)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">
                                            {{ $laporan->user->name }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">
                                            {{ $laporan->judulKejadian }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">
                                            {{ $laporan->nohp }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">
                                            {{ $laporan->lokasi }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">
                                            <img aria-haspopup="dialog" aria-expanded="false"
                                                aria-controls="hs-subscription-with-image"
                                                data-hs-overlay="#hs-subscription-with-image"
                                                onclick="modalImg('{{ asset('/storage/post-image/laporan/' . $laporan->foto) }}', {{$laporan->id}})"
                                                id="myimg"
                                                src="{{ asset('/storage/post-image/laporan/' . $laporan->foto) }}"
                                                class="w-[100px] h-[100px] rounded" alt="">
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">
                                            {{ $laporan->kronologi }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">
                                            {{ $laporan->updated_at }}
                                        </td>

                                        <td class="px-6 py-4 whitespace-nowrap text-start text-sm font-medium">
                                            <form class="inline" action="{{ route('adminNormalUpdate', $laporan->id)}}"
                                                method="POST">
                                                @csrf
                                                <button type="submit"
                                                    class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:text-blue-800 focus:outline-none focus:text-blue-800 disabled:opacity-50 disabled:pointer-events-none">Selesai
                                                </button>
                                            </form>

                                            <form class="inline" action="{{ route('adminNormalDestroy', $laporan->id)}}"
                                                method="POST">
                                                @csrf
                                                <button type="submit"
                                                    class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-red-600 hover:text-red-800 focus:outline-none focus:text-red-800 disabled:opacity-50 disabled:pointer-events-none">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach


                            </tbody>
                        </table>
                            {{-- footer  --}}
                    <div class="px-6 py-4 md:grid flex items-center border-t border-gray-200">
                      
        
                        <div>
                          
                            {{ $datas->links() }}
                        </div>
                      </div>
                      {{-- akhir footer --}}

                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- End Content -->

    {{-- modal --}}



    <div id="hs-subscription-with-image"
        class="hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto" role="dialog"
        tabindex="-1" aria-labelledby="hs-subscription-with-image-label">
        <div
            class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto">
            <div class="relative flex flex-col bg-white shadow-lg rounded-xl">
                <div class="absolute top-2 z-[10] end-2">
                    <button type="button"
                        class="inline-flex justify-center items-center size-8 text-sm font-semibold rounded-lg border border-transparent bg-white/10 text-white hover:bg-white/20 disabled:opacity-50 disabled:pointer-events-none"
                        aria-label="Close" data-hs-overlay="#hs-subscription-with-image">
                        <span class="sr-only">Close</span>
                        <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="M18 6 6 18" />
                            <path d="m6 6 12 12" />
                        </svg>
                    </button>
                </div>

                <div class="aspect-w-16 aspect-h-8">
                    <img class="w-full object-cover rounded-t-xl" id="img1">
                </div>

                <div class="p-2 sm:p-10 text-center overflow-y-auto">


                    <div class="mt-1 flex justify-center gap-x-4">
                        <a id="link" 
                            class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none"
                            >
                            Download
                        </a >
                        <button type="button"
                            class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-[#e6b9a6] text-white hover:bg-[#e8987c] focus:outline-none focus:bg-[#e8987c] disabled:opacity-50 disabled:pointer-events-none"
                            data-hs-overlay="#hs-subscription-with-image">
                            Cancel
                        </button>

                    </div>
                </div>
            </div>
        </div>


        <script src="./node_modules/preline/dist/preline.js"></script>
        <script type="text/javascript">
            function modalImg(img, id) {
                // var src = document.getElementById("myimg").src;
                if(img == "C:\Usersdhrh\*"){
                    
                    var imgModal = document.getElementById("img1").src = null;
                }else{

                    var imgModal = document.getElementById("img1").src = img;
                }
                var imgModal = document.getElementById("link").href = "/adminNormal/download/"+ id;
            }
        </script>
</body>

</html>
