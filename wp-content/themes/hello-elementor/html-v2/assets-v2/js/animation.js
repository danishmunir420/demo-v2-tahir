// assets/js/animations.js
document.addEventListener("DOMContentLoaded", () => {
  if (!window.gsap) return;

  gsap.registerPlugin(ScrollTrigger);

  // ---- helpers ----
  const num = (v, fallback) => (v === undefined ? fallback : (Number.isFinite(parseFloat(v)) ? parseFloat(v) : fallback));
  const str = (v, fallback) => (v === undefined || v === "" ? fallback : v);

  const prefersReduced =
    window.matchMedia && window.matchMedia("(prefers-reduced-motion: reduce)").matches;

  // Global defaults (can be overridden per element using data-*)
  ScrollTrigger.defaults({
    toggleActions: "play none none none",
    markers: false
  });

  // If user prefers reduced motion, keep it minimal
  if (prefersReduced) {
    document.querySelectorAll("[data-anim]").forEach((el) => {
      el.style.opacity = 1;
      el.style.transform = "none";
    });
    return;
  }

  // ---- GROUP STAGGER (recommended for card grids / lists) ----
  // Usage:
  // <div data-anim-group data-anim="fade-up" data-stagger="0.12" data-delay="0.1">
  //    <div data-anim-item>...</div>
  //    <div data-anim-item>...</div>
  // </div>
  gsap.utils.toArray("[data-anim-group]").forEach((group) => {
    const type = str(group.dataset.anim, "fade-up");
    const items = group.querySelectorAll("[data-anim-item]");
    if (!items.length) return;

    const delay = num(group.dataset.delay, 0);
    const duration = num(group.dataset.duration, 0.8);
    const stagger = num(group.dataset.stagger, 0.12);
    const start = str(group.dataset.start, "top 85%");
    const once = str(group.dataset.once, "true") !== "false";

    const vars = buildAnimVars(type, {
      delay,
      duration,
      ease: str(group.dataset.ease, ""),
    });

    gsap.from(items, {
      ...vars,
      stagger,
      scrollTrigger: {
        trigger: group,
        start,
        once
      }
    });
  });

  // ---- SINGLE ELEMENT ANIMS ----
  // Usage:
  // <h2 data-anim="title" data-delay="0.2" data-duration="1" data-start="top 85%" data-once="true"></h2>
  gsap.utils.toArray("[data-anim]").forEach((el) => {
    // Skip children if they are part of a group (avoid double anim)
    if (el.closest("[data-anim-group]") && el.hasAttribute("data-anim-item")) return;

    const type = str(el.dataset.anim, "fade-up");
    const delay = num(el.dataset.delay, 0);
    const duration = num(el.dataset.duration, 0.8);
    const start = str(el.dataset.start, "top 85%");
    const once = str(el.dataset.once, "true") !== "false";
    const ease = str(el.dataset.ease, "");

    // Optional: animate children with a stagger without extra markup
    // data-children=".selector" data-stagger="0.12"
    const childrenSel = str(el.dataset.children, "");
    const stagger = num(el.dataset.stagger, 0);

    if (childrenSel) {
      const kids = el.querySelectorAll(childrenSel);
      if (kids.length) {
        const vars = buildAnimVars(type, { delay, duration, ease });
        gsap.from(kids, {
          ...vars,
          stagger: stagger || 0.12,
          scrollTrigger: { trigger: el, start, once }
        });
        return;
      }
    }

    const vars = buildAnimVars(type, { delay, duration, ease });

    gsap.from(el, {
      ...vars,
      scrollTrigger: { trigger: el, start, once }
    });
  });

  // Optional: refresh after images/fonts load (prevents mis-trigger on slow loads)
  window.addEventListener("load", () => ScrollTrigger.refresh());

  // ---- builder ----
  function buildAnimVars(type, opts) {
    const delay = opts.delay ?? 0;
    const duration = opts.duration ?? 0.8;

    const base = {
      opacity: 0,
      duration,
      delay,
      ease: opts.ease || "power3.out"
    };

    switch (type) {
      case "title":
        return { ...base, y: 70, duration: opts.duration ?? 1, ease: opts.ease || "power3.out" };

      case "fade":
        return { ...base, y: 0 }; // pure fade

      case "fade-up":
        return { ...base, y: 40 };

      case "left":
        return { ...base, x: -80, ease: opts.ease || "power2.out" };

      case "right":
        return { ...base, x: 80, ease: opts.ease || "power2.out" };

      case "zoom":
        return { ...base, scale: 0.85, ease: opts.ease || "back.out(1.7)" };

      case "image":
        return { ...base, scale: 1.12, ease: opts.ease || "power2.out" };

      case "reveal":
        // Premium reveal: use clip-path if element supports it (e.g., media wrapper)
        // You can apply this to .tv-case__media
        return {
          ...base,
          y: 18,
          clipPath: "inset(14% 0 14% 0 round 22px)",
          ease: opts.ease || "power3.out",
          onStart() {
            // ensure clip-path exists only during anim (avoid layout flicker)
          }
        };

      default:
        return { ...base, y: 30 };
    }
  }
});