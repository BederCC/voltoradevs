<?php include 'includes/header.php'; ?>

<!-- Hero Section -->
<section class="py-24 md:py-32 overflow-hidden">
   <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 lg:grid-cols-12 gap-20 items-center">

      <!-- Left: Serious Text Content -->
      <div class="lg:col-span-6">
         <div class="mb-8 flex items-center gap-2">
            <div class="h-[1px] w-8 bg-brand-purple"></div>
            <span class="text-[10px] font-black uppercase tracking-[0.3em] text-brand-purple">Sistemas de Misión
               Crítica</span>
         </div>

         <h1 class="text-4xl md:text-6xl font-black text-slate-dark leading-[1.1] mb-8 tracking-tight">
            Arquitectura de Software <br>
            <span class="text-brand-purple">Escalable y Robusta.</span>
         </h1>

         <p class="text-lg text-slate-body leading-relaxed mb-10 max-w-lg font-medium">
            Desarrollamos soluciones digitales para empresas que no permiten errores. Ingeniería de precisión
            aplicada a la automatización de procesos y despliegue de infraestructuras en la nube.
         </p>

         <div class="flex flex-wrap gap-4">
            <a href="<?= BASE_URL ?>contacto" class="btn-serious bg-brand-purple text-white hover:opacity-90">
               Contactanos
            </a>
            <a href="<?= BASE_URL ?>metodologia"
               class="btn-serious bg-brand-green-light text-brand-green border border-brand-green/20">
               Nuestra Metodología
            </a>
         </div>
      </div>

      <!-- Right: Dynamic Floating Systems Stack -->
      <div class="lg:col-span-6 relative h-[600px] flex items-center justify-center">

         <!-- 1. The Blueprint (Technical Design Phase) -->
         <div class="absolute w-full max-w-[420px] wrapper-1 z-10 opacity-0">
            <div class="float-inner">
               <div class="floating-window window-shadow border-slate-700/30">
                  <div class="window-header bg-slate-900 border-b border-white/5">
                     <div class="dot bg-red-400 opacity-80"></div>
                     <div class="dot bg-amber-400 opacity-80"></div>
                     <div class="dot bg-emerald-400 opacity-80"></div>
                     <div class="text-[9px] text-white/30 ml-4 font-mono uppercase tracking-[0.2em]">draft_x86.sh
                     </div>
                  </div>
                  <div class="p-8 bg-[#003B8E] relative overflow-hidden aspect-[4/3] flex flex-col justify-center">
                     <div
                        class="absolute inset-0 bg-[radial-gradient(#ffffff0a_1px,transparent_1px)] bg-[size:16px_16px]">
                     </div>
                     <div class="absolute inset-x-0 top-1/2 h-px bg-white/5"></div>
                     <div class="absolute inset-y-0 left-1/2 w-px bg-white/5"></div>
                     <div class="relative space-y-6">
                        <div class="flex items-center gap-4">
                           <div
                              class="w-12 h-12 border border-white/40 rounded flex items-center justify-center rotate-45">
                              <div class="w-6 h-6 border-t border-r border-white/20"></div>
                           </div>
                           <div class="space-y-2 flex-1">
                              <div class="h-1.5 w-3/4 bg-white/30 rounded-full"></div>
                              <div class="h-1.5 w-1/2 bg-white/10 rounded-full"></div>
                           </div>
                        </div>
                        <div class="grid grid-cols-3 gap-2">
                           <div
                              class="h-20 border border-dashed border-white/20 rounded-lg flex items-center justify-center">
                              <div
                                 class="w-10 h-10 rounded-full border border-white/10 flex items-center justify-center">
                                 <div class="w-4 h-4 bg-white/5 rounded-sm"></div>
                              </div>
                           </div>
                           <div class="col-span-2 h-20 border border-white/10 rounded-lg p-3 space-y-3">
                              <div class="h-1 w-full bg-white/10 rounded"></div>
                              <div class="h-1 w-full bg-white/10 rounded"></div>
                              <div class="h-1 w-2/3 bg-white/10 rounded"></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>

         <!-- 2. Medical Industry (Precision Health System) -->
         <div class="absolute w-full max-w-[440px] wrapper-2 z-20 opacity-0">
            <div class="float-inner-delayed">
               <div class="floating-window window-shadow border-slate-100">
                  <div class="window-header bg-slate-50/50">
                     <div class="dot"></div>
                     <div class="dot"></div>
                     <div class="dot"></div>
                     <div class="text-[9px] text-slate-400 ml-4 font-bold uppercase tracking-widest">vitals_v3.core
                     </div>
                  </div>
                  <div class="p-8 bg-white space-y-8 aspect-[4/3] flex flex-col justify-center">
                     <div class="flex items-center justify-between">
                        <div class="flex items-center gap-4">
                           <div
                              class="w-14 h-14 bg-brand-green-light rounded-2xl flex items-center justify-center text-brand-green shadow-sm">
                              <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                 </path>
                              </svg>
                           </div>
                           <div>
                              <div class="h-4 w-32 bg-slate-800 rounded mb-2"></div>
                              <div class="h-2 w-20 bg-slate-100 rounded"></div>
                           </div>
                        </div>
                        <div class="text-right">
                           <div class="text-2xl font-black text-brand-green tracking-tighter">98 bpm</div>
                           <div class="text-[8px] font-bold text-slate-400 uppercase tracking-widest">Estable</div>
                        </div>
                     </div>
                     <div
                        class="relative h-24 bg-slate-50 rounded-2xl border border-slate-100 overflow-hidden flex items-center px-4">
                        <svg class="w-full h-12 text-brand-green opacity-40" viewBox="0 0 200 40"
                           preserveAspectRatio="none">
                           <path d="M0 20 L40 20 L45 10 L50 30 L55 20 L100 20 L105 0 L115 40 L120 20 L200 20"
                              fill="none" stroke="currentColor" stroke-width="2"></path>
                        </svg>
                        <div
                           class="absolute inset-y-0 left-0 w-1/3 bg-linear-to-r from-transparent via-brand-green/10 to-transparent [animation:scan_3s_linear_infinite]">
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>

         <!-- 3. Enterprise/Finance (Dynamic ERP Dashboard) -->
         <div class="absolute w-full max-w-[460px] wrapper-3 z-30 opacity-0">
            <div class="float-inner-more-delayed">
               <div class="floating-window window-shadow border-slate-100">
                  <div class="window-header bg-white">
                     <div class="dot"></div>
                     <div class="dot"></div>
                     <div class="dot"></div>
                     <div class="text-[9px] text-slate-400 ml-4 font-bold uppercase tracking-widest">
                        voltora_erp.deploy</div>
                  </div>
                  <div class="p-8 bg-slate-50/30 aspect-[4/3] flex flex-col justify-center">
                     <div class="grid grid-cols-2 gap-6 mb-8">
                        <div
                           class="p-5 bg-slate-dark text-white rounded-3xl flex flex-col justify-between h-32 shadow-xl ring-4 ring-slate-900/50 relative overflow-hidden">
                           <div class="flex justify-between items-start relative z-10">
                              <span
                                 class="text-[10px] font-bold text-slate-400 uppercase tracking-widest">Ingresos</span>
                              <div class="w-3 h-3 bg-brand-green rounded-full shadow-[0_0_10px_rgba(21,128,61,0.5)]">
                              </div>
                           </div>
                           <span
                              class="text-3xl font-black tabular-nums tracking-tighter relative z-10">$142.8k</span>
                           <div
                              class="absolute -right-4 -bottom-4 w-24 h-24 bg-brand-green/10 rounded-full blur-3xl">
                           </div>
                        </div>
                        <div
                           class="p-5 border border-brand-purple-light bg-white rounded-3xl flex flex-col justify-between h-32 shadow-lg">
                           <span
                              class="text-[10px] font-bold text-brand-purple uppercase tracking-widest">Crecimiento</span>
                           <div class="space-y-2">
                              <span
                                 class="text-3xl font-black text-brand-purple tabular-nums tracking-tighter">+24.8%</span>
                              <div class="h-1.5 w-full bg-slate-100 rounded-full overflow-hidden">
                                 <div class="h-full bg-brand-purple w-3/4 rounded-full"></div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="p-4 bg-white border border-slate-100 rounded-2xl flex items-center gap-4 shadow-sm">
                        <div
                           class="w-10 h-10 rounded-full bg-brand-purple/10 flex items-center justify-center text-brand-purple">
                           <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                              <path
                                 d="M2 11a1 1 0 011-1h2a1 1 0 011 1v5a1 1 0 01-1 1H3a1 1 0 01-1-1v-5zM8 7a1 1 0 011-1h2a1 1 0 011 1v9a1 1 0 01-1 1H9a1 1 0 01-1-1V7zM14 4a1 1 0 011-1h2a1 1 0 011 1v12a1 1 0 01-1 1h-2a1 1 0 01-1-1V4z">
                              </path>
                           </svg>
                        </div>
                        <div class="h-2 flex-1 bg-slate-100 rounded-full lg:block hidden"></div>
                        <div class="h-2 w-16 bg-brand-purple/20 rounded-full"></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>

         <!-- Decoration / Grid Background -->
         <div
            class="absolute inset-0 bg-[radial-gradient(#e2e8f0_1.5px,transparent_1.5px)] [background-size:32px_32px] -z-10 opacity-40">
         </div>
      </div>
   </div>
