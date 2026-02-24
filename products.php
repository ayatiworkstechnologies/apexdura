<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Products</title>
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
  <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
/>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

</head>

<body>
  <!-- Progress bar -->
  <div class="fixed top-0 left-0 w-full h-1 z-[9999]">
    <div id="progressBar" class="h-full w-0 bg-gradient-to-r from-white to-red-500 transition-all duration-150"></div>
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
      <img src="Apex-Images/Products-Banner.jpg" class="w-full h-full object-cover" alt="Investor Corner Banner" />

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

          Products
        </span>
      </div>
    </div>

    <!-- Header Content Overlay -->
    <?php include "includes/header.php"; ?>
  </header>

  <main>
    <section class="py-12 fade-right apex-product-carousel">
  <div class="max-w-6xl mx-auto px-4">
    
    <div class="swiper apexSwiper">
      <div class="swiper-wrapper">

        <!-- Card 1 -->
        <div class="swiper-slide">
          <div class="bg-gray-100 rounded-3xl py-6 shadow-sm hover:shadow-md hover:scale-105 transition duration-300">
            <div class="mb-4 px-6">
              <img src="Apex-icons/Logo-icon.png" alt="icon" class="w-10 h-10 object-contain" />
            </div>
            <div class="flex justify-center items-center mb-6">
              <img src="Apex-Images/p-1.png" alt="Construction Bars" class="w-full object-contain" />
            </div>
            <h3 class="text-center text-red-600 font-semibold text-lg">
              Construction Bars
            </h3>
          </div>
        </div>

        <!-- Card 2 -->
        <div class="swiper-slide">
          <div class="bg-gray-100 rounded-3xl py-6 shadow-sm hover:shadow-md hover:scale-105 transition duration-300">
            <div class="mb-4 px-6">
              <img src="Apex-icons/Logo-icon.png" alt="icon" class="w-10 h-10 object-contain" />
            </div>
            <div class="flex justify-center items-center mb-6">
              <img src="Apex-Images/p-2.png" alt="Billets" class="w-full object-contain" />
            </div>
            <h3 class="text-center text-red-600 font-semibold text-lg">
              Billets
            </h3>
          </div>
        </div>

        <!-- Card 3 -->
        <div class="swiper-slide">
          <div class="bg-gray-100 rounded-3xl py-6 shadow-sm hover:shadow-md hover:scale-105 transition duration-300">
            <div class="mb-4 px-6">
              <img src="Apex-icons/Logo-icon.png" alt="icon" class="w-10 h-10 object-contain" />
            </div>
            <div class="flex justify-center items-center mb-6">
              <img src="Apex-Images/p-3.png" alt="Round Bars" class="w-full object-contain" />
            </div>
            <h3 class="text-center text-red-600 font-semibold text-lg">
              Round Bars
            </h3>
          </div>
        </div>

      </div>
    </div>

  </div>
