<!DOCTYPE html>
<html lang="en" class="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/style.css">
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <link rel="stylesheet" href="./node_modules/apexcharts/dist/apexcharts.css">
    <title>Home</title>
    
      <!-- Apexcharts -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/apexcharts/dist/apexcharts.min.css">
  <style type="text/css">
    .apexcharts-tooltip.apexcharts-theme-light
    {
      background-color: transparent !important;
      border: none !important;
      box-shadow: none !important;
    }
  </style>

  <!-- CSS Preline -->
  <link rel="stylesheet" href="https://preline.co/assets/css/main.min.css">
    
</head>
<body class="bg-[#f9fafb]">
    
    {{-- header --}}
    <x-headerAdmin></x-headerAdmin>

    {{-- sidebar --}}
    <x-sidebar><x-slot:hitungDarurat>{{ $hitungDarurat }}</x-slot:hitungDarurat><x-slot:hitungNormal>{{ $hitungNormal }}</x-slot:hitungNormal><x-slot:hitungSelesai>{{ $hitungSelesai }}</x-slot:hitungSelesai></x-sidebar>


    <div class="w-full lg:ps-64">
      <!-- bar Atas -->
        <div class="p-4 space-y-4 sm:space-y-6">
            <!-- Card Section -->
            <div class=" px-4 sm:px-6 lg:px-8  mx-auto">
                <!-- Grid -->
                <div class="grid md:grid-cols-4 border border-gray-200 shadow-sm rounded-xl overflow-hidden">
                    <!-- Card -->
                    <a class="block p-4 md:p-5 relative bg-white hover:bg-gray-50 focus:outline-none focus:bg-gray-50 before:absolute before:top-0 before:start-0 before:w-full before:h-px md:before:w-px md:before:h-full before:bg-gray-200 before:first:bg-transparent"
                        href="/akunTerverifikasiUser">
                        <div class="flex md:flex flex-col lg:flex-row gap-y-3 gap-x-5">
                            <svg class="shrink-0 size-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" />
                                <circle cx="9" cy="7" r="4" />
                                <path d="M22 21v-2a4 4 0 0 0-3-3.87" />
                                <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                            </svg>

                            <div class="grow">
                              <div class="p-4 md:p-5">
                                <div class="flex items-center gap-x-2">
                                  <p class="text-xs uppercase tracking-wide text-gray-500 dark:text-neutral-500">
                                    Total users
                                  </p>
                              
                                </div>
                    
                                <div class="mt-1 flex items-center gap-x-2">
                                  <h3 class="text-xl sm:text-2xl font-medium text-gray-800 dark:text-neutral-200">
                                  {{$totalUser}}
                                  </h3>
                                 
                                </div>
                              </div>
                            </div>
                        </div>
                    </a>
                    <!-- End Card -->

                    <!-- Card -->
                    <a class="block p-4 md:p-5 relative bg-white hover:bg-gray-50 focus:outline-none focus:bg-gray-50 before:absolute before:top-0 before:start-0 before:w-full before:h-px md:before:w-px md:before:h-full before:bg-gray-200 before:first:bg-transparent"
                        href="/adminDarurat">
                        <div class="flex md:flex flex-col lg:flex-row gap-y-3 gap-x-5">
                            <svg class="shrink-0 size-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path d="M5 22h14" />
                                <path d="M5 2h14" />
                                <path d="M17 22v-4.172a2 2 0 0 0-.586-1.414L12 12l-4.414 4.414A2 2 0 0 0 7 17.828V22" />
                                <path d="M7 2v4.172a2 2 0 0 0 .586 1.414L12 12l4.414-4.414A2 2 0 0 0 17 6.172V2" />
                            </svg>

                            <div class="grow">
                              <div class="p-4 md:p-5">
                                <div class="flex items-center gap-x-2">
                                  <p class="text-xs uppercase tracking-wide text-gray-500 dark:text-neutral-500">
                                    Total Laporan Darurat
                                  </p>
                              
                                </div>
                    
                                <div class="mt-1 flex items-center gap-x-2">
                                  <h3 class="text-xl sm:text-2xl font-medium text-gray-800 dark:text-neutral-200">
                                  {{$hitungDarurat}}
                                  </h3>
                                 
                                </div>
                              </div>
                            </div>
                        </div>
                    </a>
                    <!-- End Card -->

                    <!-- Card -->
                    <a class="block p-4 md:p-5 relative bg-white hover:bg-gray-50 focus:outline-none focus:bg-gray-50 before:absolute before:top-0 before:start-0 before:w-full before:h-px md:before:w-px md:before:h-full before:bg-gray-200 before:first:bg-transparent"
                        href="/adminNormal">
                        <div class="flex md:flex flex-col lg:flex-row gap-y-3 gap-x-5">
                            <svg class="shrink-0 size-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path d="M21 11V5a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h6" />
                                <path d="m12 12 4 10 1.7-4.3L22 16Z" />
                            </svg>

                            <div class="grow">
                              <div class="p-4 md:p-5">
                                <div class="flex items-center gap-x-2">
                                  <p class="text-xs uppercase tracking-wide text-gray-500 dark:text-neutral-500">
                                    Total Laporan Normal
                                  </p>
                              
                                </div>
                    
                                <div class="mt-1 flex items-center gap-x-2">
                                  <h3 class="text-xl sm:text-2xl font-medium text-gray-800 dark:text-neutral-200">
                                  {{$hitungNormal}}
                                  </h3>
                                 
                                </div>
                              </div>
                            </div>
                        </div>
                    </a>
                    <!-- End Card -->

                    <!-- Card -->
                    <a class="block p-4 md:p-5 relative bg-white hover:bg-gray-50 focus:outline-none focus:bg-gray-50 before:absolute before:top-0 before:start-0 before:w-full before:h-px md:before:w-px md:before:h-full before:bg-gray-200 before:first:bg-transparent"
                        href="/manageBerita">
                        <div class="flex md:flex flex-col lg:flex-row gap-y-3 gap-x-5">
                            <svg class="shrink-0 size-5 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path d="M5 12s2.545-5 7-5c4.454 0 7 5 7 5s-2.546 5-7 5c-4.455 0-7-5-7-5z" />
                                <path d="M12 13a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                                <path d="M21 17v2a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-2" />
                                <path d="M21 7V5a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v2" />
                            </svg>

                            <div class="grow">
                              <div class="p-4 md:p-5">
                                <div class="flex items-center gap-x-2">
                                  <p class="text-xs uppercase tracking-wide text-gray-500 dark:text-neutral-500">
                                    Total Berita
                                  </p>
                              
                                </div>
                    
                                <div class="mt-1 flex items-center gap-x-2">
                                  <h3 class="text-xl sm:text-2xl font-medium text-gray-800 dark:text-neutral-200">
                                  {{$totalBerita}}
                                  </h3>
                                 
                                </div>
                              </div>
                            </div>
                        </div>
                    </a>
                    <!-- End Card -->
                </div>
                <!-- End Grid -->
            </div>
            <!-- End Card Section -->
        </div>
        
        <!-- End bar Atas -->


        <!-- Card -->
 <!-- Legend Indicator -->
 <div class="p-4 space-y-4 sm:space-y-6">
  <div class=" px-4 sm:px-6 lg:px-8  mx-auto">
    <div class="bg-white border border-gray-200 rounded-xl shadow-sm overflow-hidden p-4">
      <div class="inline-flex items-center">
        <span class="size-2.5 inline-block bg-blue-600 rounded-sm me-2"></span>
        <span class="text-[13px] text-gray-600 dark:text-neutral-400">
          Jumlah Laporan Normal
        </span>
      </div>
      <div class="inline-flex items-center">
        <span class="size-2.5 inline-block bg-purple-600 rounded-sm me-2"></span>
        <span class="text-[13px] text-gray-600 dark:text-neutral-400">
          Jumlah Laporan Darurat
        </span>
      </div>
      <div class="inline-flex items-center">
        <form action="/dashboard" >
        <select  name="year" id="year" class="inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-s">
          <option class="text-[#1f2937] space-y-0.5 font-sans" value="{{$yearSelect}}"  hidden>
          {{$yearSelect}}
          </option>
          @for ($year = date('Y'); $year > date('Y') - 100; $year--)
          <option class="text-[#1f2937] space-y-0.5 font-sans" value="{{$year}}">
                  {{$year}}
          </option>
          @endfor
        </select>
      </form>
      </div>
     
    <!-- End Legend Indicator -->

    <div id="hs-curved-area-charts"></div>
    </div>
  </div>
