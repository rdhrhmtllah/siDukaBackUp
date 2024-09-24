   <!-- Sidebar -->
   <div id="hs-application-sidebar"
       class="hs-overlay  [--auto-close:lg]
hs-overlay-open:translate-x-0
-translate-x-full transition-all duration-300 transform
w-[260px] h-full
hidden
fixed inset-y-0 start-0 z-[60]
bg-white border-e border-gray-200
lg:block lg:translate-x-0 lg:end-auto lg:bottom-0
"
       role="dialog" tabindex="-1" aria-label="Sidebar">
       <div class="relative flex flex-col h-full max-h-full">
           <div class="px-6 pt-4">
               <!-- Logo -->
               <a class="flex-none rounded-xl text-xl inline-block font-semibold focus:outline-none focus:opacity-80"
                   href="{{ route('home') }}" aria-label="Preline">
                   <h1 class="text-2xl font-bold">siDuka.</h1>
               </a>
               <!-- End Logo -->
           </div>

           <!-- Content -->
           <div
               class="h-full overflow-y-auto [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300">
               <nav class="hs-accordion-group p-3 w-full flex flex-col flex-wrap" data-hs-accordion-always-open>
                   <ul class="flex flex-col space-y-1">
                       <li>
                           <a class="flex items-center gap-x-3.5 py-2 px-2.5 {{ request()->is('dashboard') ? 'bg-gray-100' : '' }} text-sm text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-none focus:bg-gray-100"
                               href="{{ route('dashboard') }}">
                               <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                                   height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                   stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                   <path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z" />
                                   <polyline points="9 22 9 12 15 12 15 22" />
                               </svg>
                               Dashboard
                           </a>
                       </li>

                       <li class="hs-accordion" id="users-accordion">
                           <button type="button"
                               class=" {{ request()->is('akun*') ? 'bg-gray-100' : '' }} hs-accordion-toggle w-full text-start flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-none focus:bg-gray-100"
                               aria-expanded="true" aria-controls="users-accordion-child">
                               <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                                   height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                   stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                   <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" />
                                   <circle cx="9" cy="7" r="4" />
                                   <path d="M22 21v-2a4 4 0 0 0-3-3.87" />
                                   <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                               </svg>
                               Pengguna

                               <svg class="hs-accordion-active:block ms-auto hidden size-4"
                                   xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                   fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                   stroke-linejoin="round">
                                   <path d="m18 15-6-6-6 6" />
                               </svg>

                               <svg class="hs-accordion-active:hidden ms-auto block size-4"
                                   xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                   fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                   stroke-linejoin="round">
                                   <path d="m6 9 6 6 6-6" />
                               </svg>
                           </button>

                           <div id="users-accordion-child"
                               class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300 hidden"
                               role="region" aria-labelledby="users-accordion">
                               <ul class="hs-accordion-group ps-8 pt-1 space-y-1" data-hs-accordion-always-open>
                                   <li class="hs-accordion" id="users-accordion-sub-1">
                                       <button type="button"
                                           class="{{ request()->is('akunTerverifikasi*') ? 'bg-gray-100' : '' }} hs-accordion-toggle w-full text-start flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-none focus:bg-gray-100"
                                           aria-expanded="true" aria-controls="users-accordion-sub-1-child">
                                           Terverifikasi

                                           <svg class="hs-accordion-active:block ms-auto hidden size-4"
                                               xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                               viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                               stroke-linecap="round" stroke-linejoin="round">
                                               <path d="m18 15-6-6-6 6" />
                                           </svg>

                                           <svg class="hs-accordion-active:hidden ms-auto block size-4"
                                               xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                               viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                               stroke-linecap="round" stroke-linejoin="round">
                                               <path d="m6 9 6 6 6-6" />
                                           </svg>
                                       </button>

                                       <div id="users-accordion-sub-1-child"
                                           class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300 hidden"
                                           role="region" aria-labelledby="users-accordion-sub-1">
                                           <ul class="pt-1 space-y-1">
                                               <li>
                                                   <a class="{{ request()->is('akunTerverifikasi/*') ? 'bg-gray-100' : '' }} flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-none focus:bg-gray-100"
                                                       href="{{ route('akunTerverifikasi') }}">
                                                       Admin
                                                   </a>
                                               </li>
                                               <li>
                                                   <a class="{{ request()->is('akunTerverifikasiUser*') ? 'bg-gray-100' : '' }}  flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-none focus:bg-gray-100"
                                                       href="{{ route('akunTerverifikasiUser') }}">
                                                       User
                                                   </a>
                                               </li>

                                           </ul>
                                       </div>
                                   </li>
                                   <li class="hs-accordion" id="users-accordion-sub-2">
                                    <a class="{{ request()->is('akunBelumVerifikasi') ? 'bg-gray-100' : '' }}  flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-none focus:bg-gray-100"
                                    href='{{ route('akunBelumVerifikasi') }}'>
                                   Belum Diverifikasi
                                </a>

                                      
                                   </li>
                               </ul>
                           </div>
                       </li>

                       {{-- <li class="hs-accordion" id="account-accordion">
                           <button type="button"
                               class="hs-accordion-toggle w-full text-start flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-none focus:bg-gray-100"
                               aria-expanded="true" aria-controls="account-accordion-child">
                               <svg class="shrink-0 mt-0.5 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                                   height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                   stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                   <circle cx="18" cy="15" r="3" />
                                   <circle cx="9" cy="7" r="4" />
                                   <path d="M10 15H6a4 4 0 0 0-4 4v2" />
                                   <path d="m21.7 16.4-.9-.3" />
                                   <path d="m15.2 13.9-.9-.3" />
                                   <path d="m16.6 18.7.3-.9" />
                                   <path d="m19.1 12.2.3-.9" />
                                   <path d="m19.6 18.7-.4-1" />
                                   <path d="m16.8 12.3-.4-1" />
                                   <path d="m14.3 16.6 1-.4" />
                                   <path d="m20.7 13.8 1-.4" />
                               </svg>
                               Account

                               <svg class="hs-accordion-active:block ms-auto hidden size-4"
                                   xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                   viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                   stroke-linecap="round" stroke-linejoin="round">
                                   <path d="m18 15-6-6-6 6" />
                               </svg>

                               <svg class="hs-accordion-active:hidden ms-auto block size-4"
                                   xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                   viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                   stroke-linecap="round" stroke-linejoin="round">
                                   <path d="m6 9 6 6 6-6" />
                               </svg>
                           </button>

                           <div id="account-accordion-child"
                               class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300 hidden"
                               role="region" aria-labelledby="account-accordion">
                               <ul class="ps-8 pt-1 space-y-1">
                                   <li>
                                       <a class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-none focus:bg-gray-100"
                                           href="#">
                                           Link 1
                                       </a>
                                   </li>
                                   <li>
                                       <a class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-none focus:bg-gray-100"
                                           href="#">
                                           Link 2
                                       </a>
                                   </li>
                                   <li>
                                       <a class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-none focus:bg-gray-100"
                                           href="#">
                                           Link 3
                                       </a>
                                   </li>
                               </ul>
                           </div>
                       </li> --}}

                       {{-- Laporan --}}

                       <li class="hs-accordion" id="projects-accordion">
                           <button type="button"
                               class="hs-accordion-toggle {{ request()->is('admin*') ? 'bg-gray-100' : '' }}  w-full text-start flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-none focus:bg-gray-100"
                               aria-expanded="true" aria-controls="projects-accordion-child">
                               <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                                   height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                   stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                   <rect width="20" height="14" x="2" y="7" rx="2" ry="2" />
                                   <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16" />
                               </svg>
                               Laporan

                               <svg class="hs-accordion-active:block ms-auto hidden size-4"
                                   xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                   viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                   stroke-linecap="round" stroke-linejoin="round">
                                   <path d="m18 15-6-6-6 6" />
                               </svg>

                               <svg class="hs-accordion-active:hidden ms-auto block size-4"
                                   xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                   viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                   stroke-linecap="round" stroke-linejoin="round">
                                   <path d="m6 9 6 6 6-6" />
                               </svg>
                           </button>

                           <div id="projects-accordion-child"
                               class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300 hidden"
                               role="region" aria-labelledby="projects-accordion">
                               <ul class="ps-8 pt-1 space-y-1">
                                   <li>
                                       <a class="{{ request()->is('adminDarurat*') ? 'bg-gray-100' : '' }} justify-between flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-none focus:bg-gray-100"
                                           href="{{ route('adminDarurat') }}">
                                           Darurat
                                           <div class="flex flex-wrap items-center justify-center text-center ">
                                               <span
                                                   class="absolute text-xs font-medium p-1.5 items-center rounded-full border border-red-600 animate-ping">
                                               </span>
                                               <p class="p-1 items-center rounded-full text-xs font-medium">
                                                   {{ $hitungDarurat }}</p>
                                           </div>
                                       </a>
                                   </li>
                                   <li>
                                       <a class="{{ request()->is('adminNormal*') ? 'bg-gray-100' : '' }} justify-between flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-none focus:bg-gray-100"
                                           href="{{ route('adminNormal') }}">
                                           Normal
                                           <span
                                               class="p-1 items-center rounded-full text-xs font-medium ">{{ $hitungNormal }}</span>
                                       </a>
                                   </li>
                                   <li class="inline">
                                       <a class="{{ request()->is('adminSelesai*') ? 'bg-gray-100' : '' }} justify-between flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-none focus:bg-gray-100"
                                           href="{{ route('adminSelesai') }}">
                                           Selesai
                                           <span
                                               class="p-1 items-center rounded-full text-xs font-medium ">{{ $hitungSelesai }}</span>
                                       </a>
                                   </li>

                               </ul>
                           </div>
                       </li>


                       <li><a class="{{ request()->is('manageBerita*') ? 'bg-gray-100' : '' }} w-full flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-gray-800 rounded-lg hover:bg-gray-100"
                               href="{{ route('manageBerita') }}">
                               <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                                   height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                   stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                   <path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z" />
                                   <path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z" />
                               </svg>
                               Berita
                           </a></li>
                       <li><a class="{{ request()->is('manageKotakSaran*') ? 'bg-gray-100' : '' }} w-full flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-gray-800 rounded-lg hover:bg-gray-100"
                               href="{{ route('manageKotakSaran') }}">
                               <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                                   height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                   stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                   <rect width="18" height="18" x="3" y="4" rx="2" ry="2" />
                                   <line x1="16" x2="16" y1="2" y2="6" />
                                   <line x1="8" x2="8" y1="2" y2="6" />
                                   <line x1="3" x2="21" y1="10" y2="10" />
                                   <path d="M8 14h.01" />
                                   <path d="M12 14h.01" />
                                   <path d="M16 14h.01" />
                                   <path d="M8 18h.01" />
                                   <path d="M12 18h.01" />
                                   <path d="M16 18h.01" />
                               </svg>
                               Kotak Saran
                           </a></li>
                   </ul>
               </nav>
           </div>
           <!-- End Content -->
       </div>
   </div>
   <!-- End Sidebar -->
