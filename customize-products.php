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
            <img src="Apex-Images/Investor-Corner-Banner.jpg" class="w-full h-full object-cover"
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
        <section class="bg-gray-100 py-20 px-6 md:px-12 lg:px-20">
            <div class="max-w-3xl">

                <!-- Heading -->
                <h2 class="text-5xl font-bold text-red-600 mb-12">
                    Get in touch with us
                </h2>

                <form id="contactForm" class="space-y-10">

                    <!-- Name -->
                    <div>
                        <label class="block text-lg font-semibold mb-2">Name</label>
                        <input type="text" placeholder="Enter your Name"
                            class="w-full bg-transparent border-b border-gray-300 focus:outline-none focus:border-red-600 py-3">
                    </div>

                    <!-- Email -->
                    <div>
                        <label class="block text-lg font-semibold mb-2">Business Email</label>
                        <input type="email" placeholder="Enter your email"
                            class="w-full bg-transparent border-b border-gray-300 focus:outline-none focus:border-red-600 py-3">
                    </div>

                    <!-- Mobile -->
                    <div>
                        <label class="block text-lg font-semibold mb-2">Mobile Number</label>
                        <input type="text" placeholder="Enter your number"
                            class="w-full bg-transparent border-b border-gray-300 focus:outline-none focus:border-red-600 py-3">
                    </div>

                    <!-- Product Selection -->
                    <div class="pt-6">
                        <div class="flex flex-wrap gap-8 text-lg">

                            <!-- TMT Checkbox -->
                            <label class="flex items-center gap-3 cursor-pointer">
                                <input type="checkbox" id="tmtFe550" class="peer accent-red-600 w-4 h-4">

                                <span class="transition-colors duration-200 peer-checked:text-red-600">
                                    TMT Fe550 Bars
                                </span>
                            </label>

                            <label class="flex items-center gap-3">
                                <input type="checkbox" class="accent-red-600 w-4 h-4">
                                Construction Bars
                            </label>

                            <label class="flex items-center gap-3">
                                <input type="checkbox" class="accent-red-600 w-4 h-4">
                                Round Bars
                            </label>

                            <label class="flex items-center gap-3">
                                <input type="checkbox" class="accent-red-600 w-4 h-4">
                                Billets
                            </label>

                        </div>
                    </div>

                    <!-- TMT Sizes (Hidden by default) -->
                    <div id="tmtSizes" class="hidden pt-6">
                        <div class="flex flex-wrap gap-8 text-lg">

                            <label class="flex items-center gap-3">
                                <input type="checkbox" class="accent-red-600 w-4 h-4"> 5MM
                            </label>

                            <label class="flex items-center gap-3">
                                <input type="checkbox" class="accent-red-600 w-4 h-4"> 8MM
                            </label>

                            <label class="flex items-center gap-3">
                                <input type="checkbox" class="accent-red-600 w-4 h-4"> 10MM
                            </label>

                            <label class="flex items-center gap-3">
                                <input type="checkbox" class="accent-red-600 w-4 h-4"> 12MM
                            </label>

                            <label class="flex items-center gap-3">
                                <input type="checkbox" class="accent-red-600 w-4 h-4"> 16MM
                            </label>

                            <label class="flex items-center gap-3">
                                <input type="checkbox" class="accent-red-600 w-4 h-4"> 20MM
                            </label>

                            <label class="flex items-center gap-3">
                                <input type="checkbox" class="accent-red-600 w-4 h-4"> 25MM
                            </label>

                            <label class="flex items-center gap-3">
                                <input type="checkbox" class="accent-red-600 w-4 h-4"> 32MM
                            </label>

                        </div>
                    </div>

                    <!-- Message -->
                    <div class="pt-6">
                        <label class="block text-lg font-semibold mb-2">Message</label>
                        <textarea rows="4" placeholder="Describe yourself here..."
                            class="w-full bg-transparent border-b border-gray-300 focus:outline-none focus:border-red-600 py-3 resize-none"></textarea>
                    </div>

                    <!-- Submit -->
                    <div class="pt-10">
                        <button type="submit"
                            class="bg-red-600 hover:bg-red-700 text-white text-lg font-semibold px-12 py-4 flex items-center gap-6 transition-all">
                            Submit
                            <span class="text-2xl">›</span>
                        </button>
                    </div>

                </form>
            </div>
        </section>

        <!-- Script -->
        <script>
            document.addEventListener("DOMContentLoaded", function () {

                const tmtCheckbox = document.getElementById("tmtFe550");
                const sizeSection = document.getElementById("tmtSizes");

                tmtCheckbox.addEventListener("change", function () {

                    if (this.checked) {
                        sizeSection.classList.remove("hidden");
                    } else {
                        sizeSection.classList.add("hidden");

                        // Uncheck all size checkboxes when hiding
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


</body>

</html>