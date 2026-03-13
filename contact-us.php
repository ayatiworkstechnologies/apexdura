<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact-Us</title>
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
      <img src="Apex-Images/contact-us-banner.jpg" class="w-full h-full object-cover" alt="Infrastructure Banner" />

      <!-- center text -->
      <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-center fade-up">
        <h1 class="text-white text-3xl md:text-5xl lg:text-6xl font-bold">
          Contact-<span class="text-red-600" style="font-family:'chakra petch'">US</span>
        </h1>
      </div>

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

          Contact-Us
        </span>
      </div>
    </div>

    <!-- Header Content Overlay -->
    <?php include "includes/header.php"; ?>
  </header>

  <main>
    <section class="max-w-7xl mx-auto px-6 py-16">
      <div class="grid lg:grid-cols-2 gap-12 items-start">
        <!-- LEFT: Form Card -->
        <div class="bg-gray-200 p-10 rounded-md shadow-sm animate-up">
          <h2 class="text-2xl font-semibold mb-6 text-red-600">
            Leave a message
          </h2>
          <form id="contact-form" class="space-y-4" action="contact-form" method="post">

            <!-- Row 1 -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
              <input type="text" name="firstname" required placeholder="Name"
                class="w-full p-3 rounded-md bg-white border border-gray-200 focus:outline-none focus:border-red-500" />

              <input type="email" name="email" required placeholder="Email"
                class="w-full p-3 rounded-md bg-white border border-gray-200 focus:outline-none focus:border-red-500" />
            </div>

            <!-- Row 2 -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
              <input type="text" name="subject" placeholder="Subject"
                class="w-full p-3 rounded-md bg-white border border-gray-200 focus:outline-none focus:border-red-500" />

              <input type="text" name="mobile" required pattern="^\d{10}$" placeholder="Phone (10 digits)"
                class="w-full p-3 rounded-md bg-white border border-gray-200 focus:outline-none focus:border-red-500" />
            </div>

            <!-- Comment -->
            <textarea name="comment" rows="6" required placeholder="Comment"
              class="w-full p-3 rounded-md bg-white border border-gray-200 focus:outline-none focus:border-red-500"></textarea>

            <!-- Button -->
            <button type="submit" name="submit"
              class="bg-red-600 cursor-pointer text-white px-8 py-3 rounded-md hover:bg-red-700 transition">
              SUBMIT
            </button>

          </form>

        </div>


        <!-- RIGHT: Contact Info -->
        <div>
          <!-- Small Label -->
          <div class="flex items-center gap-3 mb-4">
            <div class="w-10 h-[2px] bg-red-600"></div>
            <span class="text-red-600 text-sm font-semibold uppercase fade-left">
              Get in touch
            </span>
          </div>

          <!-- Heading -->
          <h2 class="text-4xl font-bold leading-tight mb-4 text-red-600 fade-right">
            contact us today
          </h2>

          <!-- Paragraph -->
          <p class="text-gray-500 mb-8 max-w-lg fade-right">
            Build with confidence using Apex Dura—engineered for strength,
            durability, and safety. Our team is here to support your
            construction needs with reliable products, expert guidance, and
            timely assistance. Get in touch today and let’s build stronger,
            safer structures together.
          </p>

          <hr class="mb-8 border-gray-200" />

          <!-- Locations -->
          <div class="grid md:grid-cols-2 gap-8">
            <!-- New York -->
            <div class="fade-down">
              <h3 class="font-semibold text-lg mb-4">
                Khayati Steel Industries Private Limited
              </h3>
              <ul class="space-y-3 text-gray-600 text-sm">
                <li>
                  Gulazar No D 33, 4th Main, V.V.Mohalla Mysore KA 570002
                </li>
              </ul>
            </div>

            <!-- Texas -->
            <div class="fade-down">
              <h3 class="font-semibold text-lg mb-4">Work</h3>
              <ul class="space-y-3 text-gray-600 text-sm">
                <li>
                  12P-1/12P-III, Thandya Industrial Area, Thandavapura
                  Nanjangud Taluk, Mysore District, KA 571301
                </li>
                <li class="flex items-center gap-3">
                  <img src="Apex-icons/mail.png" class="w-7 h-7" alt="mail icon" />
                  <span>digital@khayatisteel.in</span>
                </li>

                <li class="flex items-center gap-3 mt-5">
                  <img src="Apex-icons/call.png" class="w-6 h-6" alt="phone icon" />
                  <span>+99439 31999</span>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div id="toast" class="hidden"></div>
    </section>
    <!-- Download brochure section  -->
    <section class="py-16 px-6 bg-white">
      <div class="max-w-3xl mx-auto text-center">

        <!-- Heading -->
        <h2 class="text-4xl font-bold leading-tight mb-4 text-red-600">
          Download Brochure
        </h2>

        <!-- Paragraph -->
        <p class="text-gray-600 text-lg leading-relaxed mb-8 max-w-2xl mx-auto">
          Get our brochure to discover our steel products, industrial solutions, production strength, and commitment to
          quality.
        </p>

        <!-- Button -->
        <button id="openBrochureModal"
          class="inline-flex items-center justify-center bg-red-600 hover:bg-red-700 text-white font-semibold px-8 py-3 cursor-pointer rounded-full shadow-lg transition duration-300">
          Download Now
        </button>
      </div>
    </section>

    <!-- Modal -->
    <div id="brochureModal" class="fixed inset-0 z-50 hidden items-center justify-center bg-black/60 px-4">
      <div class="relative w-full max-w-md rounded-2xl bg-white p-8 shadow-2xl">

        <!-- Close -->
        <button id="closeBrochureModal"
          class="absolute right-4 top-4 text-gray-500 hover:text-red-600 text-2xl leading-none" aria-label="Close">
          &times;
        </button>

        <!-- Title -->
        <div class="flex flex-col items-center text-center px-4 py-6">

          <!-- Logo -->
          <img src="Apex-icons/Apex-logo.png" alt="Apex Logo" class="w-34 sm:w-38 md:w-38 lg:w-36 mb-4" />

          <!-- Heading -->
          <h3 class="text-xl sm:text-2xl font-bold text-gray-800 mb-2">
            Download Brochure
          </h3>

          <!-- Paragraph -->
          <p class="text-sm sm:text-base text-gray-500 max-w-md">
            Fill in your details to download the brochure.
          </p>

        </div>

        <!-- Form -->
        <!-- Form -->
        <form id="brochureForm" action="save-brochure-form.php" class="space-y-4">
          <div>
            <input type="text" id="name" name="name" placeholder="Your Name" required
              class="w-full rounded-xl border border-gray-300 px-4 py-3 outline-none focus:border-red-500 focus:ring-2 focus:ring-red-200" />
          </div>

          <div>
            <input type="email" id="email" name="email" placeholder="Your Email" required
              class="w-full rounded-xl border border-gray-300 px-4 py-3 outline-none focus:border-red-500 focus:ring-2 focus:ring-red-200" />
          </div>

          <div>
            <input type="tel" id="phone" name="phone" placeholder="Phone Number" required pattern="[0-9]{10}"
              class="w-full rounded-xl border border-gray-300 px-4 py-3 outline-none focus:border-red-500 focus:ring-2 focus:ring-red-200" />
          </div>

          <button type="submit"
            class="w-full bg-red-600 hover:bg-red-700 cursor-pointer text-white font-semibold py-3 rounded-xl transition duration-300">
            Submit & Download
          </button>
        </form>

        <!-- Toast below form -->
        <!-- <div id="toast-container" class="mt-4 flex flex-col gap-3"></div> -->


      </div>

    </div>
    <script>
      const openModalBtn = document.getElementById("openBrochureModal");
      const closeModalBtn = document.getElementById("closeBrochureModal");
      const brochureModal = document.getElementById("brochureModal");
      const brochureForm = document.getElementById("brochureForm");

      openModalBtn.addEventListener("click", () => {
        brochureModal.classList.remove("hidden");
        brochureModal.classList.add("flex");
      });

      closeModalBtn.addEventListener("click", () => {
        brochureModal.classList.add("hidden");
        brochureModal.classList.remove("flex");
      });

      brochureModal.addEventListener("click", (e) => {
        if (e.target === brochureModal) {
          brochureModal.classList.add("hidden");
          brochureModal.classList.remove("flex");
        }
      });

      brochureForm.addEventListener("submit", async function (e) {
        e.preventDefault();

        const name = document.getElementById("name").value.trim();
        const email = document.getElementById("email").value.trim();
        const phone = document.getElementById("phone").value.trim();

        if (!name || !email || !phone) {
          return;
        }

        if (!/^[0-9]{10}$/.test(phone)) {
          return;
        }

        const formData = new FormData();
        formData.append("name", name);
        formData.append("email", email);
        formData.append("phone", phone);

        try {
          const response = await fetch("save-brochure-form.php", {
            method: "POST",
            body: formData
          });

          const result = await response.json();

          if (result.status === "success" || result.status === "warning") {

            const link = document.createElement("a");
            link.href = "pdf/Apex-Steel-Brochure.pdf";
            link.download = "ApexDura-Brochure.pdf";
            document.body.appendChild(link);
            link.click();
            document.body.removeChild(link);

            brochureModal.classList.add("hidden");
            brochureModal.classList.remove("flex");
            brochureForm.reset();
          }

        } catch (error) {
          console.error(error);
        }
      });
    </script>

    <!-- location -->
    <section class="w-full">
      <div class="w-full h-[400px] md:h-[500px] lg:h-[600px]">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3705.0449053091324!2d76.62074017482992!3d12.321827087936967!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3baf7a9222d9eec1%3A0x6d0f59910c5aec83!2sApex%20Group!5e1!3m2!1sen!2sin!4v1770620142055!5m2!1sen!2sin"
          class="w-full h-full border-0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
        </iframe>
      </div>
    </section>

  </main>

  <!-- footer section -->
  <?php include "includes/footer.php"; ?>

  <script src="Js/Home-slider.js"></script>
  <script src="Js/Mobile-navbar.js"></script>
  <script src="Js/Scroll-Animation.js"></script>
  <script src="Js/Animation.js"></script>
  <script src="Js/progressbar-script.js"></script>
  <script src="Js/bottom-up-arrow-script.js"></script>
  <script>
    document.getElementById("contact-form").addEventListener("submit", function (e) {
      e.preventDefault();

      const form = this;
      const formData = new FormData(form);

      fetch("contact-form", {
        method: "POST",
        body: formData
      })
        .then(res => res.json())
        .then(data => {
          showToast(data.status, data.message);

          if (data.status === "success") {
            form.reset();
          }
        })
        .catch(() => {
          showToast("error", "Something went wrong!");
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