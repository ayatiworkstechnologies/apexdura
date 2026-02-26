<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>MS Flat Bars</title>
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
          MS Flat Bars
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
        MS Flat Bars <span class="text-red-600">Specifications</span>
      </h2>
      <p class="text-gray-600 max-w-3xl mx-auto text-lg mb-4">
        Apex Steel supplies a wide range of high-quality Mild Steel (MS) Flat Bars used across multiple engineering and structural applications including gratings, cable trays, automobile components, scaffolding, base plates, shipbuilding, and fabrication industries.
      </p>
      <p class="text-red-600 font-semibold text-lg md:text-xl">
        MS Flats: Width 25 mm to 300 mm | Thickness 5 mm to 50 mm
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
            <tr class="hover:bg-gray-50/50 transition-colors duration-200">
              <td class="px-6 py-3 font-medium text-gray-900 border-r border-gray-400">20 x 4</td>
              <td class="px-6 py-3 text-center border-r border-gray-400">0.79</td>
              <td class="px-6 py-3 text-center">0.24</td>
            </tr>
            <tr class="hover:bg-gray-50/50 transition-colors duration-200">
              <td class="px-6 py-3 font-medium text-gray-900 border-r border-gray-400">20 x 5</td>
              <td class="px-6 py-3 text-center border-r border-gray-400">0.79</td>
              <td class="px-6 py-3 text-center">0.24</td>
            </tr>
            <tr class="hover:bg-gray-50/50 transition-colors duration-200">
              <td class="px-6 py-3 font-medium text-gray-900 border-r border-gray-400">21 x 6</td>
              <td class="px-6 py-3 text-center border-r border-gray-400">1</td>
              <td class="px-6 py-3 text-center">0.3</td>
            </tr>
            <tr class="hover:bg-gray-50/50 transition-colors duration-200">
              <td class="px-6 py-3 font-medium text-gray-900 border-r border-gray-400">25 x 3</td>
              <td class="px-6 py-3 text-center border-r border-gray-400">0.59</td>
              <td class="px-6 py-3 text-center">0.19</td>
            </tr>
            <tr class="hover:bg-gray-50/50 transition-colors duration-200">
              <td class="px-6 py-3 font-medium text-gray-900 border-r border-gray-400">25 x 4</td>
              <td class="px-6 py-3 text-center border-r border-gray-400">0.79</td>
              <td class="px-6 py-3 text-center">0.24</td>
            </tr>
            <tr class="hover:bg-gray-50/50 transition-colors duration-200">
              <td class="px-6 py-3 font-medium text-gray-900 border-r border-gray-400">25 x 5</td>
              <td class="px-6 py-3 text-center border-r border-gray-400">0.98</td>
              <td class="px-6 py-3 text-center">0.3</td>
            </tr>
            <tr class="hover:bg-gray-50/50 transition-colors duration-200">
              <td class="px-6 py-3 font-medium text-gray-900 border-r border-gray-400">25 x 6</td>
              <td class="px-6 py-3 text-center border-r border-gray-400">1.18</td>
              <td class="px-6 py-3 text-center">0.4</td>
            </tr>
            <tr class="hover:bg-gray-50/50 transition-colors duration-200">
              <td class="px-6 py-3 font-medium text-gray-900 border-r border-gray-400">25 x 8</td>
              <td class="px-6 py-3 text-center border-r border-gray-400">1.57</td>
              <td class="px-6 py-3 text-center">0.5</td>
            </tr>
            <tr class="hover:bg-gray-50/50 transition-colors duration-200">
              <td class="px-6 py-3 font-medium text-gray-900 border-r border-gray-400">25 x 10</td>
              <td class="px-6 py-3 text-center border-r border-gray-400">1.9</td>
              <td class="px-6 py-3 text-center">0.6</td>
            </tr>
            <tr class="hover:bg-gray-50/50 transition-colors duration-200">
              <td class="px-6 py-3 font-medium text-gray-900 border-r border-gray-400">25 x 12</td>
              <td class="px-6 py-3 text-center border-r border-gray-400">2.36</td>
              <td class="px-6 py-3 text-center">0.7</td>
            </tr>
            <tr class="hover:bg-gray-50/50 transition-colors duration-200">
              <td class="px-6 py-3 font-medium text-gray-900 border-r border-gray-400">28 x 6</td>
              <td class="px-6 py-3 text-center border-r border-gray-400">1.3</td>
              <td class="px-6 py-3 text-center">0.4</td>
            </tr>
            <tr class="hover:bg-gray-50/50 transition-colors duration-200">
              <td class="px-6 py-3 font-medium text-gray-900 border-r border-gray-400">30 x 3</td>
              <td class="px-6 py-3 text-center border-r border-gray-400">0.71</td>
              <td class="px-6 py-3 text-center">0.22</td>
            </tr>
            <tr class="hover:bg-gray-50/50 transition-colors duration-200">
              <td class="px-6 py-3 font-medium text-gray-900 border-r border-gray-400">30 x 4.7</td>
              <td class="px-6 py-3 text-center border-r border-gray-400">1.11</td>
              <td class="px-6 py-3 text-center">0.34</td>
            </tr>
            <tr class="hover:bg-gray-50/50 transition-colors duration-200">
              <td class="px-6 py-3 font-medium text-gray-900 border-r border-gray-400">30 x 5</td>
              <td class="px-6 py-3 text-center border-r border-gray-400">1.18</td>
              <td class="px-6 py-3 text-center">0.4</td>
            </tr>
            <tr class="hover:bg-gray-50/50 transition-colors duration-200">
              <td class="px-6 py-3 font-medium text-gray-900 border-r border-gray-400">30 x 60</td>
              <td class="px-6 py-3 text-center border-r border-gray-400">1.4</td>
              <td class="px-6 py-3 text-center">0.4</td>
            </tr>
            <tr class="hover:bg-gray-50/50 transition-colors duration-200">
              <td class="px-6 py-3 font-medium text-gray-900 border-r border-gray-400">32 x 5</td>
              <td class="px-6 py-3 text-center border-r border-gray-400">1.26</td>
              <td class="px-6 py-3 text-center">0.4</td>
            </tr>
            <tr class="hover:bg-gray-50/50 transition-colors duration-200">
              <td class="px-6 py-3 font-medium text-gray-900 border-r border-gray-400">32 x 6</td>
              <td class="px-6 py-3 text-center border-r border-gray-400">1.5</td>
              <td class="px-6 py-3 text-center">0.5</td>
            </tr>
            <tr class="hover:bg-gray-50/50 transition-colors duration-200">
              <td class="px-6 py-3 font-medium text-gray-900 border-r border-gray-400">32 x 8</td>
              <td class="px-6 py-3 text-center border-r border-gray-400">2</td>
              <td class="px-6 py-3 text-center">0.6</td>
            </tr>
            <tr class="hover:bg-gray-50/50 transition-colors duration-200">
              <td class="px-6 py-3 font-medium text-gray-900 border-r border-gray-400">32 x 10</td>
              <td class="px-6 py-3 text-center border-r border-gray-400">2.5</td>
              <td class="px-6 py-3 text-center">0.8</td>
            </tr>
            <tr class="hover:bg-gray-50/50 transition-colors duration-200">
              <td class="px-6 py-3 font-medium text-gray-900 border-r border-gray-400">32 x 12</td>
              <td class="px-6 py-3 text-center border-r border-gray-400">3</td>
              <td class="px-6 py-3 text-center">0.9</td>
            </tr>
            <tr class="hover:bg-gray-50/50 transition-colors duration-200">
              <td class="px-6 py-3 font-medium text-gray-900 border-r border-gray-400">38 x 3</td>
              <td class="px-6 py-3 text-center border-r border-gray-400">0.9</td>
              <td class="px-6 py-3 text-center">0.3</td>
            </tr>
            <tr class="hover:bg-gray-50/50 transition-colors duration-200">
              <td class="px-6 py-3 font-medium text-gray-900 border-r border-gray-400">38 x 5</td>
              <td class="px-6 py-3 text-center border-r border-gray-400">1.5</td>
              <td class="px-6 py-3 text-center">0.5</td>
            </tr>
            <tr class="hover:bg-gray-50/50 transition-colors duration-200">
              <td class="px-6 py-3 font-medium text-gray-900 border-r border-gray-400">38 x 12</td>
              <td class="px-6 py-3 text-center border-r border-gray-400">3.6</td>
              <td class="px-6 py-3 text-center">1.1</td>
            </tr>
            <tr class="hover:bg-gray-50/50 transition-colors duration-200">
              <td class="px-6 py-3 font-medium text-gray-900 border-r border-gray-400">40 x 4</td>
              <td class="px-6 py-3 text-center border-r border-gray-400">1.26</td>
              <td class="px-6 py-3 text-center">0.38</td>
            </tr>
            <tr class="hover:bg-gray-50/50 transition-colors duration-200">
              <td class="px-6 py-3 font-medium text-gray-900 border-r border-gray-400">40 x 5</td>
              <td class="px-6 py-3 text-center border-r border-gray-400">1.57</td>
              <td class="px-6 py-3 text-center">0.5</td>
            </tr>
            <tr class="hover:bg-gray-50/50 transition-colors duration-200">
              <td class="px-6 py-3 font-medium text-gray-900 border-r border-gray-400">40 x 6</td>
              <td class="px-6 py-3 text-center border-r border-gray-400">1.9</td>
              <td class="px-6 py-3 text-center">0.6</td>
            </tr>
            <tr class="hover:bg-gray-50/50 transition-colors duration-200">
              <td class="px-6 py-3 font-medium text-gray-900 border-r border-gray-400">40 x 8</td>
              <td class="px-6 py-3 text-center border-r border-gray-400">2.5</td>
              <td class="px-6 py-3 text-center">0.8</td>
            </tr>
            <tr class="hover:bg-gray-50/50 transition-colors duration-200">
              <td class="px-6 py-3 font-medium text-gray-900 border-r border-gray-400">40 x 10</td>
              <td class="px-6 py-3 text-center border-r border-gray-400">3.1</td>
              <td class="px-6 py-3 text-center">1</td>
            </tr>
            <tr class="hover:bg-gray-50/50 transition-colors duration-200">
              <td class="px-6 py-3 font-medium text-gray-900 border-r border-gray-400">40 x 12</td>
              <td class="px-6 py-3 text-center border-r border-gray-400">3.77</td>
              <td class="px-6 py-3 text-center">1.2</td>
            </tr>
            <tr class="hover:bg-gray-50/50 transition-colors duration-200">
              <td class="px-6 py-3 font-medium text-gray-900 border-r border-gray-400">40 x 16</td>
              <td class="px-6 py-3 text-center border-r border-gray-400">5</td>
              <td class="px-6 py-3 text-center">1.5</td>
            </tr>
            <tr class="hover:bg-gray-50/50 transition-colors duration-200">
              <td class="px-6 py-3 font-medium text-gray-900 border-r border-gray-400">40 x 20</td>
              <td class="px-6 py-3 text-center border-r border-gray-400">6.3</td>
              <td class="px-6 py-3 text-center">1.9</td>
            </tr>
            <tr class="hover:bg-gray-50/50 transition-colors duration-200">
              <td class="px-6 py-3 font-medium text-gray-900 border-r border-gray-400">40 x 25</td>
              <td class="px-6 py-3 text-center border-r border-gray-400">7.85</td>
              <td class="px-6 py-3 text-center">2.4</td>
            </tr>
            <tr class="hover:bg-gray-50/50 transition-colors duration-200">
              <td class="px-6 py-3 font-medium text-gray-900 border-r border-gray-400">45 x 12</td>
              <td class="px-6 py-3 text-center border-r border-gray-400">4.2</td>
              <td class="px-6 py-3 text-center">1.3</td>
            </tr>
            <tr class="hover:bg-gray-50/50 transition-colors duration-200">
              <td class="px-6 py-3 font-medium text-gray-900 border-r border-gray-400">45 x 20</td>
              <td class="px-6 py-3 text-center border-r border-gray-400">7.07</td>
              <td class="px-6 py-3 text-center">2.15</td>
            </tr>
            <tr class="hover:bg-gray-50/50 transition-colors duration-200">
              <td class="px-6 py-3 font-medium text-gray-900 border-r border-gray-400">50 x 4</td>
              <td class="px-6 py-3 text-center border-r border-gray-400">1.57</td>
              <td class="px-6 py-3 text-center">2</td>
            </tr>
            <tr class="hover:bg-gray-50/50 transition-colors duration-200">
              <td class="px-6 py-3 font-medium text-gray-900 border-r border-gray-400">50 x 5</td>
              <td class="px-6 py-3 text-center border-r border-gray-400">1.96</td>
              <td class="px-6 py-3 text-center">0.6</td>
            </tr>
            <tr class="hover:bg-gray-50/50 transition-colors duration-200">
              <td class="px-6 py-3 font-medium text-gray-900 border-r border-gray-400">50 x 6</td>
              <td class="px-6 py-3 text-center border-r border-gray-400">2.36</td>
              <td class="px-6 py-3 text-center">0.7</td>
            </tr>
            <tr class="hover:bg-gray-50/50 transition-colors duration-200">
              <td class="px-6 py-3 font-medium text-gray-900 border-r border-gray-400">50 x 8</td>
              <td class="px-6 py-3 text-center border-r border-gray-400">3.14</td>
              <td class="px-6 py-3 text-center">1</td>
            </tr>
            <tr class="hover:bg-gray-50/50 transition-colors duration-200">
              <td class="px-6 py-3 font-medium text-gray-900 border-r border-gray-400">50 x 10</td>
              <td class="px-6 py-3 text-center border-r border-gray-400">3.9</td>
              <td class="px-6 py-3 text-center">1.2</td>
            </tr>
            <tr class="hover:bg-gray-50/50 transition-colors duration-200">
              <td class="px-6 py-3 font-medium text-gray-900 border-r border-gray-400">50 x 12</td>
              <td class="px-6 py-3 text-center border-r border-gray-400">4.7</td>
              <td class="px-6 py-3 text-center">1.4</td>
            </tr>
            <tr class="hover:bg-gray-50/50 transition-colors duration-200">
              <td class="px-6 py-3 font-medium text-gray-900 border-r border-gray-400">50 x 16</td>
              <td class="px-6 py-3 text-center border-r border-gray-400">6.28</td>
              <td class="px-6 py-3 text-center">1.9</td>
            </tr>
            <tr class="hover:bg-gray-50/50 transition-colors duration-200">
              <td class="px-6 py-3 font-medium text-gray-900 border-r border-gray-400">50 x 20</td>
              <td class="px-6 py-3 text-center border-r border-gray-400">7.85</td>
              <td class="px-6 py-3 text-center">2.4</td>
            </tr>
            <tr class="hover:bg-gray-50/50 transition-colors duration-200">
              <td class="px-6 py-3 font-medium text-gray-900 border-r border-gray-400">50 x 25</td>
              <td class="px-6 py-3 text-center border-r border-gray-400">9.8</td>
              <td class="px-6 py-3 text-center">3</td>
            </tr>
            <tr class="hover:bg-gray-50/50 transition-colors duration-200">
              <td class="px-6 py-3 font-medium text-gray-900 border-r border-gray-400">50 x 32</td>
              <td class="px-6 py-3 text-center border-r border-gray-400">12.56</td>
              <td class="px-6 py-3 text-center">3.83</td>
            </tr>
            <tr class="hover:bg-gray-50/50 transition-colors duration-200">
              <td class="px-6 py-3 font-medium text-gray-900 border-r border-gray-400">60 x 6</td>
              <td class="px-6 py-3 text-center border-r border-gray-400">2.83</td>
              <td class="px-6 py-3 text-center">0.87</td>
            </tr>
            <tr class="hover:bg-gray-50/50 transition-colors duration-200">
              <td class="px-6 py-3 font-medium text-gray-900 border-r border-gray-400">63 x 6</td>
              <td class="px-6 py-3 text-center border-r border-gray-400">3</td>
              <td class="px-6 py-3 text-center">0.9</td>
            </tr>
            <tr class="hover:bg-gray-50/50 transition-colors duration-200">
              <td class="px-6 py-3 font-medium text-gray-900 border-r border-gray-400">65 x 5</td>
              <td class="px-6 py-3 text-center border-r border-gray-400">2.55</td>
              <td class="px-6 py-3 text-center">0.78</td>
            </tr>
            <tr class="hover:bg-gray-50/50 transition-colors duration-200">
              <td class="px-6 py-3 font-medium text-gray-900 border-r border-gray-400">65 x 6</td>
              <td class="px-6 py-3 text-center border-r border-gray-400">3.06</td>
              <td class="px-6 py-3 text-center">0.93</td>
            </tr>
            <tr class="hover:bg-gray-50/50 transition-colors duration-200">
              <td class="px-6 py-3 font-medium text-gray-900 border-r border-gray-400">65 x 8</td>
              <td class="px-6 py-3 text-center border-r border-gray-400">4.08</td>
              <td class="px-6 py-3 text-center">1.2</td>
            </tr>
            <tr class="hover:bg-gray-50/50 transition-colors duration-200">
              <td class="px-6 py-3 font-medium text-gray-900 border-r border-gray-400">65 x 10</td>
              <td class="px-6 py-3 text-center border-r border-gray-400">5.1</td>
              <td class="px-6 py-3 text-center">1.6</td>
            </tr>
            <tr class="hover:bg-gray-50/50 transition-colors duration-200">
              <td class="px-6 py-3 font-medium text-gray-900 border-r border-gray-400">65 x 12</td>
              <td class="px-6 py-3 text-center border-r border-gray-400">6.1</td>
              <td class="px-6 py-3 text-center">1.9</td>
            </tr>
            <tr class="hover:bg-gray-50/50 transition-colors duration-200">
              <td class="px-6 py-3 font-medium text-gray-900 border-r border-gray-400">65 x 16</td>
              <td class="px-6 py-3 text-center border-r border-gray-400">8.16</td>
              <td class="px-6 py-3 text-center">2.5</td>
            </tr>
            <tr class="hover:bg-gray-50/50 transition-colors duration-200">
              <td class="px-6 py-3 font-medium text-gray-900 border-r border-gray-400">65 x 20</td>
              <td class="px-6 py-3 text-center border-r border-gray-400">10.2</td>
              <td class="px-6 py-3 text-center">3.1</td>
            </tr>
            <tr class="hover:bg-gray-50/50 transition-colors duration-200">
              <td class="px-6 py-3 font-medium text-gray-900 border-r border-gray-400">65 x 25</td>
              <td class="px-6 py-3 text-center border-r border-gray-400">12.8</td>
              <td class="px-6 py-3 text-center">3.9</td>
            </tr>
            <tr class="hover:bg-gray-50/50 transition-colors duration-200">
              <td class="px-6 py-3 font-medium text-gray-900 border-r border-gray-400">65 x 32</td>
              <td class="px-6 py-3 text-center border-r border-gray-400">16.33</td>
              <td class="px-6 py-3 text-center">4.98</td>
            </tr>
            <tr class="hover:bg-gray-50/50 transition-colors duration-200">
              <td class="px-6 py-3 font-medium text-gray-900 border-r border-gray-400">65 x 40</td>
              <td class="px-6 py-3 text-center border-r border-gray-400">20.41</td>
              <td class="px-6 py-3 text-center">6.22</td>
            </tr>
            <tr class="hover:bg-gray-50/50 transition-colors duration-200">
              <td class="px-6 py-3 font-medium text-gray-900 border-r border-gray-400">65 x 50</td>
              <td class="px-6 py-3 text-center border-r border-gray-400">25.51</td>
              <td class="px-6 py-3 text-center">7.78</td>
            </tr>
            <tr class="hover:bg-gray-50/50 transition-colors duration-200">
              <td class="px-6 py-3 font-medium text-gray-900 border-r border-gray-400">75 x 5</td>
              <td class="px-6 py-3 text-center border-r border-gray-400">5.7</td>
              <td class="px-6 py-3 text-center">1.7</td>
            </tr>
            <tr class="hover:bg-gray-50/50 transition-colors duration-200">
              <td class="px-6 py-3 font-medium text-gray-900 border-r border-gray-400">75 x 6</td>
              <td class="px-6 py-3 text-center border-r border-gray-400">3.53</td>
              <td class="px-6 py-3 text-center">1.1</td>
            </tr>
            <tr class="hover:bg-gray-50/50 transition-colors duration-200">
              <td class="px-6 py-3 font-medium text-gray-900 border-r border-gray-400">75 x 8</td>
              <td class="px-6 py-3 text-center border-r border-gray-400">4.71</td>
              <td class="px-6 py-3 text-center">1.4</td>
            </tr>
            <tr class="hover:bg-gray-50/50 transition-colors duration-200">
              <td class="px-6 py-3 font-medium text-gray-900 border-r border-gray-400">75 x 10</td>
              <td class="px-6 py-3 text-center border-r border-gray-400">5.89</td>
              <td class="px-6 py-3 text-center">1.8</td>
            </tr>
            <tr class="hover:bg-gray-50/50 transition-colors duration-200">
              <td class="px-6 py-3 font-medium text-gray-900 border-r border-gray-400">75 x 12</td>
              <td class="px-6 py-3 text-center border-r border-gray-400">7.7</td>
              <td class="px-6 py-3 text-center">2.1</td>
            </tr>
            <tr class="hover:bg-gray-50/50 transition-colors duration-200">
              <td class="px-6 py-3 font-medium text-gray-900 border-r border-gray-400">75 x 16</td>
              <td class="px-6 py-3 text-center border-r border-gray-400">9.42</td>
              <td class="px-6 py-3 text-center">2.9</td>
            </tr>
            <tr class="hover:bg-gray-50/50 transition-colors duration-200">
              <td class="px-6 py-3 font-medium text-gray-900 border-r border-gray-400">75 x 20</td>
              <td class="px-6 py-3 text-center border-r border-gray-400">11.8</td>
              <td class="px-6 py-3 text-center">3.6</td>
            </tr>
            <tr class="hover:bg-gray-50/50 transition-colors duration-200">
              <td class="px-6 py-3 font-medium text-gray-900 border-r border-gray-400">75 x 25</td>
              <td class="px-6 py-3 text-center border-r border-gray-400">14.7</td>
              <td class="px-6 py-3 text-center">4.5</td>
            </tr>
            <tr class="hover:bg-gray-50/50 transition-colors duration-200">
              <td class="px-6 py-3 font-medium text-gray-900 border-r border-gray-400">75 x 32</td>
              <td class="px-6 py-3 text-center border-r border-gray-400">18.9</td>
              <td class="px-6 py-3 text-center">4.5</td>
            </tr>
            <tr class="hover:bg-gray-50/50 transition-colors duration-200">
              <td class="px-6 py-3 font-medium text-gray-900 border-r border-gray-400">75 x 40</td>
              <td class="px-6 py-3 text-center border-r border-gray-400">23.6</td>
              <td class="px-6 py-3 text-center">7.2</td>
            </tr>
            <tr class="hover:bg-gray-50/50 transition-colors duration-200">
              <td class="px-6 py-3 font-medium text-gray-900 border-r border-gray-400">75 x 50</td>
              <td class="px-6 py-3 text-center border-r border-gray-400">29.44</td>
              <td class="px-6 py-3 text-center">8.97</td>
            </tr>
            <tr class="hover:bg-gray-50/50 transition-colors duration-200">
              <td class="px-6 py-3 font-medium text-gray-900 border-r border-gray-400">80 x 8</td>
              <td class="px-6 py-3 text-center border-r border-gray-400">5.02</td>
              <td class="px-6 py-3 text-center">1.53</td>
            </tr>
            <tr class="hover:bg-gray-50/50 transition-colors duration-200">
              <td class="px-6 py-3 font-medium text-gray-900 border-r border-gray-400">80 x 10</td>
              <td class="px-6 py-3 text-center border-r border-gray-400">6.28</td>
              <td class="px-6 py-3 text-center">1.97</td>
            </tr>
            <tr class="hover:bg-gray-50/50 transition-colors duration-200">
              <td class="px-6 py-3 font-medium text-gray-900 border-r border-gray-400">100 x 5</td>
              <td class="px-6 py-3 text-center border-r border-gray-400">3.93</td>
              <td class="px-6 py-3 text-center">1.2</td>
            </tr>
            <tr class="hover:bg-gray-50/50 transition-colors duration-200">
              <td class="px-6 py-3 font-medium text-gray-900 border-r border-gray-400">100 x 6</td>
              <td class="px-6 py-3 text-center border-r border-gray-400">4.71</td>
              <td class="px-6 py-3 text-center">1.4</td>
            </tr>
            <tr class="hover:bg-gray-50/50 transition-colors duration-200">
              <td class="px-6 py-3 font-medium text-gray-900 border-r border-gray-400">100 x 8</td>
              <td class="px-6 py-3 text-center border-r border-gray-400">6.28</td>
              <td class="px-6 py-3 text-center">1.9</td>
            </tr>
            <tr class="hover:bg-gray-50/50 transition-colors duration-200">
              <td class="px-6 py-3 font-medium text-gray-900 border-r border-gray-400">100 x 10</td>
              <td class="px-6 py-3 text-center border-r border-gray-400">7.85</td>
              <td class="px-6 py-3 text-center">2.4</td>
            </tr>
            <tr class="hover:bg-gray-50/50 transition-colors duration-200">
              <td class="px-6 py-3 font-medium text-gray-900 border-r border-gray-400">100 x 12</td>
              <td class="px-6 py-3 text-center border-r border-gray-400">9.42</td>
              <td class="px-6 py-3 text-center">2.9</td>
            </tr>
            <tr class="hover:bg-gray-50/50 transition-colors duration-200">
              <td class="px-6 py-3 font-medium text-gray-900 border-r border-gray-400">100 x 16</td>
              <td class="px-6 py-3 text-center border-r border-gray-400">12.56</td>
              <td class="px-6 py-3 text-center">3.8</td>
            </tr>
            <tr class="hover:bg-gray-50/50 transition-colors duration-200">
              <td class="px-6 py-3 font-medium text-gray-900 border-r border-gray-400">100 x 20</td>
              <td class="px-6 py-3 text-center border-r border-gray-400">15.7</td>
              <td class="px-6 py-3 text-center">4.8</td>
            </tr>
            <tr class="hover:bg-gray-50/50 transition-colors duration-200">
              <td class="px-6 py-3 font-medium text-gray-900 border-r border-gray-400">100 x 25</td>
              <td class="px-6 py-3 text-center border-r border-gray-400">19.6</td>
              <td class="px-6 py-3 text-center">6</td>
            </tr>
            <tr class="hover:bg-gray-50/50 transition-colors duration-200">
              <td class="px-6 py-3 font-medium text-gray-900 border-r border-gray-400">100 x 30</td>
              <td class="px-6 py-3 text-center border-r border-gray-400">23.55</td>
              <td class="px-6 py-3 text-center">7.18</td>
            </tr>
            <tr class="hover:bg-gray-50/50 transition-colors duration-200">
              <td class="px-6 py-3 font-medium text-gray-900 border-r border-gray-400">100 x 32</td>
              <td class="px-6 py-3 text-center border-r border-gray-400">25.12</td>
              <td class="px-6 py-3 text-center">7.66</td>
            </tr>
            <tr class="hover:bg-gray-50/50 transition-colors duration-200">
              <td class="px-6 py-3 font-medium text-gray-900 border-r border-gray-400">100 x 40</td>
              <td class="px-6 py-3 text-center border-r border-gray-400">31.4</td>
              <td class="px-6 py-3 text-center">9.57</td>
            </tr>
            <tr class="hover:bg-gray-50/50 transition-colors duration-200">
              <td class="px-6 py-3 font-medium text-gray-900 border-r border-gray-400">100 x 50</td>
              <td class="px-6 py-3 text-center border-r border-gray-400">39.25</td>
              <td class="px-6 py-3 text-center">11.96</td>
            </tr>
            <tr class="hover:bg-gray-50/50 transition-colors duration-200">
              <td class="px-6 py-3 font-medium text-gray-900 border-r border-gray-400">125 x 6</td>
              <td class="px-6 py-3 text-center border-r border-gray-400">5.9</td>
              <td class="px-6 py-3 text-center">1.8</td>
            </tr>
            <tr class="hover:bg-gray-50/50 transition-colors duration-200">
              <td class="px-6 py-3 font-medium text-gray-900 border-r border-gray-400">125 x 8</td>
              <td class="px-6 py-3 text-center border-r border-gray-400">7.9</td>
              <td class="px-6 py-3 text-center">2.4</td>
            </tr>
            <tr class="hover:bg-gray-50/50 transition-colors duration-200">
              <td class="px-6 py-3 font-medium text-gray-900 border-r border-gray-400">125 x 10</td>
              <td class="px-6 py-3 text-center border-r border-gray-400">9.8</td>
              <td class="px-6 py-3 text-center">3</td>
            </tr>
            <tr class="hover:bg-gray-50/50 transition-colors duration-200">
              <td class="px-6 py-3 font-medium text-gray-900 border-r border-gray-400">125 x 12</td>
              <td class="px-6 py-3 text-center border-r border-gray-400">11.8</td>
              <td class="px-6 py-3 text-center">3.6</td>
            </tr>
            <tr class="hover:bg-gray-50/50 transition-colors duration-200">
              <td class="px-6 py-3 font-medium text-gray-900 border-r border-gray-400">125 x 16</td>
              <td class="px-6 py-3 text-center border-r border-gray-400">15.7</td>
              <td class="px-6 py-3 text-center">4.8</td>
            </tr>
            <tr class="hover:bg-gray-50/50 transition-colors duration-200">
              <td class="px-6 py-3 font-medium text-gray-900 border-r border-gray-400">125 x 20</td>
              <td class="px-6 py-3 text-center border-r border-gray-400">19.6</td>
              <td class="px-6 py-3 text-center">6</td>
            </tr>
            <tr class="hover:bg-gray-50/50 transition-colors duration-200">
              <td class="px-6 py-3 font-medium text-gray-900 border-r border-gray-400">125 x 25</td>
              <td class="px-6 py-3 text-center border-r border-gray-400">24.5</td>
              <td class="px-6 py-3 text-center">7.5</td>
            </tr>
            <tr class="hover:bg-gray-50/50 transition-colors duration-200">
              <td class="px-6 py-3 font-medium text-gray-900 border-r border-gray-400">125 x 32</td>
              <td class="px-6 py-3 text-center border-r border-gray-400">31.4</td>
              <td class="px-6 py-3 text-center">9.57</td>
            </tr>
            <tr class="hover:bg-gray-50/50 transition-colors duration-200">
              <td class="px-6 py-3 font-medium text-gray-900 border-r border-gray-400">125 x 40</td>
              <td class="px-6 py-3 text-center border-r border-gray-400">39.25</td>
              <td class="px-6 py-3 text-center">11.96</td>
            </tr>
            <tr class="hover:bg-gray-50/50 transition-colors duration-200">
              <td class="px-6 py-3 font-medium text-gray-900 border-r border-gray-400">130 x 12</td>
              <td class="px-6 py-3 text-center border-r border-gray-400">12.25</td>
              <td class="px-6 py-3 text-center">3.73</td>
            </tr>
            <tr class="hover:bg-gray-50/50 transition-colors duration-200">
              <td class="px-6 py-3 font-medium text-gray-900 border-r border-gray-400">150 x 6</td>
              <td class="px-6 py-3 text-center border-r border-gray-400">7.07</td>
              <td class="px-6 py-3 text-center">2.2</td>
            </tr>
            <tr class="hover:bg-gray-50/50 transition-colors duration-200">
              <td class="px-6 py-3 font-medium text-gray-900 border-r border-gray-400">150 x 8</td>
              <td class="px-6 py-3 text-center border-r border-gray-400">9.42</td>
              <td class="px-6 py-3 text-center">2.9</td>
            </tr>
            <tr class="hover:bg-gray-50/50 transition-colors duration-200">
              <td class="px-6 py-3 font-medium text-gray-900 border-r border-gray-400">150 x 10</td>
              <td class="px-6 py-3 text-center border-r border-gray-400">11.8</td>
              <td class="px-6 py-3 text-center">3.6</td>
            </tr>
            <tr class="hover:bg-gray-50/50 transition-colors duration-200">
              <td class="px-6 py-3 font-medium text-gray-900 border-r border-gray-400">150 x 12</td>
              <td class="px-6 py-3 text-center border-r border-gray-400">14.1</td>
              <td class="px-6 py-3 text-center">4.3</td>
            </tr>
            <tr class="hover:bg-gray-50/50 transition-colors duration-200">
              <td class="px-6 py-3 font-medium text-gray-900 border-r border-gray-400">150 x 16</td>
              <td class="px-6 py-3 text-center border-r border-gray-400">18.8</td>
              <td class="px-6 py-3 text-center">5.7</td>
            </tr>
            <tr class="hover:bg-gray-50/50 transition-colors duration-200">
              <td class="px-6 py-3 font-medium text-gray-900 border-r border-gray-400">150 x 20</td>
              <td class="px-6 py-3 text-center border-r border-gray-400">23.6</td>
              <td class="px-6 py-3 text-center">7.2</td>
            </tr>
            <tr class="hover:bg-gray-50/50 transition-colors duration-200">
              <td class="px-6 py-3 font-medium text-gray-900 border-r border-gray-400">150 x 25</td>
              <td class="px-6 py-3 text-center border-r border-gray-400">29.4</td>
              <td class="px-6 py-3 text-center">8.9</td>
            </tr>
            <tr class="hover:bg-gray-50/50 transition-colors duration-200">
              <td class="px-6 py-3 font-medium text-gray-900 border-r border-gray-400">150 x 32</td>
              <td class="px-6 py-3 text-center border-r border-gray-400">37.68</td>
              <td class="px-6 py-3 text-center">11.48</td>
            </tr>
            <tr class="hover:bg-gray-50/50 transition-colors duration-200">
              <td class="px-6 py-3 font-medium text-gray-900 border-r border-gray-400">150 x 40</td>
              <td class="px-6 py-3 text-center border-r border-gray-400">47.1</td>
              <td class="px-6 py-3 text-center">14.36</td>
            </tr>
            <tr class="hover:bg-gray-50/50 transition-colors duration-200">
              <td class="px-6 py-3 font-medium text-gray-900 border-r border-gray-400">160 x 30</td>
              <td class="px-6 py-3 text-center border-r border-gray-400">37.68</td>
              <td class="px-6 py-3 text-center">11.94</td>
            </tr>
            <tr class="hover:bg-gray-50/50 transition-colors duration-200">
              <td class="px-6 py-3 font-medium text-gray-900 border-r border-gray-400">178 X 6</td>
              <td class="px-6 py-3 text-center border-r border-gray-400">8.38</td>
              <td class="px-6 py-3 text-center">2.56</td>
            </tr>
            <tr class="hover:bg-gray-50/50 transition-colors duration-200">
              <td class="px-6 py-3 font-medium text-gray-900 border-r border-gray-400">178 X 8</td>
              <td class="px-6 py-3 text-center border-r border-gray-400">11.18</td>
              <td class="px-6 py-3 text-center">3.41</td>
            </tr>
            <tr class="hover:bg-gray-50/50 transition-colors duration-200">
              <td class="px-6 py-3 font-medium text-gray-900 border-r border-gray-400">180 X 12</td>
              <td class="px-6 py-3 text-center border-r border-gray-400">16.96</td>
              <td class="px-6 py-3 text-center">5.17</td>
            </tr>
            <tr class="hover:bg-gray-50/50 transition-colors duration-200">
              <td class="px-6 py-3 font-medium text-gray-900 border-r border-gray-400">180 X 20</td>
              <td class="px-6 py-3 text-center border-r border-gray-400">28.26</td>
              <td class="px-6 py-3 text-center">8.62</td>
            </tr>
            <tr class="hover:bg-gray-50/50 transition-colors duration-200">
              <td class="px-6 py-3 font-medium text-gray-900 border-r border-gray-400">200 x 6</td>
              <td class="px-6 py-3 text-center border-r border-gray-400">9.4</td>
              <td class="px-6 py-3 text-center">2.9</td>
            </tr>
            <tr class="hover:bg-gray-50/50 transition-colors duration-200">
              <td class="px-6 py-3 font-medium text-gray-900 border-r border-gray-400">200 x 8</td>
              <td class="px-6 py-3 text-center border-r border-gray-400">12.56</td>
              <td class="px-6 py-3 text-center">3.8</td>
            </tr>
            <tr class="hover:bg-gray-50/50 transition-colors duration-200">
              <td class="px-6 py-3 font-medium text-gray-900 border-r border-gray-400">200 x 10</td>
              <td class="px-6 py-3 text-center border-r border-gray-400">15.7</td>
              <td class="px-6 py-3 text-center">4.8</td>
            </tr>
            <tr class="hover:bg-gray-50/50 transition-colors duration-200">
              <td class="px-6 py-3 font-medium text-gray-900 border-r border-gray-400">200 x 12</td>
              <td class="px-6 py-3 text-center border-r border-gray-400">18.8</td>
              <td class="px-6 py-3 text-center">5.7</td>
            </tr>
            <tr class="hover:bg-gray-50/50 transition-colors duration-200">
              <td class="px-6 py-3 font-medium text-gray-900 border-r border-gray-400">200 x 16</td>
              <td class="px-6 py-3 text-center border-r border-gray-400">25.1</td>
              <td class="px-6 py-3 text-center">7.7</td>
            </tr>
            <tr class="hover:bg-gray-50/50 transition-colors duration-200">
              <td class="px-6 py-3 font-medium text-gray-900 border-r border-gray-400">200 x 20</td>
              <td class="px-6 py-3 text-center border-r border-gray-400">31.4</td>
              <td class="px-6 py-3 text-center">9.6</td>
            </tr>
            <tr class="hover:bg-gray-50/50 transition-colors duration-200">
              <td class="px-6 py-3 font-medium text-gray-900 border-r border-gray-400">200 x 25</td>
              <td class="px-6 py-3 text-center border-r border-gray-400">39.2</td>
              <td class="px-6 py-3 text-center">12</td>
            </tr>
            <tr class="hover:bg-gray-50/50 transition-colors duration-200">
              <td class="px-6 py-3 font-medium text-gray-900 border-r border-gray-400">250 x 6</td>
              <td class="px-6 py-3 text-center border-r border-gray-400">11.8</td>
              <td class="px-6 py-3 text-center">3.6</td>
            </tr>
            <tr class="hover:bg-gray-50/50 transition-colors duration-200">
              <td class="px-6 py-3 font-medium text-gray-900 border-r border-gray-400">250 x 8</td>
              <td class="px-6 py-3 text-center border-r border-gray-400">15.7</td>
              <td class="px-6 py-3 text-center">4.8</td>
            </tr>
            <tr class="hover:bg-gray-50/50 transition-colors duration-200">
              <td class="px-6 py-3 font-medium text-gray-900 border-r border-gray-400">250 x 10</td>
              <td class="px-6 py-3 text-center border-r border-gray-400">19.6</td>
              <td class="px-6 py-3 text-center">6</td>
            </tr>
            <tr class="hover:bg-gray-50/50 transition-colors duration-200">
              <td class="px-6 py-3 font-medium text-gray-900 border-r border-gray-400">250 x 12</td>
              <td class="px-6 py-3 text-center border-r border-gray-400">23.6</td>
              <td class="px-6 py-3 text-center">7.2</td>
            </tr>
            <tr class="hover:bg-gray-50/50 transition-colors duration-200">
              <td class="px-6 py-3 font-medium text-gray-900 border-r border-gray-400">250 x 16</td>
              <td class="px-6 py-3 text-center border-r border-gray-400">31.4</td>
              <td class="px-6 py-3 text-center">9.6</td>
            </tr>
            <tr class="hover:bg-gray-50/50 transition-colors duration-200">
              <td class="px-6 py-3 font-medium text-gray-900 border-r border-gray-400">250 x 20</td>
              <td class="px-6 py-3 text-center border-r border-gray-400">39.2</td>
              <td class="px-6 py-3 text-center">12</td>
            </tr>
            <tr class="hover:bg-gray-50/50 transition-colors duration-200">
              <td class="px-6 py-3 font-medium text-gray-900 border-r border-gray-400">250 x 25</td>
              <td class="px-6 py-3 text-center border-r border-gray-400">49.1</td>
              <td class="px-6 py-3 text-center">15</td>
            </tr>
            <tr class="hover:bg-gray-50/50 transition-colors duration-200">
              <td class="px-6 py-3 font-medium text-gray-900 border-r border-gray-400">300 x 6</td>
              <td class="px-6 py-3 text-center border-r border-gray-400">14.1</td>
              <td class="px-6 py-3 text-center">4.3</td>
            </tr>
            <tr class="hover:bg-gray-50/50 transition-colors duration-200">
              <td class="px-6 py-3 font-medium text-gray-900 border-r border-gray-400">300 x 8</td>
              <td class="px-6 py-3 text-center border-r border-gray-400">18.8</td>
              <td class="px-6 py-3 text-center">5.8</td>
            </tr>
            <tr class="hover:bg-gray-50/50 transition-colors duration-200">
              <td class="px-6 py-3 font-medium text-gray-900 border-r border-gray-400">300 x 10</td>
              <td class="px-6 py-3 text-center border-r border-gray-400">23.55</td>
              <td class="px-6 py-3 text-center">7.2</td>
            </tr>
            <tr class="hover:bg-gray-50/50 transition-colors duration-200">
              <td class="px-6 py-3 font-medium text-gray-900 border-r border-gray-400">300 x 12</td>
              <td class="px-6 py-3 text-center border-r border-gray-400">28.3</td>
              <td class="px-6 py-3 text-center">8.6</td>
            </tr>
            <tr class="hover:bg-gray-50/50 transition-colors duration-200">
              <td class="px-6 py-3 font-medium text-gray-900 border-r border-gray-400">300 x 16</td>
              <td class="px-6 py-3 text-center border-r border-gray-400">37.7</td>
              <td class="px-6 py-3 text-center">11.5</td>
            </tr>
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
                Width
              </th>
              <th class="px-6 py-4 text-sm font-bold text-red-600 uppercase border-r border-gray-400">
                Thickness
              </th>
              <th class="px-6 py-4 text-sm font-bold text-red-600 uppercase border-r border-gray-400">
                Sectional Weight
              </th>
              <th class="px-6 py-4 text-sm font-bold text-red-600 uppercase">
                Length
              </th>
            </tr>
          </thead>

          <tbody class="divide-y divide-gray-100">
            <tr class="hover:bg-gray-50/50 transition-colors duration-200">
              <td class="px-6 py-4 border-r border-gray-400">Up to 50 mm: ± 1 mm</td>
              <td class="px-6 py-4 border-r border-gray-400">Up to 12 mm: ± 0.5 mm</td>
              <td class="px-6 py-4 border-r border-gray-400">Up to 3 mm thick: +5 / -3%</td>
              <td class="px-6 py-4">For fixed length: ± 100 mm</td>
            </tr>

            <tr class="hover:bg-gray-50/50 transition-colors duration-200">
              <td class="px-6 py-4 border-r border-gray-400">50 mm – 75 mm: ± 1.5 mm</td>
              <td class="px-6 py-4 border-r border-gray-400">Over 12 mm: 4% (Max 1.5 mm)</td>
              <td class="px-6 py-4 border-r border-gray-400">Over 3 mm: ± 5%</td>
              <td class="px-6 py-4">—</td>
            </tr>

            <tr class="hover:bg-gray-50/50 transition-colors duration-200">
              <td class="px-6 py-4 border-r border-gray-400">75 mm – 100 mm: ± 2 mm</td>
              <td class="px-6 py-4 border-r border-gray-400">—</td>
              <td class="px-6 py-4 border-r border-gray-400">—</td>
              <td class="px-6 py-4">—</td>
            </tr>

            <tr class="hover:bg-gray-50/50 transition-colors duration-200">
              <td class="px-6 py-4 border-r border-gray-400">100 mm & above: ± 2% (Max 6 mm)</td>
              <td class="px-6 py-4 border-r border-gray-400">—</td>
              <td class="px-6 py-4 border-r border-gray-400">—</td>
              <td class="px-6 py-4">—</td>
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