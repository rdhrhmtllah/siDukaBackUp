<div class="text-[#2F3645] max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto flex justify-center">
    <div class="max-w-2xl lg:max-w-5xl mx-auto lg:w-[40%] md:w-[50%]" >
        <div class="text-center">
            <h1 class="text-3xl font-bold text-gray-800 sm:text-4xl ">
                Contact us
            </h1>
            <p class="mt-1 text-gray-600 ">
                We'd love to talk about how we can help you.
            </p>
        </div>

        <div class="mt-12 ">
            <!-- Card -->
            <div class="flex flex-col border rounded-xl p-4 sm:p-6 lg:p-8 ">
                <h2 class="mb-8 text-xl font-semibold text-gray-800 ">
                    KOTAK SARAN
                </h2>

                <form action="/kotakSaran" method="POST">
                    @csrf
                    <div class="grid gap-4">
                        <!-- Grid -->
                        <div class="">
                            <div>
                                <label for="nama" class="sr-only">Nama</label>
                                <input type="text" name="nama" id="nama"
                                    class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                                     value="{{old("nama")}}" placeholder="Nama">
                                @error("nama")
                                <p class=" text-xs text-red-600 mt-2" id="name-error">{{ $message }}</p>
                                @enderror
                            </div>

                           
                        </div>
                        <!-- End Grid -->

                        <div>
                            <label for="email" class="sr-only">Email</label>
                            <input type="email" name="email" id="email"
                                autocomplete="email"
                                class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                                placeholder="Email" value="{{old('email')}}">
                                @error('email')
                                <p class=" text-xs text-red-600 mt-2" id="name-error">{{ $message }}</p>
                                @enderror
                        </div>

                        <div>
                            <label for="nohp" class="sr-only">Nomor Handphone</label>
                            <input type="text" name="nohp" id="nohp"
                                class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                                placeholder="Phone Number" value="{{old('nohp')}}">
                                @error('nohp')
                                <p class=" text-xs text-red-600 mt-2" id="name-error">{{ $message }}</p>
                                @enderror
                        </div>

                        <div>
                            <label for="pesan" class="sr-only">Isi Saran</label>
                            <textarea id="pesan" value="{{old('pesan')}}" name="pesan" rows="4"
                                class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                                placeholder="Details" ></textarea>
                                @error('pesan')
                                <p class=" text-xs text-red-600 mt-2" id="name-error">{{ $message }}</p>
                                @enderror
                        </div>
                    </div>
                    <!-- End Grid -->

                    <div class="mt-4 grid">
                        <button type="submit"
                            class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent hover:bg-[#E6B9A6] text-white bg-[#E8987C] ">Kirim Saran</button>
                    </div>

                    <div class="mt-3 text-center">
                        <p class="text-sm text-gray-500 ">
                            © Copyright {{date('Y')}} KPAD SUMSEL - All Rights Reserved
                        </p>
                    </div>
                </form>
            </div>
            <!-- End Card -->

        </div>
    </div>
</div>
