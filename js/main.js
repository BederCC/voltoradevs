/**
 * Voltora V2 - Primary Animations System
 * Powered by GSAP & ScrollTrigger
 */

gsap.registerPlugin(ScrollTrigger);

document.addEventListener('DOMContentLoaded', () => {
   // 1. Reveal Animations for Sections
   const revealElements = document.querySelectorAll('section, .industry-card, .floating-window');
   revealElements.forEach((el) => {
      gsap.from(el, {
         scrollTrigger: {
            trigger: el,
            start: "top 85%",
            toggleActions: "play none none none"
         },
         y: 40,
         opacity: 0,
         duration: 1,
         ease: "power3.out"
      });
   });

   // Spotlight effect for Investment Cards
   const investCards = document.querySelectorAll('.card-invest');
   investCards.forEach(card => {
      card.addEventListener('mousemove', (e) => {
         const rect = card.getBoundingClientRect();
         const x = e.clientX - rect.left;
         const y = e.clientY - rect.top;
         card.style.setProperty('--x', `${x}px`);
         card.style.setProperty('--y', `${y}px`);
      });
   });

   // 2. Industry Ribbon: Drag-to-Scroll Logic
   const slider = document.querySelector('.no-scrollbar');
   let isDown = false;
   let startX;
   let scrollLeft;

   if (slider) {
      slider.addEventListener('mousedown', (e) => {
         isDown = true;
         slider.classList.add('active');
         startX = e.pageX - slider.offsetLeft;
         scrollLeft = slider.scrollLeft;
      });
      slider.addEventListener('mouseleave', () => {
         isDown = false;
      });
      slider.addEventListener('mouseup', () => {
         isDown = false;
      });
      slider.addEventListener('mousemove', (e) => {
         if (!isDown) return;
         e.preventDefault();
         const x = e.pageX - slider.offsetLeft;
         const walk = (x - startX) * 2; // scroll-fast
         slider.scrollLeft = scrollLeft - walk;
      });
   }

   // 3. Hero Parallax: Elements following cursor subtly
   document.addEventListener('mousemove', (e) => {
      const { clientX, clientY } = e;
      const moveX = (clientX - window.innerWidth / 2) / 50;
      const moveY = (clientY - window.innerHeight / 2) / 50;

      gsap.to('.wrapper-1, .wrapper-2, .wrapper-3', {
         x: (i) => moveX * (i + 1) * 0.5,
         y: (i) => moveY * (i + 1) * 0.5,
         duration: 1,
         ease: "sine.out"
      });
   });

   // 4. Hero "Premium Deck Shuffle" - Optimized
   const cards = gsap.utils.toArray(['.wrapper-1', '.wrapper-2', '.wrapper-3']);
   const slots = [
      { x: 0, y: 0, scale: 1, zIndex: 40, opacity: 1, blur: 0 },       // SLOT 0: FRONT
      { x: 30, y: -30, scale: 0.95, zIndex: 30, opacity: 0.6, blur: 1 }, // SLOT 1: MID
      { x: 60, y: -60, scale: 0.90, zIndex: 20, opacity: 0.3, blur: 4 }  // SLOT 2: BACK
   ];

   // Current assignment: Which card index is in which slot [Slot0, Slot1, Slot2]
   let deckOrder = [2, 1, 0];

   if (cards.length > 0) {
      function setupDeck() {
         cards.forEach((card, i) => {
            const slotIdx = deckOrder.indexOf(i);
            const slot = slots[slotIdx];
            gsap.set(card, {
               opacity: 0,
               scale: 0.6,
               x: slot.x - 40,
               y: slot.y + 40,
               zIndex: slot.zIndex
            });
            gsap.to(card, {
               opacity: slot.opacity,
               x: slot.x,
               y: slot.y,
               scale: slot.scale,
               filter: `blur(${slot.blur}px)`,
               duration: 1.4,
               delay: i * 0.25,
               ease: "power3.out"
            });
         });
      }

      function rotateCards() {
         const tl = gsap.timeline();
         const fIdx = deckOrder[0]; // Front
         const mIdx = deckOrder[1]; // Mid
         const bIdx = deckOrder[2]; // Back

         // 1. FRONT CARD -> Out to side then to BACK (Slot 2)
         tl.to(cards[fIdx], {
            x: -240,
            opacity: 0,
            rotation: -8,
            duration: 0.7,
            ease: "power2.in"
         }, 0);

         tl.set(cards[fIdx], { zIndex: slots[2].zIndex });

         tl.to(cards[fIdx], {
            x: slots[2].x,
            y: slots[2].y,
            scale: slots[2].scale,
            opacity: slots[2].opacity,
            rotation: 0,
            filter: `blur(${slots[2].blur}px)`,
            duration: 0.8,
            ease: "back.out(1.1)"
         }, 0.7);

         // 2. MID CARD -> Moves forward to FRONT (Slot 0)
         tl.to(cards[mIdx], {
            x: slots[0].x,
            y: slots[0].y,
            scale: slots[0].scale,
            opacity: slots[0].opacity,
            zIndex: slots[0].zIndex,
            filter: "blur(0px)",
            duration: 1,
            ease: "expo.inOut"
         }, 0.15);

         // 3. BACK CARD -> Moves forward to MID (Slot 1)
         tl.to(cards[bIdx], {
            x: slots[1].x,
            y: slots[1].y,
            scale: slots[1].scale,
            opacity: slots[1].opacity,
            zIndex: slots[1].zIndex,
            filter: `blur(${slots[1].blur}px)`,
            duration: 1,
            ease: "expo.inOut"
         }, 0.05);

         // Shift order: [NewFront, NewMid, NewBack]
         deckOrder = [deckOrder[1], deckOrder[2], deckOrder[0]];
      }

      setupDeck();
      setInterval(rotateCards, 4500);
   }

   // 5. Industry Cinematic Stage: Sequential Reveal Logic
   const industryItems = gsap.utils.toArray('.industry-item');
   const dots = gsap.utils.toArray('.industry-dot');
   let currentIndustry = 0;

   if (industryItems.length > 0) {
      function showStep(index) {
         const current = industryItems[currentIndustry];
         const next = industryItems[index];
         const currentDot = dots[currentIndustry];
         const nextDot = dots[index];

         if (!current || !next) return;

         const tl = gsap.timeline();

         // 1. Fade Out Current
         tl.to(current, {
            opacity: 0,
            x: -20,
            duration: 0.6,
            ease: "power2.inOut",
            autoAlpha: 0
         });

         // 2. Animate Dots
         if (currentDot) tl.to(currentDot, { scale: 1, backgroundColor: "#e2e8f0", duration: 0.4 }, 0);
         if (nextDot) tl.to(nextDot, { scale: 1.4, backgroundColor: "#9333ea", duration: 0.4 }, 0);

         // 3. Fade In Next
         tl.fromTo(next, {
            opacity: 0,
            x: 20,
            autoAlpha: 0
         }, {
            opacity: 1,
            x: 0,
            autoAlpha: 1,
            duration: 0.8,
            ease: "power3.out"
         }, 0.4);

         currentIndustry = index;
      }

      // Init: Show first
      gsap.set(industryItems[0], { opacity: 1, y: 0, autoAlpha: 1 });
      if (dots[0]) gsap.set(dots[0], { scale: 1.5, backgroundColor: "#9333ea" });

      // Auto-Cycle
      setInterval(() => {
         let nextIdx = (currentIndustry + 1) % industryItems.length;
         showStep(nextIdx);
      }, 5000);
   }

   // 6. Custom Systems Schematic: Active Logic
   const dbBars = document.querySelectorAll('.bg-brand-green');
   if (dbBars.length > 0) {
      dbBars.forEach((bar, i) => {
         gsap.to(bar, { height: `${30 + Math.random() * 60}%`, duration: 0.6 + Math.random(), repeat: -1, yoyo: true, delay: i * 0.1 });
      });
   }

   // 7. Smooth Anchor Scrolling
   document.querySelectorAll('a[href^="#"]').forEach(anchor => {
      anchor.addEventListener('click', function (e) {
         e.preventDefault();
         const targetId = this.getAttribute('href');
         if (targetId === '#') return;
         const target = document.querySelector(targetId);
         if (target) {
            window.scrollTo({
               top: target.offsetTop - 80,
               behavior: 'smooth'
            });
         }
      });
   });

   // 8. Global Toggle Investment Items
   const globalToggleBtn = document.getElementById('global-toggle-btn');
   const globalToggleText = document.getElementById('global-toggle-text');
   const globalToggleIcon = document.getElementById('global-toggle-icon');
   const allContainers = document.querySelectorAll('.extra-items-container');

   if (globalToggleBtn) {
      globalToggleBtn.addEventListener('click', function () {
         const isHidden = allContainers[0].classList.contains('max-h-0');

         allContainers.forEach(container => {
            if (isHidden) {
               container.classList.remove('max-h-0');
               container.classList.add('max-h-[800px]');
               container.style.opacity = "1";
            } else {
               container.classList.add('max-h-0');
               container.classList.remove('max-h-[800px]');
               container.style.opacity = "0";
            }
         });

         if (isHidden) {
            globalToggleIcon.style.transform = 'rotate(180deg)';
            globalToggleText.textContent = 'Contraer estructura';
         } else {
            globalToggleIcon.style.transform = 'rotate(0deg)';
            globalToggleText.textContent = 'Ver estructura completa';
         }
      });
   }

   // 9. Premium Navbar & Mobile Menu Logic
   const nav = document.getElementById('main-nav');
   const mobileMenuToggle = document.getElementById('mobile-menu-toggle');
   const mobileMenu = document.getElementById('mobile-menu');
   const mobileLinks = document.querySelectorAll('.mobile-link');
   const toggleSpans = mobileMenuToggle?.querySelectorAll('span');
   let isMenuOpen = false;

   // Navbar scroll effect
   window.addEventListener('scroll', () => {
      if (window.scrollY > 20) {
         nav?.classList.add('h-16', 'shadow-sm');
         nav?.classList.remove('h-20');
      } else {
         nav?.classList.add('h-20');
         nav?.classList.remove('h-16', 'shadow-sm');
      }
   });

   if (mobileMenuToggle) {
      mobileMenuToggle.addEventListener('click', () => {
         isMenuOpen = !isMenuOpen;

         // Toggle CSS classes for the hamburger and the circular reveal
         mobileMenuToggle.classList.toggle('open');
         mobileMenu.classList.toggle('open');
         mobileMenu.classList.toggle('pointer-events-none');

         if (isMenuOpen) {
            document.body.classList.add('menu-open');

            // Staggered entering animation for links via GSAP
            gsap.to(mobileLinks, {
               opacity: 1,
               y: 0,
               duration: 0.5,
               stagger: 0.1,
               ease: "back.out(1.7)",
               delay: 0.2 // small delay to wait for circular reveal
            });
         } else {
            document.body.classList.remove('menu-open');

            // Fast exit animation for links
            gsap.to(mobileLinks, { opacity: 0, y: 30, duration: 0.3, stagger: 0.05 });
         }
      });

      // Close menu on link click
      mobileLinks.forEach(link => {
         link.addEventListener('click', () => {
            if (isMenuOpen) mobileMenuToggle.click();
         });
      });
   }
});
