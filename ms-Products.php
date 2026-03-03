<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>MS Products</title>
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
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

</head>

<body>
  <!-- Progress bar -->
  <div class="fixed top-0 left-0 w-full h-1 z-[9999]">
    <div id="progressBar" class="h-full w-0 bg-gradient-to-r from-white to-red-500 transition-all duration-150">
    </div>
  </div>
  <!-- Scroll Arrow Button -->
  <button id="scrollBtn" class="fixed right-8  sm:right-12 md:right-10 lg:right-6 bottom-10 z-50
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
      <img src="Apex-Images/ms-Products-Banner.jpg" class="w-full h-full object-cover"
        alt="Investor Corner Banner" />

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

          MS Products
        </span>
      </div>
    </div>

    <!-- Header Content Overlay -->
    <?php include "includes/header.php"; ?>
  </header>

  <main>

<section class="py-24 bg-gradient-to-b from-gray-50 to-gray-100">
  <div class="max-w-7xl mx-auto px-6">

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10">

      <!-- MS Channel -->
      <div class="group bg-white rounded-3xl p-10 border border-gray-200 
                  shadow-md hover:shadow-2xl hover:-translate-y-3 
                  transition-all duration-500 flex flex-col">

        <div>
          <h2 class="text-2xl font-semibold text-gray-900 mb-4">
            MS Channel <span class="text-red-600">Specifications</span>
          </h2>

          <p class="text-gray-600 mb-6 leading-relaxed">
            Explore our comprehensive range of high-quality Mild Steel (MS) Channels, designed for structural support and industrial applications.
          </p>

          <p class="text-red-600 font-semibold mb-8">
            75 x 40mm to 200 x 75mm (Light Wt. / Med. Wt. / STD .Wt.)
          </p>

          <img src="Apex-Images/ms-products-img-1.png" class="w-full object-contain mt-auto pb-3" />
        </div>

        <div class="mt-auto">
          <a href="ms-channels"
             class="inline-flex items-center gap-2 
                    bg-gradient-to-r from-red-600 to-red-700
                    text-white px-6 py-3 rounded-full
                    font-medium tracking-wide
                    shadow-md hover:shadow-lg hover:scale-105
                    transition-all duration-300">
            Read More →
          </a>
        </div>
      </div>

      <!-- MS Angles -->
      <div class="group bg-white rounded-3xl p-10 border border-gray-200 
                  shadow-md hover:shadow-2xl hover:-translate-y-3 
                  transition-all duration-500 flex flex-col">

        <div>
          <h2 class="text-2xl font-semibold text-gray-900 mb-4">
            MS Angles <span class="text-red-600">Specifications</span>
          </h2>

          <p class="text-gray-600 mb-6 leading-relaxed">
           Explore our comprehensive range of high-quality Mild Steel (MS) Equal and Unequal Angles, designed for structural support and industrial applications.
          </p>

          <p class="text-red-600 font-semibold mb-20">
            25 x 25 x 3mm to 110 x 110 x 12mm
          </p>
           <img src="Apex-Images/ms-products-img-2.png" class="w-full object-contain mt-auto pb-3" />
        </div>

        <div class="mt-auto">
          <a href="ms-equalangles"
             class="inline-flex items-center gap-2 
                    bg-gradient-to-r from-red-600 to-red-700
                    text-white px-6 py-3 rounded-full
                    font-medium tracking-wide
                    shadow-md hover:shadow-lg hover:scale-105
                    transition-all duration-300">
            Read More →
          </a>
        </div>
      </div>

      <!-- MS Beams -->
      <div class="group bg-white rounded-3xl p-10 border border-gray-200 
                  shadow-md hover:shadow-2xl hover:-translate-y-3 
                  transition-all duration-500 flex flex-col">

        <div>
          <h2 class="text-2xl font-semibold text-gray-900 mb-4">
            MS Beams <span class="text-red-600">Specifications</span>
          </h2>

          <p class="text-gray-600 mb-6 leading-relaxed">
           Explore our comprehensive range of high-quality Mild Steel (MS) Beams, designed for structural support and industrial applications.
          </p>

          <p class="text-red-600 font-semibold mb-8">
            100 x 50mm to 200 x 100mm (Light Wt. / Med. Wt. / STD .Wt.)
          </p>
           <img src="Apex-Images/ms-products-img-3.png" class="w-full object-contain mt-auto pb-3" />
        </div>

        <div class="mt-auto">
          <a href="ms-beams"
             class="inline-flex items-center gap-2 
                    bg-gradient-to-r from-red-600 to-red-700
                    text-white px-6 py-3 rounded-full
                    font-medium tracking-wide
                    shadow-md hover:shadow-lg hover:scale-105
                    transition-all duration-300">
            Read More →
          </a>
        </div>
      </div>

      <!-- MS Round Bars -->
      <div class="group bg-white rounded-3xl p-10 border border-gray-200 
                  shadow-md hover:shadow-2xl hover:-translate-y-3 
                  transition-all duration-500 flex flex-col">

        <div>
          <h2 class="text-2xl font-semibold text-gray-900 mb-4">
            MS Round Bars <span class="text-red-600">Specifications</span>
          </h2>

          <p class="text-gray-600 mb-6 leading-relaxed">
           Apex Steel supplies a wide range of Mild Steel (MS) Round Bars. MS Round Bars are used by forging industries, bright bar industries, auto-ancillaries, foundation and anchor bolts, pins, rollers, bushes, and many more engineering industries.
          </p>

          <p class="text-red-600 font-semibold mb-8">
            10 mm to 125 mm
          </p>
           <img src="Apex-Images/ms-products-img-4.png" class="w-full object-contain mt-auto pb-3" />
        </div>

        <div class="mt-auto">
          <a href="ms-roundbars"
             class="inline-flex items-center gap-2 
                    bg-gradient-to-r from-red-600 to-red-700
                    text-white px-6 py-3 rounded-full
                    font-medium tracking-wide
                    shadow-md hover:shadow-lg hover:scale-105
                    transition-all duration-300">
            Read More →
          </a>
        </div>
      </div>

      <!-- MS Square Bars -->
      <div class="group bg-white rounded-3xl p-10 border border-gray-200 
                  shadow-md hover:shadow-2xl hover:-translate-y-3 
                  transition-all duration-500 flex flex-col">

        <div>
          <h2 class="text-2xl font-semibold text-gray-900 mb-4">
            MS Square Bars <span class="text-red-600">Specifications</span>
          </h2>

          <p class="text-gray-600 mb-6 leading-relaxed">
            Apex Steel supplies a wide range of Mild Steel (MS) Square Bars. MS Square Bars are used in cranes gantry, bullock carts axles, conveyors, truck trailers and tippers, bright bars, anchor bolts and many more engineering industries.
          </p>

          <p class="text-red-600 font-semibold mb-8">
            10 mm to 56 mm
          </p>
           <img src="Apex-Images/ms-products-img-5.png" class="w-full object-contain mt-auto pb-3" />
        </div>

        <div class="mt-auto">
          <a href="ms-squarebars"
             class="inline-flex items-center gap-2 
                    bg-gradient-to-r from-red-600 to-red-700
                    text-white px-6 py-3 rounded-full
                    font-medium tracking-wide
                    shadow-md hover:shadow-lg hover:scale-105
                    transition-all duration-300">
            Read More →
          </a>
        </div>
      </div>

      <!-- MS Flat Bars -->
      <div class="group bg-white rounded-3xl p-10 border border-gray-200 
                  shadow-md hover:shadow-2xl hover:-translate-y-3 
                  transition-all duration-500 flex flex-col">

        <div>
          <h2 class="text-2xl font-semibold text-gray-900 mb-4">
            MS Flat Bars <span class="text-red-600">Specifications</span>
          </h2>

          <p class="text-gray-600 mb-6 leading-relaxed">
           Apex Steel supplies a wide range of high-quality Mild Steel (MS) Flat Bars used across multiple engineering and structural applications including gratings, cable trays, automobile components, scaffolding, base plates, shipbuilding, and fabrication industries.
          </p>

          <p class="text-red-600 font-semibold mb-8">
            Width 25 mm to 300 mm | Thickness 5 mm to 50 mm
          </p>
           <img src="Apex-Images/ms-products-img-6.png" class="w-full object-contain mt-auto pb-3" />
        </div>

        <div class="mt-auto">
          <a href="ms-flatbars"
             class="inline-flex items-center gap-2 
                    bg-gradient-to-r from-red-600 to-red-700
                    text-white px-6 py-3 rounded-full
                    font-medium tracking-wide
                    shadow-md hover:shadow-lg hover:scale-105
                    transition-all duration-300">
            Read More →
          </a>
        </div>
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