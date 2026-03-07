// Header fixed
(function () {
    const header = document.getElementById("tvHeader");
    if (!header) return;

    const toggle = () => {
      header.classList.toggle("is-scrolled", window.scrollY > 10);
    };

    toggle();
    window.addEventListener("scroll", toggle, { passive: true });
})();

// Video Slider
const heroThumbs = new Swiper(".tv-hero-thumbs", {
    slidesPerView: "auto",
    spaceBetween: 14,
    watchSlidesProgress: true
});

const heroMain = new Swiper(".tv-hero-swiper", {
    slidesPerView: 1,
    speed: 650,
    loop: false,
    allowTouchMove: true,
    thumbs: { swiper: heroThumbs },
});

function pauseAll() {
    document.querySelectorAll(".tv-hero-swiper video").forEach(v => v.pause());
}

function resetAllProgress() {
    document.querySelectorAll(".tv-hero-thumb__progress").forEach(p => p.style.width = "0%");
}

function getActiveVideo() {
    const slide = heroMain.slides[heroMain.activeIndex];
    return slide?.querySelector("video");
}

function getActiveProgressEl() {
    const thumbSlide = document.querySelector(".tv-hero-thumbs .swiper-slide-thumb-active");
    return thumbSlide?.querySelector(".tv-hero-thumb__progress");
}

function bindVideoEvents(video) {
    // remove old handlers (avoid duplicates)
    video.onended = null;
    video.ontimeupdate = null;

video.ontimeupdate = () => {
    const dur = video.duration || 0;
    if (!dur) return;

    const progress = (video.currentTime / dur) * 100;
    const bar = getActiveProgressEl();
    if (bar) bar.style.width = `${progress}%`;
};

video.onended = () => {
    if (!heroMain.isEnd) heroMain.slideNext();
    // if you want loop back after last:
    // else heroMain.slideTo(0);
};
}

function playActive() {
const video = getActiveVideo();
    if (!video) return;

pauseAll();
resetAllProgress();

// restart each time (remove if you want resume)
video.currentTime = 0;
video.muted = true;

bindVideoEvents(video);
    video.play().catch(() => {});
}

// initial
playActive();

heroMain.on("slideChangeTransitionStart", () => {
    pauseAll();
});

heroMain.on("slideChangeTransitionEnd", () => {
    playActive();
});

document.addEventListener("visibilitychange", () => {
  const video = getActiveVideo?.();
  if (!video) return;

  if (document.hidden) {
    video.pause();
  } else {
    video.play().catch(()=>{});
  }
});

heroThumbs.on("click", () => {
  setTimeout(() => playActive(), 50);
});

//Vide Slider End
new Swiper(".tv-logo-slider", {
    loop: true,
    slidesPerView: 9,
    slidesPerGroup: 1, // move 1 at a time ✅
    spaceBetween: 28,
    speed: 650, // smooth slide speed
    autoplay: {
        delay: 1800, // pause between moves
        disableOnInteraction: false,
    },
    breakpoints: {
        0: {
            slidesPerView: 3,
            spaceBetween: 18
        },
        576: {
            slidesPerView: 4,
            spaceBetween: 20
        },
        768: {
            slidesPerView: 6,
            spaceBetween: 22
        },
        992: {
            slidesPerView: 9,
            spaceBetween: 28
        }, // desktop like screenshot ✅
    },
});

const serviceSwiper = new Swiper(".tv-services-swiper", {
    slidesPerView: 2,
    spaceBetween: 20,
    speed: 700,
    loop: false, // IMPORTANT: stops at end
    watchOverflow: true,
    allowTouchMove: true,

    navigation: {
        nextEl: ".tv-nav-next",
        prevEl: ".tv-nav-prev",
    },

    pagination: {
        el: ".tv-pagination",
        clickable: true,
    },
    breakpoints: {
        0: {
            slidesPerView: 1,
            spaceBetween: 18
        },
        576: {
            slidesPerView: 1,
            spaceBetween: 20
        },
        767: {
            slidesPerView: 2,
            spaceBetween: 20
        }
    },

    on: {
        init(swiper) {
            updateNavState(swiper);
        },
        slideChange(swiper) {
            updateNavState(swiper);
        }
    }
});

