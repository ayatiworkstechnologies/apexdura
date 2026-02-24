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
                <a href="/"
                    class="flex items-center gap-2 text-red-600 px-4 py-2 rounded-md text-sm font-medium transition">
                    <!-- Home Icon -->
                    <img src="Apex-icons/Home.png" alt="Home icon " class="w-4 h-4" />

                    Home
                </a>

                <!-- Arrow -->
                <span class="text-white text-lg">›</span>

                <!-- About -->
                <span
                    class="flex items-center gap-2 bg-red-600 text-white px-4 py-2 rounded-md text-sm font-medium shadow-md">
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


        <section class=" py-16 px-6 md:px-12 lg:px-20">
            <div class="max-w-7xl mx-auto grid lg:grid-cols-2 gap-12 items-center">

                <!-- LEFT CONTENT -->
                <div>
                    <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-red-600 mb-6">
                        Certified High-Strength Steel
                    </h2>

                    <h3 class="text-lg md:text-xl font-semibold text-gray-800 mb-6">
                        Superior Grade Fe550 TMT Bars for Maximum Durability & Flexibility
                    </h3>

                    <p class="text-gray-600 leading-relaxed mb-4">
                        Apex Dura TMT Fe550 Bars are engineered for superior structural performance,
                        combining high tensile strength with exceptional flexibility. Manufactured
                        using advanced thermo-mechanical treatment technology, Apex Dura ensures
                        unmatched durability, safety, and long-lasting reliability for modern
                        construction needs.
                    </p>

                    <p class="text-gray-600 leading-relaxed mb-4">
                        We produce our Fe550 TMT bars from high-grade raw materials, maintaining
                        superior purity and consistent quality standards. Through precision-controlled
                        rolling and quenching processes, we achieve uniform mechanical properties and
                        optimized rib patterns for better bonding with concrete.
                    </p>

                    <p class="text-gray-600 leading-relaxed">
                        With a tough outer surface and a ductile core structure, Apex Dura Fe550 Bars
                        deliver enhanced earthquake resistance, higher load-bearing capacity, and
                        excellent corrosion resistance.
                    </p>
                </div>

                <!-- RIGHT IMAGE -->
                <div class="relative flex justify-center hidden lg:block lg:justify-end">



                    <img src="Apex-Images/steel-factory.jpg" alt="Steel Structure"
                        class="w-full max-w-md lg:max-w-lg object-cover shadow-xl">
                </div>

            </div>
        </section>


<!-- Carousel Section -->
<section class="w-full py-24">

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
              <h3 class="text-xl font-bold text-red-600 mb-4">
                Sustainable Approach
              </h3>
              <p class="text-gray-600 leading-relaxed">
                We integrate eco-friendly materials and processes from inception,
                reducing carbon footprint while maximizing product longevity.
              </p>
            </div>

            <div class="text-red-600 font-black 
                        text-[80px] sm:text-[120px] lg:text-[220px]
                        leading-none"
                 style="font-family:'Chakra Petch', sans-serif;">
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
              <h3 class="text-xl font-bold text-red-600 mb-4">
                Innovative Technology
              </h3>
              <p class="text-gray-600 leading-relaxed">
                Through advanced engineering and automation tools,
                we deliver scalable, future-ready systems built for growth.
              </p>
            </div>

            <div class="text-red-600 font-black 
                        text-[80px] sm:text-[120px] lg:text-[220px]
                        leading-none"
                 style="font-family:'Chakra Petch', sans-serif;">
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
              <h3 class="text-xl font-bold text-red-600 mb-4">
                Expert Team
              </h3>
              <p class="text-gray-600 leading-relaxed">
                Our seasoned professionals ensure precision,
                unmatched support, and customer satisfaction in every project.
              </p>
            </div>

            <div class="text-red-600 font-black 
                        text-[80px] sm:text-[120px] lg:text-[220px]
                        leading-none"
                 style="font-family:'Chakra Petch', sans-serif;">
              03
            </div>

          </div>
        </div>

      </div>
    </div>

    <!-- Arrows (Desktop Only) -->
    <button onclick="prevSlide()" 
            class="hidden lg:flex absolute left-0 top-1/2 -translate-y-1/2 
                    p-3">
      ‹
    </button>

    <button onclick="nextSlide()" 
            class="hidden lg:flex absolute right-0 top-1/2 -translate-y-1/2 
                   p-3">
      ›
    </button>

  </div>
</section>

<script>
  let index = 0;
  const carousel = document.getElementById("carousel");
  const totalSlides = 3;
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

  // Auto-slide only for mobile & tablet
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