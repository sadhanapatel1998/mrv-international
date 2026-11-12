// Footer: current year + back-to-top. Save as assets/js/footer.js
document.addEventListener("DOMContentLoaded", () => {
  const year = document.getElementById("ftYear");
  if (year) year.textContent = new Date().getFullYear();

  const btn = document.getElementById("toTop");
  if (!btn) return;

  const reduceMotion = window.matchMedia("(prefers-reduced-motion: reduce)");
  const toggle = () => btn.classList.toggle("is-visible", window.scrollY > 600);

  toggle();
  window.addEventListener("scroll", toggle, { passive: true });

  btn.addEventListener("click", () => {
    window.scrollTo({
      top: 0,
      behavior: reduceMotion.matches ? "auto" : "smooth",
    });
    const skip = document.querySelector(".navbar-brand");
    if (skip) skip.focus({ preventScroll: true });
  });
});
