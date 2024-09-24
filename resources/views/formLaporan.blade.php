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
    <title>siDuka | Laporan</title>
</head>

<body>

    <x-navbar></x-navbar>

    <div class=" md:mt-[30%] lg:mt-[8%] mt-[45%] flex items-center justify-center">
        <div class="mx-5 mt-[-30%] lg:mt-0 md:mt-[-10%]  md:w-[68%] lg:w-[48%] md:p-0 p-3 bg-white border border-gray-200 rounded-xl shadow-sm">
            <div class="p-4 sm:p-7">
                <div class="text-center">
                    <h1 class="block text-2xl font-bold text-gray-800">Laporkan.</h1>
                    <p class="mt-2 text-sm text-gray-600">
                        Laporkan kejadian dirimu atau sekitarmu!
                        {{-- <a class="text-blue-600 decoration-2 hover:underline focus:outline-none focus:underline font-medium"
                            href="/login">
                            Sign in here
                        </a> --}}
                    </p>
                </div>

                <div class="mt-5">
                    {{-- <button type="button"
                        class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none">
                        <svg class="w-4 h-auto" width="46" height="47" viewBox="0 0 46 47" fill="none">
                            <path
                                d="M46 24.0287C46 22.09 45.8533 20.68 45.5013 19.2112H23.4694V27.9356H36.4069C36.1429 30.1094 34.7347 33.37 31.5957 35.5731L31.5663 35.8669L38.5191 41.2719L38.9885 41.3306C43.4477 37.2181 46 31.1669 46 24.0287Z"
                                fill="#4285F4" />
                            <path
                                d="M23.4694 47C29.8061 47 35.1161 44.9144 39.0179 41.3012L31.625 35.5437C29.6301 36.9244 26.9898 37.8937 23.4987 37.8937C17.2793 37.8937 12.0281 33.7812 10.1505 28.1412L9.88649 28.1706L2.61097 33.7812L2.52296 34.0456C6.36608 41.7125 14.287 47 23.4694 47Z"
                                fill="#34A853" />
                            <path
                                d="M10.1212 28.1413C9.62245 26.6725 9.32908 25.1156 9.32908 23.5C9.32908 21.8844 9.62245 20.3275 10.0918 18.8588V18.5356L2.75765 12.8369L2.52296 12.9544C0.909439 16.1269 0 19.7106 0 23.5C0 27.2894 0.909439 30.8731 2.49362 34.0456L10.1212 28.1413Z"
                                fill="#FBBC05" />
                            <path
                                d="M23.4694 9.07688C27.8699 9.07688 30.8622 10.9863 32.5344 12.5725L39.1645 6.11C35.0867 2.32063 29.8061 0 23.4694 0C14.287 0 6.36607 5.2875 2.49362 12.9544L10.0918 18.8588C11.9987 13.1894 17.25 9.07688 23.4694 9.07688Z"
                                fill="#EB4335" />
                        </svg>
                        Sign up with Google
                    </button>

                    <div
                        class="py-3 flex items-center text-xs text-gray-400 uppercase before:flex-1 before:border-t before:border-gray-200 before:me-6 after:flex-1 after:border-t after:border-gray-200 after:ms-6">
                        Or</div> --}}

                    <!-- Form -->
                    <form action="{{ route('laporkan') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="md:grid grid-cols-3 gap-4">
                            <div class="col-span-2">
                                <!-- Form Group -->
                                <div>
                                    <label for="judulKejadian" class="block text-sm mb-2">Judul Kejadian</label>
                                    <div
                                        class="relative  border rounded-lg  @error('judulKejadian') border-red-500 @enderror">
                                        <input type="text" id="judulKejadian" name="judulKejadian"
                                            value="{{ old('judulKejadian') }}"
                                            class="py-3
                                            px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500
                                            focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                                            required aria-describedby="judulKejadian-error">
                                        <div class="hidden absolute inset-y-0 end-0 pointer-events-none pe-3">
                                            <svg class="size-5 text-red-500" width="16" height="16"
                                                fill="currentColor" viewBox="0 0 16 16" aria-hidden="true">
                                                <path
                                                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                                            </svg>
                                        </div>
                                    </div>
                                    @error('judulKejadian')
                                        <p class=" text-xs text-red-600 mt-2" id="name-error">{{ $message }}</p>
                                    @enderror
                                </div>
                                <!-- End Form Group -->
                            </div>
                            <div>
                                <!-- Form Group -->
                                <div>
                                    <label for="nohp" class="block text-sm mb-2">No.hp</label>
                                    <div class="relative  border rounded-lg  @error('nohp') border-red-500 @enderror">
                                        <input type="tel" id="nohp" name="nohp" value="{{ old('nohp') }}"
                                            class="py-3
                                            px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500
                                            focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                                            required aria-describedby="nohp-error">
                                        <div class="hidden absolute inset-y-0 end-0 pointer-events-none pe-3">
                                            <svg class="size-5 text-red-500" width="16" height="16"
                                                fill="currentColor" viewBox="0 0 16 16" aria-hidden="true">
                                                <path
                                                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                                            </svg>
                                        </div>
                                    </div>
                                    @error('nohp')
                                        <p class=" text-xs text-red-600 mt-2" id="name-error">{{ $message }}</p>
                                    @enderror
                                </div>
                                <!-- End Form Group -->
                            </div>
                            <div class="col-span-3">
                                <!-- Form Group -->
                                <div>
                                    <label for="lokasi" class="block text-sm mb-2">Lokasi</label>
                                    <div class="relative  border rounded-lg  @error('lokasi') border-red-500 @enderror">
                                        <input type="text" id="lokasi" name="lokasi" value="{{ old('lokasi') }}"
                                            class="py-3
                                            px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500
                                            focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                                            required aria-describedby="lokasi-error">
                                        <div class="hidden absolute inset-y-0 end-0 pointer-events-none pe-3">
                                            <svg class="size-5 text-red-500" width="16" height="16"
                                                fill="currentColor" viewBox="0 0 16 16" aria-hidden="true">
                                                <path
                                                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                                            </svg>
                                        </div>
                                    </div>
                                    @error('lokasi')
                                        <p class=" text-xs text-red-600 mt-2" id="name-error">{{ $message }}</p>
                                    @enderror
                                </div>
                                <!-- End Form Group -->
                            </div>

                            <div class="col-span-3">
                                <!-- Form Group -->
                                <div>
                                    <label for="foto" class="block text-sm mb-2">Masukan Foto</label>
                                    <div class="relative  border rounded-lg  @error('foto') border-red-500 @enderror">
                                        <input type="file" id="foto" name="foto"
                                            class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                                            required aria-describedby="foto-error">
                                        <div class="hidden absolute inset-y-0 end-0 pointer-events-none pe-3">
                                            <svg class="size-5 text-red-500" width="16" height="16"
                                                fill="currentColor" viewBox="0 0 16 16" aria-hidden="true">
                                                <path
                                                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                                            </svg>
                                        </div>
                                    </div>
                                    @error('foto')
                                        <p class=" text-xs text-red-600 mt-2" id="name-error">{{ $message }}</p>
                                    @enderror
                                </div>
                                <!-- End Form Group -->
                            </div>
                            <input type="hidden" name="urgensi" value="0">
                            <div class="col-span-3">
                                <!-- Form Group -->
                                <div class="mb-4">
                                    <label for="kronologi" class="block text-sm mb-2">Kronologi Lengkap</label>
                                    <div class="relative  border rounded-lg">
                                        <input type="text" id="kronologi" name="kronologi"
                                            class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                                            required aria-describedby="kronologi-error">
                                        <div class="hidden absolute inset-y-0 end-0 pointer-events-none pe-3">
                                            <svg class="size-5 text-red-500" width="16" height="16"
                                                fill="currentColor" viewBox="0 0 16 16" aria-hidden="true">
                                                <path
                                                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                                            </svg>
                                        </div>
                                    </div>
                                    <p class="hidden text-xs text-red-600 mt-2" id="kronologi-error">Password
                                        does
                                        not
                                        match the password</p>
                                </div>
                                <!-- End Form Group -->
                            </div>

                            <div class="col-span-3">
                                <button type="submit"
                                    class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-[#e6b9a6] text-white hover:bg-[#e8987c] focus:outline-none focus:bg-[#e8987c] disabled:opacity-50 disabled:pointer-events-none">Laporkan!</button>

                            </div>
                        </div>
                    </form>
                    <!-- End Form -->
                </div>
            </div>
        </div>
    </div>

    <script src="./node_modules/preline/dist/preline.js"></script>
    <script>
        const title = document.querySelector('#title');
        const slug = document.querySelector('#slug');
    </script>
</body>

</html>
