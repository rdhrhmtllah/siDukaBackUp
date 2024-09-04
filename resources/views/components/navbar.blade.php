 {{-- Navbar --}}

 <header class="flex text-[#2F3645] flex-wrap md:justify-start md:flex-nowrap z-50 w-full md:py-7 py-3">
     <nav class="relative max-w-7xl w-full flex flex-wrap md:grid md:grid-cols-12 basis-full items-center px-4  md:px-8 mx-auto"
         aria-label="Global">
         <div class="md:col-span-3">
             <!-- Logo -->
             <a class="flex-none rounded-xl text-xl inline-block font-semibold focus:outline-none focus:opacity-80">
                 <h1 class="text-3xl font-bold">siDuKa</h1>
             </a>
             <!-- End Logo -->
         </div>

         <!-- Button Group -->
         @auth
             <div
                 class=" items-center gap-x-2 ms-auto py-1 md:ps-6 md:order-3 md:col-span-3 m-1 hs-dropdown [--trigger:hover] relative inline-flex">
                 <button id="hs-dropdown-hover-event" type="button"
                     class="hs-dropdown-toggle py-3 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none"
                     aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
                     {{ Auth()->user()->name }}
                     <svg class="hs-dropdown-open:rotate-180 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                         height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                         stroke-linecap="round" stroke-linejoin="round">
                         <path d="m6 9 6 6 6-6" />
                     </svg>
                 </button>

                 <div class="hs-dropdown-menu transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 hidden min-w-60 bg-white shadow-md rounded-lg p-1 space-y-0.5 mt-2 after:h-4 after:absolute after:-bottom-4 after:start-0 after:w-full before:h-4 before:absolute before:-top-4 before:start-0 before:w-full"
                     role="menu" aria-orientation="vertical" aria-labelledby="hs-dropdown-hover-event">

                     <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100"
                         href="#">
                         Profile
                     </a>
                     @can('admin')
                         <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100"
                             href="/dashboard">
                             Dashboard
                         </a>
                     @endcan
                     <form action="/logout" method="POST">
                         @csrf
                         <button
                             class="flex w-full items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100">Log
                             Out</button>
                     </form>

                 </div>
             </div>
         @else
             <div class="flex items-center gap-x-2 ms-auto py-1 md:ps-6 md:order-3 md:col-span-3">
                 <a href="/register"><button type="button"
                         class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-xl border border-gray-200 text-black hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none">
                         Sign up
                     </button></a>
                 <a href="/login"><button type="button"
                         class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-xl border border-transparent bg-[#E6B9A6] text-black hover:bg-[#E8987C] transition disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-[#E8987C]">
                         Sign in
                     </button></a>

                 <div class="md:hidden">
                     <button type="button"
                         class="hs-collapse-toggle size-[38px] flex justify-center items-center text-sm font-semibold rounded-xl border border-gray-200 text-black hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none "
                         data-hs-collapse="#navbar-collapse-with-animation" aria-controls="navbar-collapse-with-animation"
                         aria-label="Toggle navigation">
                         <svg class="hs-collapse-open:hidden flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg"
                             width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                             stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                             <line x1="3" x2="21" y1="6" y2="6" />
                             <line x1="3" x2="21" y1="12" y2="12" />
                             <line x1="3" x2="21" y1="18" y2="18" />
                         </svg>
                         <svg class="hs-collapse-open:block hidden flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg"
                             width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                             stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                             <path d="M18 6 6 18" />
                             <path d="m6 6 12 12" />
                         </svg>
                     </button>
                 </div>
             </div>
         @endauth
         <!-- End Button Group -->

         <!-- Collapse -->
         <div id="navbar-collapse-with-animation"
             class="hs-collapse hidden overflow-hidden transition-all duration-300 basis-full grow md:block md:w-auto md:basis-auto md:order-2 md:col-span-6">
             <div
                 class="flex flex-col gap-y-4 gap-x-0 mt-5 md:flex-row md:justify-center md:items-center md:gap-y-0 md:gap-x-7 md:mt-0">
                 <div>
                     <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
                 </div>
                 <div>
                     <x-nav-link href="/moreberita" :active="request()->is('moreberita')">Laporan</x-nav-link>
                 </div>
                 <div>
                     <x-nav-link href="#" :active="request()->is('#')">About</x-nav-link>
                 </div>
                 <div>
                     <x-nav-link href="#" :active="request()->is('#')">Contact</x-nav-link>
                 </div>
             </div>
         </div>
         <!-- End Collapse -->
     </nav>
 </header>
