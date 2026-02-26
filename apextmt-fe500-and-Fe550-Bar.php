<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Apex TMT Fe 500 and Fe 550 Bar</title>
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
            <img src="Apex-Images/ApexTMT-Fe500.jpg" class="w-full h-full object-cover" alt="Investor Corner Banner" />

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

                    Apex TMT Fe 500 and Fe 550 Bar
                </span>
            </div>
        </div>

        <!-- Header Content Overlay -->
        <?php include "includes/header.php"; ?>
    </header>

    <main>


        <section class=" py-16 px-6 md:px-12 lg:px-20">
            <div class="max-w-7xl mx-auto grid lg:grid-cols-2 gap-30 items-center">

                <!-- LEFT CONTENT -->
                <div>
                    <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-red-600 mb-6 fade-left">
                        Certified High-Strength Steel
                    </h2>

                    <h3 class="text-lg md:text-xl font-semibold text-gray-800 mb-6 fade-right">
                        Superior Grade Fe550 TMT Bars for Maximum Durability & Flexibility
                    </h3>

                    <p class="text-gray-600 leading-relaxed mb-4 fade-left">
                        Apex Dura TMT Fe550 Bars are engineered for superior structural performance,
                        combining high tensile strength with exceptional flexibility. Manufactured
                        using advanced thermo-mechanical treatment technology, Apex Dura ensures
                        unmatched durability, safety, and long-lasting reliability for modern
                        construction needs.
                    </p>

                    <p class="text-gray-600 leading-relaxed mb-4 fade-left">
                        We produce our Fe550 TMT bars from high-grade raw materials, maintaining
                        superior purity and consistent quality standards. Through precision-controlled
                        rolling and quenching processes, we achieve uniform mechanical properties and
                        optimized rib patterns for better bonding with concrete.
                    </p>

                    <p class="text-gray-600 leading-relaxed fade-left">
                        With a tough outer surface and a ductile core structure, Apex Dura Fe550 Bars
                        deliver enhanced earthquake resistance, higher load-bearing capacity, and
                        excellent corrosion resistance.
                    </p>
                </div>

                <!-- RIGHT IMAGE -->
                <div class="relative flex justify-center hidden lg:block lg:justify-end animate-up">



                    <img src="Apex-Images/fe500-real.jpg" alt="Steel Structure"
                        class="w-full max-w-md lg:max-w-lg object-cover shadow-xl">
                </div>

            </div>
        </section>


        <!--Precision Manufacturing Process Laptop SECTION -->
        <section class="bg-red-600 text-white py-16 hidden lg:block">
            <div class="max-w-7xl mx-auto px-6 lg:px-12">
                <div class="grid lg:grid-cols-12 gap-10 items-start">
                    <!-- LEFT BIG IMAGE -->
                    <div class="lg:col-span-4 animate-down">
                        <img src="Apex-Images/process.png" class="w-full h-[420px] object-cover" />

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
                                    <span class="num text-4xl font-bold">
                                        <h3>01</h3>
                                    </span>
                                    <span class="bar w-20 h-[2px] bg-white mt-4 transition-all"></span>

                                    <div>
                                        <h4 class="font-semibold text-xl">
                                            High Tensile Strength
                                        </h4>
                                        <p class="text-md text-white/90 mt-1">
                                            Manufactured to Fe550 grade standards, offering enhanced load-bearing
                                            capacity for high-rise buildings and heavy structures.
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
                                    <span class="num text-4xl font-bold">
                                        <h3>02</h3>
                                    </span>
                                    <span class="bar w-14 h-[2px] bg-white/40 mt-4 transition-all"></span>

                                    <div>
                                        <h4 class="font-semibold text-xl">Excellent Flexibility & Ductility</h4>
                                        <p class="text-md text-white/90 mt-1">
                                            Advanced thermo-mechanical treatment provides a tough outer surface with a
                                            ductile core, improving bendability and crack resistance.
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
                                    <span class="num text-4xl font-bold">
                                        <h3>03</h3>
                                    </span>
                                    <span class="bar w-14 h-[2px] bg-white/40 mt-4 transition-all"></span>

                                    <div>
                                        <h4 class="font-semibold text-xl">
                                            Superior Earthquake Resistance
                                        </h4>
                                        <p class="text-md text-white/90 mt-1">
                                            Optimized microstructure enhances shock absorption and structural stability
                                            during seismic activity.
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
                                    <span class="num text-4xl font-bold">
                                        <h3>04</h3>
                                    </span>
                                    <span class="bar w-14 h-[2px] bg-white/40 mt-4 transition-all"></span>

                                    <div>
                                        <h4 class="font-semibold text-xl">Enhanced Corrosion Resistance</h4>
                                        <p class="text-md text-white/90 mt-1">
                                            Specialized quenching technology ensures long-lasting resistance against
                                            rust and environmental exposure.
                                        </p>
                                    </div>
                                </div>
                            </div>


                            <!-- STEP 05 -->
                            <div class="step opacity-50 relative flex items-center justify-between gap-6 py-6 pl-16 cursor-pointer"
                                data-img="Apex-Images/pmp-5.png">
                                <span
                                    class="indicator-left hidden absolute left-8 top-0 bottom-0 w-[2px] bg-white"></span>
                                <span
                                    class="indicator-bottom hidden absolute left-13 right-0 bottom-0 h-[2px] bg-white"></span>

                                <div class="flex items-start gap-6 flex-1">
                                    <span class="num text-4xl font-bold">
                                        <h3>05</h3>
                                    </span>
                                    <span class="bar w-14 h-[2px] bg-white/40 mt-4 transition-all"></span>

                                    <div>
                                        <h4 class="font-semibold text-xl">Strong Concrete Bonding</h4>
                                        <p class="text-md text-white/90 mt-1">
                                            Precision rib patterns ensure excellent grip with concrete, improving
                                            overall structural integrity.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- STEP 06 -->
                            <div class="step opacity-50 relative flex items-center justify-between gap-6 py-6 pl-16 cursor-pointer"
                                data-img="Apex-Images/pmp-5.png">
                                <span
                                    class="indicator-left hidden absolute left-8 top-0 bottom-0 w-[2px] bg-white"></span>
                                <span
                                    class="indicator-bottom hidden absolute left-13 right-0 bottom-0 h-[2px] bg-white"></span>

                                <div class="flex items-start gap-6 flex-1">
                                    <span class="num text-4xl font-bold">
                                        <h3>06</h3>
                                    </span>
                                    <span class="bar w-14 h-[2px] bg-white/40 mt-4 transition-all"></span>

                                    <div>
                                        <h4 class="font-semibold text-xl">Consistent Quality Standards</h4>
                                        <p class="text-md text-white/90 mt-1">
                                            Produced using controlled rolling processes and tested as per industry norms
                                            to maintain uniform mechanical properties.
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
                <img src="Apex-Images/process.png" class="w-full h-60 sm:h-80 object-cover rounded-lg mb-8 fade-in" />

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
                            <h4 class="font-semibold">High Tensile Strength</h4>
                            <p class="text-sm text-white/80 mt-1">
                                Manufactured to Fe550 grade standards, offering enhanced load-bearing capacity for
                                high-rise buildings and heavy structures.
                            </p>
                        </div>
                    </div>

                    <div class="bg-white/10 rounded-lg p-5 flex gap-4 items-start fade-right">
                        <span class="text-2xl font-bold">
                            <h3>02</h3>
                        </span>
                        <div>
                            <h4 class="font-semibold">Excellent Flexibility & Ductility</h4>
                            <p class="text-sm text-white/80 mt-1">
                                Advanced thermo-mechanical treatment provides a tough outer surface with a ductile core,
                                improving bendability and crack resistance.
                            </p>
                        </div>
                    </div>

                    <div class="bg-white/10 rounded-lg p-5 flex gap-4 items-start fade-left">
                        <span class="text-2xl font-bold">
                            <h3>03</h3>
                        </span>
                        <div>
                            <h4 class="font-semibold">Superior Earthquake Resistance</h4>
                            <p class="text-sm text-white/80 mt-1">
                                Optimized microstructure enhances shock absorption and structural stability during
                                seismic activity.
                            </p>
                        </div>
                    </div>

                    <div class="bg-white/10 rounded-lg p-5 flex gap-4 items-start fade-right">
                        <span class="text-2xl font-bold">
                            <h3>04</h3>
                        </span>
                        <div>
                            <h4 class="font-semibold">Enhanced Corrosion Resistance</h4>
                            <p class="text-sm text-white/80 mt-1">
                                Specialized quenching technology ensures long-lasting resistance against rust and
                                environmental exposure.
                            </p>
                        </div>
                    </div>

                    <div class="bg-white/10 rounded-lg p-5 flex gap-4 items-start fade-right">
                        <span class="text-2xl font-bold">
                            <h3>05</h3>
                        </span>
                        <div>
                            <h4 class="font-semibold">Strong Concrete Bonding</h4>
                            <p class="text-sm text-white/80 mt-1">
                                Precision rib patterns ensure excellent grip with concrete, improving overall structural
                                integrity.
                            </p>
                        </div>
                    </div>

                    <div class="bg-white/10 rounded-lg p-5 flex gap-4 items-start fade-right">
                        <span class="text-2xl font-bold">
                            <h3>06</h3>
                        </span>
                        <div>
                            <h4 class="font-semibold">Consistent Quality Standards</h4>
                            <p class="text-sm text-white/80 mt-1">
                                Produced using controlled rolling processes and tested as per industry norms to maintain
                                uniform mechanical properties.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Engineered for strength.built for realiability -->

        <section class="w-full bg-gray-100 py-24">

            <!-- Heading -->
            <div class="max-w-4xl mx-auto px-6 text-center mb-16">
                <h2 class="text-3xl sm:text-4xl lg:text-5xl 
               font-bold text-red-600 leading-tight mb-6 fade-left">
                    Engineered for Strength. Built <br>
                    for Reliability.
                </h2>

                <p class="text-gray-600 text-md sm:text-base lg:text-md max-w-2xl mx-auto fade-right">
                    Apex Dura TMT Fe550 Bars are designed to deliver superior structural performance,
                    ensuring safety, durability, and long-term value for every construction project.
                </p>
            </div>

            <!-- Icon Grid -->
            <div class="max-w-7xl mx-auto px-6">

                <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-6 gap-y-14 gap-x-8 text-center">

                    <!-- ITEM -->
                    <div>
                        <div class="mb-5 flex justify-center fade-left">
                            <img src="Apex-icons/Ductility.png" class="h-15 w-15" alt="">
                        </div>
                        <h3 class="font-semibold text-gray-800 text-lg fade-right">Ductility</h3>
                    </div>

                    <div>
                        <div class="mb-5 flex justify-center fade-left">
                            <img src="Apex-icons/EarthquakeResistance.png" class="h-15 w-15" alt="">
                        </div>
                        <h3 class="font-semibold text-gray-800 text-lg fade-right">
                            Earthquake Resistance
                        </h3>
                    </div>

                    <div>
                        <div class="mb-5 flex justify-center fade-left">
                            <img src="Apex-icons/Weldability.png" class="h-15 w-15" alt="">
                        </div>
                        <h3 class="font-semibold text-gray-800 text-lg fade-right">
                            Weldability
                        </h3>
                    </div>

                    <div>
                        <div class="mb-5 flex justify-center fade-left">
                            <img src="Apex-icons/PerfectWeight.png" class="h-15 w-15" alt="">
                        </div>
                        <h3 class="font-semibold text-gray-800 text-lg fade-right">
                            Perfect Weight
                        </h3>
                    </div>

                    <div>
                        <div class="mb-5 flex justify-center fade-left">
                            <img src="Apex-icons/2XEnhancedRIBBonding.png" class="h-15 w-15" alt="">
                        </div>
                        <h3 class="font-semibold text-gray-800 text-lg fade-right">
                            2X Enhanced RIB Bonding
                        </h3>
                    </div>

                    <div>
                        <div class="mb-5 flex justify-center fade-left">
                            <img src="Apex-icons/SuperiorBuildQuality.png" class="h-15 w-15" alt="">
                        </div>
                        <h3 class="font-semibold text-gray-800 text-lg fade-right">
                            Superior Build Quality
                        </h3>
                    </div>

                    <!-- Row 2 -->

                    <div>
                        <div class="mb-5 flex justify-center fade-left">
                            <img src="Apex-icons/Bendability.png" class="h-15 w-15" alt="">
                        </div>
                        <h3 class="font-semibold text-gray-800 text-lg fade-right">
                            Bendability
                        </h3>
                    </div>

                    <div>
                        <div class="mb-5 flex justify-center fade-left">
                            <img src="Apex-icons/NoWastage.png" class="h-15 w-15" alt="">
                        </div>
                        <h3 class="font-semibold text-gray-800 text-lg fade-right">
                            No Wastage
                        </h3>
                    </div>

                    <div>
                        <div class="mb-5 flex justify-center fade-left">
                            <img src="Apex-icons/Strength.png" class="h-15 w-15" alt="">
                        </div>
                        <h3 class="font-semibold text-gray-800 text-lg fade-right">
                            Strength
                        </h3>
                    </div>

                    <div>
                        <div class="mb-5 flex justify-center fade-left">
                            <img src="Apex-icons/IncreasedSavings.png" class="h-15 w-15" alt="">
                        </div>
                        <h3 class="font-semibold text-gray-800 text-lg fade-right">
                            Increased Savings
                        </h3>
                    </div>

                    <div>
                        <div class="mb-5 flex justify-center fade-left">
                            <img src="Apex-icons/OptimisedChemicalComposition.png" class="h-15 w-15" alt="">
                        </div>
                        <h3 class="font-semibold text-gray-800 text-lg fade-right">
                            Optimised Chemical Composition
                        </h3>
                    </div>

                    <div>
                        <div class="mb-5 flex justify-center fade-left">
                            <img src="Apex-icons/StandardLength.png" class="h-15 w-15" alt="">
                        </div>
                        <h3 class="font-semibold text-gray-800 text-lg fade-right">
                            Standard Length
                        </h3>
                    </div>

                </div>

            </div>

        </section>





        <!-- The grip of future  -->
        <section class="w-full bg-red-600 flex items-center justify-center mt-7 py-20">

            <div class="text-center px-6">

                <!-- Line 1 -->
                <h1 class="text-white font-extrabold uppercase
               text-4xl sm:text-6xl lg:text-8xl
               leading-tight tracking-wide fade-up">
                    THE GRIP
                </h1>

                <!-- Line 2 -->
                <h1 class="text-white font-extrabold uppercase
               text-4xl sm:text-6xl lg:text-8xl
               leading-tight tracking-wide fade-right">
                    OF THE
                </h1>

                <!-- Highlight Box -->
                <div class="inline-block bg-white mt-3 px-6 sm:px-10 py-3 sm:py-1">
                    <h1 class="text-red-600 font-extrabold uppercase
                 text-4xl sm:text-6xl lg:text-8xl
                 leading-none tracking-wide fade-left">
                        FUTURE
                    </h1>
                </div>

            </div>

        </section>

        <!-- Get in Touch with Apex Dura TMT Experts Today -->
        <section class=" py-20 px-6 md:px-12 lg:px-20 max-w-7xl mx-auto">
            <div class="">

                <!-- Heading -->
                <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-red-600 leading-tight animate-up">
                    Get in Touch with Apex Dura TMT <br class="hidden md:block">
                    Experts Today
                </h2>

                <!-- Description -->
                <p class="mt-8 text-gray-600 text-base md:text-lg leading-relaxed max-w-3xl fade-right">
                    Get expert guidance and premium Fe 500 and Fe550 TMT bars tailored to your
                    project needs.
                </p>

            </div>
        </section>


        <!-- Get in touch form  -->
        <section class="animate-up">
            <div class="max-w-xl mx-auto px-6">

                <!-- Heading -->
                <h2 class="text-3xl md:text-4xl font-bold text-red-600 mb-10 text-center">
                    Get in touch with us
                </h2>

                <form id="productForm" class="space-y-6" action="product-form.php" method="post">

                    <!-- Name -->
                    <div>
                        <label class="block text-base font-semibold mb-2">Name</label>
                        <input name="name" type="text" required placeholder="Enter Your Name"
                            class="w-full bg-transparent border-b border-gray-300 focus:outline-none focus:border-red-600 py-2">
                    </div>

                    <!-- Email -->
                    <div>
                        <label class="block text-base font-semibold mb-2">Business Email</label>
                        <input name="email" type="email" required placeholder="Enter Your Email Address"
                            class="w-full bg-transparent border-b border-gray-300 focus:outline-none focus:border-red-600 py-2">
                    </div>

                    <!-- Mobile -->
                    <div>
                        <label class="block text-base font-semibold mb-2">Mobile Number</label>
                        <input name="mobile" type="text" required pattern="^\d{10}$"
                            placeholder="Enter Your Mobile Number"
                            class="w-full bg-transparent border-b border-gray-300 focus:outline-none focus:border-red-600 py-2">
                    </div>

                    <!-- Products -->
                    <div class="pt-2">
                        <div class="flex flex-wrap gap-6 text-sm">
                            <label class="flex items-center gap-2">
                                <input type="checkbox" name="products[]" value="TMT Fe550 Bars"> TMT Fe550 Bars
                            </label>
                            <label class="flex items-center gap-2">
                                <input type="checkbox" name="products[]" value="Construction Bars"> Construction Bars
                            </label>
                            <label class="flex items-center gap-2">
                                <input type="checkbox" name="products[]" value="Round Bars"> Round Bars
                            </label>
                            <label class="flex items-center gap-2">
                                <input type="checkbox" name="products[]" value="Billets"> Billets
                            </label>
                        </div>
                    </div>

                    <!-- Message -->
                    <div>
                        <label class="block text-base font-semibold mb-2">Message</label>
                        <textarea name="message" rows="3" placeholder="Enter Your Message"
                            class="w-full bg-transparent border-b border-gray-300 focus:outline-none focus:border-red-600 py-2 resize-none"></textarea>
                    </div>

                    <!-- Submit -->
                    <div class="pt-4 text-center">
                        <button type="submit" class="bg-red-600 hover:bg-red-700 text-white font-semibold px-8 py-3">
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

    const wrapper = document.getElementById("steps");
    const steps = document.querySelectorAll("#steps .step");
    if (!wrapper || !steps.length) return;

    let startIndex = 0;
    let autoInterval = null;

    function activateIndicators(step, active) {
        const left = step.querySelector(".indicator-left");
        const bottom = step.querySelector(".indicator-bottom");
        const bar = step.querySelector(".bar");

        if (active) {
            step.classList.remove("opacity-50");
            if (left) left.classList.remove("hidden");
            if (bottom) bottom.classList.remove("hidden");
            if (bar) {
                bar.classList.remove("w-14", "bg-white/40");
                bar.classList.add("w-20", "bg-white");
            }
        } else {
            step.classList.add("opacity-50");
            if (left) left.classList.add("hidden");
            if (bottom) bottom.classList.add("hidden");
            if (bar) {
                bar.classList.remove("w-20", "bg-white");
                bar.classList.add("w-14", "bg-white/40");
            }
        }
    }

    function showTwoSteps() {

        // Hide all
        steps.forEach(step => {
            step.classList.add("hidden-step");
            activateIndicators(step, false);
        });

        // Show first
        const first = steps[startIndex];
        first.classList.remove("hidden-step");
        activateIndicators(first, true);

        // Show second
        const secondIndex = (startIndex + 1) % steps.length;
        const second = steps[secondIndex];
        second.classList.remove("hidden-step");
        activateIndicators(second, false);
    }

    function rotateSteps() {
        startIndex = (startIndex + 1) % steps.length;
        showTwoSteps();
    }

    function startAuto() {
        if (autoInterval) return;
        autoInterval = setInterval(rotateSteps, 4000); // smooth timing
    }

    function stopAuto() {
        clearInterval(autoInterval);
        autoInterval = null;
    }

    // Pause on hover
    wrapper.addEventListener("mouseenter", stopAuto);
    wrapper.addEventListener("mouseleave", startAuto);

    // Click support
    steps.forEach((step, index) => {
        step.addEventListener("click", () => {
            startIndex = index;
            showTwoSteps();
            stopAuto();
            startAuto();
        });
    });

    // Init
    showTwoSteps();
    startAuto();

});
</script>

</body>

</html>