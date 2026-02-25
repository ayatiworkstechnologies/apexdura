<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>MS Square Bars</title>
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
        MS Square Bars
        </span>
      </div>
    </div>
    

    <!-- Header Content Overlay -->
    <?php include "includes/header.php"; ?>
  </header>

  <main>
   
<section class="py-16 md:py-24 bg-gray-50/50">
  <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-7xl">

    <!-- Section Heading -->
    <div class="text-center mb-12 fade-up">
      <h2 class="text-3xl md:text-5xl font-bold text-gray-900 mb-4">
        MS Square Bars <span class="text-red-600">Specifications</span>
      </h2>
      <p class="text-gray-600 max-w-3xl mx-auto text-lg mb-4">
        Apex Steel supplies a wide range of Mild Steel (MS) Square Bars. MS Square Bars are used in cranes gantry, bullock carts axles, conveyors, truck trailers and tippers, bright bars, anchor bolts and many more engineering industries.
      </p>
      <p class="text-red-600 font-semibold text-lg md:text-xl">
        MS Square Bars : 10mm to 56 mm
      </p>
    </div>

    <!-- Sizes & Weights Table -->
    <div class="bg-white rounded-2xl max-w-2xl mx-auto shadow-[0_8px_30px_rgb(0,0,0,0.04)] overflow-hidden border border-gray-400 fade-up mb-12">
      <div class="overflow-x-auto">
        <table class="w-full text-left border-collapse">
          <thead>
            <tr class="bg-gray-200/80 border-b border-gray-400">
              <th rowspan="2" class="px-6 py-4 text-sm font-bold text-red-600 uppercase tracking-wider whitespace-nowrap border-r border-gray-400 align-middle">
                Size in mm
              </th>
              <th colspan="2" class="px-6 py-3 text-sm font-bold text-red-600 uppercase tracking-wider text-center border-b border-gray-400">
                Average Weight
              </th>
            </tr>
            <tr class="bg-gray-200/80 border-b border-gray-400">
              <th class="px-6 py-3 text-sm font-bold text-red-600 uppercase tracking-wider text-center border-r border-gray-400">
                KG / MTR
              </th>
              <th class="px-6 py-3 text-sm font-bold text-red-600 uppercase tracking-wider text-center">
                KG / FT
              </th>
            </tr>
          </thead>

          <tbody class="divide-y divide-gray-100">
            <?php
            $ms_square_bars = [
              ['10 x 10', 0.8, 0.2],
              ['12 x 12', 1.1, 0.3],
              ['14 x 14', 1.5, 0.5],
              ['16 x 16', 2, 0.6],
              ['17 x 17', 2.27, 0.69],
              ['20 x 20', 3.14, 1],
              ['25 x 25', 4.9, 1.5],
              ['32 x 32', 8, 2.4],
              ['40 x 40', 12.6, 3.8],
              ['42 x 42', 13.85, 4.22],
              ['50 x 50', 19.6, 6],
              ['53 x 53', 22.05, 6.72],
              ['56 x 56', 24.6, 7.5],
              ['63 x 63', 31.2, 9.5]
            ];
            foreach ($ms_square_bars as $row) {
              echo '<tr class="hover:bg-gray-50/50 transition-colors duration-200">
                <td class="px-6 py-3 font-medium text-gray-900 border-r border-gray-400">' . $row[0] . '</td>
                <td class="px-6 py-3 text-center border-r border-gray-400">' . $row[1] . '</td>
                <td class="px-6 py-3 text-center">' . $row[2] . '</td>
              </tr>';
            }
            ?>
          </tbody>
        </table>
      </div>
    </div>

    <!-- Rolling Tolerances -->
    <h3 class="text-2xl md:text-3xl font-bold text-gray-900 mb-6 text-center">
      Rolling Tolerances
    </h3>

    <div class="bg-white rounded-2xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] overflow-hidden border border-gray-400 fade-up mb-12">
      <div class="overflow-x-auto">
        <table class="w-full text-left border-collapse">
          <thead>
            <tr class="bg-gray-200/80 border-b border-gray-400">
              <th class="px-6 py-4 text-sm font-bold text-red-600 uppercase border-r border-gray-400">
                Size
              </th>
              <th class="px-6 py-4 text-sm font-bold text-red-600 uppercase border-r border-gray-400">
                Out of squareness
              </th>
              <th class="px-6 py-4 text-sm font-bold text-red-600 uppercase border-r border-gray-400">
                Weight
              </th>
              <th class="px-6 py-4 text-sm font-bold text-red-600 uppercase">
                Length
              </th>
            </tr>
          </thead>

          <tbody class="divide-y divide-gray-100">
            <tr class="hover:bg-gray-50/50 transition-colors duration-200">
              <td class="px-6 py-4 border-r border-gray-400 whitespace-nowrap">
                Up to 25 mm: &plusmn; 0.5 mm
              </td>
              <td class="px-6 py-4 border-r border-gray-400" rowspan="6">
                &plusmn; 75% of total tolerance specified on the size.
              </td>
              <td class="px-6 py-4 border-r border-gray-400 align-top" rowspan="6">
                <div class="space-y-2">
                  <p>10 mm to 16 mm: &plusmn; 5%</p>
                  <p>16 mm and above: &plusmn; 3%</p>
                </div>
              </td>
              <td class="px-6 py-4 align-top" rowspan="6">
                For fixed length: &plusmn; 100 mm
              </td>
            </tr>

            <tr class="hover:bg-gray-50/50 transition-colors duration-200">
              <td class="px-6 py-4 border-r border-gray-400 whitespace-nowrap">
                25 mm to 35 mm: &plusmn; 0.6 mm
              </td>
            </tr>

            <tr class="hover:bg-gray-50/50 transition-colors duration-200">
              <td class="px-6 py-4 border-r border-gray-400 whitespace-nowrap">
                35 mm to 50 mm: &plusmn; 0.8 mm
              </td>
            </tr>

            <tr class="hover:bg-gray-50/50 transition-colors duration-200">
              <td class="px-6 py-4 border-r border-gray-400 whitespace-nowrap">
                50 mm to 80 mm: &plusmn; 1 mm
              </td>
            </tr>

            <tr class="hover:bg-gray-50/50 transition-colors duration-200">
              <td class="px-6 py-4 border-r border-gray-400 whitespace-nowrap">
                80 mm to 100 mm: &plusmn; 1.3 mm
              </td>
            </tr>

            <tr class="hover:bg-gray-50/50 transition-colors duration-200">
              <td class="px-6 py-4 border-r border-gray-400 whitespace-nowrap">
                100 mm and above: &plusmn; 1.6% of side width.
              </td>
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