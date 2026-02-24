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
        <section class=" px-6 md:px-12 lg:px-20 max-w-8xl mx-auto">
            <div class="max-w-3xl">

                <h2 class="text-4xl md:text-5xl font-bold text-red-600 mb-12">
                    Get in touch with us
                </h2>

                <form id="contactForm" class="space-y-8">

                    <!-- Name -->
                    <div>
                        <label class="block text-lg font-semibold mb-3">Name</label>
                        <input id="name" type="text" placeholder="Enter your Name"
                            class="w-full bg-transparent border-b border-gray-300 focus:outline-none focus:border-red-600 py-3">
                        <p class="text-red-600 text-sm mt-2 hidden" id="nameError">
                            Please enter your name
                        </p>
                    </div>

                    <!-- Email -->
                    <div>
                        <label class="block text-lg font-semibold mb-3">Business Email</label>
                        <input id="email" type="email" placeholder="Enter your email"
                            class="w-full bg-transparent border-b border-gray-300 focus:outline-none focus:border-red-600 py-3">
                        <p class="text-red-600 text-sm mt-2 hidden" id="emailError">
                            Enter a valid email
                        </p>
                    </div>

                    <!-- Mobile -->
                    <div>
                        <label class="block text-lg font-semibold mb-3">Mobile Number</label>
                        <input id="mobile" type="text" placeholder="Enter your number"
                            class="w-full bg-transparent border-b border-gray-300 focus:outline-none focus:border-red-600 py-3">
                        <p class="text-red-600 text-sm mt-2 hidden" id="mobileError">
                            Enter valid 10 digit mobile number
                        </p>
                    </div>

                    <!-- Checkboxes -->
                    <div>
                        <div class="flex flex-wrap gap-8 pt-4">
                            <label class="flex items-center gap-3">
                                <input type="checkbox" class="product" value="TMT Fe550 Bars">
                                TMT Fe550 Bars
                            </label>

                            <label class="flex items-center gap-3">
                                <input type="checkbox" class="product" value="Construction Bars">
                                Construction Bars
                            </label>

                            <label class="flex items-center gap-3">
                                <input type="checkbox" class="product" value="Round Bars">
                                Round Bars
                            </label>

                            <label class="flex items-center gap-3">
                                <input type="checkbox" class="product" value="Billets">
                                Billets
                            </label>
                        </div>

                        <p class="text-red-600 text-sm mt-3 hidden" id="productError">
                            Please select at least one product
                        </p>
                    </div>

                    <!-- Message -->
                    <div>
                        <label class="block text-lg font-semibold mb-3">Message</label>
                        <textarea id="message" rows="4" placeholder="Describe yourself here..."
                            class="w-full bg-transparent border-b border-gray-300 focus:outline-none focus:border-red-600 py-3 resize-none"></textarea>
                    </div>

                    <!-- Submit -->
                    <div class="pt-8">
                        <button type="submit"
                            class="bg-red-600 hover:bg-red-700 text-white text-lg font-semibold px-10 py-4 flex items-center gap-6 transition-all">
                            Submit
                            <span class="text-2xl">›</span>
                        </button>
                    </div>

                </form>
            </div>
        </section>


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