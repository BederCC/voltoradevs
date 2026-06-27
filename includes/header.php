<?php
// Configuración de rutas y constantes
require_once __DIR__ . '/config.php';

// CORS Headers
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Authorization, X-Requested-With");
?>
<!DOCTYPE html>
<html lang="es" class="scroll-smooth">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Voltora | Ingeniería de Sistemas & Software Corporativo</title>

   <!-- Favicon -->
   <link rel="icon" type="image/png" href="<?= BASE_URL ?>favicon.png">

   <!-- Google Fonts: Inter -->
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap"
      rel="stylesheet">

   <!-- Frameworks: GSAP for Movements -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>

   <!-- Frameworks: Tailwind v4 -->
   <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

   <style type="text/tailwindcss">
      @theme {
         /* High-End Engineering Palette */
         --color-brand-purple: #A08DF6;
         --color-brand-purple-light: #F3E8FF;
         --color-brand-green: #7FDBB6;
         --color-brand-green-light: #DCFCE7;
         --color-slate-dark: #0f172a;
         --color-slate-body: #64748b;

         --radius-xl: 8px;
         --radius-2xl: 12px;
         --radius-3xl: 24px;

         /* Custom Animation Keyframes (v4 Compatible) */
         @keyframes reveal-pop-1 {
            0% {
               opacity: 0;
               transform: translate(-48px, -60px) scale(0.85);
               filter: blur(10px);
            }

            100% {
               opacity: 1;
               transform: translate(-48px, -96px) scale(1);
               filter: blur(0);
            }
         }

         @keyframes reveal-pop-2 {
            0% {
               opacity: 0;
               transform: translate(32px, 0px) scale(0.85);
               filter: blur(10px);
            }

            100% {
               opacity: 1;
               transform: translate(32px, -32px) scale(1);
               filter: blur(0);
            }
         }

         @keyframes reveal-pop-3 {
            0% {
               opacity: 0;
               transform: translate(64px, 100px) scale(0.85);
               filter: blur(10px);
            }

            100% {
               opacity: 1;
               transform: translate(64px, 64px) scale(1);
               filter: blur(0);
            }
         }

         @keyframes float-loop {

            0%,
            100% {
               transform: translateY(0);
            }

            50% {
               transform: translateY(-12px);
            }
         }

         @keyframes scan {
            0% {
               left: -100%;
               opacity: 0;
            }

            50% {
               opacity: 1;
            }

            100% {
               left: 100%;
               opacity: 0;
            }
         }

         @keyframes fade-in-up {
            0% {
               opacity: 0;
               transform: translateY(20px);
            }

            100% {
               opacity: 1;
               transform: translateY(0);
            }
         }

         @keyframes shimmer {
            0% {
               transform: translateX(-100%);
            }

            100% {
               transform: translateX(100%);
            }
         }
      }

      /* Base & Utilities Override */
      @layer base {
         body {
            font-family: 'Inter', sans-serif;
            background-color: white;
            color: #0f172a; /* color de slate-dark */
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
         }
         body.menu-open {
            overflow: hidden;
         }
      }

      @layer utilities {

         /* Floating Windows Mockup */
         .window-shadow {
            box-shadow: 0 30px 60px -12px rgba(0, 0, 0, 0.15), 0 18px 36px -18px rgba(0, 0, 0, 0.2);
         }

         .floating-window {
            background-color: white;
            border: 1px solid #e2e8f0;
            overflow: hidden;
            transition-property: transform;
            transition-duration: 300ms;
            border-radius: 0.75rem;
         }

         .window-header {
            background: #f8fafc;
            border-bottom: 1px solid #e2e8f0;
            padding: 8px 12px;
            display: flex;
            gap: 6px;
         }

         .dot {
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background: #cbd5e1;
         }

         /* Slider Utilities */
         .no-scrollbar::-webkit-scrollbar {
            display: none;
         }

         .no-scrollbar {
            -ms-overflow-style: none;
            scrollbar-width: none;
         }

         .industry-card-marquee {
            min-width: 240px;
            padding: 1.25rem;
            background-color: white;
            border: 1px solid #f1f5f9;
            border-radius: 1.5rem;
            box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
            flex-shrink: 0;
            transition-property: all;
            transition-duration: 500ms;
         }
         
         @media (min-width: 768px) {
             .industry-card-marquee {
                min-width: 280px;
             }
         }

         .industry-card-marquee:hover {
            border-color: var(--color-brand-purple);
         }

          .industry-card-marquee h4 { 
             color: var(--color-slate-dark) !important;
             font-weight: 900 !important;
             font-size: 1.125rem !important;
             margin-bottom: 0.5rem !important;
             letter-spacing: -0.025em !important;
          }
          .industry-card-marquee p { 
             color: var(--color-slate-body) !important;
             font-size: 11px !important;
             line-height: 1.625 !important;
             margin-bottom: 1rem !important;
          }
          .industry-card-marquee .w-10 { width: 2.5rem !important; height: 2.5rem !important; }
          .industry-card-marquee .w-5 { width: 1.25rem !important; height: 1.25rem !important; }

          /* Buttons */
          .btn-serious {
             padding-left: 1.5rem;
             padding-right: 1.5rem;
             padding-top: 0.75rem;
             padding-bottom: 0.75rem;
             font-weight: 700;
             text-transform: uppercase;
             letter-spacing: 0.05em;
             transition-property: all;
             transition-duration: 300ms;
             border-radius: 0.5rem;
             display: inline-flex;
             align-items: center;
             gap: 0.5rem;
          }

          /* Premium Investment Cards */
          .card-invest {
             transition-property: all;
             transition-duration: 500ms;
             transition-timing-function: cubic-bezier(0.23,1,0.32,1);
             position: relative;
             overflow: hidden;
          }

          .card-invest-white {
             background-color: white;
             border: 1px solid #e2e8f0;
          }
          
          .card-invest-white:hover {
             border-color: var(--color-brand-purple);
             box-shadow: 0 30px 60px -15px rgba(160,141,246,0.15);
             transform: translateY(-0.5rem);
          }

          .card-invest-dark {
             background-color: var(--color-slate-dark);
             border: 1px solid #1e293b;
             box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
          }
          
          .card-invest-dark:hover {
             border-color: var(--color-brand-green);
             box-shadow: 0 40px 80px -20px rgba(0,0,0,0.6);
             transform: translateY(-1rem);
          }

          .card-glow, .card-glow-green {
             position: absolute;
             inset: 0;
             opacity: 0;
             transition-property: opacity;
             transition-duration: 700ms;
             pointer-events: none;
          }
          
           .group:hover .card-glow, .group:hover .card-glow-green {
              opacity: 1;
           }

          .card-glow {
             background: radial-gradient(1000px circle at var(--x, 50%) var(--y, 50%), rgba(160,141,246,0.06), transparent 40%);
          }

          .card-glow-green {
             background: radial-gradient(1200px circle at var(--x, 50%) var(--y, 50%), rgba(127,219,182,0.08), transparent 40%);
          }

          /* Mobile Menu Overlay */
          .mobile-menu-overlay {
             clip-path: circle(0px at top right);
             transition: clip-path 0.5s cubic-bezier(0.86, 0, 0.07, 1);
          }
          .mobile-menu-overlay.open {
             clip-path: circle(150% at top right);
          }
          
          /* Hamburger Animation */
          .hamburger-line {
             transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
             transform-origin: center;
          }
          .hamburger.open .line-1 {
             transform: translateY(8px) rotate(45deg) !important;
             background-color: white !important;
          }
          .hamburger.open .line-2 {
             opacity: 0 !important;
          }
          .hamburger.open .line-3 {
             transform: translateY(-8px) rotate(-45deg) !important;
             background-color: white !important;
          }

          /* Menu Open State for Nav */
          body.menu-open #main-nav {
             background-color: transparent !important;
             backdrop-filter: none !important;
             -webkit-backdrop-filter: none !important;
             border-color: transparent !important;
             box-shadow: none !important;
          }
       }
    </style>
