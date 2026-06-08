
// Register GSAP plugins
gsap.registerPlugin(ScrollTrigger, ScrollToPlugin, ScrollSmoother);

// Initialize ScrollSmoother first
const smoother = ScrollSmoother.create({
  wrapper: "#gsapWrapper",
  content: "#content",
  smooth: 1,
  normalizeScroll: true,
  ignoreMobileResize: true,
  effects: true,
  preventDefault: true
});

// Initialize everything after DOM is loaded
document.addEventListener('DOMContentLoaded', function() {


  // Mobile menu functionality
  const mobileMenuBtn = document.getElementById('mobile-menu-btn');
  const mobileMenu = document.getElementById('mobile-menu');
  const mobileNavLinks = document.querySelectorAll('.mobile-nav-link');
  
  if (mobileMenuBtn && mobileMenu) {
    let menuOpen = false;
    
    mobileMenuBtn.addEventListener('click', function() {
      menuOpen = !menuOpen;
      
      if (menuOpen) {
        mobileMenu.classList.remove('hidden');
        gsap.from(mobileMenu, {
          y: -20,
          opacity: 0,
          duration: 0.3,
          ease: "back.out(1.7)"
        });
      } else {
        gsap.to(mobileMenu, {
          y: -20,
          opacity: 0,
          duration: 0.2,
          ease: "power2.in",
          onComplete: () => {
            mobileMenu.classList.add('hidden');
          }
        });
      }
    });
    
    // Close mobile menu when clicking a link
    mobileNavLinks.forEach(link => {
      link.addEventListener('click', function() {
        menuOpen = false;
        gsap.to(mobileMenu, {
          y: -20,
          opacity: 0,
          duration: 0.2,
          ease: "power2.in",
          onComplete: () => {
            mobileMenu.classList.add('hidden');
          }
        });
      });
    });
    
    // Close mobile menu when clicking outside
    document.addEventListener('click', function(e) {
      if (menuOpen && !mobileMenuBtn.contains(e.target) && !mobileMenu.contains(e.target)) {
        menuOpen = false;
        gsap.to(mobileMenu, {
          y: -20,
          opacity: 0,
          duration: 0.2,
          ease: "power2.in",
          onComplete: () => {
            mobileMenu.classList.add('hidden');
          }
        });
      }
    });
  }

  // Smooth scroll navigation
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
      e.preventDefault();
      const target = document.querySelector(this.getAttribute('href'));
      if (target) {
        smoother.scrollTo(target, true, "top 80");
      }
    });
  });


  // Assembly Animation 1
  const assemblyTl1 = gsap.timeline({
    scrollTrigger: {
      trigger: ".assembly-stage",
      start: "top 80%",
      end: "bottom 80%",
      scrub: 1.5,
      toggleActions: "play reverse play reverse"
    }
  });

  assemblyTl1
    .from(".piece3", {
      x: 600,
      y: 0,
      opacity: 0
    })
    .from(".piece5", {
      x: -800,
      y: 0,
      opacity: 0
    })
    .from(".piece4", {
      x: 400,
      y: 0,
      opacity: 0
    })
    .from(".piece1", {
      x: 900,
      y: 0,
      opacity: 0
    })
    .from(".piece2", {
      x: 800,
      y: 0,
      opacity: 0
    })
    .from(".piece6", {
      x: -500,
      y: 0,
      opacity: 0
    })
    .from(".piece7", {
      x: -100,
      y: 0,
      opacity: 0
    },)
    .to(".piece1, .piece2, .piece3, .piece4, .piece5, .piece6, .piece7", {
      opacity: 1,
      duration: 0.5
    });

  // Assembly Animation 2
  const assemblyTl2 = gsap.timeline({
    scrollTrigger: {
      trigger: ".assembly-stage-2",
      start: "top 80%",
      end: "center 50%",
      scrub: 1.5,
      toggleActions: "play reverse play reverse"
    }
  });

  assemblyTl2
  .from(".piece2-2", {
      x: -800,
      y: 0,
      opacity: 0
    })
    .from(".piece2-3", {
      x: -400,
      y: 0,
      opacity: 0
    })
    .from(".piece2-7", {
      x: -700,
      y: 0,
      opacity: 0
    })
    .from(".piece2-9", {
      x: 600,
      y: 0,
      opacity: 0
    })
    .from(".piece2-10", {
      x: 800,
      y: 0,
      opacity: 0
    })
    .from(".piece2-4", {
      x: -900,
      y: 0,
      opacity: 0
    })
    .from(".piece2-5", {
      x: -800,
      y: 0,
      opacity: 0
    })
    .from(".piece2-1", {
      x: -600,
      y: 0,
      opacity: 0
    })
    .from(".piece2-11", {
      x: 400,
      y: 0,
      opacity: 0
    })
    
    .from(".piece2-6", {
      x: -500,
      y: 0,
      opacity: 0
    })
    
    .from(".piece2-8", {
      x: -300,
      y: 0,
      opacity: 0
    })
    .from(".piece2-12", {
      x: 500,
      y: 0,
      opacity: 0
    })
    .to(".piece2-1, .piece2-2, .piece2-3, .piece2-4, .piece2-5, .piece2-6, .piece2-7, .piece2-8, .piece2-9, .piece2-10, .piece2-11, .piece2-12", {
      opacity: 1,
      duration: 0.5
    });

  // Refresh ScrollTrigger on window resize
  window.addEventListener("resize", () => {
    ScrollTrigger.refresh();
  });

  // Initial refresh to ensure everything is set up correctly
  setTimeout(() => {
    ScrollTrigger.refresh();
  }, 100);
});