</section>

<!-- Trusted By / Technical Partners -->
<div class="bg-white py-16 border-y border-slate-100">
   <div class="max-w-7xl mx-auto px-6 flex flex-col items-center">
      <span class="text-[9px] font-black uppercase tracking-[0.3em] text-slate-400 mb-10">Tecnologías de
         Vanguardia</span>
      <div class="flex flex-wrap justify-center gap-12 md:gap-24 opacity-30 grayscale items-center">
         <span class="text-2xl font-black text-slate-dark tracking-tighter">AWS_CLOUD</span>
         <span class="text-2xl font-black text-slate-dark tracking-tighter">POSTGRES</span>
         <span class="text-2xl font-black text-slate-dark tracking-tighter">DOCKER</span>
         <span class="text-2xl font-black text-slate-dark tracking-tighter">KUBERNETES</span>
         <span class="text-2xl font-black text-slate-dark tracking-tighter">REACT_NX</span>
      </div>
   </div>
</div>

<!-- Compact Industry Showcase: Minimalist & Clean -->
<!-- Industries Infinite Marquee (Slow slide to the RIGHT) -->
<section id="sectores" class="py-24 bg-white overflow-hidden">
   <section id="sectores" class="py-24 bg-white overflow-hidden border-t border-slate-50">
      <div class="max-w-7xl mx-auto px-6">
         <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 lg:gap-32 items-center">

            <!-- Left Column: Fixed Context -->
            <div class="space-y-6">
               <div class="inline-flex items-center gap-2">
                  <span class="w-8 h-[1px] bg-brand-purple"></span>
                  <span class="text-[10px] font-black uppercase tracking-[0.3em] text-brand-purple">Especialización
                     Sectorial</span>
               </div>
               <h3 class="text-4xl md:text-5xl font-black text-slate-dark tracking-tighter leading-tight">
                  Sistemas para <br> <span class="text-brand-purple">Industrias Clave.</span>
               </h3>
               <p class="text-lg text-slate-body leading-relaxed max-w-md">
                  Ingeniería aplicada a procesos críticos. Diseñamos soluciones que se adaptan a la lógica de negocio
                  de cada industria con precisión quirúrgica.
               </p>
                <div class="pt-4">
                   <a href="<?= BASE_URL ?>especialidades" class="inline-flex items-center gap-2 font-black text-xs uppercase tracking-widest text-brand-purple hover:text-slate-dark transition-colors group">
                      Ver todas las industrias
                      <svg class="w-4 h-4 transition-transform duration-300 group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                         <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                      </svg>
                   </a>
                </div>
            </div>

            <!-- Right Column: Compact Sequential Reveal -->
            <div
               class="relative h-[250px] bg-slate-50/50 rounded-[3rem] border border-slate-100 p-10 flex flex-col items-center justify-center overflow-hidden">
               <div id="industry-stage" class="relative w-full h-full">

                  <!-- Industry 01 -->
                  <div
                     class="industry-item invisible absolute inset-0 flex flex-col items-center justify-center text-center">
                     <div
                        class="w-16 h-16 bg-white text-brand-purple rounded-2xl flex items-center justify-center mb-6 shadow-xl shadow-brand-purple/5 border border-slate-100">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                           <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                              d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4">
                           </path>
                        </svg>
                     </div>
                     <h4 class="text-xl font-black text-slate-dark tracking-tight mb-1">Turismo & Transporte</h4>
                     <p class="text-[10px] font-bold text-brand-purple uppercase tracking-[0.2em]">Motores de Reserva
                        API</p>
                  </div>

                  <!-- Industry 02 -->
                  <div
                     class="industry-item invisible absolute inset-0 flex flex-col items-center justify-center text-center">
                     <div
                        class="w-16 h-16 bg-white text-brand-purple rounded-2xl flex items-center justify-center mb-6 shadow-xl shadow-brand-purple/5 border border-slate-100">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                           <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                              d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                           </path>
                        </svg>
                     </div>
                     <h4 class="text-xl font-black text-slate-dark tracking-tight mb-1">Hoteles & Resorts</h4>
                     <p class="text-[10px] font-bold text-brand-purple uppercase tracking-[0.2em]">Web PMS Integrado
                     </p>
                  </div>

                  <!-- Industry 03 -->
                  <div
                     class="industry-item invisible absolute inset-0 flex flex-col items-center justify-center text-center">
                     <div
                        class="w-16 h-16 bg-white text-brand-purple rounded-2xl flex items-center justify-center mb-6 shadow-xl shadow-brand-purple/5 border border-slate-100">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                           <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                              d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                           </path>
                        </svg>
                     </div>
                     <h4 class="text-xl font-black text-slate-dark tracking-tight mb-1">Fintech & Bancos</h4>
                     <p class="text-[10px] font-bold text-brand-purple uppercase tracking-[0.2em]">Activos Digitales
                        HSM</p>
                  </div>

                  <!-- Industry 04 -->
                  <div
                     class="industry-item invisible absolute inset-0 flex flex-col items-center justify-center text-center">
                     <div
                        class="w-16 h-16 bg-white text-brand-purple rounded-2xl flex items-center justify-center mb-6 shadow-xl shadow-brand-purple/5 border border-slate-100">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                           <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                              d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                           </path>
                        </svg>
                     </div>
                     <h4 class="text-xl font-black text-slate-dark tracking-tight mb-1">Salud & Clínicas</h4>
                     <p class="text-[10px] font-bold text-brand-purple uppercase tracking-[0.2em]">Telemedicina
                        Modular</p>
                  </div>

                  <!-- Industry 05 -->
                  <div
                     class="industry-item invisible absolute inset-0 flex flex-col items-center justify-center text-center">
                     <div
                        class="w-16 h-16 bg-white text-brand-purple rounded-2xl flex items-center justify-center mb-6 shadow-xl shadow-brand-purple/5 border border-slate-100">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                           <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                              d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                        </svg>
                     </div>
                     <h4 class="text-xl font-black text-slate-dark tracking-tight mb-1">Retail & E-commerce</h4>
                     <p class="text-[10px] font-bold text-brand-purple uppercase tracking-[0.2em]">Stock Omnicanal
                     </p>
                  </div>
               </div>

               <!-- Minimal Progress Dots -->
               <div class="absolute bottom-6 flex gap-2">
                  <div class="industry-dot w-1.5 h-1.5 rounded-full bg-slate-200 transition-all duration-500"></div>
                  <div class="industry-dot w-1.5 h-1.5 rounded-full bg-slate-200 transition-all duration-500"></div>
                  <div class="industry-dot w-1.5 h-1.5 rounded-full bg-slate-200 transition-all duration-500"></div>
                  <div class="industry-dot w-1.5 h-1.5 rounded-full bg-slate-200 transition-all duration-500"></div>
                  <div class="industry-dot w-1.5 h-1.5 rounded-full bg-slate-200 transition-all duration-500"></div>
               </div>
            </div>
         </div>
      </div>
   </section>
