<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Apex Dura</title>
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
    <div class="relative w-full h-[320px] sm:h-[420px] md:h-[520px] overflow-hidden fade-up">
      <!-- Banner Image -->
      <img src="Apex-Images/Aboutus-banner.jpg" class="w-full h-full object-cover" alt="About Us Banner" />

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

          About
        </span>
      </div>
    </div>

    <!-- Header Content Overlay -->
    <?php include "includes/header.php"; ?>
  </header>

  <main>
    <!-- About section -->
    <section>
      <div class="w-full overflow-hidden hidden md:block">
        <!-- TOP WHITE SECTION -->
        <div class="relative bg-white">
          <div class="max-w-7xl mx-auto px-6 md:px-16 py-14 md:py-20 relative z-10">
            <!-- Text -->
            <div class="max-w-xl">
              <h1 class="text-4xl md:text-5xl font-bold text-black mb-5 fade-left">
                About <span class="text-red-600">Apex Dura</span>
              </h1>

              <p class="text-gray-600 leading-relaxed text-base md:text-lg fade-right">
                Apex Dura is a trusted name in high-quality, BIS-certified TMT
                bars, engineered to deliver strength, durability, and safety
                for modern construction needs. Built using advanced
                manufacturing technology, Apex Dura ensures consistent quality
                and superior performance in every bar.
              </p>
            </div>
          </div>

          <!-- Hand Image (perfect overlap like design) -->
          <img src="Apex-Images/steel-holding.png" alt="Steel rod hand"
            class="absolute right-0 bottom-[-40px] md:bottom-[-60px] md:bottom-[-320px] h-56 md:h-100 lg:h-175 object-contain z-20 pointer-events-none animate-up" />
        </div>

        <!-- BOTTOM STEEL BANNER -->
        <div class="w-full h-[260px] md:h-[320px] fade-left">
          <img src="Apex-Images/steel-banner-2.png" alt="Steel rods banner" class="w-full h-full object-cover" />
        </div>
      </div>
      <!-- mobile section -->
      <div class="md:hidden mt-5">
        <div class="w-full bg-white overflow-hidden">
          <!-- Top Content -->
          <div class="p-4 text-center fade-down">
            <h2 class="text-xl font-bold mb-1 text-black">
              About <span class="text-red-600">Apex Dura</span>
            </h2>

            <p class="text-sm text-gray-600 leading-relaxed mb-3">
              Apex Dura is a trusted name in high-quality, BIS-certified TMT
              bars, engineered to deliver strength, durability, and safety for
              modern construction needs. Built using advanced manufacturing
              technology, Apex Dura ensures consistent quality and superior
              performance in every bar.
            </p>
          </div>

          <!-- Bottom Image -->
          <img src="Apex-Images/mobile-steel-banner.png" alt="Steel TMT Bar"
            class="w-full h-64 object-cover fade-left" />
        </div>
      </div>
    </section>

    <!-- vision and mission section -->
    <div class="max-w-6xl mx-auto grid md:grid-cols-2 gap-8 mt-7">
      <!-- VISION CARD -->
      <div class="relative bg-gray-50 p-8 pl-12 border-l-4 border-red-600 fade-left">
        <!-- ICON (PUT HERE) -->
        <div class="mb-4 text-red-600 fade-up">
          <img src="Apex-icons/eye-Icon.png" alt="" />
        </div>

        <h3 class="text-xl font-bold tracking-wide text-gray-900 uppercase mb-3 animate-down">
          Our Vision
        </h3>

        <p class="text-gray-600 text-sm leading-relaxed mb-6 fade-down">
          We participate in building the nation
          by enhancing its infrastructure and
          play our part in building the country
          at par with the best in the world.
        </p>

        <!-- red underline -->
        <div class="w-12 h-1 bg-red-600 fade-right"></div>
      </div>

      <!-- MISSION CARD -->
      <div class="relative bg-gray-50 p-8 pl-12 border-l-4 border-red-600 fade-right">
        <!-- ICON (PUT HERE) -->
        <div class="mb-4 text-red-600 fade-up">
          <img src="Apex-icons/circle-Icon.png" alt="" />
        </div>

        <h3 class="text-xl font-bold tracking-wide text-gray-900 uppercase mb-3 animate-down">
          Our Mission
        </h3>

        <p class="text-gray-600 text-sm leading-relaxed mb-6 fade-down">
          Produce the highest quality steel
          which is available for everybody at
          cost effective means and emerge as
          a major market player in India.
          Produce 'green steel' focusing on
          Renewable energy, Environment,
          People and society at large.
        </p>

        <div class="w-12 h-1 bg-red-600 fade-left"></div>
      </div>
    </div>

    <section
      class="w-full h-[270px] sm:h-[420px] md:h-[350px] lg:h-[450px] xl:h-[550px] bg-red-600 mt-7 flex items-center justify-center text-center">
      <h1 class="text-white font-semibold text-4xl sm:text-6xl md:text-7xl lg:text-8xl animate-up">
        Core Values
      </h1>
    </section>

    <section
      class="relative overflow-hidden py-20 bg-none xl:bg-[url('Apex-Images/steel-bars.jpg')] lg:bg-no-repeat lg:bg-center">
      <div class="max-w-7xl mx-auto px-6">
        <!-- Cards Row -->
        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-10 xl:gap-30 place-items-center">
          <!-- CARD 1 -->
          <div
            class="bg-white rounded-3xl shadow-2xl p-5 text-center w-full max-w-xs xl:mt-[-150px] xl:ms-[-29px] transition hover:-translate-y-2 animate-down">
            <img src="Apex-icons/A-1.png" class="w-12 h-12 mx-auto mb-4" />
            <h3 class="font-bold text-sm tracking-wide mb-2">
              SUSTAINABILITY
            </h3>
            <p class="text-gray-500 text-sm leading-relaxed">
              Every bar meets strict BIS standards for strength and
              reliability.
            </p>
          </div>

          <!-- CARD 2 -->
          <div
            class="bg-white rounded-3xl shadow-2xl p-5 text-center w-full max-w-xs xl:mt-50 xl:ms-[15px] transition hover:-translate-y-2 animate-up">
            <img src="Apex-icons/A-2.png" class="w-12 h-12 mx-auto mb-4" />
            <h3 class="font-bold text-sm tracking-wide mb-2">
              RESPONSIBILITY
            </h3>
            <p class="text-gray-500 text-sm leading-relaxed">
              Manufactured using modern technology for consistent performance.
            </p>
          </div>

          <!-- CARD 3 -->
          <div
            class="bg-white rounded-3xl shadow-2xl p-5 text-center w-full max-w-xs xl:mt-[-150px] xl:ms-[30px] transition hover:-translate-y-2 animate-down">
            <img src="Apex-icons/A-3.png" class="w-12 h-12 mx-auto mb-4" />
            <h3 class="font-bold text-sm tracking-wide mb-2">
              TRUST
            </h3>
            <p class="text-gray-500 text-sm leading-relaxed">
              Built on long-term relationships with builders and engineers.
            </p>
          </div>

          <!-- CARD 4 -->
          <div
            class="bg-white rounded-3xl shadow-2xl p-5 text-center w-full max-w-xs xl:mt-50 xl:ms-[30px] transition hover:-translate-y-2 animate-up">
            <img src="Apex-icons/A-4.png" class="w-12 h-12 mx-auto mb-4" />
            <h3 class="font-bold text-sm tracking-wide mb-2">
              INNOVATION
            </h3>
            <p class="text-gray-500 text-sm leading-relaxed">
              Designed to resist corrosion and enhance structural life.
            </p>
          </div>
        </div>
      </div>
    </section>

      <!-- Quality Control Process -->
        <section class="w-full  ">

            <!-- Heading -->
            <div class="max-w-5xl mx-auto px-6 text-center mb-16">
                <h2 class="text-3xl sm:text-4xl lg:text-5xl 
               font-bold text-red-600 leading-tight animate-down">
                    Quality Control Process
                </h2>
            </div>

            <!-- Content -->
            <section class="py-16 fade-left">
                <div class="max-w-7xl mx-auto px-6 relative">

                    <!-- Navigation Buttons (Top Right) -->
                    <div class="absolute -top-20 right-10 flex gap-3 z-10">

                        <button id="prevBtn"
                            class="bg-red-600 text-white w-10 h-10 rounded-full flex items-center justify-center">
                            &#10094;
                        </button>

                        <button id="nextBtn"
                            class="bg-red-600 text-white w-10 h-10 rounded-full flex items-center justify-center">
                            &#10095;
                        </button>

                    </div>

                    <!-- Carousel Wrapper -->
                    <div class="overflow-hidden">
                        <div id="carousel" class="flex transition-transform duration-500 ease-in-out">

                            <!-- ITEM -->
                            <div class="min-w-full sm:min-w-1/2 lg:min-w-1/4 px-6">
                                <h3 class="font-semibold text-lg mb-4">Material Procurement</h3>
                                <p class="text-gray-600 text-sm leading-relaxed">
                                   Incoming raw material inspection: Yield, chemistry test, inclusion, screening & sorting.
                                </p>
                            </div>

                            <div class="min-w-full sm:min-w-1/2 lg:min-w-1/4 px-6">
                                <h3 class="font-semibold text-lg mb-4">Material Chemical Analysis</h3>
                                <p class="text-gray-600 text-sm leading-relaxed">
                                    Chemical testing as per IS:1786 to approve raw material before production.
                                </p>
                            </div>

                            <div class="min-w-full sm:min-w-1/2 lg:min-w-1/4 px-6">
                                <h3 class="font-semibold text-lg mb-4">Induction Furnace</h3>
                                <p class="text-gray-600 text-sm leading-relaxed">
                                    Melting of selected raw materials under controlled conditions.
                                </p>
                            </div>

                            <div class="min-w-full sm:min-w-1/2 lg:min-w-1/4 px-6">
                                <h3 class="font-semibold text-lg mb-4">Hot Metal Chemical Analysis</h3>
                                <p class="text-gray-600 text-sm leading-relaxed">
                                    Continuous monitoring of molten metal chemistry to maintain required composition.
                                </p>
                            </div>

                            <div class="min-w-full sm:min-w-1/2 lg:min-w-1/4 px-6">
                                <h3 class="font-semibold text-lg mb-4">Billet Concaster</h3>
                                <p class="text-gray-600 text-sm leading-relaxed">
                                    Casting molten steel into billets with online chemistry check & alloy correction.
                                </p>
                            </div>

                            <div class="min-w-full sm:min-w-1/2 lg:min-w-1/4 px-6">
                                <h3 class="font-semibold text-lg mb-4">Billet Yard</h3>
                                <p class="text-gray-600 text-sm leading-relaxed">
                                   Segregation of non-conforming billets and final billet inspection.
                                </p>
                            </div>

                            <div class="min-w-full sm:min-w-1/2 lg:min-w-1/4 px-6">
                                <h3 class="font-semibold text-lg mb-4">Billet Analysis</h3>
                                <p class="text-gray-600 text-sm leading-relaxed">
                                   Final billet quality tests: Etching, grain structure, surface finish, rhomboidity.
                                </p>
                            </div>

                             <div class="min-w-full sm:min-w-1/2 lg:min-w-1/4 px-6">
                                <h3 class="font-semibold text-lg mb-4">Reheating Furnace</h3>
                                <p class="text-gray-600 text-sm leading-relaxed">
                                   Billets reheated uniformly before rolling process.
                                </p>
                            </div>

                             <div class="min-w-full sm:min-w-1/2 lg:min-w-1/4 px-6">
                                <h3 class="font-semibold text-lg mb-4">Finishing Mill</h3>
                                <p class="text-gray-600 text-sm leading-relaxed">
                                  Rolling through roughing, intermediate & finishing stands to achieve final size.
                                </p>
                            </div>

                             <div class="min-w-full sm:min-w-1/2 lg:min-w-1/4 px-6">
                                <h3 class="font-semibold text-lg mb-4">Straightening</h3>
                                <p class="text-gray-600 text-sm leading-relaxed">
                                   Section weight check and physical testing (UTM) + chemical verification (Spectrometer).
                                </p>
                            </div>

                             <div class="min-w-full sm:min-w-1/2 lg:min-w-1/4 px-6">
                                <h3 class="font-semibold text-lg mb-4">Stockyard</h3>
                                <p class="text-gray-600 text-sm leading-relaxed">
                                   Finished products stored in controlled environment to prevent corrosion.
                                </p>
                            </div>

                             <div class="min-w-full sm:min-w-1/2 lg:min-w-1/4 px-6">
                                <h3 class="font-semibold text-lg mb-4">Labelling</h3>
                                <p class="text-gray-600 text-sm leading-relaxed">
                                   Quality tags, batch numbers & dispatch identification.
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
            </section>

        </section>



    <section class="w-full bg-white py-16">

      <!-- Title -->
      <h3 class="text-4xl font-bold text-center text-red-600 mb-16 fade-left">
        The Foundation Of Apex Dura
      </h3>

      <div class="max-w-7xl mx-auto animate-up">

        <!-- Wrapper spacing (NOT on cards) -->
        <div class="px-6">

          <!-- ===== Slider Track ===== -->
          <div id="apxFoundationSlider" class="
          flex lg:grid
          lg:grid-cols-3
          overflow-x-auto lg:overflow-visible
          snap-x snap-mandatory
          scroll-smooth
        ">

            <!-- ================= CARD 1 ================= -->
            <div class="
            group
            relative rounded-3xl overflow-hidden
            min-w-full md:min-w-1/2 lg:min-w-0
            snap-center
            transition duration-500
            hover:scale-110
          ">
              <img src="Apex-Images/Foundation-1.png" class="w-full h-[460px] object-cover transition duration-700 " />

              <div class="absolute left-1/2 top-[69%] -translate-x-1/2 -translate-y-1/2 text-center w-full px-6">
                <h4 class="text-red-600 font-bold text-lg tracking-wider mb-2">
                  STRENGTH
                </h4>
                <p class="text-white text-sm max-w-xs mx-auto leading-relaxed">
                  Engineered for superior tensile <br> strength and load-bearing capacity.
                </p>
                <p class="text-white/60 text-[12px] max-w-xs mx-auto mt-2">
                  Ensures safer and stronger <br> construction for every project.
                </p>
              </div>
            </div>


            <!-- ================= CARD 2 ================= -->
            <div class="
            group
            relative rounded-3xl overflow-hidden
            min-w-full md:min-w-1/2 lg:min-w-0
            snap-center
            transition duration-500
            hover:scale-110
          ">
              <img src="Apex-Images/Foundation-2.png" class="w-full h-[460px] object-cover transition duration-700 " />

              <div class="absolute left-1/2 top-[69%] -translate-x-1/2 -translate-y-1/2 text-center w-full px-6">
                <h4 class="text-red-600 font-bold text-lg tracking-wider mb-2">
                  TECHNOLOGY
                </h4>
                <p class="text-white text-sm max-w-xs mx-auto leading-relaxed">
                  Produced using the most advanced manufacturing processes.
                </p>
                <p class="text-white/60 text-[12px] max-w-xs mx-auto mt-2">
                  Delivers consistent quality and <br> performance in every bar.
                </p>
              </div>
            </div>


            <!-- ================= CARD 3 ================= -->
            <div class="
            group
            relative rounded-3xl overflow-hidden
            min-w-full md:min-w-1/2 lg:min-w-0
            snap-center
            transition duration-500
            hover:scale-110
          ">
              <img src="Apex-Images/Foundation-3.png" class="w-full h-[460px] object-cover transition duration-700 " />

              <div class="absolute left-1/2 top-[69%] -translate-x-1/2 -translate-y-1/2 text-center w-full px-6">
                <h4 class="text-red-600 font-bold text-lg tracking-wider mb-2">
                  TRUST
                </h4>
                <p class="text-white text-sm max-w-xs mx-auto leading-relaxed">
                  BIS-certified steel trusted <br> by builders and engineers.
                </p>
                <p class="text-white/60 text-[12px] max-w-xs mx-auto mt-2">
                  Built on reliability, transparency, and <br> long-term value.
                </p>
              </div>
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
  <script src="Js/Scroll-Animation.js"></script>
  <script src="Js/Products-carouselcars.js"></script>
  <script src="Js/logo-fading.js"></script>
  <script src="Js/Animation.js"></script>
  <script src="Js/progressbar-script.js"></script>
  <script src="Js/bottom-up-arrow-script.js"></script>


   <!-- carousel slides  -->
    <script>
        const carousel = document.getElementById("carousel");
        const prevBtn = document.getElementById("prevBtn");
        const nextBtn = document.getElementById("nextBtn");

        let index = 0;

        function getVisibleItems() {
            if (window.innerWidth >= 1024) return 4;
            if (window.innerWidth >= 640) return 2;
            return 1;
        }

        function updateButtons(maxIndex) {
            // Fade Prev
            if (index <= 0) {
                prevBtn.classList.add("opacity-40", "cursor-not-allowed");
            } else {
                prevBtn.classList.remove("opacity-40", "cursor-not-allowed");
            }

            // Fade Next
            if (index >= maxIndex) {
                nextBtn.classList.add("opacity-40", "cursor-not-allowed");
            } else {
                nextBtn.classList.remove("opacity-40", "cursor-not-allowed");
            }
        }

        function updateCarousel() {
            const visibleItems = getVisibleItems();
            const totalItems = carousel.children.length;
            const maxIndex = totalItems - visibleItems;

            if (index > maxIndex) index = maxIndex;
            if (index < 0) index = 0;

            const slideWidth = carousel.children[0].offsetWidth;
            carousel.style.transform = `translateX(-${index * slideWidth}px)`;

            updateButtons(maxIndex);
        }

        nextBtn.addEventListener("click", () => {
            const visibleItems = getVisibleItems();
            const totalItems = carousel.children.length;
            const maxIndex = totalItems - visibleItems;

            if (index < maxIndex) {
                index++;
                updateCarousel();
            }
        });

        prevBtn.addEventListener("click", () => {
            if (index > 0) {
                index--;
                updateCarousel();
            }
        });

        window.addEventListener("resize", updateCarousel);

        // Initialize
        updateCarousel();
    </script>

  <script>
    (function () {

      const slider = document.getElementById("apxFoundationSlider");
      const cards = slider.children;

      let index = 0;

      function getVisible() {
        if (window.innerWidth >= 1024) return 3;
        if (window.innerWidth >= 768) return 2;
        return 1;
      }

      function slide() {
        if (window.innerWidth >= 1024) return;

        const cardWidth = cards[0].offsetWidth;
        const visible = getVisible();

        index++;
        if (index > cards.length - visible) index = 0;

        slider.scrollTo({
          left: cardWidth * index,
          behavior: "smooth"
        });
      }

      setInterval(slide, 3000);

    })();
  </script>





</body>

</html>