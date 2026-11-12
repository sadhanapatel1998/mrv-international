document.addEventListener("DOMContentLoaded", () => {
  const root = document.documentElement;
  const header = document.getElementById("siteHeader");
  const topbar = document.getElementById("topbar");
  const navbar = document.getElementById("navbar");
  const nav = document.getElementById("mainNav");
  const carouselEl = document.getElementById("heroCarousel");
  const hero = document.querySelector(".hero");
  const hoverDesktop = window.matchMedia(
    "(min-width: 1200px) and (hover: hover)",
  );
  const reduceMotion = window.matchMedia("(prefers-reduced-motion: reduce)");

  // Decorative icons are hidden from screen readers
  document
    .querySelectorAll("i.bi")
    .forEach((i) => i.setAttribute("aria-hidden", "true"));

  // Header height -> CSS variable, so the banner starts below the fixed header
  const setHeaderHeight = () => {
    if (header.classList.contains("scrolled")) return;
    root.style.setProperty(
      "--header-h",
      topbar.offsetHeight + navbar.offsetHeight + "px",
    );
  };

  // Header turns solid after scrolling (or while the mobile menu is open)
  const updateHeader = () =>
    header.classList.toggle(
      "scrolled",
      window.scrollY > 40 || nav.classList.contains("show"),
    );

  setHeaderHeight();
  updateHeader();
  window.addEventListener("scroll", updateHeader, { passive: true });
  window.addEventListener("resize", () => {
    setHeaderHeight();
    updateHeader();
  });
  window.addEventListener("load", setHeaderHeight);
  nav.addEventListener("show.bs.collapse", () =>
    header.classList.add("scrolled"),
  );
  nav.addEventListener("hidden.bs.collapse", updateHeader);

  // Desktop + mouse: dropdowns open on hover (CSS), clicking the parent opens its page.
  // Touch / mobile: the parent link toggles the dropdown.
  document.querySelectorAll(".dropdown-toggle").forEach((toggle) => {
    toggle.addEventListener(
      "click",
      (e) => {
        if (hoverDesktop.matches) e.stopImmediatePropagation();
        else e.preventDefault();
      },
      true,
    );
  });

  // Mobile: close the menu after choosing a link
  nav
    .querySelectorAll(
      ".dropdown-item, a.nav-link:not(.dropdown-toggle), .btn-sgs",
    )
    .forEach((link) =>
      link.addEventListener("click", () => {
        if (nav.classList.contains("show"))
          bootstrap.Collapse.getOrCreateInstance(nav).hide();
      }),
    );

  // Missing images: hide banner/logo/about photos, drop service images (card shows colour fallback)
  const onImgError = (img, handler) => {
    if (img.complete && img.naturalWidth === 0 && img.currentSrc) handler();
    else img.addEventListener("error", handler, { once: true });
  };
  document
    .querySelectorAll(".hero-photo img, .navbar-brand img, .about-photo img")
    .forEach((img) => onImgError(img, () => (img.style.visibility = "hidden")));
  document
    .querySelectorAll(".svc-media img")
    .forEach((img) => onImgError(img, () => img.remove()));

  // Carousel: no autoplay for people who prefer reduced motion
  const carousel = bootstrap.Carousel.getOrCreateInstance(carouselEl);
  if (reduceMotion.matches) carousel.pause();

  // Banner doodles follow the mouse a little (desktop only)
  const decos = hero ? hero.querySelectorAll(".deco[data-depth]") : [];
  if (decos.length && hoverDesktop.matches && !reduceMotion.matches) {
    let raf = 0;
    hero.addEventListener("pointermove", (e) => {
      const r = hero.getBoundingClientRect();
      const x = (e.clientX - r.left) / r.width - 0.5;
      const y = (e.clientY - r.top) / r.height - 0.5;
      cancelAnimationFrame(raf);
      raf = requestAnimationFrame(() =>
        decos.forEach((d) => {
          const k = +d.dataset.depth;
          d.style.setProperty("--mx", (x * k).toFixed(1) + "px");
          d.style.setProperty("--my", (y * k).toFixed(1) + "px");
        }),
      );
    });
    hero.addEventListener("pointerleave", () =>
      decos.forEach((d) => {
        d.style.setProperty("--mx", "0px");
        d.style.setProperty("--my", "0px");
      }),
    );
  }
});