</section>

<!-- Strategic Value Section (Why & Benefits) -->
<section id="nosotros" class="py-24 bg-white">
   <div class="max-w-7xl mx-auto px-6">
      <div class="grid grid-cols-1 md:grid-cols-2 gap-16 lg:gap-32">
         <!-- Part 1: Why -->
         <div class="space-y-10">
            <div>
               <h3 class="text-brand-purple font-bold text-[10px] uppercase tracking-[0.3em] mb-4">Visión Estratégica
               </h3>
               <h4 class="text-3xl md:text-5xl font-black text-slate-dark tracking-tighter leading-tight">¿Por qué
                  tener una <br> página web hoy?</h4>
            </div>
            <p class="text-lg text-slate-body leading-relaxed">En un mercado saturado, su sitio web es la **única
               propiedad digital** que usted controla al 100%. Es la base de su ecosistema comercial y el primer
               punto de contacto que define su nivel de profesionalismo.</p>
            <div class="space-y-4 pt-6">
               <div class="flex gap-4">
                  <div class="w-2 h-2 rounded-full bg-brand-purple mt-2 shrink-0"></div>
                  <p class="text-slate-dark font-bold">Credibilidad Instántanea: <span
                        class="text-slate-body font-medium">Sin una plataforma propia, su negocio es invisible para
                        el 80% de los tomadores de decisiones.</span></p>
               </div>
               <div class="flex gap-4">
                  <div class="w-2 h-2 rounded-full bg-brand-purple mt-2 shrink-0"></div>
                  <p class="text-slate-dark font-bold">Operación 24/7: <span class="text-slate-body font-medium">Su
                        sistema trabaja, vende y educa mientras usted se enfoca en la estrategia central.</span></p>
               </div>
            </div>
         </div>

         <!-- Part 2: Benefits -->
         <div class="p-10 bg-slate-50 rounded-[2.5rem] border border-slate-100 relative overflow-hidden">
            <div class="absolute -right-8 -bottom-8 w-48 h-48 bg-brand-purple/5 rounded-full blur-3xl"></div>
            <h4 class="text-2xl font-black text-slate-dark mb-10 tracking-tight">Beneficios de un Activo Digital</h4>
            <div class="grid grid-cols-1 gap-8">
               <div class="group">
                  <div class="inline-flex items-center gap-2 mb-2">
                     <span class="text-brand-purple font-black">01.</span>
                     <h5 class="font-extrabold text-slate-dark uppercase text-[11px] tracking-widest">Alcance Global
                        Sin Fronteras</h5>
                  </div>
                  <p class="text-sm text-slate-body leading-relaxed pl-7 lg:pl-0">Expanda su mercado más allá de su
                     ubicación física. Capture clientes en cualquier geografía con un sistema internacionalizable.
                  </p>
               </div>
               <div class="group">
                  <div class="inline-flex items-center gap-2 mb-2">
                     <span class="text-brand-purple font-black">02.</span>
                     <h5 class="font-extrabold text-slate-dark uppercase text-[11px] tracking-widest">Automatización
                        de Procesos</h5>
                  </div>
                  <p class="text-sm text-slate-body leading-relaxed pl-7 lg:pl-0">Desde reservas hasta facturación.
                     Reduzca costos operativos eliminando tareas manuales repetitivas.</p>
               </div>
               <div class="group">
                  <div class="inline-flex items-center gap-2 mb-2">
                     <span class="text-brand-purple font-black">03.</span>
                     <h5 class="font-extrabold text-slate-dark uppercase text-[11px] tracking-widest">Data & Análisis
                        Predictivo</h5>
                  </div>
                  <p class="text-sm text-slate-body leading-relaxed pl-7 lg:pl-0">Conozca exactamente qué quieren sus
                     clientes. Tome decisiones basadas en datos reales, no en suposiciones.</p>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>

