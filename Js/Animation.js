document.addEventListener("DOMContentLoaded", () => {

  const elements = document.querySelectorAll(
    ".fade-up, .fade-down, .fade-left, .fade-right, .fade-in, .animate-down, .animate-up"
  );

  const observer = new IntersectionObserver((entries, obs) => {

    entries.forEach(entry => {
      const el = entry.target;

      if (entry.isIntersecting) {
        el.classList.add("show");

        // stop observing after first animation
        obs.unobserve(el);
      }
    });

  }, {
    threshold: 0,
    rootMargin: "0px 0px -20% 0px"
  });

  elements.forEach(el => observer.observe(el));

});
