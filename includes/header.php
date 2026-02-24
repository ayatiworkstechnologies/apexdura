<?php
$currentPage = basename($_SERVER['PHP_SELF']);

$productPages = [
  'apextmt-fe500-and-Fe550-Bar.php',
  'apexround-Bar.php',
  'apex-billets.php',
  'ms-channels.php',
  'ms-equalangles.php',
  'ms-beams.php',
  'ms-roundbars.php',
  'ms-squarebars.php',
  'ms-flatbars.php',
  '5mm-tmtbar.php',
  '5mm-to-32mm-tmtbar.php',
  'customize-products.php'
];

$isProductPage = in_array($currentPage, $productPages);
?>


<!-- Floating Glass Header -->
<div class="fixed top-4 left-1/2 -translate-x-1/2
            w-[94%] max-w-7xl z-[999]
            bg-black/25 backdrop-blur-xl
            border border-white/30
            shadow-xl rounded-2xl lg:rounded-[3rem]">

  <div class="flex items-center justify-between
              px-4 sm:px-6 md:px-8 py-3">

    <!-- Logo -->
    <a href="index.php">
      <img src="Apex-icons/Logo.png" alt="Apex Dura Logo" class="h-15 sm:h-14 w-auto md:h-12" />
    </a>

    <!-- Desktop Navigation -->
    <nav class="hidden xl:flex items-center gap-8
            text-white text-base lg:text-lg font-medium">

      <a href="index.php"
        class="transition-all duration-300 hover:text-red-600
     <?= ($currentPage == 'index.php') ? 'bg-white text-red-600 px-5 py-2 rounded-full shadow-md font-semibold' : '' ?>">
        Home
      </a>

      <a href="aboutus.php"
        class="transition-all duration-300 hover:text-red-600
     <?= ($currentPage == 'aboutus.php') ? 'bg-white text-red-600 px-5 py-2 rounded-full shadow-md font-semibold' : '' ?>">
        About Us
      </a>

      <!-- PRODUCTS DROPDOWN -->
      <div class="relative" id="productsMenuWrapper">

        <button id="productsBtn" class="transition-all duration-300 hover:text-red-600 flex items-center gap-1
    <?= ($isProductPage) ? 'bg-white text-red-600 px-5 py-2 rounded-full shadow-md font-semibold' : '' ?>">
          Products ▾
        </button>

        <!-- MAIN DROPDOWN -->
        <div id="productsDropdown" class="absolute left-0 top-full mt-6 hidden
    bg-black/50 backdrop-blur-xl
    border border-white/20 shadow-2xl rounded-xl
    overflow-visible z-50 w-65 p-6 space-y-4">

          <!-- Apex Products -->
          <a href="apextmt-fe500-and-Fe550-Bar.php" class="block hover:text-red-500
      <?= ($currentPage == 'apextmt-fe500-and-Fe550-Bar.php') ? 'text-red-600 font-semibold' : '' ?>">
            Apex TMT Fe 500 and Fe 550 Bar
          </a>

          <a href="apexround-Bar.php" class="block hover:text-red-500
      <?= ($currentPage == 'apexround-Bar.php') ? 'text-red-600 font-semibold' : '' ?>">
            Apex Round Bar
          </a>

          <a href="apex-billets.php" class="block hover:text-red-500
      <?= ($currentPage == 'apex-billets.php') ? 'text-red-600 font-semibold' : '' ?>">
            Apex Billets
          </a>

          <!-- MS PRODUCTS SUBMENU -->
          <div class="relative group/ms">

            <a href="#"
              class="flex justify-between items-center hover:text-red-500
        <?= (in_array($currentPage, ['ms-channels.php', 'ms-equalangles.php', 'ms-beams.php', 'ms-roundbars.php', 'ms-squarebars.php', 'ms-flatbars.php'])) ? 'text-red-600 font-semibold' : '' ?>">
              MS Products
              <span>›</span>
            </a>

            <div class="absolute left-full -top-5 ml-7 hidden group-hover/ms:block
            bg-black/50 backdrop-blur-xl
            border border-white/20 w-60 p-6 space-y-3
            rounded-xl shadow-2xl border border-white/10">

              <a href="ms-channels.php" class="block hover:text-red-500
          <?= ($currentPage == 'ms-channels.php') ? 'text-red-600 font-semibold' : '' ?>">
                MS Channels
              </a>

              <a href="ms-equalangles.php" class="block hover:text-red-500
          <?= ($currentPage == 'ms-equalangles.php') ? 'text-red-600 font-semibold' : '' ?>">
                MS Equal Angles
              </a>

              <a href="ms-beams.php" class="block hover:text-red-500
          <?= ($currentPage == 'ms-beams.php') ? 'text-red-600 font-semibold' : '' ?>">
                MS Beams
              </a>

              <a href="ms-roundbars.php" class="block hover:text-red-500
          <?= ($currentPage == 'ms-roundbars.php') ? 'text-red-600 font-semibold' : '' ?>">
                MS Round Bars
              </a>

              <a href="ms-squarebars.php" class="block hover:text-red-500
          <?= ($currentPage == 'ms-squarebars.php') ? 'text-red-600 font-semibold' : '' ?>">
                MS Square Bars
              </a>

              <a href="ms-flatbars.php" class="block hover:text-red-500
          <?= ($currentPage == 'ms-flatbars.php') ? 'text-red-600 font-semibold' : '' ?>">
                MS Flat Bars
              </a>

            </div>
          </div>

          <!-- TMT SUBMENU -->
          <div class="relative group/tmt">

            <?php
            $currentSize = $_GET['size'] ?? '';
            ?>

            <a href="#"
              class="flex justify-between items-center hover:text-red-500
  <?= ($currentPage == '5mm-tmtbar.php' || $currentPage == '5mm-to-32mm-tmtbar.php') ? 'text-red-600 font-semibold' : '' ?>">
              All TMT Bar Sizes
              <span>›</span>
            </a>

            <div class="absolute left-full -top-5 ml-7 hidden group-hover/tmt:block
  bg-black/50 backdrop-blur-xl
  border border-white/20 w-60 p-6 space-y-3
  rounded-xl shadow-2xl border border-white/10">

              <?php
              $sizes = ['5', '8', '10', '12', '16', '20', '25', '32'];

              foreach ($sizes as $size):

                if ($size == '5') {
                  $file = '5mm-tmtbar.php';
                  $isActive = ($currentPage == '5mm-tmtbar.php');
                } else {
                  $file = '5mm-to-32mm-tmtbar.php?size=' . $size;
                  $isActive = ($currentPage == '5mm-to-32mm-tmtbar.php' && $currentSize == $size);
                }
                ?>

                <a href="<?= $file ?>"
                  class="block hover:text-red-500 <?= $isActive ? 'text-red-600 font-semibold' : '' ?>">
                  <?= $size ?>MM TMT Bar
                </a>

              <?php endforeach; ?>

            </div>
          </div>

          <a href="customize-products.php" class="block hover:text-red-500
      <?= ($currentPage == 'customize-products.php') ? 'text-red-600 font-semibold' : '' ?>">
            Customize Products
          </a>

        </div>
      </div>

      <a href="infrastructure.php"
        class="transition-all duration-300 hover:text-red-600
     <?= ($currentPage == 'infrastructure.php') ? 'bg-white text-red-600 px-5 py-2 rounded-full shadow-md font-semibold' : '' ?>">
        Infrastructure
      </a>

      <a href="investor-corner.php"
        class="transition-all duration-300 hover:text-red-600
     <?= ($currentPage == 'investor-corner.php') ? 'bg-white text-red-600 px-5 py-2 rounded-full shadow-md font-semibold' : '' ?>">
        Investor Corner
      </a>

      <a href="estimator.php"
        class="transition-all duration-300 hover:text-red-600
     <?= ($currentPage == 'estimator.php') ? 'bg-white text-red-600 px-5 py-2 rounded-full shadow-md font-semibold' : '' ?>">
        Estimator
      </a>

      <a href="contact-us.php" class="ml-2 px-6 py-2 rounded-full
    transition-all duration-300 shadow-md
    <?= ($currentPage == 'contact-us.php')
      ? 'bg-white text-red-600'
      : 'bg-red-600 text-white hover:bg-red-700' ?>">
        Contact Us
      </a>

    </nav>

    <!-- Hamburger Button -->
    <button id="menuBtn" class="xl:hidden text-white text-4xl focus:outline-none">
      ☰
    </button>
  </div>

  <!-- Mobile Menu -->
  <div id="mobileMenu" class="hidden xl:hidden
            bg-white/20 backdrop-blur-lg
            text-white
            px-6 py-6 space-y-4
            rounded-b-2xl
            max-h-[80vh] overflow-y-auto">

    <a href="index.php" class="block px-4 py-2 rounded-full transition font-semibold
     hover:bg-white hover:text-red-600 hover:shadow
     <?= ($currentPage == 'index.php') ? 'bg-white text-red-600 shadow font-bold' : '' ?>">
      Home
    </a>

    <a href="aboutus.php" class="block px-4 py-2 rounded-full transition font-semibold
     hover:bg-white hover:text-red-600 hover:shadow
     <?= ($currentPage == 'aboutus.php') ? 'bg-white text-red-600 shadow font-bold' : '' ?>">
      About Us
    </a>

    <!-- PRODUCTS DROPDOWN -->
    <div>

      <!-- Products Toggle -->
      <button id="mobileProductsBtn" class="w-full text-left px-4 py-2 rounded-full transition font-semibold flex justify-between items-center
      hover:bg-white hover:text-red-600 hover:shadow
      <?= ($isProductPage) ? 'bg-white text-red-600 shadow font-bold' : '' ?>">
        Products
        <span>▾</span>
      </button>

      <!-- Products Dropdown -->
      <div id="mobileProductsMenu" class="hidden mt-2 ml-4 space-y-2">

        <a href="apextmt-fe500-and-Fe550-Bar.php" class="block py-1 text-sm hover:text-red-500 uppercase
        <?= ($currentPage == 'apextmt-fe500-and-Fe550-Bar.php') ? 'text-red-600 font-semibold' : '' ?>">
          Apex TMT Fe 500 and Fe 550 Bar
        </a>

        <a href="apexround-Bar.php" class="block py-1 text-sm hover:text-red-500 uppercase
        <?= ($currentPage == 'apexround-Bar.php') ? 'text-red-600 font-semibold' : '' ?>">
          Apex Round Bar
        </a>

        <a href="apex-billets.php" class="block py-1 text-sm hover:text-red-500 uppercase
        <?= ($currentPage == 'apex-billets.php') ? 'text-red-600 font-semibold' : '' ?>">
          Apex Billets
        </a>

        <!-- MS PRODUCTS -->
        <div>
          <button id="mobileMsBtn"
            class="w-full text-left py-1 text-sm flex justify-between items-center hover:text-red-500 uppercase
          <?= (in_array($currentPage, ['ms-channels.php', 'ms-equalangles.php', 'ms-beams.php', 'ms-roundbars.php', 'ms-squarebars.php', 'ms-flatbars.php'])) ? 'text-red-600 font-semibold' : '' ?>">
            MS Products
            <span>▸</span>
          </button>

          <div id="mobileMsMenu" class="hidden mt-2 ml-4 space-y-1">
            <a href="ms-channels.php" class="block text-sm hover:text-red-500
            <?= ($currentPage == 'ms-channels.php') ? 'text-red-600 font-semibold' : '' ?>">MS Channels</a>

            <a href="ms-equalangles.php" class="block text-sm hover:text-red-500
            <?= ($currentPage == 'ms-equalangles.php') ? 'text-red-600 font-semibold' : '' ?>">MS Equal Angles</a>

            <a href="ms-beams.php" class="block text-sm hover:text-red-500
            <?= ($currentPage == 'ms-beams.php') ? 'text-red-600 font-semibold' : '' ?>">MS Beams</a>

            <a href="ms-roundbars.php" class="block text-sm hover:text-red-500
            <?= ($currentPage == 'ms-roundbars.php') ? 'text-red-600 font-semibold' : '' ?>">MS Round Bars</a>

            <a href="ms-squarebars.php" class="block text-sm hover:text-red-500
            <?= ($currentPage == 'ms-squarebars.php') ? 'text-red-600 font-semibold' : '' ?>">MS Square Bars</a>

            <a href="ms-flatbars.php" class="block text-sm hover:text-red-500
            <?= ($currentPage == 'ms-flatbars.php') ? 'text-red-600 font-semibold' : '' ?>">MS Flat Bars</a>
          </div>
        </div>

        <!-- TMT SIZES -->
        <div>
          <?php
          $currentSize = $_GET['size'] ?? '';
          ?>

          <button id="mobileSizesBtn"
            class="w-full text-left py-1 text-sm flex justify-between items-center hover:text-red-500 uppercase
  <?= ($currentPage == '5mm-tmtbar.php' || $currentPage == '5mm-to-32mm-tmtbar.php') ? 'text-red-600 font-semibold' : '' ?>">
            All TMT Bar Sizes
            <span>▸</span>
          </button>

          <div id="mobileSizesMenu" class="hidden mt-2 ml-4 space-y-1">

            <?php
            $sizes = ['5', '8', '10', '12', '16', '20', '25', '32'];

            foreach ($sizes as $size):

              if ($size == '5') {
                $file = '5mm-tmtbar.php';
                $isActive = ($currentPage == '5mm-tmtbar.php');
              } else {
                $file = '5mm-to-32mm-tmtbar.php?size=' . $size;
                $isActive = ($currentPage == '5mm-to-32mm-tmtbar.php' && $currentSize == $size);
              }
              ?>

              <a href="<?= $file ?>"
                class="block text-sm hover:text-red-500 <?= $isActive ? 'text-red-600 font-semibold' : '' ?>">
                <?= $size ?>MM TMT Bar
              </a>

            <?php endforeach; ?>

          </div>
        </div>

        <a href="customize-products.php" class="block py-1 text-sm hover:text-red-500 uppercase
        <?= ($currentPage == 'customize-products.php') ? 'text-red-600 font-semibold' : '' ?>">
          Customize Products
        </a>

      </div>
    </div>

    <a href="infrastructure.php" class="block px-4 py-2 rounded-full transition font-semibold
     hover:bg-white hover:text-red-600 hover:shadow
     <?= ($currentPage == 'infrastructure.php') ? 'bg-white text-red-600 shadow font-bold' : '' ?>">
      Infrastructure
    </a>

    <a href="investor-corner.php" class="block px-4 py-2 rounded-full transition font-semibold
     hover:bg-white hover:text-red-600 hover:shadow
     <?= ($currentPage == 'investor-corner.php') ? 'bg-white text-red-600 shadow font-bold' : '' ?>">
      Investor Corner
    </a>

    <a href="estimator.php" class="block px-4 py-2 rounded-full transition font-semibold
     hover:bg-white hover:text-red-600 hover:shadow
     <?= ($currentPage == 'estimator.php') ? 'bg-white text-red-600 shadow font-bold' : '' ?>">
      Estimator
    </a>

    <a href="contact-us.php" class="block px-4 py-2 rounded-full transition font-semibold
     <?= ($currentPage == 'contact-us.php')
       ? 'bg-white text-red-600 shadow font-bold'
       : 'hover:bg-red-600 hover:text-white' ?>">
      Contact Us
    </a>

  </div>
