
(function () {
  const track = document.getElementById("apxCarouselTrack");
  const prevBtn = document.getElementById("apxPrevBtn");
  const nextBtn = document.getElementById("apxNextBtn");

  if (!track || !prevBtn || !nextBtn) return;

  let index = 0;
  let slideWidth = 0;

  function slidesPerView() {
    if (window.innerWidth >= 1024) return 3;
    if (window.innerWidth >= 768) return 2;
    return 1;
  }

  function calculateWidth() {
    const firstSlide = track.children[0];
    if (firstSlide) {
      slideWidth = firstSlide.getBoundingClientRect().width;
    }
  }

  function updateCarousel() {
    const totalSlides = track.children.length;
    const maxIndex = totalSlides - slidesPerView();

    if (index < 0) index = maxIndex;
    if (index > maxIndex) index = 0;

    track.style.transform = `translateX(-${index * slideWidth}px)`;
  }

  function initCarousel() {
    calculateWidth();
    updateCarousel();
  }

  nextBtn.addEventListener("click", () => {
    index++;
    updateCarousel();
  });

  prevBtn.addEventListener("click", () => {
    index--;
    updateCarousel();
  });

  window.addEventListener("resize", () => {
    setTimeout(() => {
      calculateWidth();
      updateCarousel();
    }, 100);
  });

  window.addEventListener("load", initCarousel);
})();