function updateNavState(swiper) {
    document.querySelector(".tv-nav-prev")
        .classList.toggle("is-disabled", swiper.isBeginning);

    document.querySelector(".tv-nav-next")
        .classList.toggle("is-disabled", swiper.isEnd);
}
new Swiper(".tv-choose-swiper", {
    slidesPerView: 3,
    centeredSlides: true,
    loop: false,
    speed: 700,
    spaceBetween: 0,
    grabCursor: true,

    effect: "coverflow",
    coverflowEffect: {
      rotate: 18,      // side tilt
      stretch: 110,    // spacing push left/right
      depth: 220,      // pushes side cards back
      modifier: 1,
      slideShadows: false
    },

    navigation: {
      nextEl: ".tv-choose-next",
      prevEl: ".tv-choose-prev"
    },

    breakpoints: {
      0:   { slidesPerView: 1.15, coverflowEffect: { rotate: 0, stretch: 0, depth: 120 } },
      576: { slidesPerView: 1.5,  coverflowEffect: { rotate: 8, stretch: 40, depth: 160 } },
      992: { slidesPerView: 3,    coverflowEffect: { rotate: 18, stretch: 110, depth: 220 } }
    }
});

new Swiper(".tv-testimonials-swiper", {
    slidesPerView: 1,
    loop: true,
    speed: 650,
    spaceBetween: 24,
    pagination: {
        el: ".tv-testimonials__dots",
        clickable: true,
    },
});

//About US page
// new Swiper(".tv-benefits-swiper", {
//     effect: "cards",
//     grabCursor: true,
//     loop: false,
//     speed: 700,

//     cardsEffect: {
//       slideShadows: false,
//       perSlideOffset: 10,      // how much each card shifts
//       perSlideRotate: 1        // small rotate
//     },

//     pagination: {
//       el: ".tv-benefits-pagination",
//       clickable: true
//     }
// });


(function(){
  const root = document.getElementById("tvBenefitsStack");
  if(!root) return;

  const cardsWrap = root.querySelector(".tv-stack__cards");
  const cards = Array.from(root.querySelectorAll(".tv-stack__card"));
  const dotsWrap = root.querySelector(".tv-stack__dots");
  const btnPrev = root.querySelector(".tv-stack__prev");
  const btnNext = root.querySelector(".tv-stack__next");

  let index = 0;
  let animating = false;

  // Build dots
  dotsWrap.innerHTML = cards.map((_, i) =>
    `<button class="tv-stack__dot ${i===0?'is-active':''}" type="button" aria-label="Go to slide ${i+1}"></button>`
  ).join("");
  const dots = Array.from(dotsWrap.querySelectorAll(".tv-stack__dot"));

  function layoutStack(activeIndex){
    // show 3 cards "behind" like design
    cards.forEach((card, i) => {
      const pos = (i - activeIndex + cards.length) % cards.length; // 0 = active, 1,2,3 behind
      const visible = pos <= 3;

      gsap.set(card, {
        zIndex: 100 - pos,
        opacity: visible ? 1 : 0,
        y: visible ? (pos * 14) : 60,         // bottom stack steps
        scale: visible ? (1 - pos * 0.02) : 0.96
      });
    });

    dots.forEach((d,i)=>d.classList.toggle("is-active", i===activeIndex));
  }

  layoutStack(index);

  function goTo(nextIndex, dir = 1){
  if(animating || nextIndex === index) return;
  animating = true;

  const current = cards[index];
  const next = cards[nextIndex];

  // bring next card on top
  gsap.set(next, { zIndex: 200 });

  // current card leaves upward
  gsap.to(current, {
    duration: 0.55,
    y: -120,
    scale: 0.96,
    opacity: 0,
    ease: "power2.inOut"
  });

  // next card comes from bottom
  gsap.fromTo(next,
    { y: 120, scale: 0.92, opacity: 0 },
    {
      duration: 0.55,
      y: 0,
      scale: 1,
      opacity: 1,
      ease: "power3.out",
      onComplete(){
        index = nextIndex;

        // reset previous card
        gsap.set(current, { y:0, scale:1, opacity:1 });

        layoutStack(index);
        animating = false;
      }
    }
  );
}


  function next(){ goTo((index + 1) % cards.length, 1); }
  function prev(){ goTo((index - 1 + cards.length) % cards.length, -1); }

  btnNext?.addEventListener("click", next);
  btnPrev?.addEventListener("click", prev);

  dots.forEach((dot, i) => {
    dot.addEventListener("click", () => {
      const dir = i > index ? 1 : -1;
      goTo(i, dir);
    });
  });

})();

