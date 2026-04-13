// =========================================================
// HEADER FIXED
// =========================================================
(function () {
  const header = document.getElementById("tvHeader");
  if (!header) return;

  const toggle = () => {
    header.classList.toggle("is-scrolled", window.scrollY > 10);
  };

  toggle();
  window.addEventListener("scroll", toggle, { passive: true });
})();

// =========================================================
// SHARED HELPERS
// =========================================================
function initTvStackSlider(rootId) {
  if (typeof gsap === "undefined") return false;

  const root = document.getElementById(rootId);
  if (!root) return false;

  const cards = Array.from(root.querySelectorAll(".tv-stack__card"));
  const dotsWrap = root.querySelector(".tv-stack__dots");
  const prevBtn = root.querySelector(".tv-stack__arrow--prev, .tv-stack__prev");
  const nextBtn = root.querySelector(".tv-stack__arrow--next, .tv-stack__next");

  const mediaItems = Array.from(root.querySelectorAll(".tv-testing-media"));
  const mediaVideos = Array.from(root.querySelectorAll(".tv-testing-video"));

  if (!cards.length || !dotsWrap) return false;

  let index = 0;
  let animating = false;

  dotsWrap.innerHTML = cards
    .map(
      (_, i) =>
        `<button class="tv-stack__dot ${i === 0 ? "is-active" : ""}" type="button" aria-label="Go to slide ${i + 1}"></button>`
    )
    .join("");

  const dots = Array.from(dotsWrap.querySelectorAll(".tv-stack__dot"));

  function pauseAllVideos() {
    mediaVideos.forEach((video) => {
      if (!video) return;
      video.pause();
      video.currentTime = 0;
    });
  }

  function playActiveVideo(activeIndex) {
    const activeVideo = mediaVideos[activeIndex];
    if (!activeVideo) return;

    activeVideo.muted = true;
    activeVideo.playsInline = true;

    const playNow = () => {
      activeVideo.play().catch(() => {});
    };

    if (activeVideo.readyState >= 2) {
      playNow();
    } else {
      activeVideo.load();
      activeVideo.addEventListener("canplay", playNow, { once: true });
    }
  }

  function updateDots(activeIndex) {
    dots.forEach((dot, i) => {
      dot.classList.toggle("is-active", i === activeIndex);
    });
  }

  function updateArrows(activeIndex) {
    if (prevBtn) prevBtn.disabled = activeIndex === 0;
    if (nextBtn) nextBtn.disabled = activeIndex === cards.length - 1;
  }

  function layoutSlides(activeIndex) {
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

    if (mediaItems.length) {
      mediaItems.forEach((item, i) => {
        const isActive = i === activeIndex;

        item.classList.toggle("is-active", isActive);

        gsap.set(item, {
          opacity: isActive ? 1 : 0,
          visibility: isActive ? "visible" : "hidden",
          y: 0
        });
      });

      pauseAllVideos();
      setTimeout(() => {
        playActiveVideo(activeIndex);
      }, 60);
    }

    updateDots(activeIndex);
    updateArrows(activeIndex);
  }

  function showActiveMedia(nextIndex, direction = "next") {
    if (!mediaItems.length) return;

    const currentMedia = mediaItems[index];
    const nextMedia = mediaItems[nextIndex];

    if (!nextMedia) return;

    mediaItems.forEach((item, i) => {
      item.classList.toggle("is-active", i === nextIndex);
    });

    gsap.set(nextMedia, {
      visibility: "visible",
      opacity: 0,
      y: direction === "prev" ? -40 : 40
    });

    if (currentMedia && currentMedia !== nextMedia) {
      gsap.to(currentMedia, {
        opacity: 0,
        y: direction === "prev" ? 30 : -30,
        duration: 0.35,
        ease: "power2.out",
        onComplete: () => {
          gsap.set(currentMedia, {
            visibility: "hidden",
            y: 0
          });
        }
      });
    }

    gsap.to(nextMedia, {
      opacity: 1,
      y: 0,
      duration: 0.45,
      ease: "power3.out",
      onComplete: () => {
        pauseAllVideos();
        playActiveVideo(nextIndex);
      }
    });
  }

  function goTo(nextIndex) {
    if (animating || nextIndex === index || nextIndex < 0 || nextIndex >= cards.length) return;
    animating = true;

    const direction = nextIndex > index ? "next" : "prev";
    const current = cards[index];
    const next = cards[nextIndex];

    current.classList.remove("is-active");
    next.classList.add("is-active");

    gsap.set(next, {
      zIndex: 3,
      opacity: 0,
      y: direction === "prev" ? -40 : 40,
      pointerEvents: "auto"
    });

    gsap.to(current, {
      opacity: 0,
      y: direction === "prev" ? 30 : -30,
      duration: 0.38,
      ease: "power2.out"
    });

    gsap.to(next, {
      opacity: 1,
      y: 0,
      duration: 0.48,
      ease: "power3.out",
      onStart: function () {
        showActiveMedia(nextIndex, direction);
      },
      onComplete: function () {
        index = nextIndex;
        layoutSlides(index);
        animating = false;
      }
    });
  }

  dots.forEach((dot, i) => {
    dot.addEventListener("click", function () {
      goTo(i);
    });
  });

  if (prevBtn) {
    prevBtn.addEventListener("click", function () {
      goTo(index - 1);
    });
  }

  if (nextBtn) {
    nextBtn.addEventListener("click", function () {
      goTo(index + 1);
    });
  }

  document.addEventListener("visibilitychange", function () {
    if (document.hidden) {
      pauseAllVideos();
    } else {
      playActiveVideo(index);
    }
  });

  layoutSlides(index);
  return true;
}