</div>


<script>
  document.addEventListener("DOMContentLoaded", function () {

    const wrapper = document.getElementById("productsMenuWrapper");
    if (!wrapper) return;

    const dropdown = document.getElementById("productsDropdown");

    const submenus = wrapper.querySelectorAll(
      ".group\\/tmt > div, .group\\/ms > div"
    );

    let mainTimeout;
    let subTimeout;

    // ===== MAIN DROPDOWN =====
    wrapper.addEventListener("mouseenter", () => {
      clearTimeout(mainTimeout);
      dropdown.classList.remove("hidden");
    });

    wrapper.addEventListener("mouseleave", () => {
      mainTimeout = setTimeout(() => {
        dropdown.classList.add("hidden");
        submenus.forEach(menu => menu.classList.add("hidden"));
      }, 300); // reduced delay
    });

    // ===== SUBMENU CONTROL =====
    submenus.forEach(submenu => {
      const parent = submenu.parentElement;

      parent.addEventListener("mouseenter", () => {
        clearTimeout(subTimeout);

        // close ALL submenus immediately
        submenus.forEach(menu => {
          menu.classList.add("hidden");
        });

        submenu.classList.remove("hidden");
      });

      parent.addEventListener("mouseleave", () => {
        subTimeout = setTimeout(() => {
          submenu.classList.add("hidden");
        }, 300); // reduced delay
      });
    });

    // ===== CLOSE ON OUTSIDE CLICK =====
    document.addEventListener("click", function (event) {
      if (!wrapper.contains(event.target)) {
        dropdown.classList.add("hidden");
        submenus.forEach(menu => menu.classList.add("hidden"));
      }
    });

  });
</script>



<!-- mobile navbar -->
<script>
  document.addEventListener("DOMContentLoaded", function () {

    const mobileProductsBtn = document.getElementById("mobileProductsBtn");
    const mobileProductsMenu = document.getElementById("mobileProductsMenu");

    const mobileSizesBtn = document.getElementById("mobileSizesBtn");
    const mobileSizesMenu = document.getElementById("mobileSizesMenu");

    const mobileMsBtn = document.getElementById("mobileMsBtn");
    const mobileMsMenu = document.getElementById("mobileMsMenu");

    if (mobileProductsBtn) {
      mobileProductsBtn.addEventListener("click", () => {
        mobileProductsMenu.classList.toggle("hidden");
      });
    }

    if (mobileSizesBtn) {
      mobileSizesBtn.addEventListener("click", () => {
        mobileMsMenu.classList.add("hidden");
        mobileSizesMenu.classList.toggle("hidden");
      });
    }

    if (mobileMsBtn) {
      mobileMsBtn.addEventListener("click", () => {
        mobileSizesMenu.classList.add("hidden");
        mobileMsMenu.classList.toggle("hidden");
      });
    }

  });
</script>