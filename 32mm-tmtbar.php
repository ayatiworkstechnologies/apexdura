<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> 32MM TMT Bar</title>
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
            <img src="Apex-Images/Apex-tmt-banner-image.jpg" class="w-full h-full object-cover"
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

                    32MM TMT Bar
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
                        Certified High-Strength Steel
                    </h2>

                    <h3 class="text-lg md:text-xl font-semibold text-gray-800 mb-6">
                        Superior Grade Fe550 TMT Bars for Maximum Durability & Flexibility
                    </h3>

                    <p class="text-gray-600 leading-relaxed mb-4">
                        Apex Dura TMT Fe550 Bars are engineered for superior structural performance,
                        combining high tensile strength with exceptional flexibility. Manufactured
                        using advanced thermo-mechanical treatment technology, Apex Dura ensures
                        unmatched durability, safety, and long-lasting reliability for modern
                        construction needs.
                    </p>

                    <p class="text-gray-600 leading-relaxed mb-4">
                        We produce our Fe550 TMT bars from high-grade raw materials, maintaining
                        superior purity and consistent quality standards. Through precision-controlled
                        rolling and quenching processes, we achieve uniform mechanical properties and
                        optimized rib patterns for better bonding with concrete.
                    </p>

                    <p class="text-gray-600 leading-relaxed">
                        With a tough outer surface and a ductile core structure, Apex Dura Fe550 Bars
                        deliver enhanced earthquake resistance, higher load-bearing capacity, and
                        excellent corrosion resistance.
                    </p>
                </div>

                <!-- RIGHT IMAGE -->
                <div class="relative flex justify-center hidden lg:block lg:justify-end">



                    <img src="Apex-Images/steel-factory.jpg" alt="Steel Structure"
                        class="w-full max-w-md lg:max-w-lg object-cover shadow-xl">
                </div>

            </div>
        </section>


        <!-- Scroll section -->

        <!-- Advanced Features Scroll Section -->
        <section class="relative w-full">

            <!-- Heading -->
            <div class="max-w-6xl mx-auto px-6 text-center py-20">
                <h2 class="text-3xl sm:text-4xl lg:text-5xl 
               font-bold text-red-600 leading-tight">
                    Advanced Features of 5mm <br>
                    TMT Bar
                </h2>
            </div>

            <!-- Scroll Area -->
            <div class="relative lg:h-[200vh]">

                <!-- CARD 01 -->
                <div class="lg:sticky lg:top-20 lg:h-[50vh] 
                flex items-center justify-center 
                mb-16 lg:mb-0">

                    <div class="bg-white rounded-3xl 
                  w-[92%] lg:w-[75%] max-w-6xl
                  px-8 sm:px-14 lg:px-20 
                  py-12 lg:py-16
                  shadow-2xl border border-gray-200">

                        <div class="flex flex-col lg:flex-row 
                    items-start lg:items-center 
                    justify-between gap-10">

                            <div class="max-w-lg">
                                <h3 class="text-xl lg:text-2xl font-bold text-red-600 mb-5">
                                    State-of-the-Art Thermo-Mechanical Treatment
                                </h3>
                                <p class="text-gray-600 leading-relaxed">
                                    Our 5mm TMT bars are manufactured through an advanced
                                    thermo-mechanical treatment process, ensuring high tensile strength,
                                    superior ductility, and enhanced resistance to seismic and
                                    external pressures.
                                </p>
                            </div>

                            <div class="text-red-600 font-black 
                      text-[90px] sm:text-[130px] lg:text-[200px]
                      leading-none" style="font-family:'Chakra Petch', sans-serif;">
                                01
                            </div>

                        </div>
                    </div>
                </div>

                <!-- CARD 02 -->
                <div class="lg:sticky lg:top-20 lg:h-[50vh] 
                flex items-center justify-center 
                mb-16 lg:mb-0">

                    <div class="bg-white rounded-3xl 
                  w-[92%] lg:w-[75%] max-w-6xl
                  px-8 sm:px-14 lg:px-20 
                  py-12 lg:py-16
                  shadow-2xl border border-gray-200">

                        <div class="flex flex-col lg:flex-row 
                    items-start lg:items-center 
                    justify-between gap-10">

                            <div class="max-w-lg">
                                <h3 class="text-xl lg:text-2xl font-bold text-red-600 mb-5">
                                    Superior Corrosion Resistance
                                </h3>
                                <p class="text-gray-600 leading-relaxed">
                                    Engineered with enhanced surface properties, our bars provide
                                    exceptional resistance against rust and corrosion, increasing
                                    structural lifespan even in coastal and humid environments.
                                </p>
                            </div>

                            <div class="text-red-600 font-black 
                      text-[90px] sm:text-[130px] lg:text-[200px]
                      leading-none" style="font-family:'Chakra Petch', sans-serif;">
                                02
                            </div>

                        </div>
                    </div>
                </div>

                <!-- CARD 02 -->
                <div class="lg:sticky lg:top-20 lg:h-[50vh] 
                flex items-center justify-center 
                mb-16 lg:mb-0">

                    <div class="bg-white rounded-3xl 
                  w-[92%] lg:w-[75%] max-w-6xl
                  px-8 sm:px-14 lg:px-20 
                  py-12 lg:py-16
                  shadow-2xl border border-gray-200">

                        <div class="flex flex-col lg:flex-row 
                    items-start lg:items-center 
                    justify-between gap-10">

                            <div class="max-w-lg">
                                <h3 class="text-xl lg:text-2xl font-bold text-red-600 mb-5">
                                    Superior Corrosion Resistance
                                </h3>
                                <p class="text-gray-600 leading-relaxed">
                                    Engineered with enhanced surface properties, our bars provide
                                    exceptional resistance against rust and corrosion, increasing
                                    structural lifespan even in coastal and humid environments.
                                </p>
                            </div>

                            <div class="text-red-600 font-black 
                      text-[90px] sm:text-[130px] lg:text-[200px]
                      leading-none" style="font-family:'Chakra Petch', sans-serif;">
                                03
                            </div>

                        </div>
                    </div>
                </div>


                <!-- CARD 02 -->
                <div class="lg:sticky lg:top-20 lg:h-[50vh] 
                flex items-center justify-center 
                mb-16 lg:mb-0">

                    <div class="bg-white rounded-3xl 
                  w-[92%] lg:w-[75%] max-w-6xl
                  px-8 sm:px-14 lg:px-20 
                  py-12 lg:py-16
                  shadow-2xl border border-gray-200">

                        <div class="flex flex-col lg:flex-row 
                    items-start lg:items-center 
                    justify-between gap-10">

                            <div class="max-w-lg">
                                <h3 class="text-xl lg:text-2xl font-bold text-red-600 mb-5">
                                    Superior Corrosion Resistance
                                </h3>
                                <p class="text-gray-600 leading-relaxed">
                                    Engineered with enhanced surface properties, our bars provide
                                    exceptional resistance against rust and corrosion, increasing
                                    structural lifespan even in coastal and humid environments.
                                </p>
                            </div>

                            <div class="text-red-600 font-black 
                      text-[90px] sm:text-[130px] lg:text-[200px]
                      leading-none" style="font-family:'Chakra Petch', sans-serif;">
                                04
                            </div>

                        </div>
                    </div>
                </div>



            </div>
            </div>
            </div>

            </div>

        </section>




        <!-- Why Choose Our 5mm TMT Bar -->
        <section class="w-full  py-20">

            <!-- Heading -->
            <div class="max-w-5xl mx-auto px-6 text-center mb-16">
                <h2 class="text-3xl sm:text-4xl lg:text-5xl 
               font-bold text-red-600 leading-tight">
                    Why Choose Our 5mm TMT <br>
                    Bar?
                </h2>
            </div>

            <!-- Content -->
            <section class="py-16">
                <div class="max-w-7xl mx-auto px-6 relative">

                    <!-- Navigation Buttons (Top Right) -->
