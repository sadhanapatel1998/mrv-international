// Gallery: filters + lightbox. Save as assets/js/gallery.js
document.addEventListener("DOMContentLoaded", () => {
  const grid = document.getElementById("galGrid");
  const lb = document.getElementById("galLightbox");
  if (!grid || !lb) return;

  const items = [...grid.querySelectorAll(".gal-item")];
  const filters = document.querySelectorAll(".gal-filter");
  const empty = document.getElementById("galEmpty");
  const lbImg = lb.querySelector("img");
  const lbCaption = lb.querySelector(".gal-lb-caption");
  const lbCount = lb.querySelector(".gal-lb-count");
  let visible = items;
  let index = 0;
  let lastFocus = null;

  // Missing photo: drop the tile
  items.forEach((item) => {
    const img = item.querySelector("img");
    const drop = () => {
      item.remove();
      visible = visible.filter((i) => i !== item);
    };
    if (img.complete && img.naturalWidth === 0 && img.currentSrc) drop();
    else img.addEventListener("error", drop, { once: true });
  });

  // Filters
  filters.forEach((btn) =>
    btn.addEventListener("click", () => {
      const f = btn.dataset.filter;
      filters.forEach((b) => {
        const on = b === btn;
        b.classList.toggle("is-active", on);
        b.setAttribute("aria-pressed", on);
      });
      visible = [];
      grid.querySelectorAll(".gal-item").forEach((item) => {
        const show = f === "all" || item.dataset.cat === f;
        item.classList.toggle("is-hidden", !show);
        item.classList.remove("is-showing");
        if (show) {
          void item.offsetWidth; // restart animation
          item.classList.add("is-showing");
          visible.push(item);
        }
      });
      empty.hidden = visible.length > 0;
    }),
  );

  // Lightbox
  const show = (i) => {
    index = (i + visible.length) % visible.length;
    const item = visible[index];
    lbImg.src = item.dataset.src;
    lbImg.alt = item.querySelector("img").alt;
    lbCaption.textContent = item.dataset.caption || "";
    lbCount.textContent = `${index + 1} / ${visible.length}`;
    lbImg.style.animation = "none";
    void lbImg.offsetWidth;
    lbImg.style.animation = "";
  };

  const open = (item) => {
    lastFocus = item;
    show(visible.indexOf(item));
    lb.hidden = false;
    document.body.classList.add("gal-lock");
    lb.querySelector(".gal-lb-close").focus();
  };

  const close = () => {
    lb.hidden = true;
    document.body.classList.remove("gal-lock");
    lbImg.src = "";
    if (lastFocus) lastFocus.focus();
  };

  grid.addEventListener("click", (e) => {
    const item = e.target.closest(".gal-item");
    if (item) open(item);
  });

  lb.querySelector(".gal-lb-close").addEventListener("click", close);
  lb.querySelector(".gal-lb-prev").addEventListener("click", () =>
    show(index - 1),
  );
  lb.querySelector(".gal-lb-next").addEventListener("click", () =>
    show(index + 1),
  );
  lb.addEventListener("click", (e) => {
    if (e.target === lb) close();
  });

  document.addEventListener("keydown", (e) => {
    if (lb.hidden) return;
    if (e.key === "Escape") close();
    else if (e.key === "ArrowLeft") show(index - 1);
    else if (e.key === "ArrowRight") show(index + 1);
    else if (e.key === "Tab") {
      // keep focus inside the lightbox
      const btns = [...lb.querySelectorAll("button")];
      const first = btns[0],
        last = btns[btns.length - 1];
      if (e.shiftKey && document.activeElement === first) {
        e.preventDefault();
        last.focus();
      } else if (!e.shiftKey && document.activeElement === last) {
        e.preventDefault();
        first.focus();
      }
    }
  });

  // Swipe on touch
  let startX = 0;
  lb.addEventListener("touchstart", (e) => (startX = e.touches[0].clientX), {
    passive: true,
  });
  lb.addEventListener("touchend", (e) => {
    const dx = e.changedTouches[0].clientX - startX;
    if (Math.abs(dx) > 50) show(index + (dx < 0 ? 1 : -1));
  });
});
