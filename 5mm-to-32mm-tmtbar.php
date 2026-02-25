<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>5mm to 32mm TMT Bars</title>
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

        <div class="relative w-full pt-32 pb-8 bg-gray-50 overflow-hidden fade-up">
            <!-- Breadcrumb -->
            <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-7xl flex items-center gap-3">
                <!-- Home -->
                <a href="/"
                    class="flex items-center gap-2 text-red-600 px-4 py-2 rounded-md text-sm font-medium transition hover:bg-gray-100">
                    <!-- Home Icon -->
                    <img src="Apex-icons/Home.png" alt="Home icon " class="w-4 h-4" />
                    Home
                </a>

                <!-- Arrow -->
                <span class="text-gray-500 text-lg">›</span>

                <!-- About -->
                <span
                    class="flex items-center gap-2 bg-red-600 text-white px-4 py-2 rounded-md text-sm font-medium shadow-md">
                    <!-- User/About Icon -->
                    <img src="Apex-icons/user-circle.png" alt="user icon " class="w-4 h-4" />
                    5mm to 32mm TMT Bars
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
                        Premium TMT Bars for Strength and Durability
                    </h2>

                    <h3 class="text-lg md:text-xl font-semibold text-gray-800 mb-6">
                        At Apex Dura, we bring you a comprehensive range of TMT Bars designed for excellence and
                        reliability in construction. Our products include:
                    </h3>

                    <p class="text-gray-600 leading-relaxed mb-4">
                        5MM TMT Bar, 8MM TMT Bar, 10MM TMT Bar, 12MM TMT Bar, 16MM TMT Bar, 20MM TMT Bar, 25MM TMT Bar,
                        32MM TMT Bar
                    </p>

                    <p class="text-gray-600 leading-relaxed mb-4">
                        Each bar is manufactured using state-of-the-art technology to deliver superior strength,
                        durability, and performance. These bars are engineered to meet the rigorous demands of modern
                        construction while ensuring safety, longevity, and sustainability. Whether it’s a small-scale
                        residential project or a large-scale industrial infrastructure, our TMT Bars are built to
                        deliver exceptional results every time.
                    </p>


                </div>

                <!-- RIGHT IMAGE -->
                <div class="relative flex justify-center hidden lg:block lg:justify-end">



                    <img src="Apex-Images/stack-steels.png" alt="Steel Structure"
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
                    Get the Best TMT Bars for Your Project
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

                                <p class="text-gray-600 leading-relaxed">
                                    Are you searching for TMT Bars that offer unmatched strength and flexibility for
                                    your construction projects? Look no further! Our TMT Bars are designed to exceed
                                    expectations, meeting the highest quality standards to ensure they perform under the
                                    most demanding conditions.
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

                                <p class="text-gray-600 leading-relaxed">
                                    Our team of experts is always ready to help you choose the right TMT Bars for your
                                    specific requirements. With a range of sizes and customized solutions, we ensure you
                                    get the best materials for your project, no matter the scale.
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

                                <p class="text-gray-600 leading-relaxed">
                                    Call us now to place your order or get a free consultation on the best TMT Bars for
                                    your needs.
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
            </div>
            </div>
            </div>

            </div>
        </section>


        <section class="w-full  mt-7">
            <!-- Top Heading Bar -->
            <div class="w-full bg-red-600 py-6">
                <h2 class="text-center text-white text-3xl md:text-5xl font-bold">
                    Versatile Uses of TMT Bars
                </h2>
            </div>

            <!-- Content Area -->
            <div class="max-w-5xl mx-auto px-6 py-16 text-center text-gray-800">

                <p class="text-lg md:text-xl mb-10 leading-relaxed">
                    Our TMT Bars are known for their versatility and are used across diverse construction applications.
                    Here’s how our range is categorized:
                </p>

                <div class="space-y-8 text-lg md:text-xl leading-relaxed">

                    <p>
                        <span class="font-bold text-black">5MM to 10MM TMT Bars:</span>
                        Ideal for small-scale construction like homes, fencing, and lightweight structures. These bars
                        provide
                        the necessary strength without overburdening smaller projects with excessive material.
                    </p>

                    <p>
                        <span class="font-bold text-black">12MM to 20MM TMT Bars:</span>
                        Commonly used in medium-scale projects like schools, hospitals, bridges, and commercial
                        complexes,
                        where structural integrity is paramount.
                    </p>

                    <p>
                        <span class="font-bold text-black">25MM to 32MM TMT Bars:</span>
                        Essential for heavy-duty infrastructure such as dams, industrial buildings, highways, and
                        high-rise towers.
                        These bars ensure stability and safety for massive constructions.
                    </p>

                </div>
            </div>
        </section>







        <!-- Why Choose Our 5mm TMT Bar -->
        <section class="w-full  py-20">

            <!-- Heading -->
            <div class="max-w-5xl mx-auto px-6 text-center mb-16">
                <h2 class="text-3xl sm:text-4xl lg:text-5xl 
               font-bold text-red-600 leading-tight">
                    Benefits of Our TMT Bars
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
                                    Provides robustness for handling heavy loads without compromising safety.
                                </p>
                            </div>

                            <div class="min-w-full sm:min-w-1/2 lg:min-w-1/4 px-6">
                                <h3 class="font-semibold text-lg mb-4">Earthquake Resistance</h3>
                                <p class="text-gray-600 text-sm leading-relaxed">
                                    The superior ductility allows the bars to absorb shocks, making them ideal for
                                    earthquake-prone areas.
                                </p>
                            </div>

                            <div class="min-w-full sm:min-w-1/2 lg:min-w-1/4 px-6">
                                <h3 class="font-semibold text-lg mb-4">Anti-Corrosion Properties</h3>
                                <p class="text-gray-600 text-sm leading-relaxed">
                                    Special coatings protect the bars against rust, even in humid or coastal conditions.
                                </p>
                            </div>

                            <div class="min-w-full sm:min-w-1/2 lg:min-w-1/4 px-6">
                                <h3 class="font-semibold text-lg mb-4">Fire Resistance</h3>
                                <p class="text-gray-600 text-sm leading-relaxed">
                                    Can withstand high temperatures, offering additional safety in fire-prone zones.
                                </p>
                            </div>

                            <div class="min-w-full sm:min-w-1/2 lg:min-w-1/4 px-6">
                                <h3 class="font-semibold text-lg mb-4">Ease of Welding</h3>
                                <p class="text-gray-600 text-sm leading-relaxed">
                                    Can be welded without losing strength, facilitating faster construction processes.
                                </p>
                            </div>

                            <div class="min-w-full sm:min-w-1/2 lg:min-w-1/4 px-6">
                                <h3 class="font-semibold text-lg mb-4">Long Lifespan</h3>
                                <p class="text-gray-600 text-sm leading-relaxed">
                                    Durable materials ensure the structure remains safe and sound for decades.
                                </p>
                            </div>

                            <div class="min-w-full sm:min-w-1/2 lg:min-w-1/4 px-6">
                                <h3 class="font-semibold text-lg mb-4">Energy Efficiency</h3>
                                <p class="text-gray-600 text-sm leading-relaxed">
                                    Produced using advanced methods that reduce energy consumption, making it
                                    eco-friendly.
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
                        <img src="Apex-Images/process.png" class="w-full h-[420px] object-cover" />

                        <h3 class="mt-6 text-2xl font-semibold leading-snug">
                            Key Applications of TMT Bars
                        </h3>
                    </div>

                    <!-- RIGHT CONTENT -->
                    <div class="lg:col-span-8 relative">
                        <!-- BASE GREY TIMELINE -->
                        <div class="absolute left-8 top-20 bottom-0 w-[2px] bg-white/30"></div>

                        <p class="text-sm  mb-10 pl-16 fade-up">
                            Our 5mm to 32mm TMT Bars are the backbone of various construction projects, including:</p>

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
                                            Residential Projects
                                        </h4>
                                        <p class="text-sm text-white/90 mt-1">
                                            TMT Bars form the foundation of safe and durable homes. From strong
                                            foundations that support the entire structure to robust walls and roofs,
                                            these bars ensure the stability and longevity of houses. Whether it’s a
                                            single-story residence or a multi-story apartment, TMT Bars provide the
                                            reinforcement necessary to handle everyday stresses and natural calamities
                                            like earthquakes and storms.
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
                                        <h4 class="font-semibold text-lg">Commercial Buildings</h4>
                                        <p class="text-sm text-white/90 mt-1">
                                            In commercial constructions such as offices, shopping malls, educational
                                            institutions, and healthcare facilities, the strength of TMT Bars is
                                            indispensable. They offer the necessary reinforcement to support large-scale
                                            structures, ensuring safety and stability even under heavy loads and high
                                            occupancy.
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
                                            Industrial Infrastructure
                                        </h4>
                                        <p class="text-sm text-white/90 mt-1">
                                            Factories, warehouses, workshops, and manufacturing units rely on TMT Bars
                                            for their structural integrity. These buildings often house heavy machinery
                                            and equipment, requiring bars that can withstand substantial stress and
                                            vibrations. TMT Bars ensure that industrial structures are resilient and
                                            long-lasting.
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
                                        <h4 class="font-semibold text-lg">Bridges and Flyovers</h4>
                                        <p class="text-sm text-white/90 mt-1">
                                            Infrastructure projects like bridges and flyovers are subject to heavy
                                            traffic loads and environmental stress. TMT Bars ensure these structures
                                            remain durable, providing the required tensile strength to bear dynamic
                                            loads while minimizing wear and tear over time. Their resistance to
                                            corrosion also makes them suitable for bridges in coastal or humid regions.
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
                                        <h4 class="font-semibold text-lg">High-Rise Towers</h4>
                                        <p class="text-sm text-white/90 mt-1">
                                            TMT Bars are essential in constructing skyscrapers and multi-story
                                            buildings. Their high tensile strength and ductility make them perfect for
                                            handling the immense load of tall structures while ensuring stability
                                            against wind forces and seismic activity. These bars contribute to the
                                            safety and longevity of high-rise buildings.
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
                                        <h4 class="font-semibold text-lg">Dams and Water Tanks</h4>
                                        <p class="text-sm text-white/90 mt-1">
                                            Water-retaining structures like dams, reservoirs, and water tanks require
                                            TMT Bars with exceptional strength and anti-corrosion properties. These bars
                                            help maintain the structural integrity of these constructions, ensuring they
                                            can handle the constant pressure and moisture exposure without compromising
                                            safety.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- STEP 07 -->
                            <div class="step opacity-50 relative flex items-center justify-between gap-6 py-6 pl-16 cursor-pointer"
                                data-img="Apex-Images/pmp-5.png">
                                <span
                                    class="indicator-left hidden absolute left-8 top-0 bottom-0 w-[2px] bg-white"></span>
                                <span
                                    class="indicator-bottom hidden absolute left-13 right-0 bottom-0 h-[2px] bg-white"></span>

                                <div class="flex items-start gap-6 flex-1">
                                    <span class="num text-3xl font-bold">
                                        <h3>07</h3>
                                    </span>
                                    <span class="bar w-14 h-[2px] bg-white/40 mt-4 transition-all"></span>

                                    <div>
                                        <h4 class="font-semibold text-lg">Fencing and Retaining Walls</h4>
                                        <p class="text-sm text-white/90 mt-1">
                                            TMT Bars are widely used in fencing to create secure boundaries for
                                            residential, commercial, and industrial properties. They also play a crucial
                                            role in retaining walls, which hold back soil in construction zones or
                                            sloped landscapes. Their strength ensures that these walls remain stable and
                                            effective over time.
                                        </p>
                                    </div>
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
                    Key Applications of TMT Bars
                </h2>

                <!-- Steps stacked cards -->
                <div class="space-y-6">
                    <!-- Step -->
                    <div class="bg-white/10 rounded-lg p-5 flex gap-4 items-start fade-left">
                        <span class="text-2xl font-bold">
                            <h3>01</h3>
                        </span>
                        <div>
                            <h4 class="font-semibold">Residential Projects</h4>
                            <p class="text-sm text-white/80 mt-1">
                                TMT Bars form the foundation of safe and durable homes. From strong foundations that
                                support the entire structure to robust walls and roofs, these bars ensure the stability
                                and longevity of houses. Whether it’s a single-story residence or a multi-story
                                apartment, TMT Bars provide the reinforcement necessary to handle everyday stresses and
                                natural calamities like earthquakes and storms.
                            </p>
                        </div>
                    </div>

                    <div class="bg-white/10 rounded-lg p-5 flex gap-4 items-start fade-right">
                        <span class="text-2xl font-bold">
                            <h3>02</h3>
                        </span>
                        <div>
                            <h4 class="font-semibold">Commercial Buildings</h4>
                            <p class="text-sm text-white/80 mt-1">
                                In commercial constructions such as offices, shopping malls, educational institutions,
                                and healthcare facilities, the strength of TMT Bars is indispensable. They offer the
                                necessary reinforcement to support large-scale structures, ensuring safety and stability
                                even under heavy loads and high occupancy.
                            </p>
                        </div>
                    </div>

                    <div class="bg-white/10 rounded-lg p-5 flex gap-4 items-start fade-left">
                        <span class="text-2xl font-bold">
                            <h3>03</h3>
                        </span>
                        <div>
                            <h4 class="font-semibold">Industrial Infrastructure</h4>
                            <p class="text-sm text-white/80 mt-1">
                                Factories, warehouses, workshops, and manufacturing units rely on TMT Bars for their
                                structural integrity. These buildings often house heavy machinery and equipment,
                                requiring bars that can withstand substantial stress and vibrations. TMT Bars ensure
                                that industrial structures are resilient and long-lasting.
                            </p>
                        </div>
                    </div>

                    <div class="bg-white/10 rounded-lg p-5 flex gap-4 items-start fade-right">
                        <span class="text-2xl font-bold">
                            <h3>04</h3>
                        </span>
                        <div>
                            <h4 class="font-semibold">Bridges and Flyovers</h4>
                            <p class="text-sm text-white/80 mt-1">
                                Infrastructure projects like bridges and flyovers are subject to heavy traffic loads and
                                environmental stress. TMT Bars ensure these structures remain durable, providing the
                                required tensile strength to bear dynamic loads while minimizing wear and tear over
                                time. Their resistance to corrosion also makes them suitable for bridges in coastal or
                                humid regions.
                            </p>
                        </div>
                    </div>

                    <div class="bg-white/10 rounded-lg p-5 flex gap-4 items-start fade-right">
                        <span class="text-2xl font-bold">
                            <h3>05</h3>
                        </span>
                        <div>
                            <h4 class="font-semibold">High-Rise Towers</h4>
                            <p class="text-sm text-white/80 mt-1">
                                TMT Bars are essential in constructing skyscrapers and multi-story buildings. Their high
                                tensile strength and ductility make them perfect for handling the immense load of tall
                                structures while ensuring stability against wind forces and seismic activity. These bars
                                contribute to the safety and longevity of high-rise buildings.
                            </p>
                        </div>
                    </div>

                    <div class="bg-white/10 rounded-lg p-5 flex gap-4 items-start fade-right">
                        <span class="text-2xl font-bold">
                            <h3>06</h3>
                        </span>
                        <div>
                            <h4 class="font-semibold">Dams and Water Tanks</h4>
                            <p class="text-sm text-white/80 mt-1">
                                Water-retaining structures like dams, reservoirs, and water tanks require TMT Bars with
                                exceptional strength and anti-corrosion properties. These bars help maintain the
                                structural integrity of these constructions, ensuring they can handle the constant
                                pressure and moisture exposure without compromising safety.
                            </p>
                        </div>
                    </div>

                    <div class="bg-white/10 rounded-lg p-5 flex gap-4 items-start fade-right">
                        <span class="text-2xl font-bold">
                            <h3>07</h3>
                        </span>
                        <div>
                            <h4 class="font-semibold">Fencing and Retaining Walls</h4>
                            <p class="text-sm text-white/80 mt-1">
                                TMT Bars are widely used in fencing to create secure boundaries for residential,
                                commercial, and industrial properties. They also play a crucial role in retaining walls,
                                which hold back soil in construction zones or sloped landscapes. Their strength ensures
                                that these walls remain stable and effective over time.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>




        <!-- Apex advantages -->

        <section class="w-full bg-gray-100 py-20">

            <!-- Heading -->
            <div class="max-w-6xl mx-auto px-6 text-center mb-16">
                <h2 class="text-3xl sm:text-4xl lg:text-5xl 
               font-bold text-red-600 leading-tight">
                    Apex 5mm to 32mm TMT Bars <br>
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
                            Build Your Future with Confidence
                        </h1>

                        <p class="text-sm sm:text-base leading-relaxed mb-8 opacity-95 fade-down">
                            When you choose our TMT Bars, you’re investing in strength, safety, and sustainability. Each
                            product is meticulously crafted to support the most ambitious construction projects while
                            ensuring long-lasting value. <br />Contact us today to learn more about our premium TMT Bars
                            and take the first step toward building structures that stand the test of time. Let’s work
                            together to create a stronger future.
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
        <section class="">
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