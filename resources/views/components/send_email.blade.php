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
    <title>siDuka | Verifikasi</title>
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

      <h1  style="font-size:1.25rem; font-weight:bold; margin: 1rem 0 1rem 0">VERIFIKASI EMAIL</h1>
      <p class="text-justify leading-normal">Hanya Dirimu yang tahu kode ini, Jangan Berikan Token ini kepada siapa pun Termasuk Petugas!</p>
      <p class="text-start my-2 font-bold"> {{ $data['name'] }}</p>
      <div class="mt-5 p-4 bg-[#757a62]  text-center border shadow-sm rounded-xl mx-auto" style="text-decoration: none; color:black; font-weight:bold; margin-top:1.25rem; padding:1rem;">
        <h2 class="font-bold text-white">
          {{ $data['token'] }}
        </h2>
      </div>
    </div>
    <!-- End Content -->

  </div>
</div>


    <script src="./node_modules/preline/dist/preline.js"></script>
</body>

</html>
