// Parent testimonials slider. Save as assets/js/testimonials.js
document.addEventListener("DOMContentLoaded", () => {
  const track = document.getElementById("testiTrack");
  if (!track) return;

  const prev = document.getElementById("testiPrev");
  const next = document.getElementById("testiNext");
  const dotsWrap = document.getElementById("testiDots");
  const cards = [...track.querySelectorAll(".testi-card")];
  const reduceMotion = window.matchMedia("(prefers-reduced-motion: reduce)");

  // One dot per card
  const dots = cards.map(() =>
    dotsWrap.appendChild(document.createElement("span")),
  );

  const step = () => {
    const gap = parseFloat(getComputedStyle(track).columnGap) || 0;
    return cards[0].offsetWidth + gap;
  };

  const go = (dir) =>
    track.scrollBy({
      left: dir * step(),
      behavior: reduceMotion.matches ? "auto" : "smooth",
    });

  const update = () => {
    const max = track.scrollWidth - track.clientWidth;
    prev.disabled = track.scrollLeft <= 2;
    next.disabled = track.scrollLeft >= max - 2;
    const active = Math.min(
      cards.length - 1,
      Math.round(track.scrollLeft / step()),
    );
    dots.forEach((d, i) => d.classList.toggle("is-active", i === active));
  };

  prev.addEventListener("click", () => go(-1));
  next.addEventListener("click", () => go(1));

  track.addEventListener("keydown", (e) => {
    if (e.key === "ArrowRight") {
      e.preventDefault();
      go(1);
    }
    if (e.key === "ArrowLeft") {
      e.preventDefault();
      go(-1);
    }
  });

  let raf = 0;
  track.addEventListener(
    "scroll",
    () => {
      cancelAnimationFrame(raf);
      raf = requestAnimationFrame(update);
    },
    { passive: true },
  );
  window.addEventListener("resize", update);
  update();
});
