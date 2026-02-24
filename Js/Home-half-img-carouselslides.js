// Halfimage slides 
   const slides = document.querySelectorAll(".slide");
  let active = 2;
  let autoSlide;

  function isMobile() {
    return window.innerWidth < 640;
  }

  function isTablet() {
    return window.innerWidth >= 640 && window.innerWidth < 1024;
  }

  function updateSlides() {
    slides.forEach((slide, index) => {
      slide.className =
        "slide cursor-pointer transition-all duration-500 overflow-hidden";

      if (isMobile()) {
        // Mobile: only active visible
        if (index === active) {
          slide.classList.add("w-full", "opacity-100", "scale-100", "z-20");
        } else {
          slide.classList.add("w-0", "opacity-0", "scale-90");
        }
      } else if (isTablet()) {
        // Tablet
        if (index === active) {
          slide.classList.add("w-[80%]", "opacity-100", "scale-100", "z-20");
        } else {
          slide.classList.add("w-[10%]", "opacity-60", "scale-90", "z-10");
        }
      } else {
        // Desktop
        if (index === active) {
          slide.classList.add("w-[70%]", "opacity-100", "scale-100", "z-20");
        } else {
          slide.classList.add("w-[15%]", "opacity-60", "scale-90", "z-10");
        }
      }
    });
  }

  function nextSlide() {
    active = active === slides.length - 1 ? 0 : active + 1;
    updateSlides();
  }

  function startAutoSlide() {
    autoSlide = setInterval(() => {
      nextSlide();
    }, 3000);
  }

  function resetAutoSlide() {
    clearInterval(autoSlide);
    startAutoSlide();
  }

  // Click to select
  slides.forEach((slide, index) => {
    slide.addEventListener("click", () => {
      active = index;
      updateSlides();
      resetAutoSlide();
    });
  });

  // Recalculate on resize
  window.addEventListener("resize", updateSlides);

  updateSlides();
  startAutoSlide();