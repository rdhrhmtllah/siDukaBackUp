    <!-- ========== HEADER ========== -->
    <header
        class="sticky top-0 inset-x-0 flex flex-wrap md:justify-start md:flex-nowrap z-[48] w-full bg-white border-b text-sm py-2.5 lg:ps-[260px]">
        <nav class="px-4 sm:px-6 flex basis-full items-center w-full mx-auto">
            <div class="me-5 lg:me-0 lg:hidden">
                <!-- Logo -->
                <a class="flex-none rounded-md text-xl inline-block font-semibold focus:outline-none focus:opacity-80"
                    href="/">
                    <h1 class="text-2xl font-bold">siDuka.</h1>
                </a>
                <!-- End Logo -->
            </div>

            <div class="w-full flex items-center justify-end ms-auto md:justify-between gap-x-1 md:gap-x-3">

                <div class="hidden md:block">
                    <!-- Search Input -->
                    {{-- <div class="relative">
                        <div class="absolute inset-y-0 start-0 flex items-center pointer-events-none z-20 ps-3.5">
                            <svg class="shrink-0 size-4 text-gray-400" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="11" cy="11" r="8" />
                                <path d="m21 21-4.3-4.3" />
                            </svg>
                        </div>
                        <input type="text"
                            class="py-2 ps-10 pe-16 block w-full bg-white border-gray-200 rounded-lg text-sm focus:outline-none focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                            placeholder="Search">
                        <div class="hidden absolute inset-y-0 end-0 flex items-center pointer-events-none z-20 pe-1">
                            <button type="button"
                                class="inline-flex shrink-0 justify-center items-center size-6 rounded-full text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600"
                                aria-label="Close">
                                <span class="sr-only">Close</span>
                                <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <circle cx="12" cy="12" r="10" />
                                    <path d="m15 9-6 6" />
                                    <path d="m9 9 6 6" />
                                </svg>
                            </button>
                        </div>
                        <div
                            class="absolute inset-y-0 end-0 flex items-center pointer-events-none z-20 pe-3 text-gray-400">
                            <svg class="shrink-0 size-3 text-gray-400" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path d="M15 6v12a3 3 0 1 0 3-3H6a3 3 0 1 0 3 3V6a3 3 0 1 0-3 3h12a3 3 0 1 0-3-3" />
                            </svg>
                            <span class="mx-1">
                                <svg class="shrink-0 size-3 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path d="M5 12h14" />
                                    <path d="M12 5v14" />
                                </svg>
                            </span>
                            <span class="text-xs">/</span>
                        </div>
                    </div>
                    <!-- End Search Input --> --}}
                </div>

                <div class="flex flex-row items-center justify-end gap-1">
                    {{-- <button type="button"
                        class="md:hidden size-[38px] relative inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none">
                        <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="11" cy="11" r="8" />
                            <path d="m21 21-4.3-4.3" />
                        </svg>
                        <span class="sr-only">Search</span>
                    </button> --}}

                    {{-- <button type="button"
                        class="size-[38px] relative inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none" >
                        <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="M6 8a6 6 0 0 1 12 0c0 7 3 9 3 9H3s3-2 3-9" />
                            <path d="M10.3 21a1.94 1.94 0 0 0 3.4 0" />
                        </svg>
                        <span class="sr-only">Notifications</span>
                    </button> --}}

                    <div class="hs-dropdown relative inline-flex px-5">
                      {{-- Button notification --}}
                        <button id="size-[38px] inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none" aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
                            <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="M6 8a6 6 0 0 1 12 0c0 7 3 9 3 9H3s3-2 3-9" />
                            <path d="M10.3 21a1.94 1.94 0 0 0 3.4 0" />
                        </svg>
                        <span class="sr-only">Notifications</span>
                        <span class="absolute inline-flex top-[-11px] animate-ping items-center gap-x-1 py-2 px-2 rounded-full text-xs font-medium bg-red-500 text-white"></span>
                        <span class="absolute inline-flex top-[-13px] items-center gap-x-1 py-[2px] px-[3px] rounded-full text-xs font-medium bg-red-500 text-white">{{auth()->user()->unreadNotifications->count()}}</span>
                        </button>
                      {{-- notification dropdown --}}
                        <div class="hs-dropdown-menu transition-[opacity,margin]  duration hs-dropdown-open:opacity-100 opacity-0 hidden min-w-60 bg-white shadow-md rounded-lg p-1 space-y-0.5 mt-2 divide-y divide-gray-200" role="menu" aria-orientation="vertical" aria-labelledby="hs-dropdown-with-title">
                            <span class="flex items-center justify-between py-2 px-3 text-xs font-medium uppercase text-gray-400">
                              <p>Semua Notifikasi</p>
                              <button type="button" aria-haspopup="dialog" aria-expanded="false" aria-controls="hs-scroll-inside-body-modal" data-hs-overlay="#hs-scroll-inside-body-modal">
                                <p class="text-xs font-medium uppercase text-gray-400">Sudah Dibaca</p>
                                
                            </button>
                            </span>
                          
                              
                          <div class="py-2 first:pt-0 last:pb-0 overflow-y-scroll  max-h-96  ">
                              {{-- content notifikasi --}}
                              @foreach (auth()->user()->unreadNotifications as $notification)
                              <a href="{{ route('markSatuNotif',$notification->id)}}" class="relative me-3 group q0mum flex  rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100">
                                <div class="relative ylm2u  w-14 m-5">
                                    <img class="ylm2u d2d9z drtn2 rounded-full" src="{{ asset('/storage/post-image/' . $notification->data['foto']) }}" alt="Avatar">
                                    <span class="absolute jdy7d -start-3 jzf4d riqyd drtn2 dark:bg-blue-500"></span>
                                  </div>
                                <div class="v6j3t">
                                  <p class="zlgt1 daned dark:text-neutral-500">
                                    {{ \Carbon\Carbon::parse($notification->data['dibuat'])->diffForhumans() }}
                                  </p>
          
                                  <span class="block ibyb7 mwwf4 i6scm dark:text-neutral-300">
                                    {{$notification->data['pembuat']}}
                                  </span>
                                  {{$notification->data['data']}}
                                  
                                </div>
                                
                                <div>
                                    <div class="r5huv fyyx9 vyd5t iykm3 r38dj">
                                        
                                    </div>
                                </div>
                            </a>
                            @endforeach
                            
                          </div>
                          <div class="py-2 first:pt-0 last:pb-0">
                            @if (auth()->user()->unreadNotifications)
                            <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100" href="{{route('mark-as-read')}}">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 0 1-1.043 3.296 3.745 3.745 0 0 1-3.296 1.043A3.745 3.745 0 0 1 12 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 0 1-3.296-1.043 3.745 3.745 0 0 1-1.043-3.296A3.745 3.745 0 0 1 3 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 0 1 1.043-3.296 3.746 3.746 0 0 1 3.296-1.043A3.746 3.746 0 0 1 12 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 0 1 3.296 1.043 3.746 3.746 0 0 1 1.043 3.296A3.745 3.745 0 0 1 21 12Z" />
                                  </svg>
                                  
                              Mark all as read
                            </a>
                            @endif
                          </div>
                        </div>
                    </div>

                    

                    {{-- <button id="hs-pro-dnnd" type="button" class="hs-tooltip-toggle relative d2d9z jqzvs t2j25 items-center syne5 drtn2 aesap r0r2c daned s1xgi j01y2 otank wh5re lug43 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700" aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
                        <svg class="ylm2u yaf2e" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                          <path d="M6 8a6 6 0 0 1 12 0c0 7 3 9 3 9H3s3-2 3-9"></path>
                          <path d="M10.3 21a1.94 1.94 0 0 0 3.4 0"></path>
                        </svg>
                        <span class="flex absolute ztbkf vk6ex bk6sw -mt-1.5 -me-1.5">
                          <span class="v3ykd absolute jqzvs te00u drtn2 etd7c f9jyf dark:bg-red-600"></span>
                          <span class="relative cuvt7 pv9gh jqzvs t2j25 items-center mwc8k zltj5 i3pem drtn2 synie">
                            2
                          </span>
                        </span>
                      </button> --}}
{{-- 
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link " href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            <i class="fa fa-bell"></i>
                            <span class="badge badge-light bg-success badge-xs">{{auth()->user()->unreadNotifications->count()}}</span>
                        </a>
                        <ul class="dropdown-menu">
                                    @if (auth()->user()->unreadNotifications)
                                    <li class="d-flex justify-content-end mx-1 my-2">
                                        <a href="{{route('mark-as-read')}}" class="btn btn-success btn-sm">Mark All as Read</a>
                                    </li>
                                    @endif
                     
                                    @foreach (auth()->user()->unreadNotifications as $notification)
                                    <a href="#" class="text-success"><li class="p-1 text-success"> {{$notification->data['data']}}</li></a>
                                    @endforeach
                                    @foreach (auth()->user()->readNotifications as $notification)
                                    <a href="#" class="text-secondary"><li class="p-1 text-secondary"> {{$notification->data['data']}}</li></a>
                                    @endforeach
                        </ul>
                     </li> --}}



                    <!-- Dropdown -->
                    <div class="hs-dropdown [--placement:bottom-right] relative inline-flex">
                        <button id="hs-dropdown-account" type="button"
                            class="size-[38px] inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-full border border-transparent text-gray-800 focus:outline-none disabled:opacity-50 disabled:pointer-events-none"
                            aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-10">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                              </svg>
                              
                        </button>

                        <div class="hs-dropdown-menu transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 hidden min-w-60 bg-white shadow-md rounded-lg mt-2 after:h-4 after:absolute after:-bottom-4 after:start-0 after:w-full before:h-4 before:absolute before:-top-4 before:start-0 before:w-full"
                            role="menu" aria-orientation="vertical" aria-labelledby="hs-dropdown-account">
                            <div class="py-3 px-5 bg-gray-100 rounded-t-lg">
                                <p class="text-sm text-gray-500">Signed in as</p>
                                <p class="text-sm font-medium text-gray-800">{{Auth()->user()->name}}</p>
                            </div>
                            <div class="p-1.5 space-y-0.5">
                               
                               <form class="inline" action="{{ route('logout') }}" method="POST">
                         @csrf
                  
                         <button
                             class="flex w-full items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100">Log
                             Out</button>
                     </form>
                            </div>
                        </div>
                    </div>
                    <!-- End Dropdown -->
                </div>
            </div>
        </nav>
    </header>
    <!-- ========== END HEADER ========== -->

    <!-- ========== MAIN CONTENT ========== -->
    <div class="-mt-px">
        <!-- Breadcrumb -->
        <div class="sticky top-0 inset-x-0 z-20 bg-white border-y px-4 sm:px-6 lg:px-8 lg:hidden">
            <div class="flex items-center py-2">
                <!-- Navigation Toggle -->
                <button type="button"
                    class="size-8 flex justify-center items-center gap-x-2 border border-gray-200 text-gray-800 hover:text-gray-500 rounded-lg focus:outline-none focus:text-gray-500 disabled:opacity-50 disabled:pointer-events-none"
                    aria-haspopup="dialog" aria-expanded="false" aria-controls="hs-application-sidebar"
                    aria-label="Toggle navigation" data-hs-overlay="#hs-application-sidebar">
                    <span class="sr-only">Toggle Navigation</span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                    
                </button>
                <!-- End Navigation Toggle -->

             
            </div>
        </div>
        <!-- End Breadcrumb -->
    </div>

    <div id="hs-scroll-inside-body-modal" class="hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none" role="dialog" tabindex="-1" aria-labelledby="hs-scroll-inside-body-modal-label">
        <div class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-lg sm:w-full m-3 h-[calc(100%-3.5rem)] sm:mx-auto">
          <div class="max-h-full overflow-hidden flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto dark:bg-neutral-800 dark:border-neutral-700 dark:shadow-neutral-700/70">
            <div class="flex justify-between items-center py-3 px-4 border-b dark:border-neutral-700">
              <h3 id="hs-scroll-inside-body-modal-label" class="font-bold text-gray-800 dark:text-white">
                Notifikasi sudah dibaca
              </h3>
              <button type="button" class="size-8 inline-flex justify-center items-center gap-x-2 rounded-full border border-transparent bg-gray-100 text-gray-800 hover:bg-gray-200 focus:outline-none focus:bg-gray-200 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-700 dark:hover:bg-neutral-600 dark:text-neutral-400 dark:focus:bg-neutral-600" aria-label="Close" data-hs-overlay="#hs-scroll-inside-body-modal">
                <span class="sr-only">Close</span>
                <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M18 6 6 18"></path>
                  <path d="m6 6 12 12"></path>
                </svg>
              </button>
            </div>
            <div class="p-4 overflow-y-auto">
                @foreach (auth()->user()->readNotifications as $notification)
                <a href="/adminNormal" class="relative me-3 group q0mum flex  rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100">
                  <div class="relative ylm2u  w-14 m-5">
                      <img class="ylm2u d2d9z drtn2 rounded-full" src="{{ asset('/storage/post-image/' . $notification->data['foto']) }}" alt="Avatar">
                      <span class="absolute jdy7d -start-3 jzf4d riqyd drtn2 dark:bg-blue-500"></span>
                    </div>
                  <div class="v6j3t">
                    <p class="zlgt1 daned dark:text-neutral-500">
                      {{ \Carbon\Carbon::parse($notification->data['dibuat'])->diffForhumans() }}
                    </p>

                    <span class="block ibyb7 mwwf4 i6scm dark:text-neutral-300">
                      {{$notification->data['pembuat']}}
                    </span>
                    {{$notification->data['data']}}
                    
                  </div>
                  
                  <div>
                      <div class="r5huv fyyx9 vyd5t iykm3 r38dj">
                          
                      </div>
                  </div>
              </a>
              @endforeach
            </div>
            <div class="flex justify-end items-center gap-x-2 py-3 px-4 border-t dark:border-neutral-700">
              <button type="button" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-700 dark:focus:bg-neutral-700" data-hs-overlay="#hs-scroll-inside-body-modal">
                Close
              </button>
              
            </div>
          </div>
        </div>
      </div>
      
     
      
      
