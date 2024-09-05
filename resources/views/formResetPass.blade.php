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

     <form action="http://sidukabackup.test/resetPass/{{$data['email']}}">
        @csrf
        <div class="">
            <div class="">
                <!-- Form Group -->
                <div>
                    <label for="password" class="block text-sm mb-2">Password</label>
                    <div
                        class="relative  border rounded-lg  @error('password') border-red-500 @enderror">
                        <input type="password" id="password" name="password"
                            class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                            required aria-describedby="password-error">
                        <div class="hidden absolute inset-y-0 end-0 pointer-events-none pe-3">
                            <svg class="size-5 text-red-500" width="16" height="16"
                                fill="currentColor" viewBox="0 0 16 16" aria-hidden="true">
                                <path
                                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                            </svg>
                        </div>
                    </div>
                    @error('password')
                        <p class=" text-xs text-red-600 mt-2" id="name-error">{{ $message }}</p>
                    @enderror
                </div>
                <!-- End Form Group -->
            </div>
            <div class="">
                <!-- Form Group -->
                <div>
                    <label for="confirm-password" class="block text-sm mb-2">Confirm Password</label>
                    <div class="relative  border rounded-lg">
                        <input type="password" id="confirm-password" name="confirm-password"
                            class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                            required aria-describedby="confirm-password-error">
                        <div class="hidden absolute inset-y-0 end-0 pointer-events-none pe-3">
                            <svg class="size-5 text-red-500" width="16" height="16"
                                fill="currentColor" viewBox="0 0 16 16" aria-hidden="true">
                                <path
                                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                            </svg>
                        </div>
                    </div>
                    @error('confirm-password')
                        <p class=" text-xs text-red-600 mt-2" id="name-error">{{ $message }}</p>
                    @enderror
                   
                </div>
                <!-- End Form Group -->
            </div>
        </div>
    </form>
    </div>
    <!-- End Content -->

  </div>
</div>


</body>

</html>