//Testing Slider

/**
 * TV Stack Slider (GSAP)
 * - stacked cards behind (3 visible)
 * - vertical card change animation
 * - dots + arrows
 *
 * @param {string|HTMLElement} root - selector or element of the slider root (.tv-stack)
 * @param {object} options
 * @param {boolean} options.loop - if true, loops. if false, stops at ends
 * @param {number} options.visibleBehind - how many cards visible behind active
 * @param {number} options.stackY - vertical offset per stacked card
 * @param {number} options.stackX - horizontal offset per stacked card
 * @param {number} options.stackScale - scale reduction per stacked card
 */
function initTvStackSlider(root, options = {}) {
  const opt = {
    loop: false,
    visibleBehind: 3,
    stackY: 16,
    stackX: 10,
    stackScale: 0.02,
    ...options
  };

  const el = typeof root === "string" ? document.querySelector(root) : root;
  if (!el) return null;

  const cards = Array.from(el.querySelectorAll(".tv-stack__card"));
  const dotsWrap = el.querySelector(".tv-stack__dots");
  const prevBtn = el.querySelector(".tv-stack__arrow--prev");
  const nextBtn = el.querySelector(".tv-stack__arrow--next");

  if (!cards.length || !dotsWrap) return null;

  let index = 0;
  let animating = false;

  // Build dots
  dotsWrap.innerHTML = cards
    .map(
      (_, i) =>
        `<button class="tv-stack__dot ${i === 0 ? "is-active" : ""}" type="button" aria-label="Go to slide ${i + 1}"></button>`
    )
    .join("");

  const dots = Array.from(dotsWrap.querySelectorAll(".tv-stack__dot"));

  function updateArrows() {
    if (!prevBtn || !nextBtn) return;

    if (opt.loop) {
      prevBtn.disabled = false;
      nextBtn.disabled = false;
      return;
    }

    prevBtn.disabled = index === 0;
    nextBtn.disabled = index === cards.length - 1;
  }

  function layoutStack(activeIndex) {
    cards.forEach((card, i) => {
      // position in stack: 0 active, 1..visibleBehind behind
      const pos = (i - activeIndex + cards.length) % cards.length;
      const visible = pos <= opt.visibleBehind;

      gsap.set(card, {
        zIndex: 100 - pos,
        opacity: visible ? 1 : 0,
        y: visible ? pos * opt.stackY : 90,
        x: visible ? -pos * opt.stackX : -40,
        scale: visible ? 1 - pos * opt.stackScale : 0.94,
        transformOrigin: "bottom center"
      });
    });

    dots.forEach((d, i) => d.classList.toggle("is-active", i === activeIndex));
    updateArrows();
  }

  function normalizeIndex(i) {
    if (opt.loop) {
      return (i + cards.length) % cards.length;
    }
    return Math.max(0, Math.min(cards.length - 1, i));
  }

  function goTo(nextIndex, dir = 1) {
    const target = normalizeIndex(nextIndex);
    if (animating || target === index) return;

    // stop at ends when loop false
    if (!opt.loop) {
      if (index === 0 && dir < 0) return;
      if (index === cards.length - 1 && dir > 0) return;
    }

    animating = true;

    const current = cards[index];
    const next = cards[target];

    // bring next on top during transition
    gsap.set(next, { zIndex: 200 });

    // current leaves upward
    gsap.to(current, {
      duration: 0.55,
      y: -120,
      x: 0,
      scale: 0.96,
      opacity: 0,
      ease: "power2.inOut"
    });

    // next rises from bottom
    gsap.fromTo(
      next,
      { y: 120, x: -20, scale: 0.94, opacity: 0 },
      {
        duration: 0.55,
        y: 0,
        x: 0,
        scale: 1,
        opacity: 1,
        ease: "power3.out",
        onComplete() {
          // reset old card so stack math stays clean
          gsap.set(current, { y: 0, x: 0, scale: 1, opacity: 1 });
          index = target;
          layoutStack(index);
          animating = false;
        }
      }
    );
  }

  // Click dots
  dots.forEach((dot, i) => {
    dot.addEventListener("click", () => {
      if (!opt.loop && (i < 0 || i > cards.length - 1)) return;
      const dir = i > index ? 1 : -1;
      goTo(i, dir);
    });
  });

  // Arrows
  prevBtn?.addEventListener("click", () => goTo(index - 1, -1));
  nextBtn?.addEventListener("click", () => goTo(index + 1, 1));

  // Initial layout
  layoutStack(index);

  // Public API (optional)
  return {
    next: () => goTo(index + 1, 1),
    prev: () => goTo(index - 1, -1),
    goTo: (i) => goTo(i, i > index ? 1 : -1),
    getIndex: () => index
  };
}

