@extends('components/pengguna')

@section('datas')
<div class="p-4 sm:p-6 space-y-4 sm:space-y-6 ">
    <div class=" overflow-x-auto mb-5">
        <div class="p-1.5 min-w-full inline-block align-middle mb-3 ">
            <div class="overflow-hidden">

                <div class="flex flex-col">
                    <div class="-m-1.5 overflow-x-auto">
                      <div class="p-1.5 min-w-full inline-block align-middle">
                        <div class="bg-white border border-gray-200 rounded-xl shadow-sm overflow-hidden ">
                          <!-- Header -->
                          <div class="px-6 py-4 gap-3 flex md:justify-between md:items-center border-b border-gray-200 dark:border-neutral-700">
                            <div class="flex gap-6 justify-start items-center">
                              <h2 class="text-xl font-semibold text-gray-800 dark:text-neutral-200">
                               @if ( request()->is('akunTerverifikasiUser*'))
                                   Pengguna
                                @else
                                Pengguna Belum Verifikasi
                               @endif
                              </h2>
                              @if ( request()->is('akunTerverifikasiUser*'))
                                   
                                   <form class="flex gap-2" action="/akunTerverifikasiUser/searchUser" method="get">
                                    @else
                                    
                                    <form class="flex gap-2" action="/akunBelumVerifikasiUser/searchUser" method="get">
                               @endif
                                @csrf
                              <div class="relative border rounded-md">
                                  <div class="absolute inset-y-0 start-0 flex items-center pointer-events-none z-20 ps-3.5">
                                    <svg class="shrink-0 size-4 text-gray-400 dark:text-white/60" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                      <circle cx="11" cy="11" r="8"></circle>
                                      <path d="m21 21-4.3-4.3"></path>
                                    </svg>
                                  </div>
                                  <input name="search" type="text" class="py-2 ps-10 pe-16 block w-full bg-white border-gray-200 rounded-lg text-sm focus:outline-none focus:border-[#ffb588] focus:ring-[#ffb588] disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder:text-neutral-400 dark:focus:ring-neutral-600" placeholder="Search">
                                  
                                </div>
                                <button type="submit" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-[#e6b9a6] text-white hover:bg-[#e8987c] focus:outline-none focus:bg-[#e8987c] disabled:opacity-50 disabled:pointer-events-none" >
                                  Search
                                </button>
                            </form>
                           
                            </div>
            
                         
                          </div>


                          <table class="min-w-full divide-y divide-gray-200 ">
                            <thead class="bg-gray-50">
                            <tr>
                                <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">
                                    Nama
                                </th>
                                <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">
                                    Email
                                </th>
                                <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">
                                    No.Hp
                                </th>
                                <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">
                                    Alamat
                                </th>
                                <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">
                                    Verfikasi Akun
                                </th>
                                <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">
                                    Dibuat
                                </th>
                                <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200">
                            @foreach ($datas as $data)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">
                                        {{ $data->name }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">
                                        {{ $data->email }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">
                                        {{ $data->nohp }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">
                                        {{ $data->alamat }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">
                                        {{ $data->verified_at }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">
                                        {{ $data->updated_at }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-start text-sm font-medium">
                                        <button type="button" aria-haspopup="dialog" aria-expanded="false"
                                            aria-controls="editAdmin{{ $data->id }}"
                                            data-hs-overlay="#editAdmin{{ $data->id }}"
                                            class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-green-600 hover:text-green-800 focus:outline-none focus:text-green-800 disabled:opacity-50 disabled:pointer-events-none">Edit
                                        </button>


                                        <form class="inline" action="/akunTerverifikasiUser/{{ $data->id }}"
                                            method="POST">
                                            @csrf
                                            <button type="submit"
                                                class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-red-600 hover:text-red-800 focus:outline-none focus:text-red-800 disabled:opacity-50 disabled:pointer-events-none">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                {{-- modal edit --}}
                                <div id="editAdmin{{ $data->id }}"
                                    class="hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto"
                                    role="dialog" tabindex="-1" aria-labelledby="editAdmin{{ $data->id }}-label">

                                    <div
                                        class="relative hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto">
                                        <div class="absolute top-2 end-2">
                                            <button type="button"
                                                class="size-8 inline-flex justify-center items-center gap-x-2 rounded-full border border-transparent bg-gray-100 text-gray-800 hover:bg-gray-200 focus:outline-none focus:bg-gray-200 disabled:opacity-50 disabled:pointer-events-none "
                                                aria-label="Close" data-hs-overlay="#editAdmin{{ $data->id }}">
                                                <span class="sr-only">Close</span>
                                                <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg"
                                                    width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path d="M18 6 6 18" />
                                                    <path d="m6 6 12 12" />
                                                </svg>
                                            </button>
                                        </div>
                                        <div class="bg-white border border-gray-200 rounded-xl shadow-sm ">
                                            <div class="p-4  sm:p-7">
                                                <div class="text-center mb-5">
                                                    <h3 id="editAdmin{{ $data->id }}-label"
                                                        class="block text-2xl font-bold text-gray-800 ">
                                                        Tambah Admin</h3>

                                                </div>

                                                <form action="/akunTerverifikasiUser/{{ $data->id }}/edit"
                                                    method="post">
                                                    @csrf
                                                    <div class="md:grid grid-cols-3 gap-4">
                                                        <div >
                                                            <!-- Form Group -->
                                                            <div>
                                                                <label for="name"
                                                                    class="block text-sm mb-2">Nama</label>
                                                                <div
                                                                    class="relative  border rounded-lg @error('name') border-red-500 @enderror">
                                                                    <input autofocus type="text" id="name"
                                                                        name="name"
                                                                        value="{{ old('name', $data->name) }}"
                                                                        class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-[#ffb588] focus:ring-[#ffb588] disabled:opacity-50 disabled:pointer-events-none "
                                                                        required aria-describedby="name-error">
                                                                    <div
                                                                        class="hidden absolute inset-y-0 end-0 pointer-events-none pe-3">
                                                                        <svg class="size-5 text-red-500" width="16"
                                                                            height="16" fill="currentColor"
                                                                            viewBox="0 0 16 16" aria-hidden="true">
                                                                            <path
                                                                                d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                                                                        </svg>
                                                                    </div>
                                                                </div>
                                                                @error('name')
                                                                    <p class=" text-xs text-red-600 mt-2" id="name-error">
                                                                        {{ $message }}</p>
                                                                @enderror

                                                            </div>
                                                            <!-- End Form Group -->
                                                        </div>
                                                        <div class="col-span-2">
                                                            <!-- Form Group -->
                                                            <div>
                                                                <label for="email"
                                                                    class="block text-sm mb-2">email</label>
                                                                <div
                                                                    class="relative  border rounded-lg  @error('email') border-red-500 @enderror">
                                                                    <input type="text" id="email" name="email"
                                                                        value="{{ old('email', $data->email) }}"
                                                                        class="py-3
                                        px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-[#ffb588]
                                        focus:ring-[#ffb588] disabled:opacity-50 disabled:pointer-events-none"
                                                                        required aria-describedby="email-error">
                                                                    <div
                                                                        class="hidden absolute inset-y-0 end-0 pointer-events-none pe-3">
                                                                        <svg class="size-5 text-red-500" width="16"
                                                                            height="16" fill="currentColor"
                                                                            viewBox="0 0 16 16" aria-hidden="true">
                                                                            <path
                                                                                d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                                                                        </svg>
                                                                    </div>
                                                                </div>
                                                                @error('email')
                                                                    <p class=" text-xs text-red-600 mt-2" id="name-error">
                                                                        {{ $message }}</p>
                                                                @enderror
                                                            </div>
                                                            <!-- End Form Group -->
                                                        </div>
                                                        <div class="col-span-2">
                                                            <!-- Form Group -->
                                                            <div>
                                                                <label for="alamat"
                                                                    class="block text-sm mb-2">Alamat</label>
                                                                <div
                                                                    class="relative  border rounded-lg  @error('alamat') border-red-500 @enderror">
                                                                    <input type="text" id="alamat" name="alamat"
                                                                        value="{{ old('alamat', $data->alamat) }}"
                                                                        class="py-3
                                        px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-[#ffb588]
                                        focus:ring-[#ffb588] disabled:opacity-50 disabled:pointer-events-none"
                                                                        required aria-describedby="alamat-error">
                                                                    <div
                                                                        class="hidden absolute inset-y-0 end-0 pointer-events-none pe-3">
                                                                        <svg class="size-5 text-red-500" width="16"
                                                                            height="16" fill="currentColor"
                                                                            viewBox="0 0 16 16" aria-hidden="true">
                                                                            <path
                                                                                d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                                                                        </svg>
                                                                    </div>
                                                                </div>
                                                                @error('alamat')
                                                                    <p class=" text-xs text-red-600 mt-2" id="name-error">
                                                                        {{ $message }}</p>
                                                                @enderror
                                                            </div>
                                                            <!-- End Form Group -->
                                                        </div>
                                                        <div>

                                                            <!-- Form Group -->
                                                            <div>
                                                                <label for="nohp"
                                                                    class="block text-sm mb-2">Nohp</label>
                                                                <div
                                                                    class="relative  border rounded-lg  @error('nohp') border-red-500 @enderror">
                                                                    <input type="number" id="nohp"
                                                                        value="{{ old('nohp', $data->nohp) }}"
                                                                        name="nohp"
                                                                        class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-[#ffb588] focus:ring-[#ffb588] disabled:opacity-50 disabled:pointer-events-none"
                                                                        required aria-describedby="nohp-error">
                                                                    <div
                                                                        class="hidden absolute inset-y-0 end-0 pointer-events-none pe-3">
                                                                        <svg class="size-5 text-red-500" width="16"
                                                                            height="16" fill="currentColor"
                                                                            viewBox="0 0 16 16" aria-hidden="true">
                                                                            <path
                                                                                d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                                                                        </svg>
                                                                    </div>
                                                                </div>
                                                                @error('nohp')
                                                                    <p class=" text-xs text-red-600 mt-2" id="name-error">
                                                                        {{ $message }}</p>
                                                                @enderror
                                                            </div>
                                                            <!-- End Form Group -->
                                                        </div>
                                                        <div class="col-span-3">
                                                            <!-- Form Group -->
                                                            <div>
                                                                <label for="password"
                                                                    class="block text-sm mb-2">Password</label>
                                                                <div
                                                                    class="relative  border rounded-lg  @error('password') border-red-500 @enderror">
                                                                    <input type="password" id="password" name="password"
                                                                        class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-[#ffb588] focus:ring-[#ffb588] disabled:opacity-50 disabled:pointer-events-none"
                                                                        aria-describedby="password-error">
                                                                    <div
                                                                        class="hidden absolute inset-y-0 end-0 pointer-events-none pe-3">
                                                                        <svg class="size-5 text-red-500" width="16"
                                                                            height="16" fill="currentColor"
                                                                            viewBox="0 0 16 16" aria-hidden="true">
                                                                            <path
                                                                                d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                                                                        </svg>
                                                                    </div>
                                                                </div>
                                                                @error('password')
                                                                    <p class=" text-xs text-red-600 mt-2" id="name-error">
                                                                        {{ $message }}</p>
                                                                @enderror
                                                            </div>
                                                            <!-- End Form Group -->
                                                        </div>
                                                        <div class="col-span-3">
                                                            <!-- Form Group -->
                                                            <div>
                                                                <label for="confirm-password"
                                                                    class="block text-sm mb-2">Confirm Password</label>
                                                                <div class="relative  border rounded-lg">
                                                                    <input type="password" id="confirm-password"
                                                                        name="confirm-password"
                                                                        class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-[#ffb588] focus:ring-[#ffb588] disabled:opacity-50 disabled:pointer-events-none"
                                                                        aria-describedby="confirm-password-error">
                                                                    <div
                                                                        class="hidden absolute inset-y-0 end-0 pointer-events-none pe-3">
                                                                        <svg class="size-5 text-red-500" width="16"
                                                                            height="16" fill="currentColor"
                                                                            viewBox="0 0 16 16" aria-hidden="true">
                                                                            <path
                                                                                d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                                                                        </svg>
                                                                    </div>
                                                                </div>
                                                                <p class="hidden text-xs text-red-600 mt-2"
                                                                    id="confirm-password-error">Password
                                                                    does
                                                                    not
                                                                    match the password</p>
                                                            </div>
                                                            <!-- End Form Group -->
                                                        </div>
                                                        <div class="col-span-3">

                                                        </div>
                                                        <div class="col-span-3">
                                                            <button type="submit"
                                                                class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-[#e6b9a6] text-white hover:bg-[#e8987c] focus:outline-none focus:bg-[#e8987c] disabled:opacity-50 disabled:pointer-events-none">Submit</button>

                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach


                        </tbody>
                    </table>

                       {{-- footer  --}}
                       <div class="px-6 py-4 md:grid flex items-center border-t border-gray-200">
                      
        
                        <div>
                          
                            {{ $datas->links() }}
                        </div>
                      </div>
                      {{-- akhir footer --}}

                </div>
            </div>
        </div>
       
        
    </div>

  
@endsection