</head>

<body class="antialiased">

   <nav id="main-nav" class="h-20 flex items-center bg-white/80 backdrop-blur-lg border-b border-slate-100 sticky top-0 z-[120] transition-all duration-300">
      <div class="max-w-7xl mx-auto px-6 w-full flex justify-between items-center">
          <!-- Logo -->
          <div class="flex items-center">
             <a href="<?= BASE_URL ?>" class="flex items-center group">
                <img src="<?= IMG_PATH ?>Recurso2.svg" alt="Voltora Logo"
                   class="h-10 md:h-12 w-auto transition-transform duration-300 group-hover:scale-105">
             </a>
          </div>

         <!-- Desktop Navigation -->
         <div class="hidden lg:flex gap-10">
            <?php
            $current_page = basename($_SERVER['PHP_SELF']);
            ?>             
            <a href="<?= BASE_URL ?>"
                class="relative py-2 group text-[10px] font-black uppercase tracking-[0.2em] transition-all duration-300 <?= ($current_page == 'index.php' || $current_page == '') ? 'text-brand-purple' : 'text-slate-400 hover:text-slate-dark' ?>">
                Home
                <span class="absolute bottom-0 left-0 w-full h-[2px] bg-brand-purple transition-transform duration-300 ease-out origin-left <?= ($current_page == 'index.php' || $current_page == '') ? 'scale-x-100' : 'scale-x-0 group-hover:scale-x-100' ?>"></span>
             </a>
             <a href="<?= BASE_URL ?>especialidades"
                class="relative py-2 group text-[10px] font-black uppercase tracking-[0.2em] transition-all duration-300 <?= ($current_page == 'especialidades.php') ? 'text-brand-purple' : 'text-slate-400 hover:text-slate-dark' ?>">
                Especialidades
                <span class="absolute bottom-0 left-0 w-full h-[2px] bg-brand-purple transition-transform duration-300 ease-out origin-left <?= ($current_page == 'especialidades.php') ? 'scale-x-100' : 'scale-x-0 group-hover:scale-x-100' ?>"></span>
             </a>
             <a href="<?= BASE_URL ?>nosotros"
                class="relative py-2 group text-[10px] font-black uppercase tracking-[0.2em] transition-all duration-300 <?= ($current_page == 'nosotros.php') ? 'text-brand-purple' : 'text-slate-400 hover:text-slate-dark' ?>">
                Nosotros
                <span class="absolute bottom-0 left-0 w-full h-[2px] bg-brand-purple transition-transform duration-300 ease-out origin-left <?= ($current_page == 'nosotros.php') ? 'scale-x-100' : 'scale-x-0 group-hover:scale-x-100' ?>"></span>
             </a>
             <?php if (SHOW_PROJECTS_NAV): ?>
             <a href="<?= BASE_URL ?>proyectos"
                class="relative py-2 group text-[10px] font-black uppercase tracking-[0.2em] transition-all duration-300 <?= ($current_page == 'proyectos.php') ? 'text-brand-purple' : 'text-slate-400 hover:text-slate-dark' ?>">
                Proyectos
                <span class="absolute bottom-0 left-0 w-full h-[2px] bg-brand-purple transition-transform duration-300 ease-out origin-left <?= ($current_page == 'proyectos.php') ? 'scale-x-100' : 'scale-x-0 group-hover:scale-x-100' ?>"></span>
             </a>
             <?php endif; ?>
             <a href="<?= BASE_URL ?>contacto"
                class="relative py-2 group text-[10px] font-black uppercase tracking-[0.2em] transition-all duration-300 <?= ($current_page == 'contacto.php') ? 'text-brand-purple' : 'text-slate-400 hover:text-slate-dark' ?>">
                Contacto
                <span class="absolute bottom-0 left-0 w-full h-[2px] bg-brand-purple transition-transform duration-300 ease-out origin-left <?= ($current_page == 'contacto.php') ? 'scale-x-100' : 'scale-x-0 group-hover:scale-x-100' ?>"></span>
             </a>
         </div>

         <!-- Desktop CTA + Mobile Toggle -->
         <div class="flex items-center gap-6">
             <!-- Small Social Icons in Header (Left of WhatsApp Button) -->
             <div class="hidden xl:flex items-center gap-3.5 mr-2">
                <!-- Facebook -->
                <a href="<?= URL_FACEBOOK ?>" target="_blank" rel="noopener noreferrer" class="text-slate-400 hover:text-brand-purple transition-all duration-300" aria-label="Facebook">
                   <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" /></svg>
                </a>
                <!-- Instagram -->
                <a href="<?= URL_INSTAGRAM ?>" target="_blank" rel="noopener noreferrer" class="text-slate-400 hover:text-brand-purple transition-all duration-300" aria-label="Instagram">
                   <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" /></svg>
                </a>
                <!-- LinkedIn -->
                <a href="<?= URL_LINKEDIN ?>" target="_blank" rel="noopener noreferrer" class="text-slate-400 hover:text-brand-purple transition-all duration-300" aria-label="LinkedIn">
                   <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.761 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" /></svg>
                </a>
                <!-- TikTok -->
                <a href="<?= URL_TIKTOK ?>" target="_blank" rel="noopener noreferrer" class="text-slate-400 hover:text-brand-purple transition-all duration-300" aria-label="TikTok">
                   <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 24 24"><path d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.76-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.35-3.46-5.71-.02-1.92.93-3.81 2.52-4.9 1.51-1.03 3.39-1.34 5.22-.98v4.06c-1.03-.45-2.27-.37-3.15.26-.6.41-1.01 1.07-1.13 1.78-.15.93.18 1.91.87 2.53.68.61 1.66.86 2.57.65 1.03-.23 1.85-.99 2.18-1.97.16-.49.21-1.01.21-1.53V.02h4.15z" /></svg>
                </a>
                <!-- YouTube -->
                <a href="<?= URL_YOUTUBE ?>" target="_blank" rel="noopener noreferrer" class="text-slate-400 hover:text-brand-purple transition-all duration-300" aria-label="YouTube">
                   <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M19.812 5.418c.861.23 1.538.907 1.768 1.768C21.998 8.746 22 12 22 12s0 3.255-.418 4.814a2.504 2.504 0 0 1-1.768 1.768c-1.56.419-7.814.419-7.814.419s-6.255 0-7.814-.419a2.505 2.505 0 0 1-1.768-1.768C2 15.255 2 12 2 12s0-3.255.417-4.814a2.507 2.507 0 0 1 1.768-1.768C5.744 5 11.998 5 11.998 5s6.255 0 7.814.418ZM15.194 12 10 15V9l5.194 3Z" clip-rule="evenodd" /></svg>
                </a>
             </div>
             <a href="https://wa.me/51903361649" target="_blank" rel="noopener noreferrer"
                class="hidden md:inline-flex group relative items-center gap-2 bg-[#25D366] text-white px-7 py-3 rounded-full font-black text-[9px] uppercase tracking-widest transition-all duration-500 hover:bg-[#20ba5a] hover:shadow-[0_10px_30px_rgba(37,211,102,0.3)] overflow-hidden">
                <svg class="w-3.5 h-3.5 relative z-10 shrink-0" fill="currentColor" viewBox="0 0 24 24">
                   <path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.438 9.889-9.886.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884 0 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.521-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.568-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/>
                </svg>
                <span class="relative z-10">WhatsApp</span>
                <!-- Hover Glow Light effect -->
                <div class="absolute inset-0 bg-white/10 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                <!-- Sweeping Shine animation overlay -->
                <div class="absolute inset-0 -translate-x-[150%] -skew-x-12 bg-gradient-to-r from-transparent via-white/40 to-transparent transition-transform duration-1000 ease-out group-hover:translate-x-[150%]"></div>
             </a>

            <!-- Mobile Menu Toggle -->
            <button id="mobile-menu-toggle" class="hamburger lg:hidden w-10 h-10 flex flex-col items-center justify-center gap-1.5 relative z-[110]" aria-label="Menu">
               <span class="hamburger-line line-1 w-6 h-0.5 bg-slate-800 rounded-full"></span>
               <span class="hamburger-line line-2 w-6 h-0.5 bg-slate-800 rounded-full"></span>
               <span class="hamburger-line line-3 w-6 h-0.5 bg-slate-800 rounded-full"></span>
            </button>
         </div>
      </div>
   </nav>

   <!-- Mobile Menu Overlay -->
   <div id="mobile-menu" class="mobile-menu-overlay fixed inset-0 bg-slate-dark z-[105] flex flex-col p-8 lg:hidden overflow-hidden pointer-events-none">
      <!-- Premium Glow Effects -->
      <div class="absolute top-0 right-0 w-72 h-72 bg-brand-purple/20 rounded-full blur-[80px] -translate-y-1/2 translate-x-1/4 pointer-events-none"></div>
      <div class="absolute bottom-0 left-0 w-80 h-80 bg-brand-green/10 rounded-full blur-[80px] translate-y-1/3 -translate-x-1/3 pointer-events-none"></div>

      <div class="mt-24 flex flex-col gap-6 relative z-10">
         <a href="<?= BASE_URL ?>" class="mobile-link text-4xl md:text-5xl font-black opacity-0 translate-y-10 transition-colors <?= ($current_page == 'index.php' || $current_page == '') ? 'text-brand-purple' : 'text-slate-400 hover:text-brand-purple' ?>">Home</a>
         <a href="<?= BASE_URL ?>especialidades" class="mobile-link text-4xl md:text-5xl font-black opacity-0 translate-y-10 transition-colors <?= ($current_page == 'especialidades.php') ? 'text-brand-purple' : 'text-slate-400 hover:text-white' ?>">Especialidades</a>
         <a href="<?= BASE_URL ?>nosotros" class="mobile-link text-4xl md:text-5xl font-black opacity-0 translate-y-10 transition-colors <?= ($current_page == 'nosotros.php') ? 'text-brand-purple' : 'text-slate-400 hover:text-white' ?>">Nosotros</a>
         <?php if (SHOW_PROJECTS_NAV): ?>
         <a href="<?= BASE_URL ?>proyectos" class="mobile-link text-4xl md:text-5xl font-black opacity-0 translate-y-10 transition-colors <?= ($current_page == 'proyectos.php') ? 'text-brand-purple' : 'text-slate-400 hover:text-white' ?>">Proyectos</a>
         <?php endif; ?>
         <a href="<?= BASE_URL ?>contacto" class="mobile-link text-4xl md:text-5xl font-black opacity-0 translate-y-10 transition-colors <?= ($current_page == 'contacto.php') ? 'text-brand-purple' : 'text-slate-400 hover:text-white' ?>">Contacto</a>
      </div>

      <div class="mt-auto border-t border-white/10 pt-8 opacity-0 translate-y-10 mobile-link relative z-10 flex flex-col gap-6">
         <div>
            <p class="text-[10px] font-black uppercase tracking-[0.3em] text-slate-500 mb-4">Próxima Inversión</p>
             <a href="https://wa.me/51903361649" target="_blank" rel="noopener noreferrer" 
                class="flex items-center justify-center gap-2 w-full bg-[#25D366] text-white py-4 rounded-2xl font-black uppercase tracking-widest text-xs hover:bg-[#20ba5a] transition-all duration-300 shadow-[0_10px_30px_rgba(37,211,102,0.2)] group relative overflow-hidden">
                <svg class="w-4 h-4 shrink-0" fill="currentColor" viewBox="0 0 24 24">
                   <path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.438 9.889-9.886.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884 0 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.521-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.568-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/>
                </svg>
                <span class="relative z-10">WhatsApp</span>
                <!-- Sweeping Shine animation overlay -->
                <div class="absolute inset-0 -translate-x-[150%] -skew-x-12 bg-gradient-to-r from-transparent via-white/40 to-transparent transition-transform duration-1000 ease-out group-hover:translate-x-[150%]"></div>
             </a>
         </div>

         <!-- Social Icons -->
         <div class="flex items-center gap-5 justify-center mt-2">
            <!-- Facebook -->
            <a href="#" target="_blank" aria-label="Facebook" class="text-slate-500 hover:text-brand-purple transition-colors duration-300">
               <svg class="w-5 h-5 lg:w-4 lg:h-4" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                  <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" />
               </svg>
            </a>
            <!-- Instagram -->
            <a href="#" target="_blank" aria-label="Instagram" class="text-slate-500 hover:text-brand-purple transition-colors duration-300">
               <svg class="w-5 h-5 lg:w-4 lg:h-4" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                  <path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd" />
               </svg>
            </a>
            <!-- TikTok -->
            <a href="#" target="_blank" aria-label="TikTok" class="text-slate-500 hover:text-brand-purple transition-colors duration-300">
               <svg class="w-5 h-5 lg:w-4 lg:h-4" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                  <path d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.76-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.35-3.46-5.71-.02-1.92.93-3.81 2.52-4.9 1.51-1.03 3.39-1.34 5.22-.98v4.06c-1.03-.45-2.27-.37-3.15.26-.6.41-1.01 1.07-1.13 1.78-.15.93.18 1.91.87 2.53.68.61 1.66.86 2.57.65 1.03-.23 1.85-.99 2.18-1.97.16-.49.21-1.01.21-1.53V.02h4.15z" />
               </svg>
            </a>
            <!-- YouTube -->
            <a href="#" target="_blank" aria-label="YouTube" class="text-slate-500 hover:text-brand-purple transition-colors duration-300">
               <svg class="w-5 h-5 lg:w-4 lg:h-4" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                  <path fill-rule="evenodd" d="M19.812 5.418c.861.23 1.538.907 1.768 1.768C21.998 8.746 22 12 22 12s0 3.255-.418 4.814a2.504 2.504 0 0 1-1.768 1.768c-1.56.419-7.814.419-7.814.419s-6.255 0-7.814-.419a2.505 2.505 0 0 1-1.768-1.768C2 15.255 2 12 2 12s0-3.255.417-4.814a2.507 2.507 0 0 1 1.768-1.768C5.744 5 11.998 5 11.998 5s6.255 0 7.814.418ZM15.194 12 10 15V9l5.194 3Z" clip-rule="evenodd" />
               </svg>
            </a>
            <!-- LinkedIn -->
            <a href="#" target="_blank" aria-label="LinkedIn" class="text-slate-500 hover:text-brand-purple transition-colors duration-300">
               <svg class="w-5 h-5 lg:w-4 lg:h-4" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                  <path fill-rule="evenodd" d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" clip-rule="evenodd" />
               </svg>
            </a>
         </div>
      </div>
   </div>