<div class="absolute -top-20 right-10 flex gap-3 z-10">
    
    <button id="prevBtn"
        class="bg-red-600 text-white w-10 h-10 rounded-full flex items-center justify-center">
        &#10094;
    </button>

    <button id="nextBtn"
        class="bg-red-600 text-white w-10 h-10 rounded-full flex items-center justify-center">
        &#10095;
    </button>

</div>

                    <!-- Carousel Wrapper -->
                    <div class="overflow-hidden">
                        <div id="carousel" class="flex transition-transform duration-500 ease-in-out">

                            <!-- ITEM -->
                            <div class="min-w-full sm:min-w-1/2 lg:min-w-1/4 px-6">
                                <h3 class="font-semibold text-lg mb-4">High Tensile Strength</h3>
                                <p class="text-gray-600 text-sm leading-relaxed">
                                    Manufactured to Fe550 grade standards, offering enhanced
                                    load-bearing capacity for high-rise buildings and heavy structures.
                                </p>
                            </div>

                            <div class="min-w-full sm:min-w-1/2 lg:min-w-1/4 px-6">
                                <h3 class="font-semibold text-lg mb-4">High Ductility</h3>
                                <p class="text-gray-600 text-sm leading-relaxed">
                                    Superior flexibility ensures better earthquake resistance and
                                    structural stability.
                                </p>
                            </div>

                            <div class="min-w-full sm:min-w-1/2 lg:min-w-1/4 px-6">
                                <h3 class="font-semibold text-lg mb-4">Corrosion Resistance</h3>
                                <p class="text-gray-600 text-sm leading-relaxed">
                                    Advanced manufacturing process improves durability and lifespan.
                                </p>
                            </div>

                            <div class="min-w-full sm:min-w-1/2 lg:min-w-1/4 px-6">
                                <h3 class="font-semibold text-lg mb-4">Better Bonding</h3>
                                <p class="text-gray-600 text-sm leading-relaxed">
                                    Strong rib pattern ensures firm grip with concrete.
                                </p>
                            </div>

                            <div class="min-w-full sm:min-w-1/2 lg:min-w-1/4 px-6">
                                <h3 class="font-semibold text-lg mb-4">Thermal Stability</h3>
                                <p class="text-gray-600 text-sm leading-relaxed">
                                    Maintains structural integrity even under high temperatures.
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
            </section>

        </section>




        <!--Precision Manufacturing Process Laptop SECTION -->
        <section class="bg-red-600 text-white py-16 hidden lg:block">
            <div class="max-w-7xl mx-auto px-6 lg:px-12">
                <div class="grid lg:grid-cols-12 gap-10 items-start">
                    <!-- LEFT BIG IMAGE -->
                    <div class="lg:col-span-4 animate-down">
                        <img src="Apex-Images/pmp-1.png" class="w-full h-[420px] object-cover" />

                        <h3 class="mt-6 text-2xl font-semibold leading-snug">
                            Key Applications of 5mm TMT Bar
                        </h3>
                    </div>

                    <!-- RIGHT CONTENT -->
                    <div class="lg:col-span-8 relative">
                        <!-- BASE GREY TIMELINE -->
                        <div class="absolute left-8 top-20 bottom-0 w-[2px] bg-white/30"></div>

                        <p class="text-sm  mb-10 pl-16 fade-up">
                            5mm TMT Bars serve a wide array of applications across various industries due to their
                            strength, flexibility, and corrosion resistance:</p>

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
                                            Residential Construction
                                        </h4>
                                        <p class="text-sm text-white/90 mt-1">
                                            Carefully sourced raw materials to ensure strength, purity, and consistency.
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
                                        <h4 class="font-semibold text-lg">Advanced Rolling</h4>
                                        <p class="text-sm text-white/90 mt-1">
                                            Precision Rolling Processes Shape Steel For Uniform
                                            Strength And Performance.
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
                                            Quenching & Tempering
                                        </h4>
                                        <p class="text-sm text-white/90 mt-1">
                                            Controlled Heat Treatment Enhances Ductility, Toughness
                                            And Durability.
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
                                        <h4 class="font-semibold text-lg">Quality Testing</h4>
                                        <p class="text-sm text-white/90 mt-1">
                                            Rigorous Testing Ensures Compliance With BIS Standards
                                            And Reliability.
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
                                    <span class="num text-3xl font-bold">
                                        <h3>05</h3>
                                    </span>
                                    <span class="bar w-14 h-[2px] bg-white/40 mt-4 transition-all"></span>

                                    <div>
                                        <h4 class="font-semibold text-lg">Quality Testing</h4>
                                        <p class="text-sm text-white/90 mt-1">
                                            Rigorous Testing Ensures Compliance With BIS Standards
                                            And Reliability.
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
                                    <span class="num text-3xl font-bold">
                                        <h3>06</h3>
                                    </span>
                                    <span class="bar w-14 h-[2px] bg-white/40 mt-4 transition-all"></span>

                                    <div>
                                        <h4 class="font-semibold text-lg">Quality Testing</h4>
                                        <p class="text-sm text-white/90 mt-1">
                                            Rigorous Testing Ensures Compliance With BIS Standards
                                            And Reliability.
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
                <img src="Apex-Images/pmp-1.png" class="w-full h-60 sm:h-80 object-cover rounded-lg mb-8 fade-in" />

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
                            <h4 class="font-semibold">Billet Heating</h4>
                            <p class="text-sm text-white/80 mt-1">
                                Carefully sourced raw materials to ensure strength, purity, and consistency.
                            </p>
                        </div>
                    </div>

                    <div class="bg-white/10 rounded-lg p-5 flex gap-4 items-start fade-right">
                        <span class="text-2xl font-bold">
                            <h3>02</h3>
                        </span>
                        <div>
                            <h4 class="font-semibold">Advanced Rolling</h4>
                            <p class="text-sm text-white/80 mt-1">
                                Precision rolling processes shape steel for uniform strength
                                and performance.
                            </p>
                        </div>
                    </div>

                    <div class="bg-white/10 rounded-lg p-5 flex gap-4 items-start fade-left">
                        <span class="text-2xl font-bold">
                            <h3>03</h3>
                        </span>
                        <div>
                            <h4 class="font-semibold">Quenching & Tempering</h4>
                            <p class="text-sm text-white/80 mt-1">
                                Controlled heat treatment enhances ductility, toughness and
                                durability.
                            </p>
                        </div>
                    </div>

                    <div class="bg-white/10 rounded-lg p-5 flex gap-4 items-start fade-right">
                        <span class="text-2xl font-bold">
                            <h3>04</h3>
                        </span>
                        <div>
                            <h4 class="font-semibold">Quality Testing</h4>
                            <p class="text-sm text-white/80 mt-1">
                                Rigorous testing ensures compliance with BIS standards and
                                reliability.
                            </p>
                        </div>
                    </div>

                    <div class="bg-white/10 rounded-lg p-5 flex gap-4 items-start fade-right">
                        <span class="text-2xl font-bold">
                            <h3>05</h3>
                        </span>
                        <div>
                            <h4 class="font-semibold">Quality Testing</h4>
                            <p class="text-sm text-white/80 mt-1">
                                Rigorous testing ensures compliance with BIS standards and
                                reliability.
                            </p>
                        </div>
                    </div>

                    <div class="bg-white/10 rounded-lg p-5 flex gap-4 items-start fade-right">
                        <span class="text-2xl font-bold">
                            <h3>06</h3>
                        </span>
                        <div>
                            <h4 class="font-semibold">Quality Testing</h4>
                            <p class="text-sm text-white/80 mt-1">
                                Rigorous testing ensures compliance with BIS standards and
                                reliability.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>




        <!-- Apex advantages -->
        <!-- Sunvik 5mm TMT Bar Advantages -->
        <section class="w-full bg-gray-100 py-20">

            <!-- Heading -->
            <div class="max-w-6xl mx-auto px-6 text-center mb-16">
                <h2 class="text-3xl sm:text-4xl lg:text-5xl 
               font-bold text-red-600 leading-tight">
                    Apex 5mm TMT Bar <br>
                    Advantages
                </h2>
            </div>

            <!-- Advantages Grid -->

            <!-- Icon Grid -->
            <div class="max-w-7xl mx-auto px-6">

                <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-6 gap-y-14 gap-x-8 text-center">

                    <!-- ITEM -->
                    <div>
                        <div class="mb-5 flex justify-center">
                            <img src="Apex-icons/Ductility.png" class="h-12 w-12" alt="">
                        </div>
                        <h3 class="font-semibold text-gray-800">Ductility</h3>
                    </div>

                    <div>
                        <div class="mb-5 flex justify-center">
                            <img src="Apex-icons/EarthquakeResistance.png" class="h-12 w-12" alt="">
                        </div>
                        <h3 class="font-semibold text-gray-800">
                            Earthquake Resistance
                        </h3>
                    </div>

                    <div>
                        <div class="mb-5 flex justify-center">
                            <img src="Apex-icons/Weldability.png" class="h-12 w-12" alt="">
                        </div>
                        <h3 class="font-semibold text-gray-800">
                            Weldability
                        </h3>
                    </div>

                    <div>
                        <div class="mb-5 flex justify-center">
                            <img src="Apex-icons/PerfectWeight.png" class="h-12 w-12" alt="">
                        </div>
                        <h3 class="font-semibold text-gray-800">
                            Perfect Weight
                        </h3>
                    </div>

                    <div>
                        <div class="mb-5 flex justify-center">
                            <img src="Apex-icons/2XEnhancedRIBBonding.png" class="h-12 w-12" alt="">
                        </div>
                        <h3 class="font-semibold text-gray-800">
                            2X Enhanced RIB Bonding
                        </h3>
                    </div>

                    <div>
                        <div class="mb-5 flex justify-center">
                            <img src="Apex-icons/SuperiorBuildQuality.png" class="h-12 w-12" alt="">
                        </div>
                        <h3 class="font-semibold text-gray-800">
                            Superior Build Quality
                        </h3>
                    </div>

                    <!-- Row 2 -->

                    <div>
                        <div class="mb-5 flex justify-center">
                            <img src="Apex-icons/Bendability.png" class="h-12 w-12" alt="">
                        </div>
                        <h3 class="font-semibold text-gray-800">
                            Bendability
                        </h3>
                    </div>

                    <div>
                        <div class="mb-5 flex justify-center">
                            <img src="Apex-icons/NoWastage.png" class="h-12 w-12" alt="">
                        </div>
                        <h3 class="font-semibold text-gray-800">
                            No Wastage
                        </h3>
                    </div>

                    <div>
                        <div class="mb-5 flex justify-center">
                            <img src="Apex-icons/Strength.png" class="h-12 w-12" alt="">
                        </div>
                        <h3 class="font-semibold text-gray-800">
                            Strength
                        </h3>
                    </div>

                    <div>
                        <div class="mb-5 flex justify-center">
                            <img src="Apex-icons/IncreasedSavings.png" class="h-12 w-12" alt="">
                        </div>
                        <h3 class="font-semibold text-gray-800">
                            Increased Savings
                        </h3>
                    </div>

                    <div>
                        <div class="mb-5 flex justify-center">
                            <img src="Apex-icons/OptimisedChemicalComposition.png" class="h-12 w-12" alt="">
                        </div>
                        <h3 class="font-semibold text-gray-800">
                            Optimised Chemical Composition
                        </h3>
                    </div>

                    <div>
                        <div class="mb-5 flex justify-center">
                            <img src="Apex-icons/StandardLength.png" class="h-12 w-12" alt="">
                        </div>
                        <h3 class="font-semibold text-gray-800">
                            Standard Length
                        </h3>
                    </div>

                </div>

            </div>



        </section>



        <!-- Reliable TMT Bars  -->
        <section class="w-full bg-red-600 overflow-hidden mt-7">
            <div class="relative flex flex-col lg:flex-row items-center min-h-[420px]">

                <!-- LEFT CONTENT -->
                <div class="w-full lg:w-1/2 px-6 sm:px-10 md:px-14 lg:px-20 py-12 text-white z-10">
                    <div class="max-w-[560px]">
                        <h1 class="text-[28px] sm:text-[34px] md:text-[40px] font-bold leading-snug mb-5 animate-up">
                            Enhance Your <br class="hidden sm:block" />
                            Construction with <br>Premium 5mm TMT Bar
                        </h1>

                        <p class="text-sm sm:text-base leading-relaxed mb-8 opacity-95 fade-down">
                            Our 5mm TMT bars combine cutting-edge technology, high-performance material, and
                            cost-effective pricing, making them an essential choice for anyone involved in construction.
                            Their strength, flexibility, and long-term reliability are second to none, ensuring that
                            your projects will stand the test of time. Invest in the durability and safety of your
                            construction with our 5mm TMT bars – contact us today for more information and to get a
                            quote for your next project.
                        </p>

                    </div>
                </div>

                <!-- RIGHT IMAGE (overlay style) -->
                <div
                    class="w-full lg:w-1/2 flex justify-end lg:absolute lg:right-0 lg:top-0 lg:h-full animate-down hidden lg:flex">
                    <img src="Apex-Images/holding-steelapex.png" alt="TMT Hand"
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
    <script src="Js/Scroll-Animation.js"></script>
    <script src="Js/Products-carouselcars.js"></script>
    <script src="Js/logo-fading.js"></script>
    <script src="Js/Animation.js"></script>
    <script src="Js/progressbar-script.js"></script>
    <script src="Js/bottom-up-arrow-script.js"></script>





    <!-- carousel slides  -->
   <script>