/* ✅ init examples (use your ids) */
document.addEventListener("DOMContentLoaded", () => {
  initTvStackSlider("#tvTestingStack", { loop: false });
  // initTvStackSlider("#tvBenefitsStack", { loop: true, visibleBehind: 3 });
});


//Case Studies animation
gsap.registerPlugin(ScrollTrigger);

gsap.utils.toArray(".tv-case").forEach((card) => {
  const media = card.querySelector(".tv-case__media");
  const img   = card.querySelector(".tv-case__media img");
  const title = card.querySelector(".tv-case__title");
  const desc  = card.querySelector(".tv-case__desc");
  const tags  = card.querySelector(".tv-case__tags");

  const tl = gsap.timeline({
    scrollTrigger: {
      trigger: card,
      start: "top 82%",
      toggleActions: "play none none none"
    }
  });

  // Image reveal
  tl.to(media, {
    clipPath: "inset(0% 0% 0% 0% round 22px)",
    y: 0,
    duration: 0.9,
    ease: "power3.out"
  }, 0);

  // Image settles
  tl.to(img, {
    scale: 1,
    duration: 1.1,
    ease: "power3.out"
  }, 0);

  // Text stagger
  tl.to([title, desc, tags], {
    opacity: 1,
    y: 0,
    duration: 0.55,
    ease: "power2.out",
    stagger: 0.12
  }, 0.18);

  // Optional micro parallax (subtle)
  gsap.to(img, {
    y: -12,
    ease: "none",
    scrollTrigger: {
      trigger: card,
      start: "top bottom",
      end: "bottom top",
      scrub: true
    }
  });
});

//Menu

