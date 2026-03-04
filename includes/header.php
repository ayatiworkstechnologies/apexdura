<?php
$currentPage = basename($_SERVER['PHP_SELF'], ".php");

$productPages = [
  'apextmt-fe500-and-Fe550-Bar',
  'apexround-Bar',
  'apex-billets',
  'ms-channels',
  'ms-equalangles',
  'ms-beams',
  'ms-roundbars',
  'ms-squarebars',
  'ms-flatbars',
  '5mm-tmtbar',
  '5mm-to-32mm-tmtbar',
  'customize-products'

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
    <a href="index">
      <img src="Apex-icons/Logo.png" alt="Apex Dura Logo" class="h-10 sm:h-10 w-auto md:h-10" />
    </a>

    <!-- Desktop Navigation -->
    <nav class="hidden xl:flex items-center gap-8
            text-white text-base lg:text-lg font-medium">

      <a href="index"
        class="transition-all duration-300 hover:text-red-600
     <?= ($currentPage == 'index') ? 'bg-white text-red-600 px-5 py-2 rounded-full shadow-md font-semibold' : '' ?>">
        Home
      </a>

      <a href="aboutus"
        class="transition-all duration-300 hover:text-red-600
     <?= ($currentPage == 'aboutus') ? 'bg-white text-red-600 px-5 py-2 rounded-full shadow-md font-semibold' : '' ?>">
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
          <a href="apextmt-fe500-and-Fe550-Bar" class="block hover:text-red-500
      <?= ($currentPage == 'apextmt-fe500-and-Fe550-Bar') ? 'text-red-600 font-semibold' : '' ?>">
            Apex TMT Fe 500 and Fe 550 Bar
          </a>

          <a href="apexround-Bar" class="block hover:text-red-500
      <?= ($currentPage == 'apexround-Bar') ? 'text-red-600 font-semibold' : '' ?>">
            Apex Round Bar
          </a>

          <a href="apex-billets" class="block hover:text-red-500
      <?= ($currentPage == 'apex-billets') ? 'text-red-600 font-semibold' : '' ?>">
            Apex Billets
          </a>

          <!-- MS PRODUCTS SUBMENU -->
          <div class="relative group/ms">

            <a href="ms-Products"
              class="flex justify-between items-center hover:text-red-500
        <?= (in_array($currentPage, ['ms-channels', 'ms-equalangles', 'ms-beams', 'ms-roundbars', 'ms-squarebars', 'ms-flatbars'])) ? 'text-red-600 font-semibold' : '' ?>">
              MS Products
              <span>›</span>
            </a>

            <div class="absolute left-full -top-5 ml-7 hidden group-hover/ms:block
            bg-black/50 backdrop-blur-xl
            border border-white/20 w-60 p-6 space-y-3
            rounded-xl shadow-2xl border border-white/10">

              <a href="ms-channels" class="block hover:text-red-500
          <?= ($currentPage == 'ms-channels') ? 'text-red-600 font-semibold' : '' ?>">
                MS Channels
              </a>

              <a href="ms-equalangles" class="block hover:text-red-500
          <?= ($currentPage == 'ms-equalangles') ? 'text-red-600 font-semibold' : '' ?>">
                MS Equal Angles
              </a>

              <a href="ms-beams" class="block hover:text-red-500
          <?= ($currentPage == 'ms-beams') ? 'text-red-600 font-semibold' : '' ?>">
                MS Beams
              </a>

              <a href="ms-roundbars" class="block hover:text-red-500
          <?= ($currentPage == 'ms-roundbars') ? 'text-red-600 font-semibold' : '' ?>">
                MS Round Bars
              </a>

              <a href="ms-squarebars" class="block hover:text-red-500
          <?= ($currentPage == 'ms-squarebars') ? 'text-red-600 font-semibold' : '' ?>">
                MS Square Bars
              </a>

              <a href="ms-flatbars" class="block hover:text-red-500
          <?= ($currentPage == 'ms-flatbars') ? 'text-red-600 font-semibold' : '' ?>">
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
  <?= ($currentPage == '5mm-tmtbar' || $currentPage == '5mm-to-32mm-tmtbar') ? 'text-red-600 font-semibold' : '' ?>">
              All TMT Bar Sizes
              <span>›</span>
            </a>

            <div class="absolute left-full -top-30 ml-7 hidden group-hover/tmt:block
  bg-black/50 backdrop-blur-xl
  border border-white/20 w-60 p-6 space-y-3
  rounded-xl shadow-2xl border border-white/10">

              <?php
              $sizes = ['5', '8', '10', '12', '16', '20', '25', '32'];

              foreach ($sizes as $size):

                if ($size == '5') {
                  $file = '5mm-tmtbar';
                  $isActive = ($currentPage == '5mm-tmtbar');
                } else {
                  $file = '5mm-to-32mm-tmtbar?size=' . $size;
                  $isActive = ($currentPage == '5mm-to-32mm-tmtbar' && $currentSize == $size);
                }
                ?>

                <a href="<?= $file ?>"
                  class="block hover:text-red-500 <?= $isActive ? 'text-red-600 font-semibold' : '' ?>">
                  <?= $size ?>MM TMT Bar
                </a>

              <?php endforeach; ?>

            </div>
          </div>

          <a href="customize-products" class="block hover:text-red-500
      <?= ($currentPage == 'customize-products') ? 'text-red-600 font-semibold' : '' ?>">
            Customize Products
          </a>

        </div>
      </div>

      <a href="infrastructure" class="transition-all duration-300 hover:text-red-600
     <?= ($currentPage == 'infrastructure') ? 'bg-white text-red-600 px-5 py-2 rounded-full shadow-md font-semibold' : '' ?>">
        Our Infrastructure
      </a>

      <a href="investor-corner" class="transition-all duration-300 hover:text-red-600
     <?= ($currentPage == 'investor-corner') ? 'bg-white text-red-600 px-5 py-2 rounded-full shadow-md font-semibold' : '' ?>">
        Investor Corner
      </a>

      <a href="estimator" class="transition-all duration-300 hover:text-red-600
     <?= ($currentPage == 'estimator') ? 'bg-white text-red-600 px-5 py-2 rounded-full shadow-md font-semibold' : '' ?>">
        Estimator
      </a>

      <a href="contact-us" class="ml-2 px-6 py-2 rounded-full
    transition-all duration-300 shadow-md
    <?= ($currentPage == 'contact-us')
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

    <a href="index" class="block px-4 py-2 rounded-full transition font-semibold
     hover:bg-white hover:text-red-600 hover:shadow
     <?= ($currentPage == 'index') ? 'bg-white text-red-600 shadow font-bold' : '' ?>">
      Home
    </a>

    <a href="aboutus" class="block px-4 py-2 rounded-full transition font-semibold
     hover:bg-white hover:text-red-600 hover:shadow
     <?= ($currentPage == 'aboutus') ? 'bg-white text-red-600 shadow font-bold' : '' ?>">
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

        <a href="apextmt-fe500-and-Fe550-Bar" class="block py-1 text-sm hover:text-red-500 uppercase
        <?= ($currentPage == 'apextmt-fe500-and-Fe550-Bar') ? 'text-red-600 font-semibold' : '' ?>">
          Apex TMT Fe 500 and Fe 550 Bar
        </a>

        <a href="apexround-Bar" class="block py-1 text-sm hover:text-red-500 uppercase
        <?= ($currentPage == 'apexround-Bar') ? 'text-red-600 font-semibold' : '' ?>">
          Apex Round Bar
        </a>

        <a href="apex-billets" class="block py-1 text-sm hover:text-red-500 uppercase
        <?= ($currentPage == 'apex-billets') ? 'text-red-600 font-semibold' : '' ?>">
          Apex Billets
        </a>

        <!-- MS PRODUCTS -->
        <div>

          <?php
          $msPages = [
            'ms-products',
            'ms-channels',
            'ms-equalangles',
            'ms-beams',
            'ms-roundbars',
            'ms-squarebars',
            'ms-flatbars'
          ];
          ?>

          <!-- Parent Row -->
          <div class="flex justify-between items-center">

            <!-- LEFT SIDE → Go to ms-products -->
            <a href="ms-products" class="py-1 text-sm uppercase hover:text-red-500
       <?= (in_array($currentPage, $msPages)) ? 'text-red-600 font-semibold' : '' ?>">
              MS Products
            </a>

            <!-- RIGHT SIDE → Toggle submenu only -->
            <button id="mobileMsBtn" class="text-sm px-2 transition-transform duration-300">
              ▸
            </button>

          </div>

          <!-- Submenu -->
          <div id="mobileMsMenu" class="<?= (in_array($currentPage, $msPages) && $currentPage != 'ms-products') ? '' : 'hidden' ?>
              mt-2 ml-4 space-y-2 text-sm">

            <a href="ms-channels" class="block hover:text-red-500
       <?= ($currentPage == 'ms-channels') ? 'text-red-600 font-semibold' : '' ?>">
              MS Channels
            </a>

            <a href="ms-equalangles" class="block hover:text-red-500
       <?= ($currentPage == 'ms-equalangles') ? 'text-red-600 font-semibold' : '' ?>">
              MS Equal Angles
            </a>

            <a href="ms-beams" class="block hover:text-red-500
       <?= ($currentPage == 'ms-beams') ? 'text-red-600 font-semibold' : '' ?>">
              MS Beams
            </a>

            <a href="ms-roundbars" class="block hover:text-red-500
       <?= ($currentPage == 'ms-roundbars') ? 'text-red-600 font-semibold' : '' ?>">
              MS Round Bars
            </a>

            <a href="ms-squarebars" class="block hover:text-red-500
       <?= ($currentPage == 'ms-squarebars') ? 'text-red-600 font-semibold' : '' ?>">
              MS Square Bars
            </a>

            <a href="ms-flatbars" class="block hover:text-red-500
       <?= ($currentPage == 'ms-flatbars') ? 'text-red-600 font-semibold' : '' ?>">
              MS Flat Bars
            </a>

          </div>

        </div>

        <!-- TMT SIZES -->
        <div>
          <?php
          $currentSize = $_GET['size'] ?? '';
          ?>

          <button id="mobileSizesBtn"
            class="w-full text-left py-1 text-sm flex justify-between items-center hover:text-red-500 uppercase
  <?= ($currentPage == '5mm-tmtbar' || $currentPage == '5mm-to-32mm-tmtbar') ? 'text-red-600 font-semibold' : '' ?>">

            <span>All TMT Bar Sizes</span>

            <span class="arrow transition-transform duration-300">▸</span>

          </button>

          <div id="mobileSizesMenu" class="hidden mt-2 ml-4 space-y-1">

            <?php
            $sizes = ['5', '8', '10', '12', '16', '20', '25', '32'];

            foreach ($sizes as $size):

              if ($size == '5') {
                $file = '5mm-tmtbar';
                $isActive = ($currentPage == '5mm-tmtbar');
              } else {
                $file = '5mm-to-32mm-tmtbar?size=' . $size;
                $isActive = ($currentPage == '5mm-to-32mm-tmtbar' && $currentSize == $size);
              }
              ?>

              <a href="<?= $file ?>"
                class="block text-sm hover:text-red-500 <?= $isActive ? 'text-red-600 font-semibold' : '' ?>">
                <?= $size ?>MM TMT Bar
              </a>

            <?php endforeach; ?>

          </div>
        </div>

        <a href="customize-products" class="block py-1 text-sm hover:text-red-500 uppercase
        <?= ($currentPage == 'customize-products') ? 'text-red-600 font-semibold' : '' ?>">
          Customize Products
        </a>

      </div>
    </div>

    <a href="infrastructure" class="block px-4 py-2 rounded-full transition font-semibold
     hover:bg-white hover:text-red-600 hover:shadow
     <?= ($currentPage == 'infrastructure') ? 'bg-white text-red-600 shadow font-bold' : '' ?>">
      Our Infrastructure
    </a>

    <a href="investor-corner" class="block px-4 py-2 rounded-full transition font-semibold
     hover:bg-white hover:text-red-600 hover:shadow
     <?= ($currentPage == 'investor-corner') ? 'bg-white text-red-600 shadow font-bold' : '' ?>">
      Investor Corner
    </a>

    <a href="estimator" class="block px-4 py-2 rounded-full transition font-semibold
     hover:bg-white hover:text-red-600 hover:shadow
     <?= ($currentPage == 'estimator') ? 'bg-white text-red-600 shadow font-bold' : '' ?>">
      Estimator
    </a>

    <a href="contact-us" class="block px-4 py-2 rounded-full transition font-semibold
     <?= ($currentPage == 'contact-us')
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

    // ===== PRODUCTS TOGGLE =====
    if (mobileProductsBtn && mobileProductsMenu) {
      mobileProductsBtn.addEventListener("click", function (e) {
        e.stopPropagation();
        mobileProductsMenu.classList.toggle("hidden");
      });
    }

    // ===== TMT SIZES TOGGLE =====
    if (mobileSizesBtn && mobileSizesMenu) {
      mobileSizesBtn.addEventListener("click", function (e) {
        e.stopPropagation();

        mobileSizesMenu.classList.toggle("hidden");

        const arrow = mobileSizesBtn.querySelector(".arrow");
        if (arrow) {
          arrow.classList.toggle("rotate-90");
        }
      });
    }

    // ===== MS PRODUCTS TOGGLE =====
    if (mobileMsBtn && mobileMsMenu) {
      mobileMsBtn.addEventListener("click", function (e) {
        e.stopPropagation();

        // Close TMT submenu safely
        if (mobileSizesMenu) {
          mobileSizesMenu.classList.add("hidden");
        }

        mobileMsMenu.classList.toggle("hidden");

        // Rotate arrow
        mobileMsBtn.classList.toggle("rotate-90");
      });
    }

  });
</script>