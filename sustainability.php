<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Sustainability</title>
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
      <img src="Apex-Images/Apex-tmt-banner-image.jpg" class="w-full h-full object-cover"
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

          Sustainability
        </span>
      </div>
    </div>

    <!-- Header Content Overlay -->
    <?php include "includes/header.php"; ?>
  </header>

  <main>


    <section class=" py-10 px-6 md:px-12 lg:px-20">
      <div class="max-w-7xl mx-auto grid lg:grid-cols-2 gap-12 items-center">

        <!-- LEFT CONTENT -->
        <div>
          <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-red-600 mb-6">
            Apex Dura Green Steel For A Sustainable Future
          </h2>

          <h3 class="text-lg md:text-xl font-semibold text-gray-800 mb-6">
            A Better Tomorrow!
          </h3>

          <p class="text-gray-600 leading-relaxed mb-4">
            Apex Dura has exceeded energy reduction targets set by the Bureau of Energy Efficiency, Ministry of Power,
            and Government of India. Our commitment to green steel manufacturing reflects our dedication to community,
            national, and environmental sustainability.
          </p>

        </div>

        <!-- RIGHT IMAGE -->
        
        <div class="relative hidden lg:flex justify-end">
          <div class="w-full max-w-md">
            <img src="Apex-Images/steel-factory.jpg" alt="Steel Structure" class="w-full h-[350px] object-cover 
                rounded-2xl shadow-xl">
          </div>
        </div>

      </div>
    </section>


    <!-- Carousel Section -->
    <section class="w-full py-10">

      <div class="max-w-6xl mx-auto px-6 relative">

        <!-- Slider Wrapper -->
        <div class="overflow-hidden relative">

          <!-- Slides Container -->
          <div id="carousel" class="flex transition-transform duration-700 ease-in-out">

            <!-- CARD 01 -->
            <div class="min-w-full flex justify-center">
              <div class="bg-white rounded-3xl 
                      w-full lg:w-[85%] 
                      px-8 sm:px-12 lg:px-20 py-12 lg:py-14
                      shadow-lg border border-gray-200
                      flex flex-col lg:flex-row 
                      justify-between items-center gap-8 lg:gap-10">

                <div class="max-w-lg text-center lg:text-left">
                  <h3 class="text-3xl font-bold text-red-600 mb-4">
                    Green Tech
                  </h3>
                  <p class="text-gray-600 leading-relaxed">
                    At Apex Dura, we always build to last. That inherently implies our focus on the long term over the
                    short term. That is why, at the heart of all our endeavours is our desire to leverage the available
                    knowledge and the latest technology to be green and be among the top green steel manufacturers in
                    India.
                  </p>
                  <p class="text-gray-600 leading-relaxed mt-4">
                    Our unyielding passion to abide by environmental standards is only matched by our efforts to better
                    them in the industry. We make “Green-Pro Certified” green steel and have increasingly been adopting
                    green tech in all aspects of manufacturing. Our rigorous R&D coupled with field expertise help us
                    build and nurture a sustainable corporate culture.
                  </p>
                </div>

                <div class="text-red-600 font-black 
                        text-[80px] sm:text-[120px] lg:text-[220px]
                        leading-none" style="font-family:'Chakra Petch', sans-serif;">
                  01
                </div>

              </div>
            </div>

            <!-- CARD 02 -->
            <div class="min-w-full flex justify-center">
              <div class="bg-white rounded-3xl 
                      w-full lg:w-[85%] 
                      px-8 sm:px-12 lg:px-20 py-12 lg:py-14
                      shadow-lg border border-gray-200
                      flex flex-col lg:flex-row 
                      justify-between items-center gap-8 lg:gap-10">

                <div class="max-w-lg text-center lg:text-left">
                  <h3 class="text-3xl font-bold text-red-600 mb-4">
                    Environmental Awareness
                  </h3>
                  <p class="text-gray-600 leading-relaxed">
                    Apex Dura recognises that green-house gases pose possibly the greatest threat to the planet today.
                    The steel industry, though an absolute necessity, is frowned upon for its ecological footprint. That
                    is where we step in as a green steel manufacturer.
                  </p>
                  <p class="text-gray-600 leading-relaxed mt-4">
                    Putting our money into our ideals, we have invested in captive power plants based on waste-heat
                    recovery that is run entirely on the residual gases from manufacturing process. On one hand it
                    reduces emission of greenhouse gases (between 5X-20X compared to other steel plants) and, on the
                    other, reduces dependence on external power.
                  </p>
                </div>

                <div class="text-red-600 font-black 
                        text-[80px] sm:text-[120px] lg:text-[220px]
                        leading-none" style="font-family:'Chakra Petch', sans-serif;">
                  02
                </div>

              </div>
            </div>

            <!-- CARD 03 -->
            <div class="min-w-full flex justify-center">
              <div class="bg-white rounded-3xl 
                      w-full lg:w-[85%] 
                      px-8 sm:px-12 lg:px-20 py-12 lg:py-14
                      shadow-lg border border-gray-200
                      flex flex-col lg:flex-row 
                      justify-between items-center gap-8 lg:gap-10">

                <div class="max-w-lg text-center lg:text-left">
                  <h3 class="text-3xl font-bold text-red-600 mb-4">
                    CSR(Corporate Social Responsibility)
                  </h3>
                  <p class="text-gray-600 leading-relaxed">
                    Taking care of the communities that surround us is an extension of the care we take of our
                    environment and ecosystem. As a part of Apex Dura's CSR initiatives, we have contributed towards
                    army, defence, schools, sports and many other fields.
                  </p>
                  <p class="text-gray-600 leading-relaxed mt-4">
                    We have multiple programmes to strengthen and empower the economically underprivileged. We are
                    always on a lookout for newer ways to give back to society that is the basis of our existence.
                  </p>
                </div>

                <div class="text-red-600 font-black 
                        text-[80px] sm:text-[120px] lg:text-[220px]
                        leading-none" style="font-family:'Chakra Petch', sans-serif;">
                  03
                </div>

              </div>
            </div>

            <!-- CARD 04 -->
            <div class="min-w-full flex justify-center">
              <div class="bg-white rounded-3xl 
                      w-full lg:w-[85%] 
                      px-8 sm:px-12 lg:px-20 py-12 lg:py-14
                      shadow-lg border border-gray-200
                      flex flex-col lg:flex-row 
                      justify-between items-center gap-8 lg:gap-10">

                <div class="max-w-lg text-center lg:text-left">
                  <h3 class="text-3xl font-bold text-red-600 mb-4">
                    Zero Wastage
                  </h3>
                  <p class="text-gray-600 leading-relaxed">
                    Waste disposal is an integral part of any steel industry. However, we at Apex Dura have consciously
                    taken efforts to minimise the solid, liquid and gaseous waste to zero. Solid residues and wastes are
                    optimally recycled in the creation of proficient by-products that are commercially viable.
                  </p>
                  <p class="text-gray-600 leading-relaxed mt-4">
                    100% of all our solid residues are utilised in the manufacture of flyash bricks and blocks. Waste
                    from water treatment plants are re-used after carefully maintaining the water quality parameters.
                  </p>
                </div>

                <div class="text-red-600 font-black 
                        text-[80px] sm:text-[120px] lg:text-[220px]
                        leading-none" style="font-family:'Chakra Petch', sans-serif;">
                  04
                </div>

              </div>
            </div>

          </div>
        </div>

        <!-- Arrows (Desktop Only) -->
        <!-- PREV BUTTON -->
        <button onclick="prevSlide()" class="hidden lg:flex items-center justify-center
         absolute left-4 top-1/2 -translate-y-1/2
         w-10 h-10
         rounded-full
         bg-white/90 backdrop-blur-md
         text-gray-800 text-xl font-semibold
         shadow-lg
         border border-gray-200
         hover:bg-red-600 hover:text-white
         hover:scale-110
         transition-all duration-300 ease-in-out">

          &#8249;
        </button>

        <!-- NEXT BUTTON -->
        <button onclick="nextSlide()" class="hidden lg:flex items-center justify-center
         absolute right-4 top-1/2 -translate-y-1/2
         w-10 h-10
         rounded-full
         bg-white/90 backdrop-blur-md
         text-gray-800 text-xl font-semibold
         shadow-lg
         border border-gray-200
         hover:bg-red-600 hover:text-white
         hover:scale-110
         transition-all duration-300 ease-in-out">

          &#8250;
        </button>

      </div>
    </section>

    <script>
      let index = 0;
      const carousel = document.getElementById("carousel");
      const totalSlides = carousel.children.length; // auto count slides
      let autoSlide;

      function updateSlide() {
        carousel.style.transform = `translateX(-${index * 100}%)`;
      }

      function nextSlide() {
        index = (index + 1) % totalSlides;
        updateSlide();
      }

      function prevSlide() {
        index = (index - 1 + totalSlides) % totalSlides;
        updateSlide();
      }

      function startAutoSlide() {
        autoSlide = setInterval(() => {
          nextSlide();
        }, 3000);
      }

      function stopAutoSlide() {
        clearInterval(autoSlide);
      }

      function handleResponsiveSlide() {
        if (window.innerWidth < 1024) {
          startAutoSlide();
        } else {
          stopAutoSlide();
        }
      }

      window.addEventListener("resize", handleResponsiveSlide);
      window.addEventListener("load", handleResponsiveSlide);
    </script>





  </main>

  <!-- footer section -->

  <?php include "includes/footer.php"; ?>

  <script src="Js/Home-slider.js"></script>
  <script src="Js/Mobile-navbar.js"></script>
  <script src="Js/Scroll-Animation.js"></script>
  <script src="Js/Products-carouselcars.js"></script>
  <script src="Js/logo-fading.js"></script>
  <script src="Js/Animation.js"></script>
  <script src="Js/progressbar-script.js"></script>
  <script src="Js/bottom-up-arrow-script.js"></script>









  <!-- Precision Manufacturing Process -->
  <script>
    document.addEventListener("DOMContentLoaded", function () {

      const steps = document.querySelectorAll(".step");
      if (!steps.length) return;

      let currentStep = 0;
      let autoInterval;

      function activateStep(index) {

        steps.forEach((s) => {

          // Dim all
          s.classList.add("opacity-50");

          const left = s.querySelector(".indicator-left");
          const bottom = s.querySelector(".indicator-bottom");
          const bar = s.querySelector(".bar");

          if (left) left.classList.add("hidden");
          if (bottom) bottom.classList.add("hidden");

          if (bar) {
            bar.classList.remove("w-20", "bg-white");
            bar.classList.add("w-14", "bg-white/40");
          }

        });

        // Activate selected
        const active = steps[index];

        active.classList.remove("opacity-50");

        const left = active.querySelector(".indicator-left");
        const bottom = active.querySelector(".indicator-bottom");
        const bar = active.querySelector(".bar");

        if (left) left.classList.remove("hidden");
        if (bottom) bottom.classList.remove("hidden");

        if (bar) {
          bar.classList.remove("w-14", "bg-white/40");
          bar.classList.add("w-20", "bg-white");
        }
      }

      function startAuto() {
        autoInterval = setInterval(() => {
          currentStep = (currentStep + 1) % steps.length;
          activateStep(currentStep);
        }, 3000);
      }

      function restartAuto() {
        clearInterval(autoInterval);
        startAuto();
      }

      steps.forEach((step, index) => {
        step.addEventListener("click", () => {
          currentStep = index;
          activateStep(currentStep);
          restartAuto();
        });
      });

      // Initialize
      activateStep(currentStep);
      startAuto();

    });
  </script>

</body>

</html>