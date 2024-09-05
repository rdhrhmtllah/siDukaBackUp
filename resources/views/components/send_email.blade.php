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

<body class="font-sans">
<div class="container h-screen flex items-center justify-center">

<div class=" p-4 mx-auto border shadow-sm rounded-xl lg:w-2/4 md:w-2/4 w-4/5 text-center ">
  
  {{-- header --}}
  <header>
    <div class="text-start">
      <h1 class="font-bold p-5 text-2xl">siDuka.</h1>
    </div>
    <hr class="bg-[#feea63]">
  </header>
    <!-- Content -->
    <div class="">

      <h1 class="text-xl font-bold my-4">VERIFIKASI EMAIL</h1>
      <p class="text-justify leading-normal">Hanya Dirimu yang tahu kode ini, Jangan Berikan Token ini kepada siapa pun Termasuk Petugas!</p>
      <p class="text-start my-2 font-bold"> {{ $data['name'] }}</p>
      <div class="mt-5 p-4 bg-[#757a62]  text-center border shadow-sm rounded-xl mx-auto">
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
