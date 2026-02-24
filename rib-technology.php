<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Rib Technology</title>
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
      <img src="Apex-Images/ribbanner.jpg" class="w-full h-full object-cover" alt="Investor Corner Banner" />

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

          Rib Technology
        </span>
      </div>
    </div>

    <!-- Header Content Overlay -->
    <?php include "includes/header.php"; ?>
  </header>

  <main>
    <section class="w-full ">
      <div class="max-w-7xl mx-auto px-6 lg:px-12 py-10">

        <!-- Main Title -->
        <h2 class="text-red-600 font-extrabold 
               text-3xl md:text-4xl 
               leading-tight tracking-tight fade-left ">
          The Rib Revolution
        </h2>

        <!-- Subtitle -->
        <p class="mt-2 text-gray-600 
              text-lg md:text-xl lg:text-2xl xl:text-3xl 
              font-medium fade-right" style="font-family:'Chakra Petch'">
          Engineered Fishbone Grip Technology
        </p>

        <!-- Small Description -->
        <p class="mt-3 text-gray-500 
              text-sm md:text-base 
              max-w-3xl leading-snug animate-down">
          Apex Dura features an advanced rib geometry inspired by the skeletal
          structure of a fish — engineered for superior concrete bonding,
          enhanced anchorage, and structural performance.
        </p>

      </div>
    </section>

    <!-- The engineered section -->

    <section class="relative w-full bg-[#ef1c1c] overflow-hidden">

      <!-- Content Container -->
      <div class="max-w-7xl mx-auto px-6 lg:px-16 py-14 relative">

        <div class="grid lg:grid-cols-2 items-center">

          <!-- LEFT CONTENT -->
          <div class="z-10">

            <!-- Heading -->
            <h2 class="text-white font-extrabold 
                   text-2xl sm:text-3xl lg:text-4xl 
                   leading-tight mb-10 fade-right">
              The Engineering Behind the Grip
            </h2>

            <!-- Cards Grid -->
            <div class="grid sm:grid-cols-2 gap-6 max-w-2xl">

              <!-- Card 1 -->
              <div class="bg-[#ededed] rounded-lg p-5 fade-left">
                <img src="Apex-icons/e-1.png" class="w-6 mb-3" alt="">
                <p class="text-red-600 text-[11px] font-bold tracking-wider">RIB ANGLE</p>
                <p class="text-gray-800 font-semibold text-sm mt-1">
                  60° / 120° Alternating
                </p>
              </div>

              <!-- Card 2 -->
              <div class="bg-[#ededed] rounded-lg p-5 fade-right">
                <img src="Apex-icons/e-2.png" class="w-6 mb-3" alt="">
                <p class="text-red-600 text-[11px] font-bold tracking-wider">RIB PITCH</p>
                <p class="text-gray-800 font-semibold text-sm mt-1">
                  6-8 mm
                </p>
              </div>

              <!-- Card 3 -->
              <div class="bg-[#ededed] rounded-lg p-5 fade-left">
                <img src="Apex-icons/e-3.png" class="w-6 mb-3" alt="">
                <p class="text-red-600 text-[11px] font-bold tracking-wider">RIB DEPTH</p>
                <p class="text-gray-800 font-semibold text-sm mt-1">
                  Min 0.1 × Nominal Diameter
                </p>
              </div>

              <!-- Card 4 -->
              <div class="bg-[#ededed] rounded-lg p-5 fade-right">
                <img src="Apex-icons/e-4.png" class="w-6 mb-3" alt="">
                <p class="text-red-600 text-[11px] font-bold tracking-wider">BOND AREA</p>
                <p class="text-gray-800 font-semibold text-sm mt-1">
                  +18–22% vs Conventional
                </p>
              </div>

            </div>

            <!-- Bottom Full Card -->
            <div class="bg-[#ededed] rounded-lg p-5 mt-6 max-w-2xl fade-up">
              <img src="Apex-icons/e-5.png" class="w-6 mb-3" alt="">
              <p class="text-red-600 text-[11px] font-bold tracking-wider">COMPLIANCE</p>
              <p class="text-gray-800 font-semibold text-sm mt-1">
                BIS 1786 – Fe 550 Grade
              </p>
            </div>

          </div>

        </div>
      </div>

      <!-- RIGHT IMAGE -->
      <div class="hidden lg:block absolute right-0 top-1/2 -translate-y-1/2 fade-left">
        <img src="Apex-Images/holding-steelapex.png" alt="Holding Steel"
          class="h-[480px] xl:h-full w-auto object-contain" />
      </div>

    </section>

    <!-- Resulting-technical advantage -->
    <section class="w-full bg-[#f3f3f3] pt-20 ">

      <div class="max-w-7xl mx-auto px-6 lg:px-16">

        <!-- Heading -->
        <h2 class="text-center text-red-600 
               text-3xl sm:text-4xl lg:text-5xl 
               font-extrabold mb-16 animate-down">
          Resulting Technical Advantages
        </h2>

        <!-- Cards -->
        <div class="grid md:grid-cols-3 gap-10 md:gap-5 lg:gap-10">

          <!-- Card 1 -->
          <div class="bg-white rounded-2xl border border-red-500 
                  p-10 text-center shadow-lg fade-right">

            <div class="w-16 h-16 mx-auto mb-6 
                    flex items-center justify-center 
                    rounded-full bg-red-600">
              <img src="Apex-icons/adv-1.png" class="w-7" alt="">
            </div>

            <h3 class="text-red-600 font-bold text-lg mb-4">
              Mechanical Locking
            </h3>

            <p class="text-gray-600 font-medium text-sm leading-relaxed">
              Angled ribs create multi-directional resistance against slippage under seismic and load stress..
            </p>
          </div>

          <!-- Card 2 -->
          <div class="bg-white rounded-2xl border border-red-500 
                  p-10 text-center shadow-lg fade-up">

            <div class="w-16 h-16 mx-auto mb-6 
                    flex items-center justify-center 
                    rounded-full bg-red-600">
              <img src="Apex-icons/adv-2.png" class="w-7" alt="">
            </div>

            <h3 class="text-red-600 font-bold text-lg mb-4">
              Bond Uniformity
            </h3>

            <p class="text-gray-600 font-medium text-sm leading-relaxed">
              Alternating rib geometry ensures even stress distribution and reduces micro-cracking.
            </p>
          </div>

          <!-- Card 3 -->
          <div class="bg-white rounded-2xl border border-red-500 
                  p-10 text-center shadow-lg fade-right">

            <div class="w-16 h-16 mx-auto mb-6 
                    flex items-center justify-center 
                    rounded-full bg-red-600">
              <img src="Apex-icons/adv-3.png" class="w-7" alt="">
            </div>

            <h3 class="text-red-600 font-bold text-lg mb-4">
              Fast Bond Formation
            </h3>

            <p class="text-gray-600 font-medium text-sm leading-relaxed">
              Optimized rib spacing enables quicker concrete grip and faster anchorage.
            </p>
          </div>

        </div>

      </div>

    </section>

    <!-- Apex stripe -->
      <!-- steel image  -->
    <section class="w-full fade-right mt-20">
      <img src="Apex-Images/apex-stripe.jpg" alt="Apex Steel" class="w-full h-auto object-contain" />
    </section>

    <!-- Build For indian conditions -->
    <section class="w-full  mt-20 ">

      <div class="max-w-7xl mx-auto px-6 lg:px-16">

        <div class="grid lg:grid-cols-2 gap-16 items-center">

          <!-- LEFT IMAGE -->
          <div class="relative hidden lg:block animate-up">

            

            <img src="Apex-Images/steel-factory.jpg" alt="Steel Manufacturing"
              class="w-full object-cover grayscale pl-3" />
          </div>

          <!-- RIGHT CONTENT -->
          <div>

            <!-- Heading -->
            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold leading-tight">
              <span class="text-black fade-left" style="font-family:'Chakra Petch'">BUILD FOR</span><br>
              <span class="text-red-600 font-extrabold fade-right" style="font-family:'Chakra Petch'">
                INDIAN CONDITIONS
              </span>
            </h2>

            <!-- Red underline -->
            <div class="w-30 h-[2px] bg-red-600 mt-6 mb-10 fade-right"></div>

            <!-- Bullet Points -->
            <div class="space-y-8">

              <!-- Item 1 -->
              <div class="flex items-start gap-4">
                <img src="Apex-icons/bic-1.png" class="w-8 mt-1 fade-left" alt="">
                <p class="text-gray-700 fade-right">
                  Heavy RCC usage in infrastructure projects
                </p>
              </div>

              <!-- Item 2 -->
              <div class="flex items-start gap-4">
                <img src="Apex-icons/bic-2.png" class="w-8 mt-1 fade-left" alt="">
                <p class="text-gray-700 fade-right">
                  High humidity coastal and monsoon zones
                </p>
              </div>

              <!-- Item 3 -->
              <div class="flex items-start gap-4">
                <img src="Apex-icons/bic-3.png" class="w-8 mt-1 fade-left" alt="">
                <p class="text-gray-700 fade-right">
                  Fast-paced construction timelines
                </p>
              </div>

              <!-- Item 4 -->
              <div class="flex items-start gap-4">
                <img src="Apex-icons/bic-4.png" class="w-8 mt-1 fade-left" alt="">
                <p class="text-gray-700 fade-right">
                  Seismic activity requirements
                </p>
              </div>

            </div>

            <!-- Performance Box -->
            <div class="mt-12 bg-white shadow-lg relative p-8 animate-up">

              <div class="absolute left-0 top-0 h-full w-2 bg-red-600"></div>

              <p class="text-red-600 font-bold tracking-wider text-sm mb-2 pl-4">
                PERFORMANCE TESTED
              </p>

              <p class="text-gray-700 pl-4">
                In the toughest environments across India
              </p>

            </div>

          </div>

        </div>

      </div>

    </section>

    <!-- The grip of future section -->
     <!-- steel image  -->
    <section class="w-full fade-left mt-20">
      <img src="Apex-Images/steel-full.png" alt="Apex Steel" class="w-full h-auto object-contain" />
    </section>
    <section class="w-full bg-red-600 flex items-center justify-center py-20">

  <div class="text-center px-6">

    <!-- Line 1 -->
    <h1 class="text-white font-extrabold uppercase
               text-4xl sm:text-6xl lg:text-8xl
               leading-tight tracking-wide fade-up">
      THE GRIP
    </h1>

    <!-- Line 2 -->
    <h1 class="text-white font-extrabold uppercase
               text-4xl sm:text-6xl lg:text-8xl
               leading-tight tracking-wide fade-right">
      OF THE
    </h1>

    <!-- Highlight Box -->
    <div class="inline-block bg-white mt-3 px-6 sm:px-10 py-3 sm:py-1">
      <h1 class="text-red-600 font-extrabold uppercase
                 text-4xl sm:text-6xl lg:text-8xl
                 leading-none tracking-wide fade-left">
        FUTURE
      </h1>
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