<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Investor-Corner</title>
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
      <img src="Apex-Images/Investor-Corner-Banner.jpg" class="w-full h-full object-cover" alt="Investor Corner Banner" />

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

          Investor-Corner
        </span>
      </div>
    </div>

    <!-- Header Content Overlay -->
    <?php include "includes/header.php"; ?>
  </header>

  <main>
    <!-- Welcome section -->
    <section class="bg-white py-14 px-6">
      <div class="max-w-6xl mx-auto">
        <div class="grid lg:grid-cols-[1.2fr_1fr] gap-12 items-start justify-items-start">
          <!-- LEFT CONTENT -->
          <div class="fade-left">
            <h2 class="text-[40px] font-bold text-red-600 mb-6 leading-snug fade-down">
              Welcome to Our Investor <br />
              Relations
            </h2>

            <p class="text-gray-600 leading-relaxed mb-10 max-w-lg">
              M/s. Khayati Steel Industries Pvt. Ltd. upholds a steadfast
              commitment to delivering sustainable value for all stakeholders.
              Its remarkable track record of financial discipline attests to
              its continuous pursuit of excellence as a world-class
              organisation.
            </p>

            <div class="flex flex-col sm:flex-row items-start gap-4 fade-right">
              <span class="bg-red-600 text-white px-5 py-2 rounded text-sm w-fit ">
                Transparency
              </span>

              <span class="bg-red-600 text-white px-5 py-2 rounded text-sm w-fit ">
                Growth
              </span>

              <span class="bg-red-600 text-white px-5 py-2 rounded text-sm w-fit ">
                Trust
              </span>
            </div>
          </div>

          <!-- RIGHT FORM -->
          <div class="w-full lg:w-[520px] bg-white rounded-xl shadow-2xl px-10 pt-5 pb-10 animate-up">
            <h3 class="text-4xl font-bold text-red-600 mb-8 fade-right">
              Get in touch with us
            </h3>

            <form class="space-y-7 fade-left" action="investor.php" method="post">

              <div>
                <label class="block text-md font-bold mb-1 ">Business Name</label>
                <input name="businessname" required=""
                  class="w-full border-b border-gray-300 focus:border-red-600 outline-none py-2"
                  placeholder=" Enter your Business Name" />
              </div>

              <div>
                <label class="block text-md font-bold mb-1">Business Email</label>
                <input type="email" name="business_email" required=""
                  class="w-full border-b border-gray-300 focus:border-red-600 outline-none py-2"
                  placeholder=" Enter your Business Email" />
              </div>

              <div>
                <label class="block text-md font-bold mb-1">Mobile Number</label>
                <input name="mobile_number" pattern="^\d{10}$"
                  class="w-full border-b border-gray-300 focus:border-red-600 outline-none py-2"
                  placeholder=" Enter your Mobile Number" />
              </div>

              <div>
                <label class="block text-md font-bold mb-1">Message</label>
                <textarea name="message" rows="3"
                  class="w-full border-b border-gray-300 focus:border-red-600 outline-none py-2 resize-none"
                  placeholder="Enter your message here..."></textarea>
              </div>

              <button type="submit" name="submit"
                class="bg-red-600 cursor-pointer text-white px-6 py-3 rounded font-semibold flex items-center gap-2 hover:bg-red-700 transition">
                Learn More →
              </button>
            </form>
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

  <script>
    function initFinanceSlider() {
      const slider = document.querySelector(".finance-slider");

      if (!slider) return;

      const isDesktop = window.innerWidth >= 1024;

      if (isDesktop) return; // disable slider on desktop

      let index = 0;

      setInterval(() => {
        const cards = document.querySelectorAll(".finance-card");
        const cardWidth = cards[0].offsetWidth + 40;

        index = (index + 1) % cards.length;

        slider.scrollTo({
          left: cardWidth * index,
          behavior: "smooth",
        });
      }, 2500);
    }

    window.addEventListener("load", initFinanceSlider);
  </script>
</body>

</html>