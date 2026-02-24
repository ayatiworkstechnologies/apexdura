// <!-- scroll arrow script bottom/up -->

const btn = document.getElementById("scrollBtn");
const icon = document.getElementById("arrowIcon");

btn.addEventListener("click", () => {

  const pageHeight = document.documentElement.scrollHeight;
  const viewHeight = window.innerHeight;
  const scrollTop = window.scrollY;

  const isBottom = scrollTop + viewHeight >= pageHeight - 10;

  if (isBottom) {
    // go top
    window.scrollTo({ top: 0, behavior: "smooth" });
  } else {
    // go footer (bottom)
    window.scrollTo({ top: pageHeight, behavior: "smooth" });
  }
});


/* change arrow direction */
window.addEventListener("scroll", () => {

  const pageHeight = document.documentElement.scrollHeight;
  const viewHeight = window.innerHeight;
  const scrollTop = window.scrollY;

  const isBottom = scrollTop + viewHeight >= pageHeight - 10;

  icon.textContent = isBottom ? "↑" : "↓";

});
