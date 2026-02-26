<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Apex Dura</title>
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
    <!-- Carousel -->
    <div class="relative w-full h-[320px] sm:h-[420px] md:h-[520px] overflow-hidden">
      <video src="Apex-videos/Apex-video.mp4" class="w-full h-full object-cover" autoplay muted loop playsinline>
      </video>
    </div>


    <!-- Header Content Overlay -->
    <?php include "includes/header.php"; ?>

  </header>

  <main>
    <!-- ================= RED BAR ================= -->

    <section class="w-full bg-red-600">
      <div class="flex flex-col sm:flex-row sm:items-center px-4 sm:px-6 py-4 sm:py-0 sm:h-[70px]">

        <!-- Heading -->
        <h2 class="text-white text-lg sm:text-xl md:text-xl font-bold whitespace-nowrap hidden md:block fade-left">
          Welcome to Apex <br> Steel !
        </h2>
        <h2 class="text-white text-lg sm:text-xl md:text-xl font-bold whitespace-nowrap md:hidden fade-left">
          Welcome to Apex Steel !
        </h2>

        <!-- Divider (hidden on mobile) -->
        <div class="hidden sm:block h-10 w-px bg-white opacity-80 mx-4 md:mx-10 fade-right"></div>

        <!-- Description -->
        <p
          class="text-white text-xs sm:text-sm md:text-[11px] lg:text-[14px] font-light leading-relaxed mt-2 sm:mt-0 max-w-6xl fade-right">
          Powered by next-gen TMT technology, we deliver superior quality bars at the right price, supported by a
          reliable network that keeps your projects moving seamlessly.
        </p>

      </div>
    </section>

    <!-- steel image  -->
    <section class="w-full py-12 animate-down">
      <img src="Apex-Images/steel-full.png" alt="Apex Steel" class="w-full h-auto object-contain" />
    </section>


    <!-- ================= FEATURE CARDS ================= -->
    <!-- Feature card (closer to top) -->
    <div class="max-w-6xl mx-auto px-4 sm:px-6 mt-10 fade-up">
      <div
        class="bg-white rounded-2xl shadow-lg grid grid-cols-1 md:grid-cols-4 divide-y md:divide-y-0 md:divide-x divide-black/10 overflow-hidden border border-[red]">
        <!-- Card -->
        <div class="p-6 transition-all duration-300 ease-out hover:-translate-y-3 hover:shadow-2xl hover:bg-gray-50">
          <h4 class="text-red-600 font-bold mb-2 text-xl fade-left">
            BIS Certified
          </h4>
          <p class="text-gray-600 text-sm leading-relaxed font-bold fade-right">
            Complies with national quality and safety standards.
          </p>
        </div>

        <div class="p-6 transition-all duration-300 ease-out hover:-translate-y-3 hover:shadow-2xl hover:bg-gray-50">
          <h4 class="text-red-600 font-bold mb-2 text-xl fade-left">
            Advanced Technology
          </h4>
          <p class="text-gray-600 text-sm leading-relaxed font-bold fade-right">
            Manufactured using modern processes for consistent strength.
          </p>
        </div>

        <div class="p-6 transition-all duration-300 ease-out hover:-translate-y-3 hover:shadow-2xl hover:bg-gray-50">
          <h4 class="text-red-600 font-bold mb-2 text-xl fade-left">
            Anti-Corrosion
          </h4>
          <p class="text-gray-600 text-sm leading-relaxed font-bold fade-right">
            Special coating protects steel from rust and damage.
          </p>
        </div>

        <div class="p-6 transition-all duration-300 ease-out hover:-translate-y-3 hover:shadow-2xl hover:bg-gray-50">
          <h4 class="text-red-600 font-bold mb-2 text-xl fade-left">
            Best Grip
          </h4>
          <p class="text-gray-600 text-sm leading-relaxed font-bold fade-right">
            Optimized rib pattern ensures strong concrete bonding.
          </p>
        </div>
      </div>
    </div>


    <!-- Hero-paragraph section  -->
    <section class="w-full py-12 md:py-15">
      <div class="max-w-7xl mx-auto px-5 sm:px-6">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-10 items-center">
          <!-- LEFT CONTENT -->
          <div>
            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-red-600 leading-tight mb-6 fade-left">
              Engineering Strength Behind India's Modern Infrastructure Growth
              Today
            </h1>

            <p class="text-gray-600 text-sm sm:text-base lg:text-lg max-w-xl mb-6 fade-left">
              Precision manufacturing, world-class facilities, and uncompromising quality control.Built to deliver
              consistency, scale, and strength across every project.
            </p>

            <div class="flex flex-wrap gap-3">
              <span
                class="bg-red-600 text-white text-xs sm:text-sm px-3 py-1 rounded-sm font-light fade-left">Strength</span>
              <span
                class="bg-red-600 text-white text-xs sm:text-sm px-3 py-1 rounded-sm font-light fade-left">Innovation</span>
              <span
                class="bg-red-600 text-white text-xs sm:text-sm px-3 py-1 rounded-sm font-light fade-left">Durability</span>
            </div>
            <div class="mt-10 fade-right">
              <a href="aboutus.php"
                class="inline-flex items-center gap-2  text-white bg-red-600 font-bold text-sm px-4 py-2 rounded-md transition hover:-translate-y-[2px] hover:shadow-lg">
                <h3>Learn More</h3>
                <img src="Apex-icons/next-white.png" alt="next" class="w-3" />
              </a>
            </div>
          </div>

          <!-- RIGHT IMAGE -->
          <div class="flex justify-center lg:ml-8 fade-down">
            <svg viewBox="0 0 470 580" width="370" height="470" xmlns="http://www.w3.org/2000/svg">
              <defs>
                <mask id="apexMask">
                  <rect width="100%" height="100%" fill="black" />
                  <path fill="white"
                    d="M205.807 109.249L444.736 285.06L438.7 212.98L235.02 0L29.5134 218.698L24.2896 280.696L205.807 109.249Z" />
                  <path fill="white"
                    d="M453.221 385.398L447.997 323.6L192.331 161.834L20.907 321.393L15.6324 383.893L160.887 267.622L453.221 385.398Z" />
                  <path fill="white"
                    d="M461.222 480.416L456.556 424.889L147.383 323.666L12.5262 420.324L7.30237 482.573L117.714 429.303L461.222 480.416Z" />
                  <path fill="white"
                    d="M468.881 571.256L464.621 520.494L97.0729 481.721L4.20953 519.341L0 569.1V572.41H469.997V562.83L468.881 571.256Z" />
                </mask>
              </defs>

              <!-- Video inside mask -->
              <foreignObject width="100%" height="100%" mask="url(#apexMask)">
                <video src="Apex-videos/Apex-video.mp4" autoplay muted loop playsinline
                  style="width:100%; height:100%; object-fit:cover;"></video>
              </foreignObject>
            </svg>
          </div>
        </div>
      </div>
    </section>

    <!-- steel image  -->
    <section class="w-full py-5 animate-up">
      <img src="Apex-Images/steel-full.png" alt="Apex Steel" class="w-full h-auto object-contain" />
    </section>

    <!-- Products section -->
    <section class="w-full py-6">
      <div class="max-w-7xl mx-auto px-6">
        <h2 class="text-3xl font-bold text-red-600 mb-3 fade-left">
          Products
        </h2>

        <p class="text-gray-500 max-w-2xl fade-right">
          High-performance steel solutions engineered for strength,
          durability, and reliability.
        </p>
      </div>
    </section>

    <!-- Cards section -->
    <section>
      <div class="relative max-w-7xl mx-auto mt-10 px-4 fade-right">

        <!-- Prev Button -->
        <button id="apxPrevBtn"
          class="absolute left-0 top-1/2 -translate-y-1/2 z-20 w-10 h-10 flex items-center justify-center cursor-pointer xl:hidden">
          <img src="Apex-icons/Prev-Arrow.png" class="w-5 h-5" alt="Prev" />
        </button>

        <!-- Next Button -->
        <button id="apxNextBtn"
          class="absolute right-0 top-1/2 -translate-y-1/2 z-20 w-10 h-10 flex items-center justify-center cursor-pointer xl:hidden">
          <img src="Apex-icons/next-Arrow.png" class="w-5 h-5" alt="Next" />
        </button>

        <!-- Viewport -->
        <div class="overflow-hidden">
          <div id="apxCarouselTrack" class="flex transition-transform duration-500 ease-in-out">

            <!-- Slide 1 -->
            <div class="min-w-full md:min-w-1/2 lg:min-w-1/3 p-4 flex justify-center">
              <div class="w-full max-w-xs bg-gray-100 rounded-2xl shadow-md p-5">
                <img src="Apex-icons/Logo-icon.png" class="h-6 mb-8" />
                <img src="Apex-icons/ConstructionBars-icon.png" class="h-8 w-8 mb-4 " />
                <h3 class="text-lg font-semibold text-gray-800 mb-2">Construction Bars</h3>
                <p class="text-sm text-gray-500 mb-6">
                  TMT 500 and 550 Bars <br />
                  (Anti Corrosion) EQR Bars <br>
                  (Earthquake Resistant).
                </p>
                <img src="Apex-Images/card-bg-1.png" class="w-full object-contain" />
              </div>
            </div>

            <!-- Slide 2 -->
            <div class="min-w-full md:min-w-1/2 lg:min-w-1/3 p-4 flex justify-center">
              <div class="w-full max-w-xs bg-gray-100 rounded-2xl shadow-md p-5">
                <img src="Apex-icons/Logo-icon.png" class="h-6 mb-8" />
                <img src="Apex-icons/Roundedbars-icon.png" class="h-8 w-8 mb-4" />
                <h3 class="text-lg font-semibold text-gray-800 mb-2">Round Bars</h3>
                <p class="text-sm text-gray-500 mb-6">
                  Anti Corrosion EQR Bars<br />
                  Earthquake Resistance
                </p>
                <img src="Apex-Images/card-bg-2.png" class="w-full object-contain" />
              </div>
            </div>

            <!-- Slide 3 -->
            <div class="min-w-full md:min-w-1/2 lg:min-w-1/3 p-4 flex justify-center">
              <div class="w-full max-w-xs bg-gray-100 rounded-2xl shadow-md p-5">
                <img src="Apex-icons/Logo-icon.png" class="h-6 mb-8" />
                <img src="Apex-icons/Billets-icon.png" class="h-8 w-8 mb-4" />
                <h3 class="text-lg font-semibold text-gray-800 mb-2">Billets</h3>
                <p class="text-sm text-gray-500 mb-6">
                  Mild and Carbon Steel, Low <br />
                  Alloy Steel IOOxlOO , IOx10 , <br>
                  160 x l60 sq. mm.
                </p>
                <img src="Apex-Images/card-bg-3.png" class="w-full object-contain" />
              </div>
            </div>

          </div>
        </div>
      </div>
    </section>

    <!-- Rib Revolution -->
    <section class="relative  overflow-hidden">
      <div class="max-w-8xl mx-auto  py-16 lg:py-24 grid lg:grid-cols-2 items-center">

        <!-- LEFT CONTENT -->
        <div class="z-10 px-6 lg:px-18 xl:px-35">
          <h1 class="text-4xl lg:text-5xl font-extrabold leading-tight text-gray-900 fade-left">
            The <span class="text-red-600" style="font-family: 'chakra petch';">Rib</span><br />
            Revolution
          </h1>

          <div class="mt-4 flex items-center gap-3 fade-right">
            <div class="h-[2px] w-10 bg-red-600"></div>
            <p class="text-xs tracking-[0.3em] uppercase text-red-600 font-semibold">
              Advanced Engineering
            </p>
          </div>

          <p class="mt-5 text-gray-500 max-w-md text-sm leading-relaxed fade-left">
            Advanced fishbone rib geometry engineered for superior bonding performance in
            high-stress structural environments.
          </p>

          <a href="rib-technology.php">
            <button
              class="mt-6 bg-red-600 cursor-pointer hover:bg-red-600 text-white text-sm font-semibold px-6 py-3 rounded-md transition-all duration-300 shadow-md hover:bg-red-700 fade-left">
              Explore Rib Technology →
            </button>
          </a>



          <!-- Bottom Features -->
          <div class="mt-10 flex flex-col sm:flex-row lg:flex-nowrap 
            gap-6 lg:gap-10 text-xs text-gray-600 fade-down">

            <div class="flex items-center gap-2 whitespace-nowrap">
              <img src="Apex-icons/Rib-1.png" class="w-4" alt="">
              BIS 1786 Compliant
            </div>

            <div class="flex items-center gap-2 whitespace-nowrap">
              <img src="Apex-icons/Rib-2.png" class="w-4" alt="">
              FEA Designed & Tested
            </div>

            <div class="flex items-center gap-2 whitespace-nowrap">
              <img src="Apex-icons/Rib-3.png" class="h-4" alt="">
              18–22% Higher Bond Strength
            </div>

          </div>
        </div>

        <!-- RIGHT IMAGE -->
        <div class="relative mt-12 lg:mt-0 flex justify-end">

          <!-- Red Shape Background -->
          <div class="absolute right-0 top-0 bottom-0 w-2/3 bg-red-600 clip-path-slant hidden lg:block"
            style="clip-path: polygon(30% 0%, 100% 0%, 100% 100%, 0% 100%);"></div>

          <!-- Image -->
          <img src="Apex-Images/holding-steelapex.png" alt="Rebar Hand"
            class="relative z-10 w-[350px] lg:w-[420px] animate-up object-contain" />
        </div>

      </div>
    </section>

    <!-- Apex Dura Arrow animation section  -->
    <!-- <section
        class="relative left-1/2 right-1/2 -ml-[50vw] -mr-[50vw] w-screen bg-white py-6 overflow-hidden isolate my-7 fade-up"
      >
        <div class="overflow-hidden w-screen">
          <div id="arrowStrip" class="flex gap-4 arrow-strip">
            <img src="Apex-icons/next-Arrow.png" class="w-7 sm:w-9 md:w-10" />
            <img src="Apex-icons/next-Arrow.png" class="w-7 sm:w-9 md:w-10" />
            <img src="Apex-icons/next-Arrow.png" class="w-7 sm:w-9 md:w-10" />
            <img src="Apex-icons/next-Arrow.png" class="w-7 sm:w-9 md:w-10" />
            <img src="Apex-icons/next-Arrow.png" class="w-7 sm:w-9 md:w-10" />
          </div>
        </div>
      </section> -->

    <!-- Banner-video section -->

    <!-- <section
        id="videoSection"
        class="relative w-full overflow-hidden my-7 h-[220px] sm:h-[320px] md:h-[450px] lg:h-[520px] xl:h-[620px] fade-right"
      > -->
    <!-- Video -->
    <!-- <video
          src="Apex-videos/video-1.mp4"
          class="w-full h-full object-cover"
          autoplay
          muted
          loop
          playsinline
        ></video> -->

    <!-- Logo -->
    <!-- <img
          id="fadeLogo"
          src="Apex-icons/Apex-large-logo.png"
          class="absolute inset-0 m-auto w-[160px] sm:w-[240px] md:w-[340px] lg:w-[670px] opacity-0 pointer-events-none transition-opacity duration-700"
        />
      </section> -->

    <!-- Images Slides -->
    <!-- <section class="w-full py-20 flex justify-center"> -->
    <!-- <div class="relative w-full max-w-6xl overflow-hidden"> -->

    <!-- Slider -->
    <!-- <div id="slider" class="flex items-center transition-all duration-500">

          <div class="slide cursor-pointer">
            <img src="Apex-Images/3dslides-img-1.jpg" class="w-full h-[260px] sm:h-[320px] lg:h-[420px] object-cover" />
          </div>

          <div class="slide cursor-pointer">
            <img src="Apex-Images/3dslides-img-2.jpg" class="w-full h-[260px] sm:h-[320px] lg:h-[420px] object-cover" />
          </div>

          <div class="slide cursor-pointer">
            <img src="Apex-Images/3dslides-img-3.jpg" class="w-full h-[260px] sm:h-[320px] lg:h-[420px] object-cover" />
          </div>

          <div class="slide cursor-pointer">
            <img src="Apex-Images/3dslides-img-4.jpg" class="w-full h-[260px] sm:h-[320px] lg:h-[420px] object-cover" />
          </div>

          <div class="slide cursor-pointer">
            <img src="Apex-Images/3dslides-img-5.jpg" class="w-full h-[260px] sm:h-[320px] lg:h-[420px] object-cover" />
          </div>

        </div> -->

    <!-- </div> -->
    <!-- </section> -->

    <!-- Scroll section -->

    <section class="relative w-full min-h-[300vh] fade-up hidden lg:block" id="whyChooseScroll">
      <!-- CARD 1 -->
      <div class="card sticky top-0 h-[100svh] flex items-center justify-center">
        <div class="card-inner">
          <h1 class="text-center font-bold leading-tight text-6xl sm:text-3xl md:text-9xl lg:text-[130px]">
            <span class="block text-black">WHY</span>

            <!-- Rotating bar -->
            <div
              class="word-rotate w-full max-w-[700px] overflow-hidden my-4 text-xl sm:text-3xl md:text-5xl lg:text-7xl h-[1.4em]">
              <div class="rotate-track">
                <span>TRUST</span>
                <span>VALUE</span>
                <span>RELY ON</span>
                <span>BELIEVE</span>
                <span>BACK</span>
                <span>BUILD WITH</span>
              </div>
            </div>

            <span class="block text-black">US</span>
          </h1>
        </div>
      </div>

      <!-- CARD 2 -->
      <div class="card sticky top-0 h-[100svh] flex items-center justify-center">
        <img src="Apex-Images/slide-bg1.png"
          class="bg-parallax absolute w-full h-[460px] sm:h-[460px] md:h-[520px] object-cover" />

        <div class="card-inner relative bg-white/70 rounded-2xl w-[90%] md:w-[50%] max-w-5xl px-10 py-20">
          <div class="flex flex-col-reverse sm:flex-row items-start sm:items-center justify-between gap-6">
            <div class="max-w-md">
              <h3 class="text-xl font-bold mb-3 ">Sustainable Approach</h3>
              <p class="text-gray-700 leading-relaxed font-bold">
                We integrate eco-friendly materials and processes from
                inception, reducing carbon footprint while maximizing product
                longevity .
              </p>
            </div>

            <div class="text-red-600 font-black text-[70px] sm:text-[120px] md:text-[160px] leading-none">
              <h1>01</h1>
            </div>
          </div>
        </div>
      </div>

      <!-- CARD 3 -->
      <div class="card sticky top-0 h-[70svh] flex items-center justify-center">
        <img src="Apex-Images/slide-bg2.png"
          class="bg-parallax absolute w-full h-[460px] sm:h-[460px] md:h-[520px] object-cover" />

        <div class="card-inner relative bg-white/70 rounded-2xl w-[90%] md:w-[50%] max-w-5xl px-10 py-20">
          <div class="flex flex-col-reverse sm:flex-row items-start sm:items-center justify-between gap-6">
            <div class="max-w-md">
              <h3 class="text-xl font-bold mb-3 ">Innovative Technology</h3>
              <p class="text-gray-700 leading-relaxed font-bold">
                Through advanced engineering and automation tools, we deliver
                scalable, future-ready systems engineered to evolve with
                demands.
              </p>
            </div>

            <div class="text-red-600 font-black text-[70px] sm:text-[120px] md:text-[160px] leading-none">
              <h1>02</h1>
            </div>
          </div>
        </div>
      </div>

      <!-- CARD 4 -->
      <div class="card sticky top-0 h-[100svh] flex items-center justify-center">
        <img src="Apex-Images/slide-bg3.png"
          class="bg-parallax absolute w-full h-[460px] sm:h-[460px] md:h-[520px] object-cover" />

        <div class="card-inner relative bg-white/70 rounded-2xl w-[90%] md:w-[50%] max-w-5xl px-10 py-20">
          <div class="flex flex-col-reverse sm:flex-row items-start sm:items-center justify-between gap-6">
            <div class="max-w-md">
              <h3 class="text-xl font-bold mb-3 ">Expert Team</h3>
              <p class="text-gray-700 leading-relaxed font-bold">
                Our seasoned professionals combine decades of hands-on
                experience across diverse projects, ensuring precision in
                execution, unmatched support, customer satisfaction .
              </p>
            </div>

            <div class="text-red-600 font-black text-[70px] sm:text-[120px] md:text-[160px] leading-none">
              <h1>03</h1>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Mobile scroll section  -->
    <section class="lg:hidden w-full">

      <!-- ================= HERO ROTATE TITLE ================= -->
      <div class="flex items-center justify-center py-12">
        <h1 class="text-center font-bold leading-tight">

          <span class="block text-black text-5xl sm:text-6xl">
            WHY
          </span>

          <!-- Rotating words -->
          <div class="word-rotate overflow-hidden h-[1.4em] my-3
                  text-2xl sm:text-4xl font-extrabold">

            <div class="rotate-track flex flex-col animate-rotateWords">
              <span>TRUST</span>
              <span>VALUE</span>
              <span>RELY ON</span>
              <span>BELIEVE</span>
              <span>BACK</span>
              <span>BUILD WITH</span>
            </div>

          </div>

          <span class="block text-black text-5xl sm:text-6xl">
            US
          </span>

        </h1>
      </div>



      <!-- ================= CARD TEMPLATE ================= -->
      <!-- ================= MOBILE CARD CAROUSEL ================= -->
      <div class="relative w-full overflow-hidden mb-7">

        <!-- Track -->
        <div id="cardCarousel" class="flex overflow-x-auto snap-x snap-mandatory scroll-smooth no-scrollbar">

          <!-- Slide 01 -->
          <div class="min-w-full snap-center px-4">
            <div class="relative h-[460px] sm:h-[520px] rounded-2xl overflow-hidden flex items-center justify-center">

              <img src="Apex-Images/slide-bg1.png" class="absolute inset-0 w-full h-full object-cover" />

              <div class="relative bg-white/80 rounded-2xl w-[90%] max-w-xl p-8 shadow-xl">
                <div class="flex justify-between gap-6">
                  <div>
                    <h3 class="text-lg font-bold mb-2">Sustainable Approach</h3>
                    <p class="text-gray-600 leading-relaxed">
                      We integrate eco-friendly materials and processes that reduce
                      impact while increasing durability and longevity.
                    </p>
                  </div>
                  <span class="text-red-600 font-black text-6xl">01</span>
                </div>
              </div>

            </div>
          </div>


          <!-- Slide 02 -->
          <div class="min-w-full snap-center px-4">
            <div class="relative h-[460px] sm:h-[520px] rounded-2xl overflow-hidden flex items-center justify-center">

              <img src="Apex-Images/slide-bg2.png" class="absolute inset-0 w-full h-full object-cover" />

              <div class="relative bg-white/80 rounded-2xl w-[90%] max-w-xl p-8 shadow-xl">
                <div class="flex justify-between gap-6">
                  <div>
                    <h3 class="text-lg font-bold mb-2">Innovative Technology</h3>
                    <p class="text-gray-600 leading-relaxed">
                      Advanced engineering and automation create scalable,
                      future-ready systems built to evolve with demand.
                    </p>
                  </div>
                  <span class="text-red-600 font-black text-6xl">02</span>
                </div>
              </div>

            </div>
          </div>


          <!-- Slide 03 -->
          <div class="min-w-full snap-center px-4">
            <div class="relative h-[460px] sm:h-[520px] rounded-2xl overflow-hidden flex items-center justify-center">

              <img src="Apex-Images/slide-bg3.png" class="absolute inset-0 w-full h-full object-cover" />

              <div class="relative bg-white/80 rounded-2xl w-[90%] max-w-xl p-8 shadow-xl">
                <div class="flex justify-between gap-6">
                  <div>
                    <h3 class="text-lg font-bold mb-2">Expert Team</h3>
                    <p class="text-gray-600 leading-relaxed">
                      Experienced professionals ensure precision, reliable support,
                      and consistent customer satisfaction.
                    </p>
                  </div>
                  <span class="text-red-600 font-black text-6xl">03</span>
                </div>
              </div>

            </div>
          </div>

        </div>
      </div>


    </section>

    <!-- Logo filling section -->
    <!-- <section class="w-full bg-red-600 py-14 md:py-20 my-5">
      <div class="max-w-7xl mx-auto px-6">
        <div class="grid grid-cols-1 md:grid-cols-[1fr_auto_1fr] items-center gap-4 md:gap-6">
          
          <div class="text-white text-center md:text-left">
            <p class="text-sm lg:text-xl tracking-wide mb-2 opacity-90 fade-down">
              The Mark of Integrity Is
            </p>
            <h2 class="text-4xl md:text-6xl lg:text-[110px] xl:text-9xl font-extrabold tracking-wide fade-down">
              APEX
            </h2>
          </div>


          <div class="flex justify-center">
            <svg class="apex-logo w-56 md:w-70 lg:w-[290px]" viewBox="0 0 317 387" fill="none">
              <defs>
               
                <mask id="fillMask">
                  <rect class="fill-anim" x="0" y="-387" width="317" height="387" fill="white" />
                </mask>

                <filter id="softGlow" x="-50%" y="-50%" width="200%" height="200%">
                  <feGaussianBlur stdDeviation="6" result="blur" />
                  <feMerge>
                    <feMergeNode in="blur" />
                    <feMergeNode in="SourceGraphic" />
                  </feMerge>
                </filter>
              </defs>

 
              <g mask="url(#fillMask)" filter="url(#softGlow)">
                <path
                  d="M138.812 73.6844L299.963 192.263L295.892 143.647L158.515 0L19.907 147.504L16.3837 189.32L138.812 73.6844Z"
                  fill="white" />
                <path
                  d="M305.686 259.938L302.163 218.258L129.723 109.152L14.1022 216.77L10.5447 258.923L108.515 180.502L305.686 259.938Z"
                  fill="white" />
                <path
                  d="M311.083 324.023L307.936 286.572L99.4079 218.301L8.45036 283.494L4.927 325.478L79.3965 289.549L311.083 324.023Z"
                  fill="white" />
                <path
                  d="M316.247 385.295L313.374 351.058L65.473 324.906L2.83921 350.28L0 383.84V386.073H317V379.611L316.247 385.295Z"
                  fill="white" />
              </g>
            </svg>
          </div>


          <div class="text-white text-center md:text-right fade-up">
            <h2 class="text-4xl md:text-6xl lg:text-[110px] xl:text-9xl font-extrabold tracking-wide mb-2">
              TRUST
            </h2>
            <p class="text-sm opacity-90 lg:text-xl">
              Forged Strong. Built to Last.
            </p>
          </div>
        </div>
      </div>
    </section> -->
    
    
    <!-- Apex grip -->
     <div class="relative w-full h-[320px] sm:h-[420px] md:h-[520px] overflow-hidden fade-up">
  <img 
    src="Apex-Images/apex-grip.jpg" 
    alt="Banner Image"
    class="w-full h-full object-cover"
  />