function initTvBenefitsStack() {
  if (typeof gsap === "undefined") return false;

  const root = document.getElementById("tvBenefitsStack");
  if (!root) return false;

  const cards = Array.from(root.querySelectorAll(".tv-stack__card"));
  const dotsWrap = root.querySelector(".tv-stack__dots");
  const btnPrev = root.querySelector(".tv-stack__prev, .tv-stack__arrow--prev");
  const btnNext = root.querySelector(".tv-stack__next, .tv-stack__arrow--next");

  if (!cards.length || !dotsWrap) return false;

  let index = 0;
  let animating = false;

  dotsWrap.innerHTML = cards
    .map(
      (_, i) =>
        `<button class="tv-stack__dot ${i === 0 ? "is-active" : ""}" type="button" aria-label="Go to slide ${i + 1}"></button>`
    )
    .join("");

  const dots = Array.from(dotsWrap.querySelectorAll(".tv-stack__dot"));

  function layoutStack(activeIndex) {
    cards.forEach((card, i) => {
      const pos = (i - activeIndex + cards.length) % cards.length;
      const visible = pos <= 3;

      gsap.set(card, {
        zIndex: 100 - pos,
        opacity: visible ? 1 : 0,
        y: visible ? pos * 14 : 60,
        scale: visible ? 1 - pos * 0.02 : 0.96,
        pointerEvents: pos === 0 ? "auto" : "none"
      });

      card.classList.toggle("is-active", pos === 0);
    });

    dots.forEach((dot, i) => {
      dot.classList.toggle("is-active", i === activeIndex);
    });
  }

  function goTo(nextIndex) {
    if (animating || nextIndex === index) return;
    animating = true;

    const current = cards[index];
    const next = cards[nextIndex];

    gsap.set(next, {
      zIndex: 200,
      pointerEvents: "auto"
    });

    gsap.to(current, {
      duration: 0.55,
      y: -120,
      scale: 0.96,
      opacity: 0,
      ease: "power2.inOut"
    });

    gsap.fromTo(
      next,
      {
        y: 120,
        scale: 0.92,
        opacity: 0
      },
      {
        duration: 0.55,
        y: 0,
        scale: 1,
        opacity: 1,
        ease: "power3.out",
        onComplete() {
          index = nextIndex;

          gsap.set(current, {
            y: 0,
            scale: 1,
            opacity: 1
          });

          layoutStack(index);
          animating = false;
        }
      }
    );
  }

  function next() {
    goTo((index + 1) % cards.length);
  }

  function prev() {
    goTo((index - 1 + cards.length) % cards.length);
  }

  if (btnNext) btnNext.addEventListener("click", next);
  if (btnPrev) btnPrev.addEventListener("click", prev);

  dots.forEach((dot, i) => {
    dot.addEventListener("click", function () {
      goTo(i);
    });
  });

  layoutStack(index);
  return true;
}

