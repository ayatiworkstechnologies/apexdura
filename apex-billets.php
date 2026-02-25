<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Apex Billets</title>
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

</head>

<body>
    <!-- Progress bar -->
    <div class="fixed top-0 left-0 w-full h-1 z-[9999]">
        <div id="progressBar" class="h-full w-0 bg-gradient-to-r from-white to-red-500 transition-all duration-150">
        </div>
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
            <img src="Apex-Images/Apex billets-web.jpg" class="w-full h-full object-cover"
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

                    Apex Billets
                </span>
            </div>
        </div>

        <!-- Header Content Overlay -->
        <?php include "includes/header.php"; ?>
    </header>

    <main>


        <section class=" py-16 px-6 md:px-12 lg:px-20">
            <div class="max-w-7xl mx-auto grid lg:grid-cols-2 gap-12 items-center">

                <!-- LEFT CONTENT -->
                <div>
                    <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-red-600 mb-6">
                        Unbreakable Strength, Unbeatable Quality
                    </h2>



                    <p class="text-gray-600 leading-relaxed mb-4">
                        Mild steel billets, also known as MS billets, are produced in Apex Dura’s high efficiency
                        induction furnaces through processes that are IS 2830:2012 certified. These MS billets are
                        semi-complete steel products that have either square or rectangular cross-sections. They are
                        made via continuous rolling or continuous casting processes at temperatures higher than 1000
                        degree celsius.
                    </p>

                    <p class="text-gray-600 leading-relaxed mt-4">
                        As part of its stringent quality assurance plan, Apex Dura has employed an advanced Metal
                        Spectrometer to test the quality of MS billets.
                    </p>


                </div>

                <!-- RIGHT IMAGE -->
                <div class="relative hidden lg:flex justify-end">
                    <div class="w-full max-w-md">
                        <img src="Apex-Images/billet-product.png" alt="Steel Structure" class="w-full h-[350px] object-cover 
                rounded-2xl shadow-xl">
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
                        <img src="Apex-Images/billets-img.png" class="w-full h-[420px] object-cover" />

                        <h3 class="mt-6 text-2xl font-semibold leading-snug">
                            Our Process
                        </h3>
                    </div>

                    <!-- RIGHT CONTENT -->
                    <div class="lg:col-span-8 relative">
                        <!-- BASE GREY TIMELINE -->
                        <div class="absolute left-8 top-20 bottom-0 w-[2px] bg-white/30"></div>

                        <h2 class="text-3xl font-bold mb-10 pl-16 fade-up">
                            Apex Dura TMT Fe 500 and Fe550 Bars
                        </h2>

                        <!-- STEPS -->
                        <div id="steps" class="space-y-8 fade-in">
                            <!-- STEP 01 (ACTIVE DEFAULT) -->
                            <div class="step relative flex items-center justify-between gap-6 py-6 pl-16 cursor-pointer"
                                data-img="Apex-Images/pmp-2.png">
                                <!-- CONNECTED WHITE LINE -->
                                <span class="indicator-left absolute left-8 top-0 bottom-0 w-[2px] bg-white"></span>

                                <!-- bottom divider -->
                                <span
                                    class="indicator-bottom absolute left-13 right-0 bottom-0 h-[2px] bg-white"></span>

                                <div class="flex items-start gap-6 flex-1">
                                    <span class="num text-3xl font-bold">
                                        <h3>01</h3>
                                    </span>
                                    <span class="bar w-20 h-[2px] bg-white mt-4 transition-all"></span>

                                    <div>
                                        <h4 class="font-semibold text-lg">
                                            Premium Raw Material Selection
                                        </h4>
                                        <p class="text-sm text-white/90 mt-1">
                                            We use high-quality sponge iron, heavy melting scrap, turnings, and bundled
                                            scrap sourced from trusted scrap yards to ensure superior base strength.
                                        </p>
                                    </div>
                                </div>


                            </div>

                            <!-- STEP 02 -->
                            <div class="step opacity-50 relative flex items-center justify-between gap-6 py-6 pl-16 cursor-pointer"
                                data-img="Apex-Images/pmp-3.png">
                                <span
                                    class="indicator-left hidden absolute left-8 top-0 bottom-0 w-[2px] bg-white"></span>
                                <span
                                    class="indicator-bottom hidden absolute left-13 right-0 bottom-0 h-[2px] bg-white"></span>

                                <div class="flex items-start gap-6 flex-1">
                                    <span class="num text-3xl font-bold">
                                        <h3>02</h3>
                                    </span>
                                    <span class="bar w-14 h-[2px] bg-white/40 mt-4 transition-all"></span>

                                    <div>
                                        <h4 class="font-semibold text-lg">MS Billet Manufacturing</h4>
                                        <p class="text-sm text-white/90 mt-1">
                                            The selected raw materials are processed under strict quality control to
                                            produce high-strength MS billets with consistent structural integrity.
                                        </p>
                                    </div>
                                </div>


                            </div>

                            <!-- STEP 03 -->
                            <div class="step opacity-50 relative flex items-center justify-between gap-6 py-6 pl-16 cursor-pointer"
                                data-img="Apex-Images/pmp-4.png">
                                <span
                                    class="indicator-left hidden absolute left-8 top-0 bottom-0 w-[2px] bg-white"></span>
                                <span
                                    class="indicator-bottom hidden absolute left-13 right-0 bottom-0 h-[2px] bg-white"></span>

                                <div class="flex items-start gap-6 flex-1">
                                    <span class="num text-3xl font-bold">
                                        <h3>03</h3>
                                    </span>
                                    <span class="bar w-14 h-[2px] bg-white/40 mt-4 transition-all"></span>

                                    <div>
                                        <h4 class="font-semibold text-lg">
                                            Grade-Based Color Coding
                                        </h4>
                                        <p class="text-sm text-white/90 mt-1">
                                            Each billet is color-coded according to its quality grade, ensuring clear
                                            identification and quality traceability.
                                        </p>
                                    </div>
                                </div>


                            </div>

                            <!-- STEP 04 -->
                            <div class="step opacity-50 relative flex items-center justify-between gap-6 py-6 pl-16 cursor-pointer"
                                data-img="Apex-Images/pmp-5.png">
                                <span
                                    class="indicator-left hidden absolute left-8 top-0 bottom-0 w-[2px] bg-white"></span>
                                <span
                                    class="indicator-bottom hidden absolute left-13 right-0 bottom-0 h-[2px] bg-white"></span>

                                <div class="flex items-start gap-6 flex-1">
                                    <span class="num text-3xl font-bold">
                                        <h3>04</h3>
                                    </span>
                                    <span class="bar w-14 h-[2px] bg-white/40 mt-4 transition-all"></span>

                                    <div>
                                        <h4 class="font-semibold text-lg">Systematic Stacking & Batch Control</h4>
                                        <p class="text-sm text-white/90 mt-1">
                                            Billets are stacked grade-wise and organized until the required
                                            manufacturing quantity is achieved.
                                        </p>
                                    </div>
                                </div>


                            </div>

                            <!-- step 05 -->
                            <div class="step opacity-50 relative flex items-center justify-between gap-6 py-6 pl-16 cursor-pointer"
                                data-img="Apex-Images/pmp-5.png">
                                <span
                                    class="indicator-left hidden absolute left-8 top-0 bottom-0 w-[2px] bg-white"></span>
                                <span
                                    class="indicator-bottom hidden absolute left-13 right-0 bottom-0 h-[2px] bg-white"></span>

                                <div class="flex items-start gap-6 flex-1">
                                    <span class="num text-3xl font-bold">
                                        <h3>05</h3>
                                    </span>
                                    <span class="bar w-14 h-[2px] bg-white/40 mt-4 transition-all"></span>

                                    <div>
                                        <h4 class="font-semibold text-lg">Conversion into TMT Bars</h4>
                                        <p class="text-sm text-white/90 mt-1">
                                            Once the batch requirement is met, the MS billets are dispatched for
                                            advanced rolling and conversion into high-performance TMT bars.
                                        </p>
                                    </div>
                                </div>


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
                <img src="Apex-Images/billets-img.png"
                    class="w-full h-60 sm:h-80 object-cover rounded-lg mb-8 fade-in" />

                <h2 class="text-2xl sm:text-3xl font-bold mb-8 fade-left">
                    Apex Dura TMT Fe 500 and Fe550 Bars
                </h2>

                <!-- Steps stacked cards -->
                <div class="space-y-6">
                    <!-- Step -->
                    <div class="bg-white/10 rounded-lg p-5 flex gap-4 items-start fade-left">
                        <span class="text-2xl font-bold">
                            <h3>01</h3>
                        </span>
                        <div>
                            <h4 class="font-semibold">Premium Raw Material Selection</h4>
                            <p class="text-sm text-white/80 mt-1">
                                We use high-quality sponge iron, heavy melting scrap, turnings, and bundled scrap
                                sourced from trusted scrap yards to ensure superior base strength.
                            </p>
                        </div>
                    </div>

                    <div class="bg-white/10 rounded-lg p-5 flex gap-4 items-start fade-right">
                        <span class="text-2xl font-bold">
                            <h3>02</h3>
                        </span>
                        <div>
                            <h4 class="font-semibold">MS Billet Manufacturing</h4>
                            <p class="text-sm text-white/80 mt-1">
                                The selected raw materials are processed under strict quality control to produce
                                high-strength MS billets with consistent structural integrity.
                            </p>
                        </div>
                    </div>

                    <div class="bg-white/10 rounded-lg p-5 flex gap-4 items-start fade-left">
                        <span class="text-2xl font-bold">
                            <h3>03</h3>
                        </span>
                        <div>
                            <h4 class="font-semibold">Grade-Based Color Coding</h4>
                            <p class="text-sm text-white/80 mt-1">
                                Each billet is color-coded according to its quality grade, ensuring clear identification
                                and quality traceability.
                            </p>
                        </div>
                    </div>

                    <div class="bg-white/10 rounded-lg p-5 flex gap-4 items-start fade-right">
                        <span class="text-2xl font-bold">
                            <h3>04</h3>
                        </span>
                        <div>
                            <h4 class="font-semibold">Systematic Stacking & Batch Control</h4>
                            <p class="text-sm text-white/80 mt-1">
                                Billets are stacked grade-wise and organized until the required manufacturing quantity
                                is achieved.
                            </p>
                        </div>
                    </div>

                    <div class="bg-white/10 rounded-lg p-5 flex gap-4 items-start fade-right">
                        <span class="text-2xl font-bold">
                            <h3>05</h3>
                        </span>
                        <div>
                            <h4 class="font-semibold">Conversion into TMT Bars</h4>
                            <p class="text-sm text-white/80 mt-1">
                                Once the batch requirement is met, the MS billets are dispatched for advanced rolling
                                and conversion into high-performance TMT bars.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Enhance Your Construction -->
        <section class="max-w-8xl mx-auto  overflow-hidden mt-10">
            <div class="relative flex flex-col lg:flex-row items-center min-h-[420px]">

                <!-- LEFT CONTENT -->
                <div class="w-full lg:w-1/2 px-6 sm:px-10 md:px-14 lg:px-20 py-12 text-red-600 z-10">
                    <div class="max-w-[560px]">
                        <h1 class="text-[28px] sm:text-[34px] md:text-[40px] font-bold leading-snug mb-5 animate-up">
                            Steel Made Stronger For <br class="hidden sm:block" />
                            Futuristic Structures
                        </h1>

                        <p class="text-sm text-gray-600 sm:text-base leading-relaxed mb-8 opacity-95 fade-down">
                            MS billets are integral to TMT steel manufacturing—TMT stands for ‘thermo mechanically
                            treated’. As a leading steel manufacturer in South India, Apex Dura Steel produces
                            top-quality MS billets from low-carbon mild steel. Known for their weldability, ductility,
                            and formability, these billets are ideal for diverse industrial applications in
                            construction, automotive, engineering, and manufacturing sectors. TMT steel, essential for
                            skyscrapers, warehouses, power plants, residential and commercial buildings, bridges,
                            tunnels, and flyovers, relies on MS billets.
                        </p>


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


        <!-- Get in Touch with Apex Dura TMT Experts Today -->
        <section class=" py-20 px-6 md:px-12 lg:px-20">
            <div class="max-w-5xl">

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


        <!-- Get in touch form  -->
        <section class=" px-6 md:px-12 lg:px-20 max-w-8xl mx-auto">
            <div class="max-w-3xl">

                <h2 class="text-4xl md:text-5xl font-bold text-red-600 mb-12">
                    Get in touch with us
                </h2>

                <form id="productForm" class="space-y-8" action="product-form.php" method="post">

                    <!-- Name -->
                    <div>
                        <label class="block text-lg font-semibold mb-3">Name</label>
                        <input id="name" name="name" placeholder="Enter Your Name" type="text" required
                            class="w-full bg-transparent border-b border-gray-300 focus:outline-none focus:border-red-600 py-3">
                    </div>

                    <!-- Email -->
                    <div>
                        <label class="block text-lg font-semibold mb-3">Business Email</label>
                        <input id="email" name="email" placeholder="Enter Your Email Address" type="email" required
                            class="w-full bg-transparent border-b border-gray-300 focus:outline-none focus:border-red-600 py-3">
                    </div>

                    <!-- Mobile -->
                    <div>
                        <label class="block text-lg font-semibold mb-3">Mobile Number</label>
                        <input id="mobile" name="mobile" placeholder="Enter Your Mobile Number" type="text" required
                            pattern="^\d{10}$"
                            class="w-full bg-transparent border-b border-gray-300 focus:outline-none focus:border-red-600 py-3">
                    </div>

                    <!-- Products -->
                    <div>
                        <div class="flex flex-wrap gap-8 pt-4">
                            <label><input type="checkbox" name="products[]" value="TMT Fe550 Bars"> TMT Fe550
                                Bars</label>
                            <label><input type="checkbox" name="products[]" value="Construction Bars"> Construction
                                Bars</label>
                            <label><input type="checkbox" name="products[]" value="Round Bars"> Round Bars</label>
                            <label><input type="checkbox" name="products[]" value="Billets"> Billets</label>
                        </div>
                    </div>

                    <!-- Message -->
                    <div>
                        <label class="block text-lg font-semibold mb-3">Message</label>
                        <textarea id="message" placeholder="Enter Your message" name="message" rows="4"
                            class="w-full bg-transparent border-b border-gray-300 focus:outline-none focus:border-red-600 py-3 resize-none"></textarea>
                    </div>

                    <div class="pt-8">
                        <button type="submit"
                            class="bg-red-600 hover:bg-red-700 text-white text-lg font-semibold px-10 py-4">
                            Submit
                        </button>
                    </div>

                </form>
            </div>
        </section>

        <div id="toast" class="hidden"></div>


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
        document.getElementById("productForm").addEventListener("submit", function (e) {
            e.preventDefault();

            const form = this;
            const button = form.querySelector("button");
            const formData = new FormData(form);

            // Loading state
            button.disabled = true;
            button.innerText = "Submitting...";

            fetch("product-form.php", {
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





    <!-- Precision Manufacturing Process -->
    <script>
        document.addEventListener("DOMContentLoaded", function () {

            const steps = document.querySelectorAll(".step");
            if (!steps.length) return;

            let currentStep = 0;
            let autoInterval;

            function activateStep(index) {

                steps.forEach((s) => {

                    // Dim all
                    s.classList.add("opacity-50");

                    const left = s.querySelector(".indicator-left");
                    const bottom = s.querySelector(".indicator-bottom");
                    const bar = s.querySelector(".bar");

                    if (left) left.classList.add("hidden");
                    if (bottom) bottom.classList.add("hidden");

                    if (bar) {
                        bar.classList.remove("w-20", "bg-white");
                        bar.classList.add("w-14", "bg-white/40");
                    }

                });

                // Activate selected
                const active = steps[index];

                active.classList.remove("opacity-50");

                const left = active.querySelector(".indicator-left");
                const bottom = active.querySelector(".indicator-bottom");
                const bar = active.querySelector(".bar");

                if (left) left.classList.remove("hidden");
                if (bottom) bottom.classList.remove("hidden");

                if (bar) {
                    bar.classList.remove("w-14", "bg-white/40");
                    bar.classList.add("w-20", "bg-white");
                }
            }

            function startAuto() {
                autoInterval = setInterval(() => {
                    currentStep = (currentStep + 1) % steps.length;
                    activateStep(currentStep);
                }, 3000);
            }

            function restartAuto() {
                clearInterval(autoInterval);
                startAuto();
            }

            steps.forEach((step, index) => {
                step.addEventListener("click", () => {
                    currentStep = index;
                    activateStep(currentStep);
                    restartAuto();
                });
            });

            // Initialize
            activateStep(currentStep);
            startAuto();

        });
    </script>

</body>

</html>