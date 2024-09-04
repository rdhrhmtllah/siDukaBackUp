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
        <div class="flex flex-col">
            <div class=" overflow-x-auto mb-5">
                <div class="p-1.5 min-w-full inline-block align-middle">
                    <div class="overflow-hidden">


                        <table class="min-w-full">
                            <thead>
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
                                        class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Dibuat
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">
                                        Keterangan
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase">Action
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

                                        <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                            <form class="inline" action="/adminSelesai/{{ $laporan->id }}/update"
                                                method="POST">
                                                @csrf
                                                <button type="submit"
                                                    class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-green-600 hover:text-green-800 focus:outline-none focus:text-green-800 disabled:opacity-50 disabled:pointer-events-none">Angkat
                                                </button>
                                            </form>

                                            <form class="inline" action="/adminSelesai/{{ $laporan->id }}"
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

                    </div>
                </div>
            </div>
            <span class="mx-3">{{ $datas->links() }}</span>
        </div>
    </div>
    <!-- End Content -->


    <script src="./node_modules/preline/dist/preline.js"></script>
</body>

</html>