document.addEventListener("DOMContentLoaded", () => {
  if (!window.gsap) return;

  const offcanvasEl = document.getElementById("mobileMenu");
  if (!offcanvasEl) return;

  // Bootstrap Offcanvas instance
  const oc = bootstrap.Offcanvas.getOrCreateInstance(offcanvasEl);

  const q = (sel) => offcanvasEl.querySelector(sel);
  const qa = (sel) => Array.from(offcanvasEl.querySelectorAll(sel));

  const links = qa(".tv-menu__link");
  const contacts = qa(".tv-menu__contact-item");
  const tiles = qa(".tv-menu-tile");

  // Build a single timeline and reuse (play / reverse)
  const tl = gsap.timeline({ paused: true, defaults: { ease: "power3.out" } });

  // Start hidden (GSAP controls instead of relying only on CSS)
  tl.set([...links, ...contacts, ...tiles], { opacity: 0, y: 18 }, 0);

  // Links
  tl.to(links, {
    opacity: 1,
    y: 0,
    duration: 0.6,
    stagger: 0.06
  }, 0.08);

  // Contact rows
  tl.to(contacts, {
    opacity: 1,
    y: 0,
    duration: 0.55,
    stagger: 0.06
  }, 0.25);

  // Tiles (desktop)
  tl.fromTo(tiles,
    { opacity: 0, y: 18, scale: 0.98 },
    { opacity: 1, y: 0, scale: 1, duration: 0.65, stagger: 0.08 },
    0.18
  );

  // When menu is opened (Bootstrap finished showing)
  offcanvasEl.addEventListener("shown.bs.offcanvas", () => {
    tl.play(0);
  });

  // Smooth close: intercept close buttons/links and reverse first, then hide
  function closeWithAnim() {
    // Prevent double-close
    if (!offcanvasEl.classList.contains("show")) return;

    tl.reverse();
    // Hide after reverse finishes
    tl.eventCallback("onReverseComplete", () => {
      oc.hide();
      tl.eventCallback("onReverseComplete", null);
    });
  }

  // Close button
  q(".tv-menu__close")?.addEventListener("click", (e) => {
    e.preventDefault(); // stop immediate bootstrap dismiss
    closeWithAnim();
  });

  // Close when user clicks any nav link (optional)
  links.forEach((a) => {
    a.addEventListener("click", (e) => {
      // If you navigate to another page, you can skip this.
      // If it's same-page anchors, keep it.
      const href = a.getAttribute("href") || "";
      if (href.startsWith("#")) {
        e.preventDefault();
        closeWithAnim();
        // after close, then jump
        setTimeout(() => (window.location.hash = href), 450);
      } else {
        // normal navigation: let it navigate
        closeWithAnim();
      }
    });
  });

  // ESC close (optional smooth close)
  document.addEventListener("keydown", (e) => {
    if (e.key === "Escape" && offcanvasEl.classList.contains("show")) {
      closeWithAnim();
    }
  });

  // After it is fully hidden, reset to start state (so next open looks perfect)
  offcanvasEl.addEventListener("hidden.bs.offcanvas", () => {
    tl.pause(0);
  });
});

document.addEventListener("DOMContentLoaded", () => {
  if (!window.gsap) return;

  const menu = document.getElementById("mobileMenu");
  if (!menu) return;

  const oc = bootstrap.Offcanvas.getOrCreateInstance(menu);

  const stripes = Array.from(menu.querySelectorAll(".tv-menu__stripes span"));
  const inner = menu.querySelector(".tv-menu__inner");

  const links = Array.from(menu.querySelectorAll(".tv-menu__link"));
  const contacts = Array.from(menu.querySelectorAll(".tv-menu__contact-item"));
  const tiles = Array.from(menu.querySelectorAll(".tv-menu-tile"));

  const tl = gsap.timeline({ paused: true, defaults: { ease: "power3.out" } });

  // Initial states
  tl.set(stripes, { scaleY: 0, transformOrigin: "top" }, 0);
  tl.set(inner, { y: 24, opacity: 0 }, 0);
  tl.set([...links, ...contacts], { y: 18, opacity: 0 }, 0);
  tl.set(tiles, { y: 18, opacity: 0, scale: 0.98 }, 0);

  // 1) Stripes wipe down
  tl.to(stripes, {
    scaleY: 1,
    duration: 0.55,
    stagger: 0.05
  }, 0);

  // 2) Whole content block slides in (nice premium feel)
  tl.to(inner, {
    y: 0,
    opacity: 1,
    duration: 0.45
  }, 0.15);

  // 3) Links + contacts slide in with stagger
  tl.to(links, {
    y: 0,
    opacity: 1,
    duration: 0.55,
    stagger: 0.06
  }, 0.25);

  tl.to(contacts, {
    y: 0,
    opacity: 1,
    duration: 0.45,
    stagger: 0.06
  }, 0.35);

  // 4) Tiles (desktop)
  tl.to(tiles, {
    y: 0,
    opacity: 1,
    scale: 1,
    duration: 0.55,
    stagger: 0.08
  }, 0.30);

  // Open animation (after bootstrap shows it)
  menu.addEventListener("shown.bs.offcanvas", () => {
    tl.play(0);
  });

  // Smooth close (reverse, then hide)
  function closeWithAnim() {
    tl.reverse();
    tl.eventCallback("onReverseComplete", () => {
      oc.hide();
      tl.eventCallback("onReverseComplete", null);
    });
  }

  // Intercept close button
  const closeBtn = menu.querySelector(".tv-menu__close");
  closeBtn?.addEventListener("click", (e) => {
    e.preventDefault();
    closeWithAnim();
  });

  // Optional: close on nav click
  links.forEach((a) => a.addEventListener("click", () => closeWithAnim()));

  // Reset on hidden
  menu.addEventListener("hidden.bs.offcanvas", () => {
    tl.pause(0);
    gsap.set(stripes, { opacity: 1 });
  });
});