<!-- Web Investment Structure (Tiers without prices) -->
<section id="arquitectura-web" class="py-24 bg-slate-50 border-y border-slate-100">
   <div class="max-w-7xl mx-auto px-6">
      <div class="flex flex-col md:flex-row justify-between items-end mb-16 gap-8">
         <div class="max-w-2xl">
            <h2 class="text-brand-purple font-bold text-[10px] uppercase tracking-[0.3em] mb-4">Escalabilidad de
               Activos</h2>
            <h3 class="text-3xl md:text-5xl font-black text-slate-dark leading-tight tracking-tighter">Estructura de
               <br> Inversión Web.
            </h3>
         </div>
         <p class="text-slate-body font-medium max-w-sm mb-2">Diseñamos soluciones basadas en el retorno de inversión
            y la complejidad técnica, no en plantillas genéricas.</p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
         <!-- Tier 1: Impact Web -->
         <div class="card-invest card-invest-white p-8 rounded-[2rem] group relative">
            <div class="card-glow"></div>
            <div
               class="absolute top-0 right-0 w-24 h-24 bg-brand-purple/5 rounded-bl-full translate-x-8 -translate-y-8 group-hover:bg-brand-purple/10 transition-colors">
            </div>
            <div class="mb-10 flex justify-between items-center relative z-10">
               <span
                  class="px-3 py-1 bg-slate-100 text-slate-500 text-[9px] font-black uppercase rounded">Nivel_01</span>
               <div class="w-2 h-2 rounded-full bg-slate-300"></div>
            </div>
            <h4 class="text-2xl font-black text-slate-dark mb-4 relative z-10">Core Impact</h4>
            <p class="text-sm text-slate-body leading-relaxed mb-8 relative z-10">Posicionamiento rápido y conversión directa.
               Ideal para lanzamientos y marcas personales de alto impacto.</p>

            <ul class="space-y-4 mb-6">
               <li class="flex items-center gap-3 text-xs font-bold text-slate-600">
                  <span
                     class="w-5 h-5 bg-brand-purple-light text-brand-purple flex items-center justify-center rounded-full text-[10px]">✓</span>
                  Optimización SEO Core
               </li>
               <li class="flex items-center gap-3 text-xs font-bold text-slate-600">
                  <span
                     class="w-5 h-5 bg-brand-purple-light text-brand-purple flex items-center justify-center rounded-full text-[10px]">✓</span>
                  UX de Alta Velocidad
               </li>
               <li class="flex items-center gap-3 text-xs font-bold text-slate-600">
                  <span
                     class="w-5 h-5 bg-brand-purple-light text-brand-purple flex items-center justify-center rounded-full text-[10px]">✓</span>
                  Despliegue NX/Vercel
               </li>
            </ul>

            <!-- Extra items (hidden by default) -->
            <div class="max-h-0 overflow-hidden transition-all duration-700 ease-in-out extra-items-container">
               <ul class="space-y-4 mb-6">
                  <li class="flex items-center gap-3 text-xs font-bold text-slate-600">
                     <span
                        class="w-5 h-5 bg-brand-purple-light text-brand-purple flex items-center justify-center rounded-full text-[10px]">✓</span>
                     Certificado SSL & Seguridad
                  </li>
                  <li class="flex items-center gap-3 text-xs font-bold text-slate-600">
                     <span
                        class="w-5 h-5 bg-brand-purple-light text-brand-purple flex items-center justify-center rounded-full text-[10px]">✓</span>
                     Diseño Adaptativo (Mobile)
                  </li>
                  <li class="flex items-center gap-3 text-xs font-bold text-slate-600">
                     <span
                        class="w-5 h-5 bg-brand-purple-light text-brand-purple flex items-center justify-center rounded-full text-[10px]">✓</span>
                     Formularios de Contacto
                  </li>
                  <li class="flex items-center gap-3 text-xs font-bold text-slate-600">
                     <span
                        class="w-5 h-5 bg-brand-purple-light text-brand-purple flex items-center justify-center rounded-full text-[10px]">✓</span>
                     Integración Redes Sociales
                  </li>
                  <li class="flex items-center gap-3 text-xs font-bold text-slate-600">
                     <span
                        class="w-5 h-5 bg-brand-purple-light text-brand-purple flex items-center justify-center rounded-full text-[10px]">✓</span>
                     Backup Automático Semanal
                  </li>
                  <li class="flex items-center gap-3 text-xs font-bold text-slate-600">
                     <span
                        class="w-5 h-5 bg-brand-purple-light text-brand-purple flex items-center justify-center rounded-full text-[10px]">✓</span>
                     Panel de Gestión Simple
                  </li>
                  <li class="flex items-center gap-3 text-xs font-bold text-slate-600">
                     <span
                        class="w-5 h-5 bg-brand-purple-light text-brand-purple flex items-center justify-center rounded-full text-[10px]">✓</span>
                     Reportes de Analytics Pro
                  </li>
                  <li class="flex items-center gap-3 text-xs font-bold text-slate-600">
                     <span
                        class="w-5 h-5 bg-brand-purple-light text-brand-purple flex items-center justify-center rounded-full text-[10px]">✓</span>
                     Soporte Técnico 12/5
                  </li>
                  <li class="flex items-center gap-3 text-xs font-bold text-slate-600">
                     <span
                        class="w-5 h-5 bg-brand-purple-light text-brand-purple flex items-center justify-center rounded-full text-[10px]">✓</span>
                     Optimización de Imágenes (CDN)
                  </li>
               </ul>
            </div>
            <div class="pt-6 border-t border-slate-50 flex items-center justify-between">
               <span class="text-[9px] font-black uppercase tracking-widest text-slate-400">Enfoque:
                  Conversión</span>
               <div class="w-8 h-[1px] bg-slate-200"></div>
            </div>
         </div>

         <!-- Tier 2: Authority Web -->
         <div class="card-invest card-invest-dark p-8 rounded-[2rem] scale-105 z-10 group relative">
            <div class="card-glow-green"></div>
            <div
               class="absolute top-0 right-0 w-32 h-32 bg-brand-green/10 rounded-bl-full translate-x-8 -translate-y-8">
            </div>
            <div class="mb-10 flex justify-between items-center relative z-10">
               <span
                  class="px-3 py-1 bg-brand-green text-white text-[9px] font-black uppercase rounded shadow-lg shadow-brand-green/20">Popular</span>
               <div class="w-2 h-2 rounded-full bg-brand-green animate-pulse"></div>
            </div>
            <h4 class="text-2xl font-black text-white mb-4 relative z-10">Global Authority</h4>
            <p class="text-sm text-slate-400 leading-relaxed mb-8 relative z-10">Sistemas multi-página robustos diseñados para
               dominar mercados competitivos y establecer autoridad de marca.</p>

            <ul class="space-y-4 mb-6">
               <li class="flex items-center gap-3 text-xs font-bold text-slate-300">
                  <span
                     class="w-5 h-5 bg-brand-green text-white flex items-center justify-center rounded-full text-[10px]">✓</span>
                  Estructura de Contenidos Pro
               </li>
               <li class="flex items-center gap-3 text-xs font-bold text-slate-300">
                  <span
                     class="w-5 h-5 bg-brand-green text-white flex items-center justify-center rounded-full text-[10px]">✓</span>
                  Integración CRM & Leads
               </li>
               <li class="flex items-center gap-3 text-xs font-bold text-slate-300">
                  <span
                     class="w-5 h-5 bg-brand-green text-white flex items-center justify-center rounded-full text-[10px]">✓</span>
                  Blog & CMS Custom
               </li>
            </ul>

            <!-- Extra items (hidden by default) -->
            <div class="max-h-0 overflow-hidden transition-all duration-700 ease-in-out extra-items-container">
               <ul class="space-y-4 mb-6">
                  <li class="flex items-center gap-3 text-xs font-bold text-slate-300">
                     <span
                        class="w-5 h-5 bg-brand-green text-white flex items-center justify-center rounded-full text-[10px]">✓</span>
                     Soporte Multi-idioma
                  </li>
                  <li class="flex items-center gap-3 text-xs font-bold text-slate-300">
                     <span
                        class="w-5 h-5 bg-brand-green text-white flex items-center justify-center rounded-full text-[10px]">✓</span>
                     Automatización de Marketing
                  </li>
                  <li class="flex items-center gap-3 text-xs font-bold text-slate-300">
                     <span
                        class="w-5 h-5 bg-brand-green text-white flex items-center justify-center rounded-full text-[10px]">✓</span>
                     Landing Pages Dinámicas
                  </li>
                  <li class="flex items-center gap-3 text-xs font-bold text-slate-300">
                     <span
                        class="w-5 h-5 bg-brand-green text-white flex items-center justify-center rounded-full text-[10px]">✓</span>
                     Optimización Conversión (CRO)
                  </li>
                  <li class="flex items-center gap-3 text-xs font-bold text-slate-300">
                     <span
                        class="w-5 h-5 bg-brand-green text-white flex items-center justify-center rounded-full text-[10px]">✓</span>
                     Auditoría Seguridad Mensual
                  </li>
                  <li class="flex items-center gap-3 text-xs font-bold text-slate-300">
                     <span
                        class="w-5 h-5 bg-brand-green text-white flex items-center justify-center rounded-full text-[10px]">✓</span>
                     Integración Pixel Meta/Ads
                  </li>
                  <li class="flex items-center gap-3 text-xs font-bold text-slate-300">
                     <span
                        class="w-5 h-5 bg-brand-green text-white flex items-center justify-center rounded-full text-[10px]">✓</span>
                     Soporte Prioritario 24/5
                  </li>
                  <li class="flex items-center gap-3 text-xs font-bold text-slate-300">
                     <span
                        class="w-5 h-5 bg-brand-green text-white flex items-center justify-center rounded-full text-[10px]">✓</span>
                     A/B Testing de Conversión
                  </li>
                  <li class="flex items-center gap-3 text-xs font-bold text-slate-300">
                     <span
                        class="w-5 h-5 bg-brand-green text-white flex items-center justify-center rounded-full text-[10px]">✓</span>
                     Email Marketing Integrado
                  </li>
               </ul>
            </div>
            <div class="pt-6 border-t border-white/5 flex items-center justify-between">
               <span class="text-[9px] font-black uppercase tracking-widest text-brand-green">Enfoque:
                  Autoridad</span>
               <svg class="w-4 h-4 text-brand-green" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path d="M5 13l4 4L19 7"></path>
               </svg>
            </div>
         </div>

         <!-- Tier 3: Engine Web -->
         <div class="card-invest card-invest-white p-8 rounded-[2rem] group relative">
            <div class="card-glow"></div>
            <div
               class="absolute top-0 right-0 w-24 h-24 bg-brand-purple/5 rounded-bl-full translate-x-8 -translate-y-8 group-hover:bg-brand-purple/10 transition-colors">
            </div>
            <div class="mb-10 flex justify-between items-center relative z-10">
               <span
                  class="px-3 py-1 bg-slate-100 text-slate-500 text-[9px] font-black uppercase rounded">Nivel_03</span>
               <div class="w-2 h-2 rounded-full bg-slate-300"></div>
            </div>
            <h4 class="text-2xl font-black text-slate-dark mb-4 relative z-10">Transaction Engine</h4>
            <p class="text-sm text-slate-body leading-relaxed mb-8 relative z-10">Plataformas transaccionales de alto rendimiento.
               E-commerce masivo y portales de servicios complejos.</p>

            <ul class="space-y-4 mb-6">
               <li class="flex items-center gap-3 text-xs font-bold text-slate-600">
                  <span
                     class="w-5 h-5 bg-brand-purple-light text-brand-purple flex items-center justify-center rounded-full text-[10px]">✓</span>
                  Pasarelas de Pago Global
               </li>
               <li class="flex items-center gap-3 text-xs font-bold text-slate-600">
                  <span
                     class="w-5 h-5 bg-brand-purple-light text-brand-purple flex items-center justify-center rounded-full text-[10px]">✓</span>
                  User Accounts & Auth
               </li>
               <li class="flex items-center gap-3 text-xs font-bold text-slate-600">
                  <span
                     class="w-5 h-5 bg-brand-purple-light text-brand-purple flex items-center justify-center rounded-full text-[10px]">✓</span>
                  Dashboard de Datos
               </li>
            </ul>

            <!-- Extra items (hidden by default) -->
            <div class="max-h-0 overflow-hidden transition-all duration-700 ease-in-out extra-items-container">
               <ul class="space-y-4 mb-6">
                  <li class="flex items-center gap-3 text-xs font-bold text-slate-600">
                     <span
                        class="w-5 h-5 bg-brand-purple-light text-brand-purple flex items-center justify-center rounded-full text-[10px]">✓</span>
                     Sincronización de Stock (ERP)
                  </li>
                  <li class="flex items-center gap-3 text-xs font-bold text-slate-600">
                     <span
                        class="w-5 h-5 bg-brand-purple-light text-brand-purple flex items-center justify-center rounded-full text-[10px]">✓</span>
                     Infraestructura Cloud
                  </li>
                  <li class="flex items-center gap-3 text-xs font-bold text-slate-600">
                     <span
                        class="w-5 h-5 bg-brand-purple-light text-brand-purple flex items-center justify-center rounded-full text-[10px]">✓</span>
                     Soporte Premium 24/7
                  </li>
                  <li class="flex items-center gap-3 text-xs font-bold text-slate-600">
                     <span
                        class="w-5 h-5 bg-brand-purple-light text-brand-purple flex items-center justify-center rounded-full text-[10px]">✓</span>
                     Seguridad de Grado Bancario
                  </li>
                  <li class="flex items-center gap-3 text-xs font-bold text-slate-600">
                     <span
                        class="w-5 h-5 bg-brand-purple-light text-brand-purple flex items-center justify-center rounded-full text-[10px]">✓</span>
                     API Personalizada Advanced
                  </li>
                  <li class="flex items-center gap-3 text-xs font-bold text-slate-600">
                     <span
                        class="w-5 h-5 bg-brand-purple-light text-brand-purple flex items-center justify-center rounded-full text-[10px]">✓</span>
                     Escalado de Servidor Auto
                  </li>
                  <li class="flex items-center gap-3 text-xs font-bold text-slate-600">
                     <span
                        class="w-5 h-5 bg-brand-purple-light text-brand-purple flex items-center justify-center rounded-full text-[10px]">✓</span>
                     Auditoría Legal de Datos
                  </li>
                  <li class="flex items-center gap-3 text-xs font-bold text-slate-600">
                     <span
                        class="w-5 h-5 bg-brand-purple-light text-brand-purple flex items-center justify-center rounded-full text-[10px]">✓</span>
                     Soporte Crítico 24/7 (SLA)
                  </li>
                  <li class="flex items-center gap-3 text-xs font-bold text-slate-600">
                     <span
                        class="w-5 h-5 bg-brand-purple-light text-brand-purple flex items-center justify-center rounded-full text-[10px]">✓</span>
                     Dashboard BI Customizado
                  </li>
               </ul>
            </div>
            <div class="pt-6 border-t border-slate-50 flex items-center justify-between">
               <span class="text-[9px] font-black uppercase tracking-widest text-slate-400">Enfoque:
                  Complejidad</span>
               <div class="w-8 h-[1px] bg-slate-200"></div>
            </div>
         </div>
      </div>

      <!-- Global Toggle: Minimal Text Design -->
      <div class="mt-8 flex justify-center">
         <button id="global-toggle-btn"
            class="flex items-center gap-2 text-brand-green text-[10px] font-black uppercase tracking-[0.2em] hover:opacity-70 transition-all group">
            <span id="global-toggle-text">Ver estructura completa</span>
            <svg id="global-toggle-icon" class="w-3 h-3 transition-transform duration-500" fill="none"
               stroke="currentColor" viewBox="0 0 24 24">
               <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M19 9l-7 7-7-7"></path>
            </svg>
         </button>
      </div>
   </div>