</div>
    
    
    <!-- steel image  -->


    <!-- <section class="w-full fade-left">
      <img src="Apex-Images/steel-full.png" alt="Apex Steel" class="w-full h-auto object-contain" />
    </section> -->



    <!-- apex unique section -->
    <section class="w-full bg-gray-100 py-16">
      <div class="max-w-6xl mx-auto px-4">

        <!-- Heading -->
        <h2 class="text-center text-2xl sm:text-3xl md:text-4xl font-bold text-red-600 mb-12 fade-right">
          What Makes Apex Unique ?
        </h2>

        <!-- Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 xl:gap-12">

          <!-- Card 1 -->
          <div class="flex items-center gap-4 bg-white rounded-xl shadow-md px-6 py-5 fade-right">
            <img src="Apex-icons/bend-icon.png" class="w-12 h-12" alt="icon" />
            <p class="font-medium text-gray-800">Easy to Bend and Shape</p>
          </div>

          <!-- Card 2 -->
          <div class="flex items-center gap-4 bg-white rounded-xl shadow-md px-6 py-5 fade-left">
            <img src="Apex-icons/carbon-icon.png" class="w-12 h-12" alt="icon" />
            <p class="font-medium text-gray-800">Reduced Carbon Footprint</p>
          </div>

          <!-- Card 3 -->
          <div class="flex items-center gap-4 bg-white rounded-xl shadow-md px-6 py-5 fade-right">
            <img src="Apex-icons/grip-icon.png" class="w-12 h-12" alt="icon" />
            <p class="font-medium text-gray-800">Best Grip</p>
          </div>

          <!-- Card 4 -->
          <div class="flex items-center gap-4 bg-white rounded-xl shadow-md px-6 py-5 fade-left">
            <img src="Apex-icons/plant-icon.png" class="w-12 h-12" alt="icon" />
            <p class="font-medium text-gray-800">Automated plant</p>
          </div>

          <!-- Card 5 -->
          <div class="flex items-center gap-4 bg-white rounded-xl shadow-md px-6 py-5 fade-right">
            <img src="Apex-icons/thermex-icon.png" class="w-12 h-12" alt="icon" />
            <p class="font-medium text-gray-800">Thermex Technology</p>
          </div>

          <!-- Card 6 -->
          <div class="flex items-center gap-4 bg-white rounded-xl shadow-md px-6 py-5 fade-left">
            <img src="Apex-icons/temperature-icon.png" class="w-12 h-12" alt="icon" />
            <p class="font-medium text-gray-800">Withstand high temperature</p>
          </div>

        </div>
      </div>
    </section>




    <!-- Reliable TMT Bars  -->
    <section class="w-full bg-red-600 overflow-hidden">
      <div class="relative flex flex-col lg:flex-row items-center min-h-[420px]">

        <!-- LEFT CONTENT -->
        <div class="w-full lg:w-1/2 px-6 sm:px-10 md:px-14 lg:px-20 py-12 text-white z-10">
          <div class="max-w-[560px]">
            <h1 class="text-[28px] sm:text-[34px] md:text-[40px] font-bold leading-snug mb-5 animate-up">
              Reliable TMT Bars for <br class="hidden sm:block" />
              India’s Next Leap
            </h1>

            <p class="text-sm sm:text-base leading-relaxed mb-8 opacity-95 fade-down">
              At Apex Dura, our premium TMT 500 and 550 bars are crafted by
              Khyati Steel Industries Pvt. Ltd., a trusted name driven by the
              vision of contributing to India’s growth story. Every bar we
              produce reflects a blend of engineering precision, material
              integrity, and a deep commitment to building long-term
              partnerships with our clients.
            </p>

            <a href="aboutus.php"
              class="inline-flex items-center gap-2 bg-white text-red-600 font-bold text-sm px-6 py-3 rounded-md transition hover:-translate-y-[2px] hover:shadow-lg fade-right">
              Learn More
              <img src="Apex-icons/Next-large.png" alt="next" class="w-3" />
            </a>
          </div>
        </div>

        <!-- RIGHT IMAGE (overlay style) -->
        <div
          class="w-full lg:w-1/2 flex justify-end lg:absolute lg:right-0 lg:top-0 lg:h-full animate-down hidden lg:flex">
          <img src="Apex-Images/Steel-3.png" alt="TMT Hand"
            class="h-[260px] sm:h-[320px] md:h-[380px] lg:h-full object-contain object-right" />
        </div>

      </div>
    </section>





  </main>

  <?php include "includes/footer.php"; ?>





  <script src="Js/Home-slider.js"></script>
  <script src="Js/Mobile-navbar.js"></script>
  <script src="Js/Scroll-Animation.js"></script>
  <script src="Js/Products-carouselcars.js"></script>
  <script src="Js/logo-fading.js"></script>
  <script src="Js/Animation.js"></script>
  <script src="Js/progressbar-script.js"></script>
  <script src="Js/bottom-up-arrow-script.js"></script>
  <script src="Js/Home-half-img-carouselslides.js"></script>

  <!-- Apex dura arooe-next anination clone script -->
  <!-- <script>
      const strip = document.getElementById("arrowStrip");

      // Clone until strip width > 2x screen width
      while (strip.scrollWidth < window.innerWidth * 2) {
        strip.innerHTML += strip.innerHTML;
      }
    </script> -->





  <!-- Mobile carousel slides  -->
  <script>
    document.addEventListener("DOMContentLoaded", () => {

      const carousel = document.getElementById("cardCarousel");
      const slides = carousel.children;

      let index = 0;
      let slideWidth = carousel.offsetWidth;
      let auto;

      // update width on resize
      function updateWidth() {
        slideWidth = carousel.offsetWidth;
      }

      window.addEventListener("resize", updateWidth);

      function startAutoSlide() {
        auto = setInterval(() => {
          index = (index + 1) % slides.length;

          carousel.scrollTo({
            left: slideWidth * index,
            behavior: "smooth"
          });
        }, 3000);
      }

      function stopAutoSlide() {
        clearInterval(auto);
      }

      // pause on user touch
      carousel.addEventListener("touchstart", stopAutoSlide);
      carousel.addEventListener("touchend", startAutoSlide);

      startAutoSlide();
    });
  </script>


</body>

</html>