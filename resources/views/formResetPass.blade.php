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
    <div class="flex justify-center p-3 m-4 rounded-xl shadow-sm">

     <form action="http://sidukabackup.test/resetPass/{{$data['email']}}" method="POST">
        @csrf
        <input type="hidden" value="{{$data['token']}}">
        <button type="sumbit" class="p-4 m-3 mt-5 bg-[#757a62]  text-center border shadow-sm rounded-xl mx-auto" >Reset Password</button>
    </form>
    </div>
    <!-- End Content -->

  </div>
</div>


</body>

</html>