document.addEventListener("DOMContentLoaded", () => {
  document.querySelectorAll(".js-hover-bg").forEach((el) => {
    let raf = null;

    const setVars = (x, y) => {
      el.style.setProperty("--mx", `${x}%`);
      el.style.setProperty("--my", `${y}%`);
    };

    el.addEventListener("mousemove", (e) => {
      const r = el.getBoundingClientRect();
      const x = ((e.clientX - r.left) / r.width) * 100;
      const y = ((e.clientY - r.top) / r.height) * 100;

      if (raf) cancelAnimationFrame(raf);
      raf = requestAnimationFrame(() => setVars(x, y));
    });

    el.addEventListener("mouseleave", () => setVars(50, 50));
  });
});

gsap.utils.toArray(".js-footer-word").forEach((wrap) => {
  const text = wrap.querySelector(".tv-footer-word__inner");
  if (!text) return;

  // Reveal on scroll
  gsap.to(text, {
    clipPath: "inset(0 0% 0 0)",
    x: "0%",
    duration: 1.1,
    ease: "power4.out",
    scrollTrigger: {
      trigger: wrap,
      start: "top 92%",
      once: true
    }
  });

  // Optional: slow drift (premium feel)
  gsap.to(text, {
    x: "2%",
    duration: 6,
    ease: "none",
    yoyo: true,
    repeat: -1
  });
});

// Chose Section

gsap.registerPlugin(ScrollTrigger);

function initTvStackSlider(rootId){
  const root = document.getElementById(rootId);
  if (!root) return;

  const cards = Array.from(root.querySelectorAll(".tv-stack__card"));
  const dotsWrap = root.querySelector(".tv-stack__dots");
  let index = 0;
  let animating = false;

  dotsWrap.innerHTML = cards.map((_, i) =>
    '<button class="tv-stack__dot' + (i === 0 ? ' is-active' : '') + '" type="button" aria-label="Go to slide ' + (i + 1) + '"></button>'
  ).join("");

  const dots = Array.from(dotsWrap.querySelectorAll(".tv-stack__dot"));

  function layoutSlides(activeIndex){
    cards.forEach((card, i) => {
      const isActive = i === activeIndex;

      gsap.set(card, {
        zIndex: isActive ? 2 : 1,
        opacity: isActive ? 1 : 0,
        y: isActive ? 0 : 30,
        x: 0,
        scale: 1,
        pointerEvents: isActive ? "auto" : "none"
      });

      card.classList.toggle("is-active", isActive);
    });

    dots.forEach((dot, i) => {
      dot.classList.toggle("is-active", i === activeIndex);
    });
  }

  function goTo(nextIndex){
    if (animating || nextIndex === index) return;
    animating = true;

    const current = cards[index];
    const next = cards[nextIndex];

    gsap.set(next, {
      zIndex: 3,
      opacity: 0,
      y: 40,
      pointerEvents: "auto"
    });

    gsap.to(current, {
      opacity: 0,
      y: -30,
      duration: 0.38,
      ease: "power2.out"
    });

    gsap.to(next, {
      opacity: 1,
      y: 0,
      duration: 0.48,
      ease: "power3.out",
      onComplete: function(){
        index = nextIndex;
        layoutSlides(index);
        animating = false;
      }
    });
  }

  dots.forEach((dot, i) => {
    dot.addEventListener("click", function(){
      goTo(i);
    });
  });

  layoutSlides(index);
  return { goTo };
}

