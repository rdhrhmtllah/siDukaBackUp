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
    <title>ABOUT</title>
</head>
<body>
    

    {{-- Navbar --}}
    <x-navbar></x-navbar>
   <!-- Approach -->
<div class="">
    <!-- Approach -->
    <div class="max-w-5xl px-4 xl:px-0 py-5 lg:pt-6 lg:pb-20 mx-auto">
      <!-- Title -->
      <div class="max-w-3xl mb-10 lg:mb-14">
        <h2 class="text-black font-semibold text-2xl md:text-4xl md:leading-tight">KPAD SUMATERA SELATAN.</h2>
        <p class="mt-1 text-neutral-400">KPAD Sumsel merupakan lembaga yang memiliki peran penting dalam mewujudkan perlindungan anak di Sumatera Selatan. Kami bekerja sama dengan berbagai pihak, seperti pemerintah, lembaga swadaya masyarakat, dan masyarakat umum.</p>
      </div>
      <!-- End Title -->
  
      <!-- Grid -->
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 lg:items-center">
        <div class="aspect-w-16 aspect-h-9 lg:aspect-none">
          <img class="w-full object-cover rounded-xl" src="{{asset('kpad.jpg')}}" alt="Features Image">
        </div>
        <!-- End Col -->
  
        <!-- Timeline -->
        <div>
          <!-- Heading -->
          <div class="mb-4">
            <h3 class="text-black text-xl font-bold uppercase">
              Tahapan Pengaduan
            </h3>
          </div>
          <!-- End Heading -->
  
          <!-- Item -->
          <div class="flex gap-x-5 ms-1">
            <!-- Icon -->
            <div class="relative last:after:hidden after:absolute after:top-8 after:bottom-0 after:start-4 after:w-px after:-translate-x-[0.5px] after:bg-neutral-800">
              <div class="relative z-10 size-8 flex justify-center items-center">
                <span class="flex shrink-0 justify-center items-center size-8 border border-neutral-800 text-black font-semibold text-xs uppercase rounded-full">
                  1
                </span>
              </div>
            </div>
            <!-- End Icon -->
  
            <!-- Right Content -->
            <div class="grow pt-0.5 pb-8 sm:pb-12">
              <p class="text-sm lg:text-base text-neutral-400">
                <span class="font-bold">Pendaftaran Akun</span>
                Pengguna layanan diwajibkan untuk melakukan registrasi awal menggunakan KTP Indonesia sebagai pelapor atau korban.
              </p>
            </div>
            <!-- End Right Content -->
          </div>
          <!-- End Item -->
  
          <!-- Item -->
          <div class="flex gap-x-5 ms-1">
            <!-- Icon -->
            <div class="relative last:after:hidden after:absolute after:top-8 after:bottom-0 after:start-4 after:w-px after:-translate-x-[0.5px] after:bg-neutral-800">
              <div class="relative z-10 size-8 flex justify-center items-center">
                <span class="flex shrink-0 justify-center items-center size-8 border border-neutral-800 text-black font-semibold text-xs uppercase rounded-full">
                  2
                </span>
              </div>
            </div>
            <!-- End Icon -->
  
            <!-- Right Content -->
            <div class="grow pt-0.5 pb-8 sm:pb-12">
              <p class="text-sm lg:text-base text-neutral-400">
                <span class="font-bold">Laporkan Kekerasan</span>
                Akun pengguna layanan yang telah terdaftar dapat mengadukan peristiwa dengan melakukan login dengan username dan password yang telah didaftarkan dan mengisi formulir kejadian / menekan tombol darurat jika peristiwa sedang terjadi saat itu.
              </p>
            </div>
            <!-- End Right Content -->
          </div>
          <!-- End Item -->
  
          <!-- Item -->
          <div class="flex gap-x-5 ms-1">
            <!-- Icon -->
            <div class="relative last:after:hidden after:absolute after:top-8 after:bottom-0 after:start-4 after:w-px after:-translate-x-[0.5px] after:bg-neutral-800">
              <div class="relative z-10 size-8 flex justify-center items-center">
                <span class="flex shrink-0 justify-center items-center size-8 border border-neutral-800 text-black font-semibold text-xs uppercase rounded-full">
                  3
                </span>
              </div>
            </div>
            <!-- End Icon -->
  
            <!-- Right Content -->
            <div class="grow pt-0.5 pb-8 sm:pb-12">
              <p class="text-sm md:text-base text-neutral-400">
                <span class="font-bold">Konfirmasi Kejadian</span>
                Pihak KPAD akan merespon rekam jejak peristiwa berdasarkan keadaan darurat yang dikirimkan pengguna untuk segera dilakukan penanganan lebih lanjut.
              </p>
            </div>
            <!-- End Right Content -->
          </div>
          <!-- End Item -->
  
          
  
          <a class="group inline-flex items-center gap-x-2 py-2 px-3 bg-black font-medium text-sm text-white rounded-full focus:outline-none" href="{{ route('home') }}">
            <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path><path class="opacity-0 group-hover:opacity-100 group-focus:opacity-100 group-hover:delay-100 transition" d="M14.05 2a9 9 0 0 1 8 7.94"></path><path class="opacity-0 group-hover:opacity-100 group-focus:opacity-100 transition" d="M14.05 6A5 5 0 0 1 18 10"></path></svg>
            Schedule a call
          </a>
        </div>
        <!-- End Timeline -->
      </div>
      <!-- End Grid -->
    </div>
  </div>
  <!-- End Approach -->
  <script src="./node_modules/preline/dist/preline.js"></script>
</body>
</html>