<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Customize Products</title>
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
            <img src="Apex-Images/customize-Banner.jpg" class="w-full h-full object-cover"
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
                <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-red-600 leading-tight">
                    Get in Touch with Apex Dura TMT <br class="hidden md:block">
                    Experts Today
                </h2>

                <!-- Description -->
                <p class="mt-8 text-gray-600 text-base md:text-lg leading-relaxed max-w-3xl">
                    Get expert guidance and premium Fe 500 and Fe550 TMT bars tailored to your
                    project needs.
                </p>

            </div>
        </section>


      <!-- Get in touch form -->
<section class="max-w-7xl mx-auto bg-gray-100 py-10 px-6 md:px-12 lg:px-10">
  <div>

    <!-- Heading -->
    <h2 class="text-5xl font-bold text-red-600 mb-10">
      Get in touch with us
    </h2>

    <form id="customize-Form" class="space-y-10" method="post" action="customize-form.php">

  <!-- Name -->
  <div>
    <label class="block text-lg font-semibold mb-2">Name</label>
    <input type="text" name="name" required
      class="w-full bg-transparent border-b border-gray-300 focus:outline-none focus:border-red-600 py-3">
  </div>

  <!-- Email -->
  <div>
    <label class="block text-lg font-semibold mb-2">Business Email</label>
    <input type="email" name="email" required
      class="w-full bg-transparent border-b border-gray-300 focus:outline-none focus:border-red-600 py-3">
  </div>

  <!-- Mobile -->
  <div>
    <label class="block text-lg font-semibold mb-2">Mobile Number</label>
    <input type="text" name="mobile" required pattern="^\d{10}$"
      class="w-full bg-transparent border-b border-gray-300 focus:outline-none focus:border-red-600 py-3">
  </div>

  <!-- Products -->
  <div class="pt-3 space-y-4">

    <div>
      <label class="flex items-center gap-3 cursor-pointer text-lg">
        <input type="checkbox" name="products[]" value="TMT Fe550 Bars" id="tmtFe550"
          class="peer accent-red-600 w-4 h-4">
        <span class="peer-checked:text-red-600">TMT Fe550 Bars</span>
      </label>

      <div id="tmtSizes" class="hidden mt-6 ml-8">
        <div class="grid grid-cols-2 md:grid-cols-3 gap-y-6 gap-x-10 text-lg">

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

    <div class="flex flex-wrap gap-8 text-lg">
      <label><input type="checkbox" name="products[]" value="Construction Bars"> Construction Bars</label>
      <label><input type="checkbox" name="products[]" value="Round Bars"> Round Bars</label>
      <label><input type="checkbox" name="products[]" value="Billets"> Billets</label>
    </div>

  </div>

  <!-- Message -->
  <div class="pt-2">
    <label class="block text-lg font-semibold mb-2">Message</label>
    <textarea name="message" rows="4"
      class="w-full bg-transparent border-b border-gray-300 focus:outline-none focus:border-red-600 py-3 resize-none"></textarea>
  </div>

  <div class="pt-5">
    <button type="submit"
      class="bg-red-600 hover:bg-red-700 text-white text-lg font-semibold px-12 py-2">
      Submit
    </button>
  </div>

</form>
  </div>
  <div id="toast" class="hidden"></div>
</section>

<!-- Script -->
<script>
document.addEventListener("DOMContentLoaded", function () {

  const tmtCheckbox = document.getElementById("tmtFe550");
  const sizeSection = document.getElementById("tmtSizes");

  tmtCheckbox.addEventListener("change", function () {

    sizeSection.classList.toggle("hidden", !this.checked);

    if (!this.checked) {
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
document.getElementById("customize-Form").addEventListener("submit", function(e) {
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