</section>

<!-- Custom Systems Engineering (Sistemas Personalizados) -->
<section id="sistemas-personalizados" class="py-32 bg-white overflow-hidden">
   <div class="max-w-7xl mx-auto px-6">
      <div class="grid grid-cols-1 lg:grid-cols-12 gap-16 items-center">
         <div class="lg:col-span-5">
            <div
               class="inline-flex items-center gap-3 px-3 py-1 bg-slate-dark text-white rounded text-[8px] font-black uppercase tracking-[0.2em] mb-8">
               <span class="w-1.5 h-1.5 bg-brand-green rounded-full"></span>
               Advanced Engineering Layer
            </div>
            <h3 class="text-4xl md:text-5xl font-black text-slate-dark mb-8 leading-tight tracking-tighter">
               Sistemas de <br> <span class="text-brand-purple">Alta Complejidad.</span>
            </h3>
            <p class="text-lg text-slate-body font-medium mb-10 leading-relaxed">Cuando las soluciones estándar no
               son suficientes, construimos arquitecturas desde cero diseñadas para resolver procesos de negocio
               únicos e irrepetibles.</p>

            <div class="space-y-6">
               <div class="flex gap-4 p-5 border border-slate-100 rounded-2xl hover:bg-slate-50 transition-colors">
                  <div
                     class="w-12 h-12 shrink-0 bg-brand-purple/5 flex items-center justify-center rounded-xl text-brand-purple">
                     <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                           d="M11 4a2 2 0 114 0v1a1 1 0 001 1h3a1 1 0 011 1v3a1 1 0 01-1 1h-1a2 2 0 100 4h1a1 1 0 011 1v3a1 1 0 01-1 1h-3a1 1 0 00-1 1v1a2 2 0 11-4 0v-1a1 1 0 00-1-1H7a1 1 0 01-1-1v-3a1 1 0 011-1h1a2 2 0 100-4H7a1 1 0 01-1-1V7a1 1 0 011-1h3a1 1 0 001-1V4z">
                        </path>
                     </svg>
                  </div>
                  <div>
                     <h4 class="font-extrabold text-slate-dark text-lg">Lógica de Negocio No-Estándar</h4>
                     <p class="text-sm text-slate-body leading-relaxed">Algoritmos a medida para cálculos complejos,
                        automatizaciones y flujos de trabajo especializados.</p>
                  </div>
               </div>
               <div class="flex gap-4 p-5 border border-slate-100 rounded-2xl hover:bg-slate-50 transition-colors">
                  <div
                     class="w-12 h-12 shrink-0 bg-brand-green/5 flex items-center justify-center rounded-xl text-brand-green">
                     <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                           d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10">
                        </path>
                     </svg>
                  </div>
                  <div>
                     <h4 class="font-extrabold text-slate-dark text-lg">Microservicios & Escalabilidad</h4>
                     <p class="text-sm text-slate-body leading-relaxed">Infraestructura diseñada para crecer
                        modularmente, soportando miles de transacciones concurrentes.</p>
                  </div>
               </div>
            </div>
         </div>

         <div class="lg:col-span-7 relative h-[500px] flex items-center justify-center">
            <div
               class="absolute inset-0 bg-linear-to-tr from-brand-purple/5 to-transparent rounded-[3rem] -rotate-2">
            </div>
            <!-- Interactive Schematic Mockup -->
            <div
               class="relative w-full max-w-[500px] bg-slate-dark rounded-3xl shadow-3xl p-8 border border-white/10">
               <div class="flex justify-between items-center mb-10">
                  <div class="flex gap-2">
                     <div class="w-3 h-3 bg-red-500 rounded-full"></div>
                     <div class="w-3 h-3 bg-amber-500 rounded-full"></div>
                     <div class="w-3 h-3 bg-emerald-500 rounded-full"></div>
                  </div>
                  <span
                     class="text-[9px] font-mono text-white/30 tracking-widest uppercase">system_topology.v2</span>
               </div>

               <div class="grid grid-cols-2 gap-4">
                  <!-- API Component -->
                  <div
                     class="p-6 bg-white/5 border border-white/10 rounded-2xl group/card flex flex-col justify-between h-44 hover:bg-white/10 hover:border-brand-purple/50 transition-all duration-500 cursor-default relative overflow-hidden">
                     <div class="absolute inset-0 bg-gradient-to-br from-brand-purple/10 to-transparent opacity-0 group-hover/card:opacity-100 transition-opacity"></div>
                     <div
                        class="w-10 h-10 rounded-xl bg-brand-purple flex items-center justify-center text-white font-black text-xs shadow-lg shadow-brand-purple/20 group-hover/card:scale-110 transition-transform relative z-10">
                        API</div>
                     <div class="space-y-3 relative z-10">
                        <div class="h-1.5 w-full bg-white/10 rounded-full overflow-hidden">
                           <div class="h-full bg-brand-purple w-2/3 group-hover/card:w-full transition-all duration-1000"></div>
                        </div>
                        <div class="flex justify-between items-center">
                           <div class="h-1 w-12 bg-white/10 rounded-full"></div>
                           <span class="text-[8px] font-mono text-brand-purple opacity-0 group-hover/card:opacity-100 transition-opacity">REQ_SENT</span>
                        </div>
                     </div>
                  </div>

                  <!-- DB Component -->
                  <div
                     class="p-6 bg-white/5 border border-white/10 rounded-2xl group/card flex flex-col justify-between h-44 hover:bg-white/10 hover:border-brand-green/50 transition-all duration-500 cursor-default relative overflow-hidden">
                     <div class="absolute inset-0 bg-gradient-to-br from-brand-green/10 to-transparent opacity-0 group-hover/card:opacity-100 transition-opacity"></div>
                     <div class="w-10 h-10 rounded-xl bg-brand-green flex items-center justify-center text-white font-black text-xs shadow-lg shadow-brand-green/20 group-hover/card:scale-110 transition-transform relative z-10">
                        DB</div>
                     <div class="flex gap-1.5 items-end h-10 relative z-10">
                        <div class="w-full bg-brand-green/40 h-[40%] group-hover/card:h-[60%] transition-all duration-500"></div>
                        <div class="w-full bg-brand-green/60 h-[70%] group-hover/card:h-[90%] transition-all duration-500 delay-75"></div>
                        <div class="w-full bg-brand-green h-[90%] group-hover/card:h-[40%] transition-all duration-500 delay-100"></div>
                        <div class="w-full bg-brand-green/50 h-[50%] group-hover/card:h-[80%] transition-all duration-500 delay-150"></div>
                     </div>
                  </div>

                  <!-- CDN Component -->
                  <div
                     class="col-span-2 p-6 bg-white/5 border border-white/10 rounded-2xl group/card flex items-center justify-between hover:bg-white/10 hover:border-white/20 transition-all duration-500 cursor-default relative overflow-hidden">
                     <div class="absolute inset-0 bg-gradient-to-r from-white/5 to-transparent opacity-0 group-hover/card:opacity-100 transition-opacity"></div>
                     <div class="flex items-center gap-5 relative z-10">
                        <div
                           class="w-12 h-12 bg-slate-800 rounded-xl flex items-center justify-center text-white/40 text-[10px] font-black border border-white/5 group-hover/card:text-white transition-colors">
                           CDN</div>
                        <div class="space-y-2">
                           <div class="h-1 w-32 bg-white/10 rounded-full overflow-hidden">
                              <div class="h-full bg-white/20 w-1/4 group-hover/card:translate-x-32 transition-transform duration-[2000ms] ease-in-out"></div>
                           </div>
                           <div class="h-1 w-20 bg-white/5 rounded-full"></div>
                        </div>
                     </div>
                     <div class="text-[9px] font-black font-mono text-brand-green bg-brand-green/10 px-3 py-1 rounded-full border border-brand-green/20 group-hover/card:scale-105 transition-transform relative z-10">ACTIVE_SYNC</div>
                  </div>
               </div>

               <!-- Floating connections decoration -->
               <div
                  class="absolute -top-6 -right-6 w-24 h-24 border-t-2 border-r-2 border-brand-purple/20 rounded-tr-3xl">
               </div>
               <div
                  class="absolute -bottom-6 -left-6 w-24 h-24 border-b-2 border-l-2 border-brand-green/20 rounded-bl-3xl">
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
</div>
</div>
</section>