initTvStackSlider("tvWhyStack");

(function(){
  const section = document.getElementById("tvWhy");
  const cardLeft = document.getElementById("tvCardLeft");
  const cardCenter = document.getElementById("tvCardCenter");
  const cardRight = document.getElementById("tvCardRight");
  const cardsWrap = document.querySelector(".tv-why__cards");
  const sliderWrap = document.getElementById("tvWhySliderWrap");
  const slideStage = document.querySelector(".tv-why__stage");

  if (!section || !cardLeft || !cardCenter || !cardRight || !cardsWrap || !sliderWrap) return;

  const isMobile = window.matchMedia("(max-width: 991px)").matches;
  if (isMobile) return;

  gsap.timeline({
    scrollTrigger: {
      trigger: slideStage,
      start: "top 20%",
      end: "+=120%",
      scrub: true,
      pin: true,
      anticipatePin: 1
    }
  })
  .to(cardLeft, {
    opacity: 0,
    x: -260,
    y: 20,
    rotate: -22,
    scale: 0.90,
    duration: 0.45,
    ease: "power2.out"
  }, 0)
  .to(cardRight, {
    opacity: 0,
    x: 260,
    y: 20,
    rotate: 22,
    scale: 0.90,
    duration: 0.45,
    ease: "power2.out"
  }, 0)
  .to(cardCenter, {
    opacity: 0,
    y: 40,
    scale: 0.92,
    duration: 0.45,
    ease: "power2.out"
  }, 0.06)
  .to(cardsWrap, {
    opacity: 0,
    duration: 0.2,
    ease: "none"
  }, 0.22)
  .to(sliderWrap, {
    opacity: 1,
    y: 0,
    duration: 0.5,
    ease: "power2.out",
    onStart: function(){
      sliderWrap.style.pointerEvents = "auto";
    }
  }, 0.30);
})();

window.addEventListener("load", function(){
  ScrollTrigger.refresh();
});

window.addEventListener("resize", function(){
  ScrollTrigger.refresh();
});

//FAQs Accordion
document.addEventListener("DOMContentLoaded", function () {
const faqItems = document.querySelectorAll(".tv-faq__item");

faqItems.forEach((item) => {
  const button = item.querySelector(".tv-faq__question");
  const answer = item.querySelector(".tv-faq__answer");

  // Set default open item
  if (item.classList.contains("is-open")) {
    answer.style.maxHeight = answer.scrollHeight + "px";
  }

  button.addEventListener("click", function () {
    const isOpen = item.classList.contains("is-open");

    // Close all items
    faqItems.forEach((faq) => {
      faq.classList.remove("is-open");
      faq.querySelector(".tv-faq__question").setAttribute("aria-expanded", "false");
      faq.querySelector(".tv-faq__answer").style.maxHeight = null;
    });

    // Open clicked item if it was closed
    if (!isOpen) {
      item.classList.add("is-open");
      button.setAttribute("aria-expanded", "true");
      answer.style.maxHeight = answer.scrollHeight + "px";
    }
  });
});
});

//BG animation
gsap.registerPlugin(ScrollTrigger);

  const bg = document.getElementById("tvPageBg");
  const sections = document.querySelectorAll(".tv-section");

  function setBackground(theme) {
    bg.classList.remove("is-default", "is-faq", "is-contact");
    bg.classList.add("is-" + theme);

    gsap.fromTo(bg,
      { opacity: 0.85, scale: 1.03 },
      { opacity: 1, scale: 1, duration: 0.7, ease: "power2.out" }
    );
  }

  sections.forEach((section) => {
    const theme = section.dataset.bg || "default";

    ScrollTrigger.create({
      trigger: section,
      start: "top 55%",
      end: "bottom 45%",
      onEnter: () => setBackground(theme),
      onEnterBack: () => setBackground(theme)
    });
  });

  setBackground("default");


