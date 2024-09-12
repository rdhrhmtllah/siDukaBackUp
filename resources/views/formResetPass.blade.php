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
    <title>Reset Password</title>
</head>

<body class="font-sans">

  {{-- header --}}
  <header>
    <div class=" h-screen flex items-center justify-center">
      <div class="mt-7  md:w-[48%] md:p-0 p-3 bg-white border border-gray-200 rounded-xl shadow-sm">
          <div class="p-4 sm:p-7">
              <div class="text-center">
                  <h1 class="block text-2xl font-bold text-gray-800">Reset Password</h1>
                 
              </div>

              <div class="mt-5">
    <!-- Content -->

     <form action="/reset-password" method="POST">
        @csrf
        <input name="token" type="hidden" value="{{$token}}">
        <div class="col-span-3">
          <!-- Form Group -->
          <div>
              <label for="email" class="block text-sm mb-2">Konfirmasi Email</label>
              <div
                  class="relative  border rounded-lg  @error('email') border-red-500 @enderror">
                  <input type="email" id="email" name="email"
                      class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                      required aria-describedby="email-error">
                  <div class="hidden absolute inset-y-0 end-0 pointer-events-none pe-3">
                      <svg class="size-5 text-red-500" width="16" height="16"
                          fill="currentColor" viewBox="0 0 16 16" aria-hidden="true">
                          <path
                              d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                      </svg>
                  </div>
              </div>
              @error('email')
                  <p class=" text-xs text-red-600 mt-2" id="name-error">{{ $message }}</p>
              @enderror
          </div>
          <!-- End Form Group -->
      </div>
      <div class="col-span-3">
        <!-- Form Group -->
        <div>
            <label for="password" class="block text-sm mb-2">Password</label>
            <div class="relative  border rounded-lg">
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
      <div class="col-span-3">
          <!-- Form Group -->
          <div>
              <label for="password_confirmation" class="block text-sm mb-2">Confirm Password</label>
              <div class="relative  border rounded-lg">
                  <input type="password" id="password_confirmation" name="password_confirmation"
                      class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                      required aria-describedby="password_confirmation-error">
                  <div class="hidden absolute inset-y-0 end-0 pointer-events-none pe-3">
                      <svg class="size-5 text-red-500" width="16" height="16"
                          fill="currentColor" viewBox="0 0 16 16" aria-hidden="true">
                          <path
                              d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                      </svg>
                  </div>
              </div>
              @error('password_confirmation')
                  <p class=" text-xs text-red-600 mt-2" id="name-error">{{ $message }}</p>
              @enderror
             
          </div>
          <!-- End Form Group -->
      </div>

        <button type="sumbit" class="p-4 m-3 mt-5 bg-[#757a62] text-white font-bold  w-full text-center border shadow-sm rounded-xl mx-auto" >Reset Password</button>
    </form>
    
    <!-- End Content -->
  </div>
</div>
</div>
</div>
</body>

</html>
