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
                                       Laporan Sudah Diselesaikan
                                      </h2>
                                      <form class="flex gap-2" action="{{ route('adminSelesaiSearch') }}" method="get">
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
                                        class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">No.Hp
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Lokasi
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Diselesaikan
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">
                                        Keterangan
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
                                            {{ $laporan->nohp }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">
                                            {{ $laporan->lokasi }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">
                                            {{ $laporan->updated_at }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">
                                            @if ($laporan->keterangan == 1)
                                                Selesai
                                            @else
                                                Ditolak
                                            @endif
                                        </td>

                                        <td class="px-6 py-4 whitespace-nowrap text-start text-sm font-medium">
                                            <form class="inline" action="{{ route('adminSelesaiUpdate', $laporan->id) }}"
                                                method="POST">
                                                @csrf
                                                <button type="submit"
                                                    class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-green-600 hover:text-green-800 focus:outline-none focus:text-green-800 disabled:opacity-50 disabled:pointer-events-none">Angkat
                                                </button>
                                            </form>

                                            <form class="inline" action="{{ route('adminSelesaiDestroy',$laporan->id) }}"
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


    <script src="./node_modules/preline/dist/preline.js"></script>
</body>

</html>