</div>
<!-- End Card -->
    </div>


 


<script src="https://preline.co/assets/js/hs-apexcharts-helpers.js"></script>

  <!-- JS Implementing Plugins -->

  <!-- JS PLUGINS -->
  <!-- Required plugins -->
  <script src="https://cdn.jsdelivr.net/npm/preline/dist/preline.min.js"></script>

  <!-- Apexcharts -->
  <script src="https://cdn.jsdelivr.net/npm/lodash@4.17.21/lodash.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
  <script src="https://preline.co/assets/js/hs-apexcharts-helpers.js"></script>
  <script>
    var select = document.getElementById('year');
    select.onchange = function(){
    this.form.submit();
  };
  </script>

  <script>
    window.addEventListener('load', () => {
      // Apex Line Chart
      (function () {
        buildChart('#hs-curved-area-charts', (mode) => ({
          chart: {
            height: 300,
            type: 'area',
            toolbar: {
              show: false
            },
            zoom: {
              enabled: false
            }
          },
          
          series: [
            {
              name: 'Normal',
              data: [{{$chartNormal}}]
            },
      
            {
              name: 'Darurat',
              data: [{{$chartDarurat}}]
            }
          ],
          legend: {
            show: false
          },
          dataLabels: {
            enabled: false
          },
          stroke: {
            curve: 'smooth',
            width: 2
          },
          grid: {
            strokeDashArray: 2
          },
          fill: {
            type: 'gradient',
            gradient: {
              type: 'vertical',
              shadeIntensity: 1,
              opacityFrom: 0.1,
              opacityTo: 0.8
            }
          },
          xaxis: {
            type: 'category',
            tickPlacement: 'on',
            categories: [
               'Jan',
              'Feb',
              'Mar',
              'Apr',
              'Mei',
              'Jun',
              'Jul',
              'Agu',
              'Sep',
              'Okt',
              'Nov',
              'Des'
            ],
            axisBorder: {
              show: false
            },
            axisTicks: {
              show: false
            },
            crosshairs: {
              stroke: {
                dashArray: 0
              },
              dropShadow: {
                show: false
              }
            },
            tooltip: {
              enabled: false
            },
            labels: {
              style: {
                colors: '#9ca3af',
                fontSize: '13px',
                fontFamily: 'Inter, ui-sans-serif',
                fontWeight: 400
              },
              
            }
          },
          yaxis: {
            labels: {
              align: 'left',
              minWidth: 0,
              maxWidth: 140,
              style: {
                colors: '#9ca3af',
                fontSize: '13px',
                fontFamily: 'Inter, ui-sans-serif',
                fontWeight: 400
              },
            
            }
          },
          tooltip: {
            x: {
              format: 'MMMM '
            },
            y: {
            
            },
            custom: function (props) {
              const { categories } = props.ctx.opts.xaxis;
              const { dataPointIndex } = props;
              const title = categories[dataPointIndex].split(' ');
              const newTitle = `${title[0]}`;
  
              return buildTooltip(props, {
                title: newTitle,
                mode,
                valuePrefix: '',
                hasTextLabel: true,
                wrapperExtClasses: 'min-w-28',
                labelDivider: ':',
                labelExtClasses: 'ms-2'
              });
            }
          },
          responsive: [{
            breakpoint: 568,
            options: {
              chart: {
                height: 300
              },
              labels: {
                style: {
                  colors: '#9ca3af',
                  fontSize: '11px',
                  fontFamily: 'Inter, ui-sans-serif',
                  fontWeight: 400
                },
                offsetX: -2,
                
              },
              yaxis: {
                labels: {
                  align: 'left',
                  minWidth: 0,
                  maxWidth: 140,
                  style: {
                    colors: '#9ca3af',
                    fontSize: '11px',
                    fontFamily: 'Inter, ui-sans-serif',
                    fontWeight: 400
                  },
                
                }
              },
            },
          }]
        }), {
          colors: ['#2563eb', '#9333ea'],
          fill: {
            gradient: {
              stops: [0, 90, 100]
            }
          },
          xaxis: {
            labels: {
              style: {
                colors: '#9ca3af'
              }
            }
          },
          yaxis: {
            labels: {
              style: {
                colors: '#9ca3af'
              }
            }
          },
          grid: {
            borderColor: '#e5e7eb'
          }
        }, {
          colors: ['#3b82f6', '#a855f7'],
          fill: {
            gradient: {
              stops: [100, 90, 0]
            }
          },
          xaxis: {
            labels: {
              style: {
                colors: '#a3a3a3',
              }
            }
          },
          yaxis: {
            labels: {
              style: {
                colors: '#a3a3a3'
              }
            }
          },
          grid: {
            borderColor: '#404040'
          }
        });
      })();
    });
  </script>
    
  
    <script src="./node_modules/preline/dist/preline.js"></script>
    <script src="./node_modules/lodash/lodash.min.js"></script>
    <script src="./node_modules/apexcharts/dist/apexcharts.min.js"></script>
</body>
{{-- @dd($yearSelect) --}}


</html>