function initLogoReveal() {
  if (typeof gsap === "undefined" || typeof ScrollTrigger === "undefined") return;

  const wrap = document.querySelector("[data-logo-reveal]");
  if (!wrap) return;

  const letters = gsap.utils.toArray("[data-logo-letter]", wrap);
  if (!letters.length) return;

  gsap.set(letters, {
    opacity: 0,
    y: 60
  });

  gsap.fromTo(
    letters,
    {
      opacity: 0,
      y: 40,
      scale: 0.98,
      filter: "blur(4px)"
    },
    {
      opacity: 1,
      y: 0,
      scale: 1,
      filter: "blur(0px)",
      duration: 1,
      ease: "power2.out",
      stagger: {
        each: 0.12
      },
      scrollTrigger: {
        trigger: wrap,
        start: "top 92%",
        end: "top 55%",
        scrub: 2
      }
    }
  );
}

function initCaseFilter() {
  const tabs = document.querySelectorAll(".tv-cases__tab");
  const items = document.querySelectorAll(".tv-case");

  if (!tabs.length || !items.length || typeof gsap === "undefined") return;

  let isAnimating = false;

  tabs.forEach((tab) => {
    tab.addEventListener("click", function () {
      const filter = this.getAttribute("data-filter");
      if (isAnimating || this.classList.contains("is-active")) return;

      isAnimating = true;

      tabs.forEach((btn) => {
        btn.classList.remove("is-active");
        btn.setAttribute("aria-selected", "false");
      });

      this.classList.add("is-active");
      this.setAttribute("aria-selected", "true");

      const itemsToShow = [];
      const itemsToHide = [];

      items.forEach((item) => {
        const category = item.getAttribute("data-category");
        const shouldShow = filter === "all" || category === filter;

        if (shouldShow) {
          itemsToShow.push(item);
        } else {
          itemsToHide.push(item);
        }
      });

      gsap.to(itemsToHide, {
        opacity: 0,
        y: 24,
        duration: 0.25,
        ease: "power2.out",
        stagger: 0.03,
        onComplete: () => {
          itemsToHide.forEach((item) => {
            item.style.display = "none";
          });

          itemsToShow.forEach((item) => {
            item.style.display = "";
          });

          gsap.fromTo(
            itemsToShow,
            {
              opacity: 0,
              y: 24
            },
            {
              opacity: 1,
              y: 0,
              duration: 0.45,
              ease: "power3.out",
              stagger: 0.05,
              clearProps: "opacity,transform",
              onComplete: () => {
                isAnimating = false;
              }
            }
          );
        }
      });
    });
  });
}

