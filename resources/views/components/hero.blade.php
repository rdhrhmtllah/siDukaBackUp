{{-- tombol urgen --}}
<div class="px-0 sm:px-[100px] mb-20 text-[#2F3645] sm:mb-20">
    <div class="md:mt-[50px]  grid grid-cols-1 sm:grid-cols-2 gap-6">
        <div class="text-left px-3  py-6 sm:py-[0px] place-self-center">
            <h1 class="text-4xl mb-2 font-bold">MELIHAT <br>
                PERUNDUNGAN <br>
                SEGERA LAPORKAN!
            </h1>
            <p class="text-md mb-2">Jelaskan kejadian perundungan secepatnya..</p>
            <a href="/home/formLaporan"><button
                    class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-xl border border-transparent bg-[#E6B9A6] text-black hover:bg-[#E8987C] transition disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-[#E8987C]">Laporkan!</button></a>
        </div>

        <div class="place-self-center p-6 ">

            <form action="/darurat" method="POST">
                @csrf
                <input type="hidden" name="location" id="location" >
                <button type="button" onclick="getLocation()" class="flex flex-wrap items-center justify-center text-center">
                    <div class=" bg-red-700 rounded-full w-[180px] h-[180px] animate-ping"></div>
                    <div class=" absolute bg-red-700 rounded-full w-[250px] h-[250px] "></div>
                    <div class="absolute bg-red-800 rounded-full w-[220px] h-[220px]"></div>
                    <h1 id="anu" class="text-2xl text-white absolute font-bold ">DARURAT</h1>
                </button>
            </form>
        </div>
    </div>
</div>
