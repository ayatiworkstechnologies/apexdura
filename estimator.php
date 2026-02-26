<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Project-Estimator</title>
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
      <img src="Apex-Images/Estimator-Banner.jpg" class="w-full h-full object-cover" alt="Investor Corner Banner" />

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

          Estimator
        </span>
      </div>
    </div>

    <!-- Header Content Overlay -->
    <?php include "includes/header.php"; ?>
  </header>

  <main>
    <section class="max-w-6xl mx-auto px-6 py-12">
      <!-- Header -->
      <h1 class="text-3xl font-bold text-red-600 mb-4 fade-left">
        Welcome to Our Investor Relations
      </h1>
      <p class="text-gray-500 max-w-6xl text-sm mb-10 fade-right">
        M/S. Khayati Steel Industries Pvt. Ltd. Upholds a Steadfast Commitment
        To Delivering Sustainable Value For All Stakeholders. Its Remarkable
        Track Record Of Financial Discipline Attests To Its Continuous Pursuit
        Of Excellence As A World-Class Organisation.
      </p>

      <!-- Form Section -->
      <h2 class="text-3xl font-bold text-red-600 mb-6 fade-up">Estimated Area </h2>

      <div class="flex flex-col md:flex-row gap-6 items-end mb-5 fade-right">
        <!-- Area Select -->
        <div class="w-full md:w-64">
          <label class="block text-gray-700 text-sm mb-2">Area</label>
          <input type="number" id="areaInput"
            class="  w-full border-b-2 border-gray-300 focus:border-red-600 outline-none "
            placeholder="Please enter area">


        </div>

        <!-- Unit Select -->
        <div class="w-full md:w-64">
          <label class="block text-gray-700 text-sm mb-2">Unit</label>
          <select id="unitSelect"
            class="w-full border-b-2 border-gray-300 focus:border-red-600 outline-none py-2 bg-transparent">
            <option selected>Select unit</option>
            <option value="sqft">Sqft</option>
            <option value="sqm">Sqm</option>
          </select>
        </div>
      </div>
      <div class="mb-6 fade-left">
        <!-- Submit Button -->
        <button class="bg-red-400 text-white px-5 py-1 flex items-center gap-3 hover:bg-red-700 transition"
          onclick="calculateEstimation()">
          <h3 class="text-lg font-semibold cursor-pointer">Submit</h3>
          <span class="text-lg w-4 h-4"><img src="Apex-icons/Next-large.png" alt="icon-next" /></span>
        </button>
      </div>

      <!-- Results Section -->
      <h2 class="text-3xl font-bold text-red-600 mb-4 fade-right ">Estimated Area</h2>
      <p class="text-gray-500 text-sm mb-8 max-w-6xl fade-left">
        M/S. Khayati Steel Industries Pvt. Ltd. Upholds A Steadfast Commitment
        To Delivering Sustainable Value For All Stakeholders. Its Remarkable
      </p>

      <!-- Cards -->
      <div id="resultArea" class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 animate-down">
        <!-- Card -->
        <div class="bg-white shadow-md rounded-md p-4 transition transform duration-300 hover:-translate-y-3">
          <p class="text-gray-500 text-sm mb-2">Cement Bags</p>
          <div class="flex items-center justify-between">
            <span class="text-xl font-semibold text-gray-800">0</span>
            <div class="w-7 h-7 rounded flex items-center justify-center text-red-500">
              <img src="Apex-icons/shopping-bag.png" alt="shopping bag" />
            </div>
          </div>
        </div>

        <!-- Repeat Cards -->
        <div class="bg-white shadow-md rounded-md p-4 transition transform duration-300 hover:-translate-y-3">
          <p class="text-gray-500 text-sm mb-2">Sand Bags</p>
          <div class="flex items-center justify-between">
            <span class="text-xl font-semibold text-gray-800">0</span>
            <div class="w-7 h-7 rounded flex items-center justify-center text-red-500">
              <img src="Apex-icons/shopping-bag.png" alt="shopping bag" />
            </div>
          </div>
        </div>

        <div class="bg-white shadow-md rounded-md p-4 transition transform duration-300 hover:-translate-y-3">
          <p class="text-gray-500 text-sm mb-2">Bricks</p>
          <div class="flex items-center justify-between">
            <span class="text-xl font-semibold text-gray-800">0</span>
            <div class="w-7 h-7 rounded flex items-center justify-center text-red-500">
              <img src="Apex-icons/shopping-bag.png" alt="shopping bag" />
            </div>
          </div>
        </div>

        <div class="bg-white shadow-md rounded-md p-4 transition transform duration-300 hover:-translate-y-3">
          <p class="text-gray-500 text-sm mb-2">Stone Aggregates</p>
          <div class="flex items-center justify-between">
            <span class="text-xl font-semibold text-gray-800">0</span>
            <div class="w-7 h-7 rounded flex items-center justify-center text-red-500">
              <img src="Apex-icons/shopping-bag.png" alt="shopping bag" />
            </div>
          </div>
        </div>

        <div class="bg-white shadow-md rounded-md p-4 transition transform duration-300 hover:-translate-y-3">
          <p class="text-gray-500 text-sm mb-2">Reinforcement Steel</p>
          <div class="flex items-center justify-between">
            <span class="text-xl font-semibold text-gray-800">0</span>
            <div class="w-7 h-7 rounded flex items-center justify-center text-red-500">
              <img src="Apex-icons/shopping-bag.png" alt="shopping bag" />
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

  <script>
    function calculateEstimation() {
      const area = parseFloat(document.getElementById('areaInput').value);
      const unit = document.getElementById('unitSelect').value;
      const resultArea = document.getElementById('resultArea');
      resultArea.innerHTML = '';

      if (!area || area <= 0 || !unit) {
        resultArea.innerHTML = '<div class="text-danger">Please enter valid area and select unit.</div>';
        return;
      }

      // Convert sqm to sqft
      const areaInSqft = unit === 'sqm' ? area * 10.7639 : area;

      const estimates = [
        { label: "Cement Bags", value: (areaInSqft * 0.1).toFixed(0) + " Bags" },
        { label: "Sand Bags", value: (areaInSqft * 0.1).toFixed(0) + " Bags" },
        { label: "Bricks", value: (areaInSqft * 10).toFixed(0) },
        { label: "Stone Aggregates", value: (areaInSqft * 0.1).toFixed(0) },
        { label: "Reinforcement Steel", value: (areaInSqft * 0.2).toFixed(0) },
      ];

      estimates.forEach(item => {
        const card = document.createElement('div');
        card.className = 'estimation-card';
        card.innerHTML = `
          <div class="estimation-value bg-white shadow-md rounded-md p-4 transition transform duration-300 hover:-translate-y-3">
            <p class="text-gray-500 text-sm mb-2">${item.label}</p>
            <div class="flex items-center justify-between">
              <span class="text-xl font-semibold text-gray-800">${item.value}</span>
              <div class="w-7 h-7 rounded flex items-center justify-center text-red-500">
                <img src="Apex-icons/shopping-bag.png" alt="shopping bag">
              </div>
            </div>
          </div>
      `;
        resultArea.appendChild(card);
      });
    }
  </script>


  <script type="text/javascript">
    //Textbox Number Validation
    jQuery('body').delegate('input.numberonly', 'keyup', function (e) {
      jQuery(this).closest(".material-form-group").find(".label-error").hide();

      if (/\D/g.test(this.value)) {
        this.value = this.value.replace(/\D/g, '');
      }
      if (jQuery(this).val() == "") {
        jQuery(this).closest(".material-form-group").find(".label-error").show();
        return false;
      }
    });

    // Calculate Button Click Validation
    jQuery('body').delegate('.material-input-btn', 'click', function (e) {
      debugger;
      jQuery(".material-form-group").find(".label-error").hide();
      var sqft = jQuery("#Area").val();
      var lUnit = jQuery("#lUnit").val();

      if (sqft == "" || sqft == null) {
        jQuery("#Area").focus();
        jQuery("#Area").closest(".material-form-group").find(".label-error").show();
        return false;
      }
      else if (lUnit == "0") {
        jQuery("#lUnit").focus();
        jQuery("#lUnit").closest(".material-form-group").find(".label-error").show();
        return false;
      }
      Calculatornew(sqft, lUnit);
      jQuery(".calc-print-btn").removeAttr("disabled");
    });

    // Calculate Accordion Toggle
    jQuery('body').delegate('.result-section-accordion .result-accordion-header', 'click', function (e) {
      jQuery(this).closest(".result-section-accordion").toggleClass("active");
    });

    function printDiv() {
      window.print();
    }

    function Calculatornew(e, i) {
      debugger;
      var a = jQuery("#Area").val();
      if (i == "sqft") {
        var b = Math.round(a * 0.326);
        var s = Math.round(a * 1.17);
        s = Math.round(s * 46.71);
        s = Math.round(s / 1000);
        var saa = Math.round(a * 0.18);
        var sab = Math.round(a * 0.33);
        var bri = Math.round(a * 28.84);
        var rs = Math.round(a * 0.8);

        jQuery('.bags h2').html(b + " bags");
        jQuery('.sands h2').html(s + " ton");
        jQuery('.StoneAggregates h2').html(saa + " CFT");
        jQuery('.Bricks h2').html(bri);
        jQuery('.ReinforcementSteel h2').html(rs + " kg");
      }
      if (i == "sqyd") {
        a = Math.round(a * 9);
        var b = Math.round(a * 0.326);
        var s = Math.round(a * 1.17);
        s = Math.round(s * 46.71);
        s = Math.round(s / 1000);
        var saa = Math.round(a * 0.18);
        var sab = Math.round(a * 0.33);
        var bri = Math.round(a * 28.84);
        var rs = Math.round(a * 0.8);

        jQuery('.bags h2').html(b + " bags");
        jQuery('.sands h2').html(s + " ton");
        jQuery('.StoneAggregates h2').html(saa + " CFT");
        jQuery('.Bricks h2').html(bri);
        jQuery('.ReinforcementSteel h2').html(rs + " kg");
      }

      var vheight = jQuery(".material-calculator-notes").offset().top;
      vheight = (vheight + 50);
      jQuery('html, body').animate({
        scrollTop: vheight
      }, 1000);
    }
  </script>

</body>

</html>