// =========================================================
// MAIN INIT
// =========================================================
document.addEventListener("DOMContentLoaded", function () {
  const hasSwiper = typeof Swiper !== "undefined";
  const hasGSAP = typeof gsap !== "undefined";
  const hasScrollTrigger = typeof ScrollTrigger !== "undefined";
  const hasBootstrap = typeof bootstrap !== "undefined";

  if (hasGSAP && hasScrollTrigger) {
    gsap.registerPlugin(ScrollTrigger);
  }

  // =========================================================
  // HERO VIDEO SLIDER
  // =========================================================
  if (hasSwiper) {
    const heroThumbsEl = document.querySelector(".tv-hero-thumbs");
    const heroMainEl = document.querySelector(".tv-hero-swiper");

    if (heroThumbsEl && heroMainEl) {
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
        thumbs: { swiper: heroThumbs }
      });

      function pauseAllHeroVideos() {
        document.querySelectorAll(".tv-hero-swiper video").forEach((video) => {
          video.pause();
        });
      }

      function resetHeroProgress() {
        document.querySelectorAll(".tv-hero-thumb__progress").forEach((bar) => {
          bar.style.width = "0%";
        });
      }

      function getActiveHeroVideo() {
        const slide = heroMain.slides[heroMain.activeIndex];
        return slide ? slide.querySelector("video") : null;
      }

      function getActiveHeroProgressEl() {
        const thumbSlide = document.querySelector(".tv-hero-thumbs .swiper-slide-thumb-active");
        return thumbSlide ? thumbSlide.querySelector(".tv-hero-thumb__progress") : null;
      }

      function bindHeroVideoEvents(video) {
        video.onended = null;
        video.ontimeupdate = null;

        video.ontimeupdate = () => {
          const dur = video.duration || 0;
          if (!dur) return;

          const progress = (video.currentTime / dur) * 100;
          const bar = getActiveHeroProgressEl();
          if (bar) bar.style.width = `${progress}%`;
        };

        video.onended = () => {
          if (!heroMain.isEnd) {
            heroMain.slideNext();
          }
        };
      }

      function playActiveHeroVideo() {
        const video = getActiveHeroVideo();
        if (!video) return;

        pauseAllHeroVideos();
        resetHeroProgress();

        video.currentTime = 0;
        video.muted = true;

        bindHeroVideoEvents(video);
        video.play().catch(() => {});
      }

      playActiveHeroVideo();

      heroMain.on("slideChangeTransitionStart", () => {
        pauseAllHeroVideos();
      });

      heroMain.on("slideChangeTransitionEnd", () => {
        playActiveHeroVideo();
      });

      document.addEventListener("visibilitychange", () => {
        const video = getActiveHeroVideo();
        if (!video) return;

        if (document.hidden) {
          video.pause();
        } else {
          video.play().catch(() => {});
        }
      });

      heroThumbs.on("click", () => {
        setTimeout(() => playActiveHeroVideo(), 50);
      });
    }

    // =========================================================
    // LOGO SLIDER
    // =========================================================
    if (document.querySelector(".tv-logo-slider")) {
      new Swiper(".tv-logo-slider", {
        loop: true,
        slidesPerView: 9,
        slidesPerGroup: 1,
        spaceBetween: 28,
        speed: 650,
        autoplay: {
          delay: 1800,
          disableOnInteraction: false
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
          }
        }
      });
    }

    // =========================================================
    // SERVICES SLIDER
    // =========================================================
    const servicesEl = document.querySelector(".tv-services-swiper");
    const servicesPrev = document.querySelector(".tv-nav-prev");
    const servicesNext = document.querySelector(".tv-nav-next");
    const servicesPagination = document.querySelector(".tv-pagination");

    if (servicesEl && typeof Swiper !== "undefined") {
      function updateNavState(swiper) {
        if (servicesPrev) {
          servicesPrev.classList.toggle("is-disabled", swiper.isBeginning);
        }
        if (servicesNext) {
          servicesNext.classList.toggle("is-disabled", swiper.isEnd);
        }
      }

      function pauseAllServiceVideos(swiper) {
        swiper.slides.forEach((slide) => {
          const video = slide.querySelector(".tv-services__video");
          if (!video) return;
          video.pause();
          video.currentTime = 0;
        });
      }

      function playActiveServiceVideo(swiper) {
        const activeSlide = swiper.slides[swiper.activeIndex];
        if (!activeSlide) return;

        const video = activeSlide.querySelector(".tv-services__video");
        if (!video) return;

        video.muted = true;
        video.play().catch(() => {});
      }

      function animateActiveServiceSlide(swiper, direction = "next") {
        const activeSlide = swiper.slides[swiper.activeIndex];
        if (!activeSlide || typeof gsap === "undefined") return;

        const card = activeSlide.querySelector(".tv-service-card");
        if (!card) return;

        gsap.killTweensOf(card);

        gsap.fromTo(
          card,
          {
            y: direction === "prev" ? -60 : 60,
            opacity: 0
          },
          {
            y: 0,
            opacity: 1,
            duration: 0.55,
            ease: "power3.out"
          }
        );
      }

      let slideDirection = "next";

      const servicesOptions = {
        slidesPerView: 2,
        spaceBetween: 20,
        speed: 700,
        loop: true,
        watchOverflow: true,
        allowTouchMove: true,
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
            pauseAllServiceVideos(swiper);
            playActiveServiceVideo(swiper);
            animateActiveServiceSlide(swiper, "next");
          },
          slideChangeTransitionStart(swiper) {
            updateNavState(swiper);
            pauseAllServiceVideos(swiper);
          },
          slideChangeTransitionEnd(swiper) {
            playActiveServiceVideo(swiper);
            animateActiveServiceSlide(swiper, slideDirection);
          }
        }
      };

      if (servicesPrev && servicesNext) {
        servicesOptions.navigation = {
          nextEl: ".tv-nav-next",
          prevEl: ".tv-nav-prev"
        };

        servicesPrev.addEventListener("click", function () {
          slideDirection = "prev";
        });

        servicesNext.addEventListener("click", function () {
          slideDirection = "next";
        });
      }

      if (servicesPagination) {
        servicesOptions.pagination = {
          el: ".tv-pagination",
          clickable: true
        };
      }

      const servicesSwiper = new Swiper(".tv-services-swiper", servicesOptions);

      document.addEventListener("visibilitychange", function () {
        if (document.hidden) {
          pauseAllServiceVideos(servicesSwiper);
        } else {
          playActiveServiceVideo(servicesSwiper);
        }
      });
    }

    // =========================================================
    // CHOOSE SLIDER
    // =========================================================
    const chooseEl = document.querySelector(".tv-choose-swiper");
    const choosePrev = document.querySelector(".tv-choose-prev");
    const chooseNext = document.querySelector(".tv-choose-next");

    if (chooseEl && choosePrev && chooseNext) {
      new Swiper(".tv-choose-swiper", {
        slidesPerView: 3,
        centeredSlides: true,
        loop: false,
        speed: 700,
        spaceBetween: 0,
        grabCursor: true,
        effect: "coverflow",
        coverflowEffect: {
          rotate: 18,
          stretch: 110,
          depth: 220,
          modifier: 1,
          slideShadows: false
        },
        navigation: {
          nextEl: ".tv-choose-next",
          prevEl: ".tv-choose-prev"
        },
        breakpoints: {
          0: {
            slidesPerView: 1.15,
            coverflowEffect: { rotate: 0, stretch: 0, depth: 120 }
          },
          576: {
            slidesPerView: 1.5,
            coverflowEffect: { rotate: 8, stretch: 40, depth: 160 }
          },
          992: {
            slidesPerView: 3,
            coverflowEffect: { rotate: 18, stretch: 110, depth: 220 }
          }
        }
      });
    }

    // =========================================================
    // TESTIMONIALS SLIDER
    // =========================================================
    const testimonialsEl = document.querySelector(".tv-testimonials-swiper");
    const testimonialsDots = document.querySelector(".tv-testimonials__dots");

    if (testimonialsEl && testimonialsDots) {
      new Swiper(".tv-testimonials-swiper", {
        slidesPerView: 1,
        loop: true,
        speed: 650,
        spaceBetween: 24,
        pagination: {
          el: ".tv-testimonials__dots",
          clickable: true
        }
      });
    }

    // =========================================================
    // SELECTED WORK SLIDER
    // =========================================================
    const selectedWorkEl = document.querySelector(".tv-selected-work__slider");

    if (selectedWorkEl) {
      new Swiper(".tv-selected-work__slider", {
        slidesPerView: "auto",
        spaceBetween: 20,
        speed: 700,
        grabCursor: true,
        freeMode: false,
        breakpoints: {
          0: {
            spaceBetween: 16
          },
          768: {
            spaceBetween: 20
          },
          1200: {
            spaceBetween: 22
          }
        }
      });
    }
  }

  // =========================================================
  // MENU
  // =========================================================
  if (hasGSAP && hasBootstrap) {
    const menu = document.getElementById("mobileMenu");

    if (menu) {
      const oc = bootstrap.Offcanvas.getOrCreateInstance(menu);

      const stripes = Array.from(menu.querySelectorAll(".tv-menu__stripes span"));
      const inner = menu.querySelector(".tv-menu__inner");
      const links = Array.from(menu.querySelectorAll(".tv-menu__link"));
      const contacts = Array.from(menu.querySelectorAll(".tv-menu__contact-item"));
      const tiles = Array.from(menu.querySelectorAll(".tv-menu-tile"));

      const tl = gsap.timeline({
        paused: true,
        defaults: { ease: "power3.out" }
      });

      tl.set(stripes, { scaleY: 0, transformOrigin: "top" }, 0);
      if (inner) tl.set(inner, { y: 24, opacity: 0 }, 0);
      tl.set([...links, ...contacts], { y: 18, opacity: 0 }, 0);
      tl.set(tiles, { y: 18, opacity: 0, scale: 0.98 }, 0);

      tl.to(
        stripes,
        {
          scaleY: 1,
          duration: 0.55,
          stagger: 0.05
        },
        0
      );

      if (inner) {
        tl.to(
          inner,
          {
            y: 0,
            opacity: 1,
            duration: 0.45
          },
          0.15
        );
      }

      tl.to(
        links,
        {
          y: 0,
          opacity: 1,
          duration: 0.55,
          stagger: 0.06
        },
        0.25
      );

      tl.to(
        contacts,
        {
          y: 0,
          opacity: 1,
          duration: 0.45,
          stagger: 0.06
        },
        0.35
      );

      tl.to(
        tiles,
        {
          y: 0,
          opacity: 1,
          scale: 1,
          duration: 0.55,
          stagger: 0.08
        },
        0.3
      );

      menu.addEventListener("shown.bs.offcanvas", () => {
        tl.play(0);
      });

      function closeWithAnim() {
        if (!menu.classList.contains("show")) return;

        tl.reverse();
        tl.eventCallback("onReverseComplete", () => {
          oc.hide();
          tl.eventCallback("onReverseComplete", null);
        });
      }

      const closeBtn = menu.querySelector(".tv-menu__close");
      closeBtn?.addEventListener("click", (e) => {
        e.preventDefault();
        closeWithAnim();
      });

      links.forEach((a) => {
        a.addEventListener("click", (e) => {
          const href = a.getAttribute("href") || "";

          if (href.startsWith("#")) {
            e.preventDefault();
            closeWithAnim();
            setTimeout(() => {
              window.location.hash = href;
            }, 450);
          } else {
            closeWithAnim();
          }
        });
      });

      document.addEventListener("keydown", (e) => {
        if (e.key === "Escape" && menu.classList.contains("show")) {
          closeWithAnim();
        }
      });

      menu.addEventListener("hidden.bs.offcanvas", () => {
        tl.pause(0);
        gsap.set(stripes, { scaleY: 0, transformOrigin: "top" });
        if (inner) gsap.set(inner, { y: 24, opacity: 0 });
        gsap.set([...links, ...contacts], { y: 18, opacity: 0 });
        gsap.set(tiles, { y: 18, opacity: 0, scale: 0.98 });
      });
    }
  }

  // =========================================================
  // HOVER BG
  // =========================================================
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

  // =========================================================
  // FOOTER WORD ANIMATION
  // =========================================================
  if (hasGSAP && hasScrollTrigger) {
    gsap.utils.toArray(".js-footer-word").forEach((wrap) => {
      const text = wrap.querySelector(".tv-footer-word__inner");
      if (!text) return;

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

      gsap.to(text, {
        x: "2%",
        duration: 6,
        ease: "none",
        yoyo: true,
        repeat: -1
      });
    });
  }

  // =========================================================
  // CASE STUDIES CARD ANIMATION
  // =========================================================
  if (hasGSAP && hasScrollTrigger) {
    gsap.utils.toArray(".tv-case").forEach((card) => {
      const media = card.querySelector(".tv-case__media");
      const img = card.querySelector(".tv-case__media img");
      const title = card.querySelector(".tv-case__title");
      const desc = card.querySelector(".tv-case__desc");
      const tags = card.querySelector(".tv-case__tags");

      const tl = gsap.timeline({
        scrollTrigger: {
          trigger: card,
          start: "top 82%",
          toggleActions: "play none none none"
        }
      });

      if (media) {
        tl.to(
          media,
          {
            clipPath: "inset(0% 0% 0% 0% round 22px)",
            y: 0,
            duration: 0.9,
            ease: "power3.out"
          },
          0
        );
      }

      if (img) {
        tl.to(
          img,
          {
            scale: 1,
            duration: 1.1,
            ease: "power3.out"
          },
          0
        );

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
      }

      const textItems = [title, desc, tags].filter(Boolean);
      if (textItems.length) {
        tl.to(
          textItems,
          {
            opacity: 1,
            y: 0,
            duration: 0.55,
            ease: "power2.out",
            stagger: 0.12
          },
          0.18
        );
      }
    });
  }

  // =========================================================
  // WHY CHOOSE US - OLD STACK SECTION
  // =========================================================
  const whySliderReady = initTvStackSlider("tvWhyStack");

  if (hasGSAP && hasScrollTrigger && whySliderReady) {
    const section = document.getElementById("tvWhy");
    const cardLeft = document.getElementById("tvCardLeft");
    const cardCenter = document.getElementById("tvCardCenter");
    const cardRight = document.getElementById("tvCardRight");
    const cardsWrap = document.querySelector(".tv-why__cards");
    const sliderWrap = document.getElementById("tvWhySliderWrap");

    if (section && cardLeft && cardCenter && cardRight && cardsWrap && sliderWrap) {
      const isMobile = window.matchMedia("(max-width: 991px)").matches;

      if (!isMobile) {
        gsap
          .timeline({
            scrollTrigger: {
              trigger: section,
              start: "top top",
              end: "+=120%",
              scrub: true,
              pin: true,
              anticipatePin: 1
            }
          })
          .to(
            cardLeft,
            {
              opacity: 0,
              x: -260,
              y: 20,
              rotate: -22,
              scale: 0.9,
              duration: 0.45,
              ease: "power2.out"
            },
            0
          )
          .to(
            cardRight,
            {
              opacity: 0,
              x: 260,
              y: 20,
              rotate: 22,
              scale: 0.9,
              duration: 0.45,
              ease: "power2.out"
            },
            0
          )
          .to(
            cardCenter,
            {
              opacity: 0,
              y: 40,
              scale: 0.92,
              duration: 0.45,
              ease: "power2.out"
            },
            0.06
          )
          .to(
            cardsWrap,
            {
              opacity: 0,
              duration: 0.2,
              ease: "none"
            },
            0.22
          )
          .to(
            sliderWrap,
            {
              opacity: 1,
              y: 0,
              duration: 0.5,
              ease: "power2.out",
              onStart: function () {
                sliderWrap.style.pointerEvents = "auto";
              }
            },
            0.3
          );
      }
    }
  }

  // =========================================================
  // FAQ ACCORDION
  // =========================================================
  const faqItems = document.querySelectorAll(".tv-faq__item");

  faqItems.forEach((item) => {
    const button = item.querySelector(".tv-faq__question");
    const answer = item.querySelector(".tv-faq__answer");

    if (!button || !answer) return;

    if (item.classList.contains("is-open")) {
      answer.style.maxHeight = answer.scrollHeight + "px";
    }

    button.addEventListener("click", function () {
      const isOpen = item.classList.contains("is-open");

      faqItems.forEach((faq) => {
        faq.classList.remove("is-open");
        faq.querySelector(".tv-faq__question")?.setAttribute("aria-expanded", "false");
        const faqAnswer = faq.querySelector(".tv-faq__answer");
        if (faqAnswer) faqAnswer.style.maxHeight = null;
      });

      if (!isOpen) {
        item.classList.add("is-open");
        button.setAttribute("aria-expanded", "true");
        answer.style.maxHeight = answer.scrollHeight + "px";
      }
    });
  });

  // =========================================================
  // PAGE BACKGROUND ANIMATION
  // =========================================================
  if (hasGSAP && hasScrollTrigger) {
    const bg = document.getElementById("tvPageBg");
    const sections = document.querySelectorAll(".tv-section");

    if (bg && sections.length) {
      function setBackground(theme) {
        bg.classList.remove("is-default", "is-faq", "is-contact");
        bg.classList.add("is-" + theme);

        gsap.fromTo(
          bg,
          { opacity: 0.85, scale: 1.03 },
          { opacity: 1, scale: 1, duration: 0.7, ease: "power2.out", overwrite: true }
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
    }
  }

  // =========================================================
  // HOW WE WORK CIRCLE ANIMATION
  // =========================================================
  if (hasGSAP) {
    const steps = [
      document.getElementById("hw-step-1"),
      document.getElementById("hw-step-4"),
      document.getElementById("hw-step-3"),
      document.getElementById("hw-step-2"),
      document.getElementById("hw-step-5")
    ].filter(Boolean);

    if (steps.length) {
      gsap.set(steps, {
        opacity: 0.18,
        scale: 1,
        transformOrigin: "center center"
      });

      function activateStep(stepEl) {
        steps.forEach((item) => item.classList.remove("is-active"));
        stepEl.classList.add("is-active");

        gsap.fromTo(
          stepEl,
          { opacity: 1, scale: 0.92 },
          {
            opacity: 1,
            scale: 1.08,
            duration: 0.28,
            repeat: 1,
            yoyo: true,
            ease: "power2.out",
            transformOrigin: "center center"
          }
        );
      }

      const tl = gsap.timeline({
        repeat: -1,
        repeatDelay: 0.5
      });

      steps.forEach((step) => {
        tl.call(() => activateStep(step)).to({}, { duration: 0.7 });
      });
    }
  }

  // =========================================================
  // NEW WHY PINNED SCROLL SECTION
  // =========================================================
  if (hasGSAP && hasScrollTrigger) {
    window.addEventListener("load", function () {
      const whyStage = document.querySelector("#tvWhyStage");
      const whyPin = document.querySelector("#tvWhyPin");
      const whySteps = gsap.utils.toArray("#tvWhyPin .tv-whyStep");
      const whyDots = gsap.utils.toArray("#tvWhyPin .tv-why__progress span");
      const isDesktop = window.matchMedia("(min-width: 992px)").matches;

      if (!whyStage || !whyPin || !whySteps.length || !isDesktop) return;

      gsap.set(whySteps, {
        autoAlpha: 0,
        y: 60
      });

      gsap.set(whySteps[0], {
        autoAlpha: 1,
        y: 0
      });

      whySteps.forEach((step, index) => {
        step.classList.toggle("is-active", index === 0);
      });

      whyDots.forEach((dot, index) => {
        dot.classList.toggle("is-active", index === 0);
      });

      let activeIndex = 0;

      function setActiveStep(index) {
        if (index === activeIndex || !whySteps[index]) return;

        const current = whySteps[activeIndex];
        const next = whySteps[index];

        current.classList.remove("is-active");
        next.classList.add("is-active");

        gsap.to(current, {
          autoAlpha: 0,
          y: -40,
          duration: 0.35,
          ease: "power2.out"
        });

        gsap.fromTo(
          next,
          {
            autoAlpha: 0,
            y: 60
          },
          {
            autoAlpha: 1,
            y: 0,
            duration: 0.5,
            ease: "power3.out"
          }
        );

        whyDots.forEach((dot, i) => {
          dot.classList.toggle("is-active", i === index);
        });

        activeIndex = index;
      }

      ScrollTrigger.create({
        trigger: whyStage,
        start: "top top",
        end: `+=${whySteps.length * 100}%`,
        pin: whyPin,
        scrub: 1,
        anticipatePin: 1,
        invalidateOnRefresh: true,
        onUpdate: function (self) {
          const stepIndex = Math.round(self.progress * (whySteps.length - 1));
          setActiveStep(stepIndex);
        }
      });

      ScrollTrigger.refresh();
    });
  }

  // =========================================================
  // FINAL CUSTOM INITS
  // =========================================================
  initTvBenefitsStack();
  initTvStackSlider("tvTestingStack");
  initLogoReveal();
  initCaseFilter();

  // =========================================================
  // FINAL REFRESH
  // =========================================================
  if (hasScrollTrigger) {
    window.addEventListener("load", function () {
      ScrollTrigger.refresh();
    });

    window.addEventListener("resize", function () {
      ScrollTrigger.refresh();
    });
  }
});