const carousel = document.getElementById("carousel");
const prevBtn = document.getElementById("prevBtn");
const nextBtn = document.getElementById("nextBtn");

let index = 0;

function getVisibleItems() {
    if (window.innerWidth >= 1024) return 4;
    if (window.innerWidth >= 640) return 2;
    return 1;
}

function updateButtons(maxIndex) {
    // Fade Prev
    if (index <= 0) {
        prevBtn.classList.add("opacity-40", "cursor-not-allowed");
    } else {
        prevBtn.classList.remove("opacity-40", "cursor-not-allowed");
    }

    // Fade Next
    if (index >= maxIndex) {
        nextBtn.classList.add("opacity-40", "cursor-not-allowed");
    } else {
        nextBtn.classList.remove("opacity-40", "cursor-not-allowed");
    }
}

function updateCarousel() {
    const visibleItems = getVisibleItems();
    const totalItems = carousel.children.length;
    const maxIndex = totalItems - visibleItems;

    if (index > maxIndex) index = maxIndex;
    if (index < 0) index = 0;

    const slideWidth = carousel.children[0].offsetWidth;
    carousel.style.transform = `translateX(-${index * slideWidth}px)`;

    updateButtons(maxIndex);
}

nextBtn.addEventListener("click", () => {
    const visibleItems = getVisibleItems();
    const totalItems = carousel.children.length;
    const maxIndex = totalItems - visibleItems;

    if (index < maxIndex) {
        index++;
        updateCarousel();
    }
});

prevBtn.addEventListener("click", () => {
    if (index > 0) {
        index--;
        updateCarousel();
    }
});

window.addEventListener("resize", updateCarousel);

// Initialize
updateCarousel();
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