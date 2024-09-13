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
    <title>siDuka | Notifikasi</title>
</head>

<body class="" style="font-family: sans-serif;">
<div class="" style="display: flex; justify-content:center; align-items:center;">

<div class=" " style="padding: 1rem; margin: 0 auto 0 auto; border:1px solid black; box-shadow: 5px 5px 60px grey; border-radius:10%; text-align:center;">
  
  {{-- header --}}
  <header>
    <div class="" style="text-align: start;">
      <h1 class="font-bold p-5 text-2xl" style="font-weight: bold; padding:0.25rem; font-size:1.5rem">siDuka.</h1>
    </div>
    <hr class="" style="">
  </header>
    <!-- Content -->
    <div class="">

      <h1 class="" style="font-size:1.25rem; font-weight:bold; margin: 1rem 0 1rem 0">Notifikasi Laporan</h1>
      
      <p class="text-justify leading-normal" style="">Urgensi : {{$data['urgensi']}}</p>
      <p class="text-start my-2 font-bold">Lokasi :  {{ $data['lokasi'] }}</p>
      <div class="mt-5 p-4 bg-[#757a62]  text-center border shadow-sm rounded-xl mx-auto">
        <a href="http://sidukabackup.test/adminDarurat" style="text-decoration: none; color:black; font-weight:bold;">
          Kunjungi
        </a>
      </div>
    </div>
    <!-- End Content -->

  </div>
</div>


    <script src="./node_modules/preline/dist/preline.js"></script>
</body>

</html>