</section>



    <!-- Technical Specification section -->
    <section class="bg-white py-24 overflow-hidden">
      <div class="max-w-7xl mx-auto grid md:grid-cols-2 gap-16 px-6 items-center">
        <!-- ================= LEFT ================= -->
        <div>
          <h2 class="text-4xl font-bold text-red-600 mb-12 fade-left">
            Technical Specifications
          </h2>

          <div class="relative h-[420px] md:h-[410px] lg:h-[365px] overflow-hidden fade-right">
            <!-- ===== Slide 1 ===== -->
            <div class="spec-slide active space-y-8">
              <div class="spec-item">
                <h4 class="font-semibold text-lg">Grade (Fe 500 / Fe 550)</h4>
                <p class="text-gray-600 text-sm">
                  High-Strength steel grades suitable for modern construction
                  needs.
                </p>
                <span class="spec-underline"></span>
              </div>
              <div class="spec-item">
                <h4 class="font-semibold text-lg">BIS Standard (IS 1786)</h4>
                <p class="text-gray-600 text-sm">
                  Manufactured in compliance with national quality standards.
                </p>
                <span class="spec-underline"></span>
              </div>
              <div class="spec-item">
                <h4 class="font-semibold text-lg">High Ductility</h4>
                <p class="text-gray-600 text-sm">
                  Designed to absorb stress during seismic activity.
                </p>
                <span class="spec-underline"></span>
              </div>
              <div class="spec-item">
                <h4 class="font-semibold text-lg">Enhanced Grip</h4>
                <p class="text-gray-600 text-sm">
                  Improves structural stability.
                </p>
                <span class="spec-underline"></span>
              </div>
            </div>

            <!-- ===== Slide 2 ===== -->
            <div class="spec-slide space-y-8">
              <div class="spec-item">
                <h4 class="font-semibold text-lg">Corrosion Resistant</h4>
                <p class="text-gray-600 text-sm">Long-lasting performance.</p>
                <span class="spec-underline"></span>
              </div>
              <div class="spec-item">
                <h4 class="font-semibold text-lg">Better Flexibility</h4>
                <p class="text-gray-600 text-sm">High bend tolerance.</p>
                <span class="spec-underline"></span>
              </div>
              <div class="spec-item">
                <h4 class="font-semibold text-lg">Thermal Strength</h4>
                <p class="text-gray-600 text-sm">
                  Handles temperature variations.
                </p>
                <span class="spec-underline"></span>
              </div>
              <div class="spec-item">
                <h4 class="font-semibold text-lg">Durable Finish</h4>
                <p class="text-gray-600 text-sm">Extended lifecycle.</p>
                <span class="spec-underline"></span>
              </div>
            </div>

            <!-- ===== Slide 3 ===== -->
            <div class="spec-slide space-y-8">
              <div class="spec-item">
                <h4 class="font-semibold text-lg">Advanced Bonding</h4>
                <p class="text-gray-600 text-sm">Strong concrete grip.</p>
                <span class="spec-underline"></span>
              </div>
              <div class="spec-item">
                <h4 class="font-semibold text-lg">High Stability</h4>
                <p class="text-gray-600 text-sm">
                  Improved structure strength.
                </p>
                <span class="spec-underline"></span>
              </div>
              <div class="spec-item">
                <h4 class="font-semibold text-lg">Premium Quality</h4>
                <p class="text-gray-600 text-sm">Industry certified.</p>
                <span class="spec-underline"></span>
              </div>
              <div class="spec-item">
                <h4 class="font-semibold text-lg">Reliable Performance</h4>
                <p class="text-gray-600 text-sm">Consistent results.</p>
                <span class="spec-underline"></span>
              </div>
            </div>
          </div>

          <!-- underline progress -->
          <div class="flex gap-6 mt-10">
            <span class="progress-bar"></span>
            <span class="progress-bar"></span>
            <span class="progress-bar"></span>
          </div>
        </div>

        <!-- ================= RIGHT ================= -->
        <div class="relative h-[420px] lg:h-[520px] overflow-hidden animate-up">
          <div class="absolute inset-0 overflow-hidden">
            <img src="Apex-Images/ts-1.jpg" class="spec-img active-img" />
            <img src="Apex-Images/ts-2.jpg" class="spec-img" />
            <img src="Apex-Images/ts-3.jpg" class="spec-img" />
          </div>
        </div>
      </div>
    </section>

    <!--Precision Manufacturing Process Laptop SECTION -->
    <section class="bg-red-600 text-white py-16 hidden lg:block">
      <div class="max-w-7xl mx-auto px-6 lg:px-12">
        <div class="grid lg:grid-cols-12 gap-10 items-start">
          <!-- LEFT BIG IMAGE -->
          <div class="lg:col-span-4 animate-down">
            <img src="Apex-Images/pmp-1.png" class="w-full h-[420px] object-cover" />

            <h3 class="mt-6 text-2xl font-semibold leading-snug">
              Precision Manufacturing <br />
              Process
            </h3>
          </div>

          <!-- RIGHT CONTENT -->
          <div class="lg:col-span-8 relative">
            <!-- BASE GREY TIMELINE -->
            <div class="absolute left-8 top-20 bottom-0 w-[2px] bg-white/30"></div>

            <h2 class="text-3xl font-bold mb-10 pl-16 fade-up">
              Precision Manufacturing Process
            </h2>

            <!-- STEPS -->
            <div id="steps" class="space-y-8 fade-in">
              <!-- STEP 01 (ACTIVE DEFAULT) -->
              <div class="step relative flex items-center justify-between gap-6 py-6 pl-16 cursor-pointer"
                data-img="Apex-Images/pmp-2.png">
                <!-- CONNECTED WHITE LINE -->
                <span class="indicator-left absolute left-8 top-0 bottom-0 w-[2px] bg-white"></span>

                <!-- bottom divider -->
                <span class="indicator-bottom absolute left-13 right-0 bottom-0 h-[2px] bg-white"></span>

                <div class="flex items-start gap-6 flex-1">
                  <span class="num text-3xl font-bold">
                    <h3>01</h3>
                  </span>
                  <span class="bar w-20 h-[2px] bg-white mt-4 transition-all"></span>

                  <div>
                    <h4 class="font-semibold text-lg">
                      Raw Material Selection
                    </h4>
                    <p class="text-sm text-white/90 mt-1">
                      Carefully Sourced Raw Materials To Ensure Strength,
                      Purity And Consistency.
                    </p>
                  </div>
                </div>

                <img class="row-img w-28 h-20 object-cover rounded shadow-lg" />
              </div>

              <!-- STEP 02 -->
              <div class="step opacity-50 relative flex items-center justify-between gap-6 py-6 pl-16 cursor-pointer"
                data-img="Apex-Images/pmp-3.png">
                <span class="indicator-left hidden absolute left-8 top-0 bottom-0 w-[2px] bg-white"></span>
                <span class="indicator-bottom hidden absolute left-13 right-0 bottom-0 h-[2px] bg-white"></span>

                <div class="flex items-start gap-6 flex-1">
                  <span class="num text-3xl font-bold">
                    <h3>02</h3>
                  </span>
                  <span class="bar w-14 h-[2px] bg-white/40 mt-4 transition-all"></span>

                  <div>
                    <h4 class="font-semibold text-lg">Advanced Rolling</h4>
                    <p class="text-sm text-white/90 mt-1">
                      Precision Rolling Processes Shape Steel For Uniform
                      Strength And Performance.
                    </p>
                  </div>
                </div>

                <img class="row-img hidden w-28 h-20 object-cover rounded shadow-lg" />
              </div>

              <!-- STEP 03 -->
              <div class="step opacity-50 relative flex items-center justify-between gap-6 py-6 pl-16 cursor-pointer"
                data-img="Apex-Images/pmp-4.png">
                <span class="indicator-left hidden absolute left-8 top-0 bottom-0 w-[2px] bg-white"></span>
                <span class="indicator-bottom hidden absolute left-13 right-0 bottom-0 h-[2px] bg-white"></span>

                <div class="flex items-start gap-6 flex-1">
                  <span class="num text-3xl font-bold">
                    <h3>03</h3>
                  </span>
                  <span class="bar w-14 h-[2px] bg-white/40 mt-4 transition-all"></span>

                  <div>
                    <h4 class="font-semibold text-lg">
                      Quenching & Tempering
                    </h4>
                    <p class="text-sm text-white/90 mt-1">
                      Controlled Heat Treatment Enhances Ductility, Toughness
                      And Durability.
                    </p>
                  </div>
                </div>

                <img class="row-img hidden w-28 h-20 object-cover rounded shadow-lg" />
              </div>

              <!-- STEP 04 -->
              <div class="step opacity-50 relative flex items-center justify-between gap-6 py-6 pl-16 cursor-pointer"
                data-img="Apex-Images/pmp-5.png">
                <span class="indicator-left hidden absolute left-8 top-0 bottom-0 w-[2px] bg-white"></span>
                <span class="indicator-bottom hidden absolute left-13 right-0 bottom-0 h-[2px] bg-white"></span>

                <div class="flex items-start gap-6 flex-1">
                  <span class="num text-3xl font-bold">
                    <h3>04</h3>
                  </span>
                  <span class="bar w-14 h-[2px] bg-white/40 mt-4 transition-all"></span>

                  <div>
                    <h4 class="font-semibold text-lg">Quality Testing</h4>
                    <p class="text-sm text-white/90 mt-1">
                      Rigorous Testing Ensures Compliance With BIS Standards
                      And Reliability.
                    </p>
                  </div>
                </div>

                <img class="row-img hidden w-28 h-20 object-cover rounded shadow-lg" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ========================================= -->
    <!-- Precision Manufacturing Process MOBILE + TABLET LAYOUT ( -->
    <!-- ========================================= -->
    <section class="bg-red-600 text-white py-12 lg:hidden">
      <div class="max-w-7xl mx-auto px-5 sm:px-6">
        <!-- Image -->
        <img src="Apex-Images/pmp-1.png" class="w-full h-60 sm:h-80 object-cover rounded-lg mb-8 fade-in" />

        <h2 class="text-2xl sm:text-3xl font-bold mb-8 fade-left">
          Precision Manufacturing Process
        </h2>

        <!-- Steps stacked cards -->
        <div class="space-y-6">
          <!-- Step -->
          <div class="bg-white/10 rounded-lg p-5 flex gap-4 items-start fade-left">
            <span class="text-2xl font-bold">
              <h3>01</h3>
            </span>
            <div>
              <h4 class="font-semibold">Raw Material Selection</h4>
              <p class="text-sm text-white/80 mt-1">
                Carefully sourced raw materials to ensure strength, purity and
                consistency.
              </p>
            </div>
          </div>

          <div class="bg-white/10 rounded-lg p-5 flex gap-4 items-start fade-right">
            <span class="text-2xl font-bold">
              <h3>02</h3>
            </span>
            <div>
              <h4 class="font-semibold">Advanced Rolling</h4>
              <p class="text-sm text-white/80 mt-1">
                Precision rolling processes shape steel for uniform strength
                and performance.
              </p>
            </div>
          </div>

          <div class="bg-white/10 rounded-lg p-5 flex gap-4 items-start fade-left">
            <span class="text-2xl font-bold">
              <h3>03</h3>
            </span>
            <div>
              <h4 class="font-semibold">Quenching & Tempering</h4>
              <p class="text-sm text-white/80 mt-1">
                Controlled heat treatment enhances ductility, toughness and
                durability.
              </p>
            </div>
          </div>

          <div class="bg-white/10 rounded-lg p-5 flex gap-4 items-start fade-right">
            <span class="text-2xl font-bold">
              <h3>04</h3>
            </span>
            <div>
              <h4 class="font-semibold">Quality Testing</h4>
              <p class="text-sm text-white/80 mt-1">
                Rigorous testing ensures compliance with BIS standards and
                reliability.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Commercial Building Structures -->
    <section class="w-full bg-white py-16 lg:py-7">
      <div class="max-w-7xl mx-auto px-6 lg:px-12">
        <div class="grid lg:grid-cols-2 gap-10 lg:gap-20 items-center">
          <!-- ================= LEFT CONTENT ================= -->
          <div>
            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-red-600 leading-tight mb-6 fade-left">
              Commercial Building <br />
              Structures
            </h2>

            <p class="text-gray-500 text-sm sm:text-base leading-relaxed mb-6 max-w-lg fade-right">
              Engineered To Perform Across Diverse Construction Environments,
              Delivering Strength, Durability, And Long-Term Reliability For
              Every Structure.
            </p>

            <!-- underline -->
            <div class="w-32 h-[2px] bg-black"></div>
          </div>

          <!-- ================= RIGHT IMAGE ================= -->
          <div class="relative w-full animate-down">
            <img src="Apex-Images/Commercial-Building-Structures.jpg" alt=""
              class="w-full h-[240px] sm:h-[300px] lg:h-[250px] object-cover rounded-md shadow-lg" />
          </div>
        </div>
      </div>
    </section>

    <!-- cards-section -->
    <section class="bg-white py-6 px-6 lg:px-16 animate-up">
      <div class="max-w-7xl mx-auto">
        <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-5">
          <!-- Card -->
          <div
            class="group bg-white p-6 rounded-xl transition-all duration-300 hover:-translate-y-3 hover:shadow-2xl cursor-pointer">
            <h3 class="font-semibold text-lg mb-3 relative inline-block">
              Residential Buildings
              <span
                class="absolute left-0 -bottom-1 h-[3px] w-10 bg-red-600 group-hover:w-full transition-all duration-300"></span>
            </h3>
            <p class="text-gray-500 text-sm leading-relaxed mt-3">
              Ideal For Homes And Housing Projects Requiring Safety, Strength,
              And Durability.
            </p>
          </div>

          <!-- Card -->
          <div
            class="group bg-white p-6 rounded-xl transition-all duration-300 hover:-translate-y-3 hover:shadow-2xl cursor-pointer">
            <h3 class="font-semibold text-lg mb-3 relative inline-block">
              Commercial Structures
              <span
                class="absolute left-0 -bottom-1 h-[3px] w-10 bg-red-600 group-hover:w-full transition-all duration-300"></span>
            </h3>
            <p class="text-gray-500 text-sm leading-relaxed mt-3">
              Supports Offices, Retail Spaces, And Complexes With Reliable
              Load-Bearing Performance.
            </p>
          </div>

          <!-- Card -->
          <div
            class="group bg-white p-6 rounded-xl transition-all duration-300 hover:-translate-y-3 hover:shadow-2xl cursor-pointer">
            <h3 class="font-semibold text-lg mb-3 relative inline-block">
              Infrastructure Projects
              <span
                class="absolute left-0 -bottom-1 h-[3px] w-10 bg-red-600 group-hover:w-full transition-all duration-300"></span>
            </h3>
            <p class="text-gray-500 text-sm leading-relaxed mt-3">
              Designed For Bridges, Roads, And Public Works Demanding High
              Structural Integrity.
            </p>
          </div>

          <!-- Card -->
          <div
            class="group bg-white p-6 rounded-xl transition-all duration-300 hover:-translate-y-3 hover:shadow-2xl cursor-pointer">
            <h3 class="font-semibold text-lg mb-3 relative inline-block">
              High-Rise Construction
              <span
                class="absolute left-0 -bottom-1 h-[3px] w-10 bg-red-600 group-hover:w-full transition-all duration-300"></span>
            </h3>
            <p class="text-gray-500 text-sm leading-relaxed mt-3">
              Provides Superior Strength And Ductility For Tall Buildings And
              Vertical Developments.
            </p>
          </div>

          <!-- Card -->
          <div
            class="group bg-white p-6 rounded-xl transition-all duration-300 hover:-translate-y-3 hover:shadow-2xl cursor-pointer">
            <h3 class="font-semibold text-lg mb-3 relative inline-block">
              Industrial Facilities
              <span
                class="absolute left-0 -bottom-1 h-[3px] w-10 bg-red-600 group-hover:w-full transition-all duration-300"></span>
            </h3>
            <p class="text-gray-500 text-sm leading-relaxed mt-3">
              Suitable For Factories And Plants Requiring Robust And
              Long-Lasting Construction Support.
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- Ready to Build with Confidence? -->
    <section class="w-full">
      <div class="grid lg:grid-cols-[1fr_2fr] min-h-[420px] lg:min-h-[520px]">
        <!-- ================= LEFT IMAGE ================= -->
        <div class="relative h-[320px] lg:h-auto fade-left">
          <img src="Apex-Images/close-up-bridge.jpg" class="w-full h-full object-cover" alt="" />
        </div>

        <!-- ================= RIGHT RED PANEL ================= -->
        <div class="bg-red-600 flex items-center justify-center fade-right">
          <div class="w-full max-w-2xl text-white px-6 py-16">
            <!-- Heading -->
            <h2 class="text-3xl lg:text-5xl font-extrabold leading-tight mb-6 text-start">
              Ready to Build with <br />
              Confidence?
            </h2>

            <!-- Subtitle -->
            <p class="text-white/90 mb-8 text-sm lg:text-base text-start">
              Let Apex help you choose the right TMT bars for your next
              project.
            </p>

            <!-- Button -->
            <button
              class="bg-white text-red-600 font-semibold px-6 py-3 rounded flex items-center justify-start gap-3 hover:gap-5 transition-all duration-300">
              Get A Free Estimate
              <img src="Apex-icons/Next-large.png" class="w-4 h-4" alt="" />
            </button>
          </div>
        </div>
      </div>
    </section>
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

<!-- products carousel slides -->
<script>
  const apexSwiper = new Swiper(".apexSwiper", {
    spaceBetween: 20,
    autoplay: {
      delay: 3000, // 3 seconds
      disableOnInteraction: false,
      pauseOnMouseEnter: true,
    },
    breakpoints: {
      0: {
        slidesPerView: 1, // mobile
      },
      640: {
        slidesPerView: 2, // tablet
      },
      1024: {
        slidesPerView: 3, // desktop
      },
    },
  });
</script>





  <!-- Slider animation -->
  <script>
    const slides = document.querySelectorAll(".spec-slide");
    const images = document.querySelectorAll(".spec-img");
    const bars = document.querySelectorAll(".progress-bar");

    let index = 0;
    const duration = 5000;

    /* ---------- Slide switching ---------- */
    function showSlide(i) {
      slides.forEach((s) => s.classList.remove("active"));
      images.forEach((img) => img.classList.remove("active-img"));
      bars.forEach((b) => b.classList.remove("fill"));

      slides[i].classList.add("active");
      images[i].classList.add("active-img");
      bars[i].classList.add("fill");

      /* ⭐ important: auto activate first item of new slide */
      const items = slides[i].querySelectorAll(".spec-item");
      items.forEach((it) => it.classList.remove("active"));
      if (items[0]) items[0].classList.add("active");
    }

    /* ---------- Auto carousel ---------- */
    setInterval(() => {
      index = (index + 1) % slides.length;
      showSlide(index);
    }, duration);

    showSlide(0);

    /* ---------- Underline click (scoped per slide) ---------- */
    slides.forEach((slide) => {
      const items = slide.querySelectorAll(".spec-item");

      items.forEach((item) => {
        item.addEventListener("click", () => {
          items.forEach((i) => i.classList.remove("active"));
          item.classList.add("active");
        });
      });
    });
  </script>

  <!-- Precision Manufacturing Process -->
  <script>
  const steps = document.querySelectorAll(".step");
  let currentStep = 0;
  let autoInterval;

  function activateStep(index) {
    steps.forEach((s) => {
      s.classList.add("opacity-50");

      s.querySelector(".indicator-left").classList.add("hidden");
      s.querySelector(".indicator-bottom").classList.add("hidden");
      s.querySelector(".row-img").classList.add("hidden");

      const bar = s.querySelector(".bar");
      bar.classList.remove("w-20", "bg-white");
      bar.classList.add("w-14", "bg-white/40");
    });

    const step = steps[index];
    step.classList.remove("opacity-50");

    step.querySelector(".indicator-left").classList.remove("hidden");
    step.querySelector(".indicator-bottom").classList.remove("hidden");
    step.querySelector(".row-img").classList.remove("hidden");

    const bar = step.querySelector(".bar");
    bar.classList.remove("w-14", "bg-white/40");
    bar.classList.add("w-20", "bg-white");
  }

  // Set initial images and click events
  steps.forEach((step, index) => {
    const img = step.querySelector(".row-img");
    img.src = step.dataset.img;

    step.addEventListener("click", () => {
      currentStep = index;
      activateStep(currentStep);
      restartAuto(); // restart timer on manual click
    });
  });

  function startAuto() {
    autoInterval = setInterval(() => {
      currentStep = (currentStep + 1) % steps.length;
      activateStep(currentStep);
    }, 3000); // 3 seconds
  }

  function restartAuto() {
    clearInterval(autoInterval);
    startAuto();
  }

  // Initialize
  activateStep(currentStep);
  startAuto();
</script>

</body>

</html>