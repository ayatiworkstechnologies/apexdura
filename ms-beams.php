<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>MS Beams</title>
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
    <div class="relative w-full pt-32 pb-8 bg-gray-50 overflow-hidden fade-up">
      <!-- Breadcrumb -->
      <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-7xl flex items-center gap-3">
        <!-- Home -->
        <a href="/" class="flex items-center gap-2 text-red-600 px-4 py-2 rounded-md text-sm font-medium transition hover:bg-gray-100">
          <!-- Home Icon -->
          <img src="Apex-icons/Home.png" alt="Home icon " class="w-4 h-4" />
          Home
        </a>

        <!-- Arrow -->
        <span class="text-gray-500 text-lg">›</span>

        <!-- About -->
        <span class="flex items-center gap-2 bg-red-600 text-white px-4 py-2 rounded-md text-sm font-medium shadow-md">
          <!-- User/About Icon -->
          <img src="Apex-icons/user-circle.png" alt="user icon " class="w-4 h-4" />
        MS Beams
        </span>
      </div>
    </div>

    <!-- Header Content Overlay -->
    <?php include "includes/header.php"; ?>
  </header>

  <main>
    <!-- MS Beams Specifications Section -->
    <section class="py-16 md:py-24 bg-gray-50/50">
      <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-7xl">
        <!-- Section Heading -->
        <div class="text-center mb-12 fade-up">
          <h2 class="text-3xl md:text-5xl font-bold text-gray-900 mb-4">MS Beams <span class="text-red-600">Specifications</span></h2>
          <p class="text-gray-600 max-w-2xl mx-auto text-lg mb-2">
            Explore our comprehensive range of high-quality Mild Steel (MS) Beams, designed for structural support and industrial applications.
          </p>
          <p class="text-red-600 font-semibold text-lg md:text-xl">
            MS Beams: 100 x 50mm to 200 x 100mm (Light Wt. / Med. Wt. / STD .Wt.)
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
                <tr class="hover:bg-gray-50/50 transition-colors duration-200 group"><td class="px-6 py-3 whitespace-nowrap font-medium text-gray-900 border-r border-gray-100">100 x 50 STD</td><td class="px-6 py-3 text-gray-600 text-center border-r border-gray-100">8.9</td><td class="px-6 py-3 text-gray-600 text-center">2.7</td></tr>
                <tr class="hover:bg-gray-50/50 transition-colors duration-200 group"><td class="px-6 py-3 whitespace-nowrap font-medium text-gray-900 border-r border-gray-100">100 x 50 MED</td><td class="px-6 py-3 text-gray-600 text-center border-r border-gray-100">7</td><td class="px-6 py-3 text-gray-600 text-center">2.1</td></tr>
                <tr class="hover:bg-gray-50/50 transition-colors duration-200 group"><td class="px-6 py-3 whitespace-nowrap font-medium text-gray-900 border-r border-gray-100">100 x 50 LIGHT</td><td class="px-6 py-3 text-gray-600 text-center border-r border-gray-100">5.3</td><td class="px-6 py-3 text-gray-600 text-center">1.6</td></tr>
                <tr class="bg-gray-50/30 hover:bg-gray-50/50 transition-colors duration-200 group"><td class="px-6 py-3 whitespace-nowrap font-medium text-gray-900 border-r border-gray-100">125 x 70 STD</td><td class="px-6 py-3 text-gray-600 text-center border-r border-gray-100">13.3</td><td class="px-6 py-3 text-gray-600 text-center">4.05</td></tr>
                <tr class="bg-gray-50/30 hover:bg-gray-50/50 transition-colors duration-200 group"><td class="px-6 py-3 whitespace-nowrap font-medium text-gray-900 border-r border-gray-100">125 x 70 MED</td><td class="px-6 py-3 text-gray-600 text-center border-r border-gray-100">11.5</td><td class="px-6 py-3 text-gray-600 text-center">3.5</td></tr>
                <tr class="bg-gray-50/30 hover:bg-gray-50/50 transition-colors duration-200 group"><td class="px-6 py-3 whitespace-nowrap font-medium text-gray-900 border-r border-gray-100">125 x 70 LIGHT</td><td class="px-6 py-3 text-gray-600 text-center border-r border-gray-100">9</td><td class="px-6 py-3 text-gray-600 text-center">2.7</td></tr>
                <tr class="hover:bg-gray-50/50 transition-colors duration-200 group"><td class="px-6 py-3 whitespace-nowrap font-medium text-gray-900 border-r border-gray-100">140 x 70</td><td class="px-6 py-3 text-gray-600 text-center border-r border-gray-100">24</td><td class="px-6 py-3 text-gray-600 text-center">7.31</td></tr>
                <tr class="bg-gray-50/30 hover:bg-gray-50/50 transition-colors duration-200 group"><td class="px-6 py-3 whitespace-nowrap font-medium text-gray-900 border-r border-gray-100">150 x 75 STD</td><td class="px-6 py-3 text-gray-600 text-center border-r border-gray-100">15</td><td class="px-6 py-3 text-gray-600 text-center">4.6</td></tr>
                <tr class="bg-gray-50/30 hover:bg-gray-50/50 transition-colors duration-200 group"><td class="px-6 py-3 whitespace-nowrap font-medium text-gray-900 border-r border-gray-100">150 x 75 LIGHT</td><td class="px-6 py-3 text-gray-600 text-center border-r border-gray-100">13.5</td><td class="px-6 py-3 text-gray-600 text-center">4.1</td></tr>
                <tr class="hover:bg-gray-50/50 transition-colors duration-200 group"><td class="px-6 py-3 whitespace-nowrap font-medium text-gray-900 border-r border-gray-100">175 x 85</td><td class="px-6 py-3 text-gray-600 text-center border-r border-gray-100">19.6</td><td class="px-6 py-3 text-gray-600 text-center">6</td></tr>
                <tr class="hover:bg-gray-50/50 transition-colors duration-200 group"><td class="px-6 py-3 whitespace-nowrap font-medium text-gray-900 border-r border-gray-100">200 x 100</td><td class="px-6 py-3 text-gray-600 text-center border-r border-gray-100">24.2</td><td class="px-6 py-3 text-gray-600 text-center">7.4</td></tr>
              </tbody>
            </table>
          </div>
        </div>

        <!-- Rolling Tolerances Table -->
        <h3 class="text-2xl md:text-3xl font-bold text-gray-900 mb-6 text-center fade-up" style="transition-delay: 0.2s;">Rolling Tolerances</h3>
        <div class="bg-white rounded-2xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] overflow-hidden border border-gray-100 fade-up mb-12 max-w-5xl mx-auto" style="transition-delay: 0.3s;">
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
                  <td class="px-6 py-4 text-gray-700 max-w-xs border-r border-gray-100 leading-relaxed">
                    up to 200 mm <span class="whitespace-nowrap font-medium">+3 mm / -2 mm</span><br/>
                    above 200 mm <span class="whitespace-nowrap font-medium">&plusmn; 3 mm</span>
                  </td>
                  <td class="px-6 py-0 p-0 border-r border-gray-100 align-top">
                    <table class="w-full h-full">
                       <tr class="border-b border-gray-100 border-dashed">
                          <td class="px-6 py-4 text-gray-700 whitespace-nowrap">up to 100 mm &plusmn; 2 mm</td>
                       </tr>
                       <tr class="border-b border-gray-100 border-dashed">
                          <td class="px-6 py-4 text-gray-700 whitespace-nowrap">100 to 125 mm &plusmn; 2.5 mm</td>
                       </tr>
                       <tr>
                          <td class="px-6 py-4 text-gray-700 whitespace-nowrap">125 to 250 mm &plusmn; 4 mm</td>
                       </tr>
                    </table>
                  </td>
                  <td class="px-6 py-4 text-gray-700 whitespace-nowrap border-r border-gray-100 align-top">&plusmn; 2.5 %</td>
                  <td class="px-6 py-4 text-gray-700 whitespace-nowrap align-top">For fixed length : &plusmn; 100 mm</td>
                </tr>
              </tbody>
            </table>
          </div>
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