<!-- Contact CTA Section -->
<section id="contacto" class="py-24 bg-slate-dark text-white text-center">
   <div class="max-w-4xl mx-auto px-6">
      <div class="w-16 h-[1px] bg-brand-green mx-auto mb-10"></div>
      <h2 class="text-4xl md:text-6xl font-black mb-10 leading-tight tracking-tight">Hablemos de su próxima <br>
         <span class="text-brand-green">Inversión Digital.</span>
      </h2>
      <p class="text-xl text-slate-400 font-medium mb-12 leading-relaxed">Analizaremos sus procesos actuales para
         proponerle una solución de ingeniería que maximice su eficiencia operativa.</p>
      <div class="flex flex-col sm:flex-row justify-center gap-6">
         <a href="#"
            class="btn-serious bg-white text-slate-dark hover:bg-slate-100 flex items-center justify-center gap-2">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
               <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path>
               <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
            </svg>
            info@voltora.com
         </a>
         <a href="https://wa.me/51903361649" target="_blank" rel="noopener noreferrer"
            class="btn-serious bg-brand-green text-white hover:opacity-90 flex items-center justify-center gap-2">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
               <path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.438 9.889-9.886.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884 0 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.521-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.568-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"></path>
            </svg>
            Contactar vía WhatsApp
         </a>
      </div>
   </div>
</section>


<!-- Complete Enterprise Footer -->
<?php include 'includes/footer.php'; ?>