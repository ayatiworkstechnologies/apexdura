<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Customize Products</title>
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
    <div id="progressBar" class="h-full w-0 bg-gradient-to-r from-white to-red-500 transition-all duration-150">
    </div>
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
      <img src="Apex-Images/customize-Banner.jpg" class="w-full h-full object-cover" alt="Investor Corner Banner" />

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

          Customize Products
        </span>
      </div>
    </div>

    <!-- Header Content Overlay -->
    <?php include "includes/header.php"; ?>
  </header>

  <main>
    <!-- Get in Touch with Apex Dura TMT Experts Today -->
    <section class="max-w-7xl mx-auto py-20 px-6 md:px-12 lg:px-20">
      <div>

        <!-- Heading -->
        <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-red-600 fade-left leading-tight">
          Get in Touch with Apex Dura TMT <br class="hidden md:block">
          Experts Today
        </h2>

        <!-- Description -->
        <p class="mt-8 text-gray-600 text-base md:text-lg leading-relaxed fade-right max-w-3xl">
          Get expert guidance and premium Fe 500 and Fe550 TMT bars tailored to your
          project needs.
        </p>

      </div>
    </section>


<!-- Get in touch form -->
<section class=" animate-up">
  <div class="max-w-2xl mx-auto px-6">

    <!-- Heading -->
    <h2 class="text-3xl md:text-4xl font-bold text-red-600 mb-8 text-center">
      Get in touch with us
    </h2>

    <form id="customize-Form" class="space-y-6" method="post" action="customize-form.php">

      <!-- Name -->
      <div>
        <label class="block text-base font-semibold mb-2">Name</label>
        <input type="text" name="name" required placeholder="Enter Your Name"
          class="w-full bg-transparent border-b border-gray-300 focus:outline-none focus:border-red-600 py-2">
      </div>

      <!-- Email -->
      <div>
        <label class="block text-base font-semibold mb-2">Business Email</label>
        <input type="email" name="email" required placeholder="Enter Your Email Address"
          class="w-full bg-transparent border-b border-gray-300 focus:outline-none focus:border-red-600 py-2">
      </div>

      <!-- Mobile -->
      <div>
        <label class="block text-base font-semibold mb-2">Mobile Number</label>
        <input type="text" name="mobile" required pattern="^\d{10}$"
          placeholder="Enter Your Mobile Number"
          class="w-full bg-transparent border-b border-gray-300 focus:outline-none focus:border-red-600 py-2">
      </div>

      <!-- Products -->
      <div class="pt-2 space-y-4">

        <!-- TMT Dropdown -->
        <div>
          <div id="tmtToggle"
            class="flex items-center justify-start cursor-pointer text-base font-medium">

            <div class="flex items-center gap-2">
              <input type="checkbox" name="products[]" value="TMT Fe550 Bars"
                id="tmtFe550" class="accent-red-600 w-4 h-4">
              <span>TMT Fe550 Bars</span>
            </div>

            <!-- Arrow Icon -->
            <svg id="dropdownIcon"
              class="w-5 h-5 transition-transform duration-300 ml-5"
              fill="none" stroke="currentColor" stroke-width="2"
              viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round"
                d="M19 9l-7 7-7-7" />
            </svg>

          </div>

          <!-- Sizes -->
          <div id="tmtSizes" class="hidden ml-6 mt-4">
            <div class="grid grid-cols-2 gap-3 text-sm">
              <label><input type="checkbox" name="sizes[]" value="5MM"> 5MM</label>
              <label><input type="checkbox" name="sizes[]" value="8MM"> 8MM</label>
              <label><input type="checkbox" name="sizes[]" value="10MM"> 10MM</label>
              <label><input type="checkbox" name="sizes[]" value="12MM"> 12MM</label>
              <label><input type="checkbox" name="sizes[]" value="16MM"> 16MM</label>
              <label><input type="checkbox" name="sizes[]" value="20MM"> 20MM</label>
              <label><input type="checkbox" name="sizes[]" value="25MM"> 25MM</label>
              <label><input type="checkbox" name="sizes[]" value="32MM"> 32MM</label>
            </div>
          </div>
        </div>

        <!-- Other Products -->
        <div class="flex flex-wrap gap-5 text-base">
          <label><input type="checkbox" name="products[]" value="Construction Bars"> Construction Bars</label>
          <label><input type="checkbox" name="products[]" value="Round Bars"> Round Bars</label>
          <label><input type="checkbox" name="products[]" value="Billets"> Billets</label>
        </div>

      </div>

      <!-- Message -->
      <div>
        <label class="block text-base font-semibold mb-2">Message</label>
        <textarea name="message" rows="3" placeholder="Enter Your Message"
          class="w-full bg-transparent border-b border-gray-300 focus:outline-none focus:border-red-600 py-2 resize-none"></textarea>
      </div>

      <!-- Button -->
      <div class="pt-4 text-center">
        <button type="submit"
          class="bg-red-600 hover:bg-red-700 text-white font-semibold px-10 py-2">
          Submit
        </button>
      </div>

    </form>
  </div>

  <div id="toast" class="hidden"></div>
</section>

<script>
document.addEventListener("DOMContentLoaded", function () {

  const toggle = document.getElementById("tmtToggle");
  const checkbox = document.getElementById("tmtFe550");
  const sizeSection = document.getElementById("tmtSizes");
  const icon = document.getElementById("dropdownIcon");

  toggle.addEventListener("click", function (e) {

    // Prevent double toggle when clicking checkbox
    if (e.target.tagName !== "INPUT") {
      checkbox.checked = !checkbox.checked;
    }

    sizeSection.classList.toggle("hidden", !checkbox.checked);

    if (checkbox.checked) {
      icon.classList.add("rotate-180");
    } else {
      icon.classList.remove("rotate-180");

      // Uncheck sizes when closing
      const sizeCheckboxes = sizeSection.querySelectorAll("input[type='checkbox']");
      sizeCheckboxes.forEach(cb => cb.checked = false);
    }

  });

});
</script>

  </main>

  <!-- footer section -->
  <?php include "includes/footer.php"; ?>
  <script src="Js/Home-slider.js"></script>
  <script src="Js/Mobile-navbar.js"></script>
  <script src="Js/Animation.js"></script>
  <script src="Js/progressbar-script.js"></script>
  <script src="Js/bottom-up-arrow-script.js"></script>
  <script>
    document.getElementById("customize-Form").addEventListener("submit", function (e) {
      e.preventDefault();

      const form = this;
      const button = form.querySelector("button");
      const formData = new FormData(form);

      // Loading state
      button.disabled = true;
      button.innerText = "Submitting...";

      fetch("customize-form.php", {
        method: "POST",
        body: formData
      })
        .then(res => res.json())
        .then(data => {
          showToast(data.status, data.message);

          if (data.status === "success") {
            form.reset();
          }

          button.disabled = false;
          button.innerText = "Submit";
        })
        .catch(() => {
          showToast("error", "Something went wrong!");
          button.disabled = false;
          button.innerText = "Submit";
        });
    });

    function showToast(status, message) {
      const toast = document.getElementById("toast");

      toast.className = "fixed bottom-5 right-5 px-6 py-3 rounded-lg shadow-lg text-white font-semibold transition-all duration-500 z-50";

      if (status === "success") {
        toast.classList.add("bg-green-600");
      } else if (status === "warning") {
        toast.classList.add("bg-yellow-500");
      } else {
        toast.classList.add("bg-red-600");
      }

      toast.innerText = message;
      toast.classList.remove("hidden");

      setTimeout(() => {
        toast.classList.add("hidden");
      }, 4000);
    }
  </script>

</body>

</html>