<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>MS Channels</title>
  <link rel="icon" href="Apex-icons/Logo.png" />
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
  <link rel="stylesheet" href="style.css" />

  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Chakra+Petch:wght@300;400;500;600;700&display=swap"
    rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet" />

  <script src="https://unpkg.com/gsap@3/dist/gsap.min.js"></script>
  <script src="https://unpkg.com/gsap@3/dist/ScrollTrigger.min.js"></script>
</head>

<body>
  <!-- Progress bar -->
  <div class="fixed top-0 left-0 w-full h-1 z-[9999]">
    <div id="progressBar" class="h-full w-0 bg-gradient-to-r from-white to-red-500 transition-all duration-150"></div>
  </div>
  <!-- Scroll Arrow Button -->
  <button id="scrollBtn" class="fixed right-8 sm:right-12 md:right-10 lg:right-6 bottom-10 z-50
         w-12 h-12 rounded-full
         bg-white text-red-600
         flex items-center justify-center
         shadow-lg transition-all duration-300 hover:scale-110">

    <span id="arrowIcon" class="text-2xl">↓</span>
  </button>

  <header class="w-full relative">
    <!-- bg-image -->
    <div class="relative w-full h-[320px] sm:h-[420px] md:h-[520px] overflow-hidden fade-up">
      <!-- Banner Image -->
      <img src="Apex-Images/Investor-Corner-Banner.jpg" class="w-full h-full object-cover" alt="Investor Corner Banner" />

      <!-- Breadcrumb -->
      <div class="absolute bottom-6 left-6 flex items-center gap-3">
        <!-- Home -->
        <a href="/" class="flex items-center gap-2 text-red-600 px-4 py-2 rounded-md text-sm font-medium transition">
          <!-- Home Icon -->
          <img src="Apex-icons/Home.png" alt="Home icon " class="w-4 h-4" />

          Home
        </a>

        <!-- Arrow -->
        <span class="text-white text-lg">›</span>

        <!-- About -->
        <span class="flex items-center gap-2 bg-red-600 text-white px-4 py-2 rounded-md text-sm font-medium shadow-md">
          <!-- User/About Icon -->
          <img src="Apex-icons/user-circle.png" alt="user icon " class="w-4 h-4" />

         MS Channels
        </span>
      </div>
    </div>

    <!-- Header Content Overlay -->
    <?php include "includes/header.php"; ?>
  </header>

  <main>
    <!-- MS Channels Specifications Section -->
    <section class="py-16 md:py-24 bg-gray-50/50">
      <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-7xl">
        <!-- Section Heading -->
        <div class="text-center mb-12 fade-up">
          <h2 class="text-3xl md:text-5xl font-bold text-gray-900 mb-4">MS Channel <span class="text-red-600">Specifications</span></h2>
          <p class="text-gray-600 max-w-2xl mx-auto text-lg mb-2">
            Explore our comprehensive range of high-quality Mild Steel (MS) Channels, designed for structural support and industrial applications.
          </p>
          <p class="text-red-600 font-semibold text-lg md:text-xl">
            MS Channels: 75 x 40mm to 200 x 75mm (Light Wt. / Med. Wt. / STD .Wt.)
          </p>
        </div>

        <!-- Sizes & Weights Table -->
        <div class="bg-white rounded-2xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] overflow-hidden border border-gray-100 fade-up mb-12" style="transition-delay: 0.1s;">
          <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">
              <thead>
                <tr class="bg-gray-50/80 border-b border-gray-100">
                  <th rowspan="2" class="px-6 py-4 text-sm font-semibold text-gray-900 uppercase tracking-wider whitespace-nowrap border-r border-gray-100 align-middle">Size in mm</th>
                  <th colspan="2" class="px-6 py-3 text-sm font-semibold text-gray-900 uppercase tracking-wider text-center border-b border-gray-100">Average Weight</th>
                </tr>
                <tr class="bg-gray-50/80 border-b border-gray-100">
                  <th class="px-6 py-3 text-sm font-semibold text-gray-700 uppercase tracking-wider text-center border-r border-gray-100">KG / MTR</th>
                  <th class="px-6 py-3 text-sm font-semibold text-gray-700 uppercase tracking-wider text-center">KG / FT</th>
                </tr>
              </thead>
              <tbody class="divide-y divide-gray-100">
                <!-- Data Rows -->
                <tr class="hover:bg-gray-50/50 transition-colors duration-200 group">
                  <td class="px-6 py-3 whitespace-nowrap font-medium text-gray-900 border-r border-gray-100">70 x 35</td>
                  <td class="px-6 py-3 text-gray-600 text-center border-r border-gray-100">4.2</td>
                  <td class="px-6 py-3 text-gray-600 text-center">1.3</td>
                </tr>
                <tr class="hover:bg-gray-50/50 transition-colors duration-200 group">
                  <td class="px-6 py-3 whitespace-nowrap font-medium text-gray-900 border-r border-gray-100">75 x 40</td>
                  <td class="px-6 py-3 text-gray-600 text-center border-r border-gray-100">5.2</td>
                  <td class="px-6 py-3 text-gray-600 text-center">1.58</td>
                </tr>
                <tr class="hover:bg-gray-50/50 transition-colors duration-200 group">
                  <td class="px-6 py-3 whitespace-nowrap font-medium text-gray-900 border-r border-gray-100">75 x 40 STD</td>
                  <td class="px-6 py-3 text-gray-600 text-center border-r border-gray-100">7.1</td>
                  <td class="px-6 py-3 text-gray-600 text-center">2.2</td>
                </tr>
                <tr class="hover:bg-gray-50/50 transition-colors duration-200 group">
                  <td class="px-6 py-3 whitespace-nowrap font-medium text-gray-900 border-r border-gray-100">75 x 40 MED</td>
                  <td class="px-6 py-3 text-gray-600 text-center border-r border-gray-100">6.5</td>
                  <td class="px-6 py-3 text-gray-600 text-center">2</td>
                </tr>
                <tr class="hover:bg-gray-50/50 transition-colors duration-200 group">
                  <td class="px-6 py-3 whitespace-nowrap font-medium text-gray-900 border-r border-gray-100">75 x 40 LIGHT</td>
                  <td class="px-6 py-3 text-gray-600 text-center border-r border-gray-100">5.7</td>
                  <td class="px-6 py-3 text-gray-600 text-center">1.7</td>
                </tr>
                <tr class="hover:bg-gray-50/50 transition-colors duration-200 group">
                  <td class="px-6 py-3 whitespace-nowrap font-medium text-gray-900 border-r border-gray-100">100 x 50 STD</td>
                  <td class="px-6 py-3 text-gray-600 text-center border-r border-gray-100">9.56</td>
                  <td class="px-6 py-3 text-gray-600 text-center">2.9</td>
                </tr>
                <tr class="hover:bg-gray-50/50 transition-colors duration-200 group">
                  <td class="px-6 py-3 whitespace-nowrap font-medium text-gray-900 border-r border-gray-100">100 x 50 MED</td>
                  <td class="px-6 py-3 text-gray-600 text-center border-r border-gray-100">9.2</td>
                  <td class="px-6 py-3 text-gray-600 text-center">2.8</td>
                </tr>
                <tr class="hover:bg-gray-50/50 transition-colors duration-200 group">
                  <td class="px-6 py-3 whitespace-nowrap font-medium text-gray-900 border-r border-gray-100">100 x 50 LT MED</td>
                  <td class="px-6 py-3 text-gray-600 text-center border-r border-gray-100">8.7</td>
                  <td class="px-6 py-3 text-gray-600 text-center">2.6</td>
                </tr>
                <tr class="hover:bg-gray-50/50 transition-colors duration-200 group">
                  <td class="px-6 py-3 whitespace-nowrap font-medium text-gray-900 border-r border-gray-100">100 x 50 LIGHT</td>
                  <td class="px-6 py-3 text-gray-600 text-center border-r border-gray-100">7.9</td>
                  <td class="px-6 py-3 text-gray-600 text-center">2.4</td>
                </tr>
                <tr class="hover:bg-gray-50/50 transition-colors duration-200 group">
                  <td class="px-6 py-3 whitespace-nowrap font-medium text-gray-900 border-r border-gray-100">120 x 55</td>
                  <td class="px-6 py-3 text-gray-600 text-center border-r border-gray-100">12.5</td>
                  <td class="px-6 py-3 text-gray-600 text-center">3.1</td>
                </tr>
                <tr class="hover:bg-gray-50/50 transition-colors duration-200 group">
                  <td class="px-6 py-3 whitespace-nowrap font-medium text-gray-900 border-r border-gray-100">125 x 65</td>
                  <td class="px-6 py-3 text-gray-600 text-center border-r border-gray-100">13.1</td>
                  <td class="px-6 py-3 text-gray-600 text-center">4</td>
                </tr>
                <tr class="hover:bg-gray-50/50 transition-colors duration-200 group">
                  <td class="px-6 py-3 whitespace-nowrap font-medium text-gray-900 border-r border-gray-100">150 x 75</td>
                  <td class="px-6 py-3 text-gray-600 text-center border-r border-gray-100">16.8</td>
                  <td class="px-6 py-3 text-gray-600 text-center">5.1</td>
                </tr>
                <tr class="hover:bg-gray-50/50 transition-colors duration-200 group">
                  <td class="px-6 py-3 whitespace-nowrap font-medium text-gray-900 border-r border-gray-100">200 x 75</td>
                  <td class="px-6 py-3 text-gray-600 text-center border-r border-gray-100">22.3</td>
                  <td class="px-6 py-3 text-gray-600 text-center">6.8</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>

        <!-- Rolling Tolerances Table -->
        <h3 class="text-2xl md:text-3xl font-bold text-gray-900 mb-6 text-center fade-up" style="transition-delay: 0.2s;">Rolling Tolerances</h3>
        <div class="bg-white rounded-2xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] overflow-hidden border border-gray-100 fade-up mb-12" style="transition-delay: 0.3s;">
          <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">
              <thead>
                <tr class="bg-gray-50/80 border-b border-gray-100">
                  <th class="px-6 py-4 text-sm font-semibold text-gray-900 uppercase tracking-wider whitespace-nowrap border-r border-gray-100">Web</th>
                  <th class="px-6 py-4 text-sm font-semibold text-gray-900 uppercase tracking-wider whitespace-nowrap border-r border-gray-100">Flange</th>
                  <th class="px-6 py-4 text-sm font-semibold text-gray-900 uppercase tracking-wider whitespace-nowrap border-r border-gray-100">Sectional Weight</th>
                  <th class="px-6 py-4 text-sm font-semibold text-gray-900 uppercase tracking-wider whitespace-nowrap">Length</th>
                </tr>
              </thead>
              <tbody class="divide-y divide-gray-100">
                <tr class="hover:bg-gray-50/50 transition-colors duration-200 group">
                  <td class="px-6 py-4 text-gray-700 whitespace-nowrap border-r border-gray-100">up to 200 mm &plusmn; 2.5 mm</td>
                  <td class="px-6 py-4 text-gray-700 whitespace-nowrap border-r border-gray-100">upto 100 mm &plusmn; 2 mm</td>
                  <td class="px-6 py-4 text-gray-700 whitespace-nowrap border-r border-gray-100">&plusmn; 2.5 %</td>
                  <td class="px-6 py-4 text-gray-700 whitespace-nowrap">For fixed length : &plusmn; 100 mm</td>
                </tr>
                <tr class="hover:bg-gray-50/50 transition-colors duration-200 group">
                  <td class="px-6 py-4 text-gray-700 whitespace-nowrap border-r border-gray-100">above 200 mm &plusmn; 3 mm</td>
                  <td class="px-6 py-4 text-gray-500 whitespace-nowrap border-r border-gray-100 text-center">-</td>
                  <td class="px-6 py-4 text-gray-500 whitespace-nowrap border-r border-gray-100 text-center">-</td>
                  <td class="px-6 py-4 text-gray-500 whitespace-nowrap text-center">-</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>

        <!-- Additional Text and CTA -->
        <div class="bg-red-50/50 border border-red-100 rounded-2xl p-8 md:p-10 text-center fade-up" style="transition-delay: 0.4s;">
          <div class="inline-flex items-center justify-center w-16 h-16 rounded-full bg-red-100 text-red-600 mb-6 shadow-sm">
             <!-- Using an inline SVG for better reliability across contexts since icon path might not exist -->
             <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
               <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
               <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
             </svg>
          </div>
          <p class="text-gray-700 text-lg md:text-xl leading-relaxed mb-8 max-w-4xl mx-auto">
            We can collaborate and develop specific sizes in any section for a feasible quantity of order in <span class="font-semibold text-gray-900 border-b-2 border-red-200 pb-1">Mild Steel, High Tensile, En 8 / En 8D / EN 9 / EN 16</span> material.
          </p>
          <a href="customize-products.php" class="inline-flex items-center justify-center px-8 py-4 text-base font-semibold text-white bg-red-600 rounded-xl hover:bg-red-700 transition-all duration-300 hover:shadow-lg hover:-translate-y-1 focus:ring-4 focus:ring-red-100 whitespace-nowrap">
            Contact Us for Custom Orders
            <svg class="w-5 h-5 ml-2 -mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
          </a>
        </div>
        
      </div>
    </section>
  </main>

  <!-- footer section -->
  <?php include "includes/footer.php"; ?>
  <script src="Js/Home-slider.js"></script>
  <script src="Js/Mobile-navbar.js"></script>
  <script src="Js/Animation.js"></script>
  <script src="Js/progressbar-script.js"></script>
  <script src="Js/bottom-up-arrow-script.js"></script>


</body>

</html>