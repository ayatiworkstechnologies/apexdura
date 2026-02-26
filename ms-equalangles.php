<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>MS Equal Angles</title>
  <link rel="icon" href="Apex-icons/favicon.png" />
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
        MS Equal Angles
        </span>
      </div>
    </div>

    <!-- Header Content Overlay -->
    <?php include "includes/header.php"; ?>
  </header>

  <main>
    <!-- MS Equal & Unequal Angles Specifications Section -->
    <section class="py-16 md:py-24 bg-gray-50/50">
      <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-7xl">
        <!-- Section Heading -->
        <div class="text-center mb-12 fade-up">
          <h2 class="text-3xl md:text-5xl font-bold text-gray-900 mb-4">MS Angles <span class="text-red-600">Specifications</span></h2>
          <p class="text-gray-600 max-w-2xl mx-auto text-lg mb-2">
            Explore our comprehensive range of high-quality Mild Steel (MS) Equal and Unequal Angles, designed for structural support and industrial applications.
          </p>
          <p class="text-red-600 font-semibold text-lg md:text-xl">
            MS Equal Angles: 25 x 25 x 3mm to 110 x 110 x 12mm
          </p>
        </div>

        <!-- MS Equal Angles Table -->
        <div class="bg-white rounded-2xl max-w-2xl mx-auto shadow-[0_8px_30px_rgb(0,0,0,0.04)] overflow-hidden border border-gray-400 fade-up mb-12" style="transition-delay: 0.1s;">
          <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">
              <thead>
                <tr class="bg-gray-200/80 border-b border-gray-400">
                  <th rowspan="2" class="px-6 py-4 text-sm font-bold text-red-600 uppercase tracking-wider whitespace-nowrap border-r border-gray-400 align-middle">Size in mm</th>
                  <th colspan="2" class="px-6 py-3 text-sm font-bold text-red-600 uppercase tracking-wider text-center border-b border-gray-400">Average Weight</th>
                </tr>
                <tr class="bg-gray-200/80 border-b border-gray-400">
                  <th class="px-6 py-3 text-sm font-bold text-red-600 uppercase tracking-wider text-center border-r border-gray-400">KG / MTR</th>
                  <th class="px-6 py-3 text-sm font-bold text-red-600 uppercase tracking-wider text-center">KG / FT</th>
                </tr>
              </thead>
              <tbody class="divide-y divide-gray-100">
                <!-- Data Rows -->
                <tr class="hover:bg-gray-50/50 transition-colors duration-200 group"><td class="px-6 py-3 whitespace-nowrap font-medium text-gray-900 border-r border-gray-400">25 x 25 x 3</td><td class="px-6 py-3 text-gray-600 text-center border-r border-gray-400">1.1</td><td class="px-6 py-3 text-gray-600 text-center">0.3</td></tr>
                <tr class="hover:bg-gray-50/50 transition-colors duration-200 group"><td class="px-6 py-3 whitespace-nowrap font-medium text-gray-900 border-r border-gray-400">25 x 25 x 4.5</td><td class="px-6 py-3 text-gray-600 text-center border-r border-gray-400">1.6</td><td class="px-6 py-3 text-gray-600 text-center">0.49</td></tr>
                <tr class="hover:bg-gray-50/50 transition-colors duration-200 group"><td class="px-6 py-3 whitespace-nowrap font-medium text-gray-900 border-r border-gray-400">25 x 25 x 5</td><td class="px-6 py-3 text-gray-600 text-center border-r border-gray-400">1.8</td><td class="px-6 py-3 text-gray-600 text-center">0.5</td></tr>
                <tr class="hover:bg-gray-50/50 transition-colors duration-200 group"><td class="px-6 py-3 whitespace-nowrap font-medium text-gray-900 border-r border-gray-400">25 x 25 x 6</td><td class="px-6 py-3 text-gray-600 text-center border-r border-gray-400">2.1</td><td class="px-6 py-3 text-gray-600 text-center">0.6</td></tr>
                <tr class="bg-gray-50/30 hover:bg-gray-50/50 transition-colors duration-200 group"><td class="px-6 py-3 whitespace-nowrap font-medium text-gray-900 border-r border-gray-400">30 x 30 x 3</td><td class="px-6 py-3 text-gray-600 text-center border-r border-gray-400">1.4</td><td class="px-6 py-3 text-gray-600 text-center">0.4</td></tr>
                <tr class="hover:bg-gray-50/50 transition-colors duration-200 group"><td class="px-6 py-3 whitespace-nowrap font-medium text-gray-900 border-r border-gray-400">35 x 35 x 3</td><td class="px-6 py-3 text-gray-600 text-center border-r border-gray-400">1.6</td><td class="px-6 py-3 text-gray-600 text-center">0.5</td></tr>
                <tr class="hover:bg-gray-50/50 transition-colors duration-200 group"><td class="px-6 py-3 whitespace-nowrap font-medium text-gray-900 border-r border-gray-400">35 x 35 x 4</td><td class="px-6 py-3 text-gray-600 text-center border-r border-gray-400">2.1</td><td class="px-6 py-3 text-gray-600 text-center">0.6</td></tr>
                <tr class="hover:bg-gray-50/50 transition-colors duration-200 group"><td class="px-6 py-3 whitespace-nowrap font-medium text-gray-900 border-r border-gray-400">35 x 35 x 5</td><td class="px-6 py-3 text-gray-600 text-center border-r border-gray-400">2.6</td><td class="px-6 py-3 text-gray-600 text-center">0.8</td></tr>
                <tr class="bg-gray-50/30 hover:bg-gray-50/50 transition-colors duration-200 group"><td class="px-6 py-3 whitespace-nowrap font-medium text-gray-900 border-r border-gray-400">37 x 37 x 3</td><td class="px-6 py-3 text-gray-600 text-center border-r border-gray-400">1.7</td><td class="px-6 py-3 text-gray-600 text-center">0.5</td></tr>
                <tr class="hover:bg-gray-50/50 transition-colors duration-200 group"><td class="px-6 py-3 whitespace-nowrap font-medium text-gray-900 border-r border-gray-400">40 X 40 X 3</td><td class="px-6 py-3 text-gray-600 text-center border-r border-gray-400">1.8</td><td class="px-6 py-3 text-gray-600 text-center">0.055</td></tr>
                <tr class="hover:bg-gray-50/50 transition-colors duration-200 group"><td class="px-6 py-3 whitespace-nowrap font-medium text-gray-900 border-r border-gray-400">40 x 40 x 4</td><td class="px-6 py-3 text-gray-600 text-center border-r border-gray-400">2.4</td><td class="px-6 py-3 text-gray-600 text-center">0.7</td></tr>
                <tr class="hover:bg-gray-50/50 transition-colors duration-200 group"><td class="px-6 py-3 whitespace-nowrap font-medium text-gray-900 border-r border-gray-400">40 x 40 x 5</td><td class="px-6 py-3 text-gray-600 text-center border-r border-gray-400">3</td><td class="px-6 py-3 text-gray-600 text-center">0.9</td></tr>
                <tr class="hover:bg-gray-50/50 transition-colors duration-200 group"><td class="px-6 py-3 whitespace-nowrap font-medium text-gray-900 border-r border-gray-400">40 x 40 x 6</td><td class="px-6 py-3 text-gray-600 text-center border-r border-gray-400">3.5</td><td class="px-6 py-3 text-gray-600 text-center">1.1</td></tr>
                <tr class="bg-gray-50/30 hover:bg-gray-50/50 transition-colors duration-200 group"><td class="px-6 py-3 whitespace-nowrap font-medium text-gray-900 border-r border-gray-400">45 x 45 x 4</td><td class="px-6 py-3 text-gray-600 text-center border-r border-gray-400">2.7</td><td class="px-6 py-3 text-gray-600 text-center">0.8</td></tr>
                <tr class="bg-gray-50/30 hover:bg-gray-50/50 transition-colors duration-200 group"><td class="px-6 py-3 whitespace-nowrap font-medium text-gray-900 border-r border-gray-400">45 x 45 x 5</td><td class="px-6 py-3 text-gray-600 text-center border-r border-gray-400">3.4</td><td class="px-6 py-3 text-gray-600 text-center">1</td></tr>
                <tr class="bg-gray-50/30 hover:bg-gray-50/50 transition-colors duration-200 group"><td class="px-6 py-3 whitespace-nowrap font-medium text-gray-900 border-r border-gray-400">45 x 45 x 6</td><td class="px-6 py-3 text-gray-600 text-center border-r border-gray-400">4</td><td class="px-6 py-3 text-gray-600 text-center">1.22</td></tr>
                <tr class="hover:bg-gray-50/50 transition-colors duration-200 group"><td class="px-6 py-3 whitespace-nowrap font-medium text-gray-900 border-r border-gray-400">50 x 50 x 3</td><td class="px-6 py-3 text-gray-600 text-center border-r border-gray-400">2.3</td><td class="px-6 py-3 text-gray-600 text-center">0.7</td></tr>
                <tr class="hover:bg-gray-50/50 transition-colors duration-200 group"><td class="px-6 py-3 whitespace-nowrap font-medium text-gray-900 border-r border-gray-400">50 x 50 x 4</td><td class="px-6 py-3 text-gray-600 text-center border-r border-gray-400">3</td><td class="px-6 py-3 text-gray-600 text-center">0.9</td></tr>
                <tr class="hover:bg-gray-50/50 transition-colors duration-200 group"><td class="px-6 py-3 whitespace-nowrap font-medium text-gray-900 border-r border-gray-400">50 x 50 x 5</td><td class="px-6 py-3 text-gray-600 text-center border-r border-gray-400">3.8</td><td class="px-6 py-3 text-gray-600 text-center">1.2</td></tr>
                <tr class="hover:bg-gray-50/50 transition-colors duration-200 group"><td class="px-6 py-3 whitespace-nowrap font-medium text-gray-900 border-r border-gray-400">50 x 50 x 6</td><td class="px-6 py-3 text-gray-600 text-center border-r border-gray-400">4.5</td><td class="px-6 py-3 text-gray-600 text-center">1.4</td></tr>
                <tr class="hover:bg-gray-50/50 transition-colors duration-200 group"><td class="px-6 py-3 whitespace-nowrap font-medium text-gray-900 border-r border-gray-400">50 x 50 x 8</td><td class="px-6 py-3 text-gray-600 text-center border-r border-gray-400">5.84</td><td class="px-6 py-3 text-gray-600 text-center">1.78</td></tr>
                <tr class="bg-gray-50/30 hover:bg-gray-50/50 transition-colors duration-200 group"><td class="px-6 py-3 whitespace-nowrap font-medium text-gray-900 border-r border-gray-400">55 x 55 x 4</td><td class="px-6 py-3 text-gray-600 text-center border-r border-gray-400">3.3</td><td class="px-6 py-3 text-gray-600 text-center">1</td></tr>
                <tr class="bg-gray-50/30 hover:bg-gray-50/50 transition-colors duration-200 group"><td class="px-6 py-3 whitespace-nowrap font-medium text-gray-900 border-r border-gray-400">55 x 55 x 5</td><td class="px-6 py-3 text-gray-600 text-center border-r border-gray-400">4.1</td><td class="px-6 py-3 text-gray-600 text-center">1.3</td></tr>
                <tr class="hover:bg-gray-50/50 transition-colors duration-200 group"><td class="px-6 py-3 whitespace-nowrap font-medium text-gray-900 border-r border-gray-400">60 x 60 x 4</td><td class="px-6 py-3 text-gray-600 text-center border-r border-gray-400">3.7</td><td class="px-6 py-3 text-gray-600 text-center">1.1</td></tr>
                <tr class="hover:bg-gray-50/50 transition-colors duration-200 group"><td class="px-6 py-3 whitespace-nowrap font-medium text-gray-900 border-r border-gray-400">60 x 60 x 5</td><td class="px-6 py-3 text-gray-600 text-center border-r border-gray-400">4.5</td><td class="px-6 py-3 text-gray-600 text-center">1.4</td></tr>
                <tr class="hover:bg-gray-50/50 transition-colors duration-200 group"><td class="px-6 py-3 whitespace-nowrap font-medium text-gray-900 border-r border-gray-400">60 x 60 x 6</td><td class="px-6 py-3 text-gray-600 text-center border-r border-gray-400">5.4</td><td class="px-6 py-3 text-gray-600 text-center">1.64</td></tr>
                <tr class="bg-gray-50/30 hover:bg-gray-50/50 transition-colors duration-200 group"><td class="px-6 py-3 whitespace-nowrap font-medium text-gray-900 border-r border-gray-400">65 x 65 x 4</td><td class="px-6 py-3 text-gray-600 text-center border-r border-gray-400">4</td><td class="px-6 py-3 text-gray-600 text-center">1.2</td></tr>
                <tr class="bg-gray-50/30 hover:bg-gray-50/50 transition-colors duration-200 group"><td class="px-6 py-3 whitespace-nowrap font-medium text-gray-900 border-r border-gray-400">65 x 65 x 5</td><td class="px-6 py-3 text-gray-600 text-center border-r border-gray-400">4.9</td><td class="px-6 py-3 text-gray-600 text-center">1.5</td></tr>
                <tr class="bg-gray-50/30 hover:bg-gray-50/50 transition-colors duration-200 group"><td class="px-6 py-3 whitespace-nowrap font-medium text-gray-900 border-r border-gray-400">65 x 65 x 6</td><td class="px-6 py-3 text-gray-600 text-center border-r border-gray-400">5.8</td><td class="px-6 py-3 text-gray-600 text-center">1.8</td></tr>
                <tr class="bg-gray-50/30 hover:bg-gray-50/50 transition-colors duration-200 group"><td class="px-6 py-3 whitespace-nowrap font-medium text-gray-900 border-r border-gray-400">65 x 65 x 8</td><td class="px-6 py-3 text-gray-600 text-center border-r border-gray-400">7.7</td><td class="px-6 py-3 text-gray-600 text-center">2.4</td></tr>
                <tr class="bg-gray-50/30 hover:bg-gray-50/50 transition-colors duration-200 group"><td class="px-6 py-3 whitespace-nowrap font-medium text-gray-900 border-r border-gray-400">65 x 65 x 10</td><td class="px-6 py-3 text-gray-600 text-center border-r border-gray-400">9.4</td><td class="px-6 py-3 text-gray-600 text-center">2.9</td></tr>
                <tr class="bg-gray-50/30 hover:bg-gray-50/50 transition-colors duration-200 group"><td class="px-6 py-3 whitespace-nowrap font-medium text-gray-900 border-r border-gray-400">65 x 65 x 12</td><td class="px-6 py-3 text-gray-600 text-center border-r border-gray-400">11.8</td><td class="px-6 py-3 text-gray-600 text-center">3.6</td></tr>
                <tr class="hover:bg-gray-50/50 transition-colors duration-200 group"><td class="px-6 py-3 whitespace-nowrap font-medium text-gray-900 border-r border-gray-400">70 x 70 x 7</td><td class="px-6 py-3 text-gray-600 text-center border-r border-gray-400">7.38</td><td class="px-6 py-3 text-gray-600 text-center">2.25</td></tr>
                <tr class="bg-gray-50/30 hover:bg-gray-50/50 transition-colors duration-200 group"><td class="px-6 py-3 whitespace-nowrap font-medium text-gray-900 border-r border-gray-400">75 x 75 x 5</td><td class="px-6 py-3 text-gray-600 text-center border-r border-gray-400">5.7</td><td class="px-6 py-3 text-gray-600 text-center">1.7</td></tr>
                <tr class="bg-gray-50/30 hover:bg-gray-50/50 transition-colors duration-200 group"><td class="px-6 py-3 whitespace-nowrap font-medium text-gray-900 border-r border-gray-400">75 x 75 x 6</td><td class="px-6 py-3 text-gray-600 text-center border-r border-gray-400">6.8</td><td class="px-6 py-3 text-gray-600 text-center">2.1</td></tr>
                <tr class="bg-gray-50/30 hover:bg-gray-50/50 transition-colors duration-200 group"><td class="px-6 py-3 whitespace-nowrap font-medium text-gray-900 border-r border-gray-400">75 x 75 x 8</td><td class="px-6 py-3 text-gray-600 text-center border-r border-gray-400">8.9</td><td class="px-6 py-3 text-gray-600 text-center">2.7</td></tr>
                <tr class="bg-gray-50/30 hover:bg-gray-50/50 transition-colors duration-200 group"><td class="px-6 py-3 whitespace-nowrap font-medium text-gray-900 border-r border-gray-400">75 x 75 x 10</td><td class="px-6 py-3 text-gray-600 text-center border-r border-gray-400">11</td><td class="px-6 py-3 text-gray-600 text-center">3.4</td></tr>
                <tr class="bg-gray-50/30 hover:bg-gray-50/50 transition-colors duration-200 group"><td class="px-6 py-3 whitespace-nowrap font-medium text-gray-900 border-r border-gray-400">75 x 75 x 12</td><td class="px-6 py-3 text-gray-600 text-center border-r border-gray-400">13.1</td><td class="px-6 py-3 text-gray-600 text-center">4</td></tr>
                <tr class="hover:bg-gray-50/50 transition-colors duration-200 group"><td class="px-6 py-3 whitespace-nowrap font-medium text-gray-900 border-r border-gray-400">80 x 80 x 6</td><td class="px-6 py-3 text-gray-600 text-center border-r border-gray-400">7.2</td><td class="px-6 py-3 text-gray-600 text-center">2.19</td></tr>
                <tr class="hover:bg-gray-50/50 transition-colors duration-200 group"><td class="px-6 py-3 whitespace-nowrap font-medium text-gray-900 border-r border-gray-400">80 x 80 x 7</td><td class="px-6 py-3 text-gray-600 text-center border-r border-gray-400">7.9</td><td class="px-6 py-3 text-gray-600 text-center">2.9</td></tr>
                <tr class="hover:bg-gray-50/50 transition-colors duration-200 group"><td class="px-6 py-3 whitespace-nowrap font-medium text-gray-900 border-r border-gray-400">80 x 80 x 8</td><td class="px-6 py-3 text-gray-600 text-center border-r border-gray-400">9.6</td><td class="px-6 py-3 text-gray-600 text-center">2.9</td></tr>
                <tr class="bg-gray-50/30 hover:bg-gray-50/50 transition-colors duration-200 group"><td class="px-6 py-3 whitespace-nowrap font-medium text-gray-900 border-r border-gray-400">90 x 90 x 6</td><td class="px-6 py-3 text-gray-600 text-center border-r border-gray-400">8.2</td><td class="px-6 py-3 text-gray-600 text-center">2.5</td></tr>
                <tr class="bg-gray-50/30 hover:bg-gray-50/50 transition-colors duration-200 group"><td class="px-6 py-3 whitespace-nowrap font-medium text-gray-900 border-r border-gray-400">90 x 90 x 7</td><td class="px-6 py-3 text-gray-600 text-center border-r border-gray-400">9.5</td><td class="px-6 py-3 text-gray-600 text-center">2.9</td></tr>
                <tr class="bg-gray-50/30 hover:bg-gray-50/50 transition-colors duration-200 group"><td class="px-6 py-3 whitespace-nowrap font-medium text-gray-900 border-r border-gray-400">90 x 90 x 8</td><td class="px-6 py-3 text-gray-600 text-center border-r border-gray-400">10.8</td><td class="px-6 py-3 text-gray-600 text-center">3.1</td></tr>
                <tr class="bg-gray-50/30 hover:bg-gray-50/50 transition-colors duration-200 group"><td class="px-6 py-3 whitespace-nowrap font-medium text-gray-900 border-r border-gray-400">90 x 90 x 10</td><td class="px-6 py-3 text-gray-600 text-center border-r border-gray-400">13.4</td><td class="px-6 py-3 text-gray-600 text-center">4.1</td></tr>
                <tr class="hover:bg-gray-50/50 transition-colors duration-200 group"><td class="px-6 py-3 whitespace-nowrap font-medium text-gray-900 border-r border-gray-400">98 x 98 x 9.5</td><td class="px-6 py-3 text-gray-600 text-center border-r border-gray-400">13.09</td><td class="px-6 py-3 text-gray-600 text-center">3.99</td></tr>
                <tr class="bg-gray-50/30 hover:bg-gray-50/50 transition-colors duration-200 group"><td class="px-6 py-3 whitespace-nowrap font-medium text-gray-900 border-r border-gray-400">100 x 100 x 6</td><td class="px-6 py-3 text-gray-600 text-center border-r border-gray-400">9.2</td><td class="px-6 py-3 text-gray-600 text-center">2.8</td></tr>
                <tr class="bg-gray-50/30 hover:bg-gray-50/50 transition-colors duration-200 group"><td class="px-6 py-3 whitespace-nowrap font-medium text-gray-900 border-r border-gray-400">100 x 100 x7</td><td class="px-6 py-3 text-gray-600 text-center border-r border-gray-400">10.7</td><td class="px-6 py-3 text-gray-600 text-center">3.3</td></tr>
                <tr class="bg-gray-50/30 hover:bg-gray-50/50 transition-colors duration-200 group"><td class="px-6 py-3 whitespace-nowrap font-medium text-gray-900 border-r border-gray-400">100 x 100 x 8</td><td class="px-6 py-3 text-gray-600 text-center border-r border-gray-400">12.1</td><td class="px-6 py-3 text-gray-600 text-center">3.7</td></tr>
                <tr class="bg-gray-50/30 hover:bg-gray-50/50 transition-colors duration-200 group"><td class="px-6 py-3 whitespace-nowrap font-medium text-gray-900 border-r border-gray-400">100 x 100 x 10</td><td class="px-6 py-3 text-gray-600 text-center border-r border-gray-400">14.9</td><td class="px-6 py-3 text-gray-600 text-center">4.5</td></tr>
                <tr class="bg-gray-50/30 hover:bg-gray-50/50 transition-colors duration-200 group"><td class="px-6 py-3 whitespace-nowrap font-medium text-gray-900 border-r border-gray-400">100 x 100 x 12</td><td class="px-6 py-3 text-gray-600 text-center border-r border-gray-400">17.7</td><td class="px-6 py-3 text-gray-600 text-center">5.4</td></tr>
                <tr class="hover:bg-gray-50/50 transition-colors duration-200 group"><td class="px-6 py-3 whitespace-nowrap font-medium text-gray-900 border-r border-gray-400">110 x 110 x 8</td><td class="px-6 py-3 text-gray-600 text-center border-r border-gray-400">13.4</td><td class="px-6 py-3 text-gray-600 text-center">4.08</td></tr>
                <tr class="hover:bg-gray-50/50 transition-colors duration-200 group"><td class="px-6 py-3 whitespace-nowrap font-medium text-gray-900 border-r border-gray-400">110 x 110 x10</td><td class="px-6 py-3 text-gray-600 text-center border-r border-gray-400">16.5</td><td class="px-6 py-3 text-gray-600 text-center">5.03</td></tr>
                <tr class="hover:bg-gray-50/50 transition-colors duration-200 group"><td class="px-6 py-3 whitespace-nowrap font-medium text-gray-900 border-r border-gray-400">110 x 110 x 12</td><td class="px-6 py-3 text-gray-600 text-center border-r border-gray-400">19.6</td><td class="px-6 py-3 text-gray-600 text-center">5.97</td></tr>
              </tbody>
            </table>
          </div>
        </div>
        
        <!-- MS Unequal Angles Info & Table -->
        <div class="text-center mt-16 mb-8 fade-up" style="transition-delay: 0.1s;">
          <p class="text-red-600 font-semibold text-lg md:text-xl">
            MS Unequal Angles: 45 x 30 x 4/5
          </p>
        </div>

        <div class="bg-white rounded-2xl  shadow-[0_8px_30px_rgb(0,0,0,0.04)] overflow-hidden border border-gray-400 fade-up mb-12 max-w-3xl mx-auto" style="transition-delay: 0.2s;">
          <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">
              <thead>
                <tr class="bg-gray-200/80 border-b border-gray-400">
                  <th rowspan="2" class="px-6 py-4 text-sm font-bold text-red-600 uppercase tracking-wider whitespace-nowrap border-r border-gray-400 align-middle">Size in mm</th>
                  <th colspan="2" class="px-6 py-3 text-sm font-bold text-red-600 uppercase tracking-wider text-center border-b border-gray-400">Average Weight</th>
                </tr>
                <tr class="bg-gray-200/80 border-b border-gray-400">
                  <th class="px-6 py-3 text-sm font-bold text-red-600 uppercase tracking-wider text-center border-r border-gray-400">KG / MTR</th>
                  <th class="px-6 py-3 text-sm font-bold text-red-600 uppercase tracking-wider text-center">KG / FT</th>
                </tr>
              </thead>
              <tbody class="divide-y divide-gray-100">
                <tr class="hover:bg-gray-50/50 transition-colors duration-200 group">
                  <td class="px-6 py-4 whitespace-nowrap font-medium text-gray-900 border-r border-gray-400">45 x 30 x 4</td>
                  <td class="px-6 py-4 text-gray-600 text-center border-r border-gray-400">2.23</td>
                  <td class="px-6 py-4 text-gray-600 text-center">0.68</td>
                </tr>
                <tr class="hover:bg-gray-50/50 transition-colors duration-200 group">
                  <td class="px-6 py-4 whitespace-nowrap font-medium text-gray-900 border-r border-gray-400">45 x 30 x 5</td>
                  <td class="px-6 py-4 text-gray-600 text-center border-r border-gray-400">2.75</td>
                  <td class="px-6 py-4 text-gray-600 text-center">0.8</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>

        <!-- Rolling Tolerances Table -->
        <h3 class="text-2xl md:text-3xl font-bold text-gray-900 mt-16 mb-6 text-center fade-up" style="transition-delay: 0.3s;">Rolling Tolerances</h3>
        <div class="bg-white rounded-2xl  shadow-[0_8px_30px_rgb(0,0,0,0.04)] overflow-hidden border border-gray-400 fade-up mb-12 max-w-4xl mx-auto" style="transition-delay: 0.4s;">
          <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">
              <thead>
                <tr class="bg-gray-200/80 border-b border-gray-400">
                  <th class="px-6 py-4 text-sm font-bold text-red-600 uppercase tracking-wider whitespace-nowrap border-r border-gray-400">Leg Length</th>
                  <th class="px-6 py-4 text-sm font-bold text-red-600 uppercase tracking-wider whitespace-nowrap border-r border-gray-400">Sectional Weight</th>
                  <th class="px-6 py-4 text-sm font-bold text-red-600 uppercase tracking-wider whitespace-nowrap">Length</th>
                </tr>
              </thead>
              <tbody class="divide-y divide-gray-100">
                <tr class="hover:bg-gray-50/50 transition-colors duration-200 group">
                  <td class="px-6 py-5 text-gray-700 whitespace-nowrap border-r border-gray-400">Up to 45 mm : &plusmn; 1.5 mm</td>
                  <td class="px-6 py-5 text-gray-700 whitespace-nowrap border-r border-gray-400">3 mm thickness : &plusmn; 5 %</td>
                  <td class="px-6 py-5 text-gray-700 whitespace-nowrap" rowspan="3" style="vertical-align: top;">For fixed length : &plusmn; 100 mm</td>
                </tr>
                <tr class="hover:bg-gray-50/50 transition-colors duration-200 group">
                  <td class="px-6 py-5 text-gray-700 whitespace-nowrap border-r border-gray-400">45 mm to 100 mm : &plusmn; 2 mm</td>
                  <td class="px-6 py-5 text-gray-700 whitespace-nowrap border-r border-gray-400">Over 3 mm thickness : +5 / -3 %</td>
                </tr>
                <tr class="hover:bg-gray-50/50 transition-colors duration-200 group">
                  <td class="px-6 py-5 text-gray-700 whitespace-nowrap border-r border-gray-400">above 100 mm : &plusmn; 2 %</td>
                  <td class="px-6 py-5 text-gray-500 whitespace-nowrap border-r border-gray-400">-</td>
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