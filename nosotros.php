<?php include 'includes/header.php'; ?>


<!-- Hero Nosotros Section -->
<section class="py-24 md:py-32 overflow-hidden bg-slate-50 border-b border-slate-100">
   <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 lg:grid-cols-2 gap-20 items-center">
      <div>
         <div class="mb-8 flex items-center gap-2">
            <div class="h-[1px] w-8 bg-brand-purple"></div>
            <span class="text-[10px] font-black uppercase tracking-[0.3em] text-brand-purple">Voltora Group</span>
         </div>
         <h1 class="text-4xl md:text-5xl font-black text-slate-dark leading-[1.1] mb-8 tracking-tight">
            Nuestra misión es la <br>
            <span class="text-brand-purple">Excelencia Técnica.</span>
         </h1>
         <p class="text-lg text-slate-body leading-relaxed max-w-lg font-medium">
            Somos un equipo de ingenieros, arquitectos de software y estrategas digitales dedicados a construir el
            núcleo tecnológico de empresas que no pueden permitirse fallar. Aplicamos el mayor nivel de rigor a cada
            solución creada.
         </p>
      </div>
      <div class="relative h-[450px] flex items-center justify-center w-full perspective-[1000px] group">
         <!-- Sombra proyectada del monitor/pantalla -->
         <div
            class="absolute -bottom-8 w-3/4 h-8 bg-slate-900/10 blur-xl rounded-[100%] group-hover:scale-110 transition-transform duration-700">
         </div>

         <!-- OPCIÓN 02: Screen Frame (Laptop/Monitor look) -->
         <div
            class="relative flex flex-col w-full h-[400px] max-w-[480px] border-[4px] border-slate-800 bg-slate-900 rounded-[2rem] shadow-[0_20px_50px_rgba(0,0,0,0.3)] overflow-hidden [transform:rotateX(5deg)] group-hover:[transform:rotateX(0deg)_translateY(-10px)] transition-all duration-700">

            <!-- Title bar / Header del "Monitor" -->
            <div
               class="h-8 w-full bg-slate-800 flex items-center px-4 justify-between border-b border-white/10 shrink-0 z-20">
               <div class="flex gap-1.5">
                  <div class="w-2.5 h-2.5 rounded-full bg-slate-600 group-hover:bg-red-500 transition-colors"></div>
                  <div
                     class="w-2.5 h-2.5 rounded-full bg-slate-600 group-hover:bg-yellow-500 transition-colors delay-75">
                  </div>
                  <div
                     class="w-2.5 h-2.5 rounded-full bg-slate-600 group-hover:bg-green-500 transition-colors delay-150">
                  </div>
               </div>
               <div
                  class="text-[9px] font-mono text-slate-400 bg-slate-900/50 px-3 py-1 rounded-full border border-white/5">
                  root@voltora:~/engineering</div>
               <div class="w-10"></div> <!-- spacing balancer -->
            </div>

            <!-- Grid background del IDE -->
            <div
               class="absolute inset-0 top-8 bg-[linear-gradient(rgba(255,255,255,0.03)_1px,transparent_1px),linear-gradient(90deg,rgba(255,255,255,0.03)_1px,transparent_1px)] bg-[size:20px_20px] [transform:perspective(500px)_rotateX(60deg)] origin-bottom opacity-50 z-0">
            </div>

            <!-- Top Glow interior -->
            <div
               class="absolute top-8 left-0 w-full h-[2px] bg-gradient-to-r from-transparent via-brand-purple to-transparent opacity-50 shadow-[0_0_10px_rgba(160,141,246,0.8)] z-10">
            </div>

            <!-- Contenido del Blueprint (Centrado en la "pantalla") -->
            <div class="relative z-10 flex-1 flex flex-col justify-center items-center p-6 w-full h-full">

               <div
                  class="relative w-full max-w-[380px] bg-slate-800/80 backdrop-blur-[4px] border border-white/10 p-6 rounded-xl shadow-[0_10px_30px_rgba(0,0,0,0.5)] group-hover:border-brand-purple/40 group-hover:shadow-[0_0_40px_rgba(160,141,246,0.2)] transition-all duration-500 mt-2">

                  <div class="flex items-start gap-4 mb-5">
                     <div
                        class="w-10 h-10 rounded-lg bg-slate-900 border border-white/10 text-brand-purple flex justify-center items-center shrink-0 shadow-inner group-hover:scale-110 transition-transform">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                           <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                              d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                        </svg>
                     </div>
                     <div>
                        <div
                           class="text-[9px] font-mono text-brand-green uppercase tracking-widest mb-1 flex items-center gap-1">
                           <span class="w-1.5 h-1.5 rounded-full bg-brand-green animate-pulse"></span>
                           core_logic.ts
                        </div>
                        <h4 class="font-black text-lg text-white leading-tight">¿Por qué elegimos ingeniería?</h4>
                     </div>
                  </div>

                  <div
                     class="bg-slate-900/60 rounded-lg p-3.5 font-mono text-[11px] text-slate-300 border border-white/5 mb-4 group-hover:border-brand-purple/20 transition-colors shadow-inner">
                     <span class="text-brand-purple">if</span> (approach === <span
                        class="text-brand-green">'programming'</span>) {{<br>
                        &nbsp;&nbsp;<span class="text-slate-500">// fixes today</span><br>
                        }} <span class="text-brand-purple">else if</span> (approach === <span
                        class="text-brand-green">'engineering'</span>) {{<br>
                        &nbsp;&nbsp;<span class="text-slate-500">// prevents tomorrow</span><br>
                        &nbsp;&nbsp;<span class="text-brand-purple">return</span> <span
                           class="text-cyan-400">Scalability</span>;<br>
                        }}
                  </div>

                  <p class="text-[13px] text-slate-400 leading-relaxed font-medium">Aplicamos fundamentos de
                     escalabilidad asegurando resultados a largo plazo desde la primera línea.</p>
               </div>
            </div>

            <!-- Base del "Monitor" decorativa (Opcional, imita el borde inferior luminoso) -->
            <div
               class="absolute bottom-0 w-full h-2 bg-gradient-to-r from-transparent via-brand-purple/10 to-transparent">
            </div>
         </div>
      </div>
   </div>
</section>


<!-- Significado de Voltora (Origin & Identity) -->
<section class="py-24 bg-slate-dark text-white overflow-hidden relative border-y border-slate-800">
   <!-- Abstract Electrical/Grid Background -->
   <div class="absolute inset-0 bg-[radial-gradient(#ffffff0a_1px,transparent_1px)] bg-[size:32px_32px] opacity-20">
   </div>
   <div
      class="absolute top-0 right-0 w-[600px] h-[600px] bg-brand-purple/10 rounded-full blur-[120px] -translate-y-1/2 translate-x-1/3">
   </div>
   <div
      class="absolute bottom-0 left-0 w-[500px] h-[500px] bg-brand-green/10 rounded-full blur-[100px] translate-y-1/2 -translate-x-1/3">
   </div>

   <div class="max-w-7xl mx-auto px-6 relative z-10">
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-20 items-center">

         <!-- Context & Meaning -->
         <div>
            <div class="mb-8 flex items-center gap-2">
               <div class="h-[1px] w-8 bg-brand-green"></div>
               <span class="text-[10px] font-black uppercase tracking-[0.3em] text-brand-green">Identidad de
                  Marca</span>
            </div>

            <h3 class="text-4xl md:text-5xl font-black leading-tight tracking-tighter mb-8 flex flex-col gap-4">
               <span>El significado detrás de</span>
               <img src="<?= IMG_PATH ?>Recurso2.svg" alt="Voltora Logo"
                  class="h-12 md:h-16 w-auto object-contain mt-2 max-w-[200px]">
            </h3>

            <p class="text-lg text-slate-400 leading-relaxed mb-10 font-medium">
               Nuestro nombre no es casualidad. Nace de la fusión de dos conceptos críticos en la ingeniería de
               sistemas moderna: la <strong>energía inagotable</strong> y la <strong>arquitectura
                  omnipresente</strong>.
            </p>

            <div class="space-y-8">
               <div class="flex gap-5">
                  <div
                     class="w-16 h-16 shrink-0 relative bg-slate-900 border border-brand-purple/30 rounded-2xl flex items-center justify-center group shadow-[0_0_20px_rgba(160,141,246,0.15)] overflow-hidden">
                     <!-- Glow -->
                     <div
                        class="absolute top-0 w-full h-1/2 bg-brand-purple/20 blur-xl group-hover:bg-brand-purple/40 transition-colors duration-500">
                     </div>

                     <!-- Pulse rings -->
                     <div class="absolute inset-0 flex items-center justify-center">
                        <div
                           class="absolute w-8 h-8 border border-brand-purple/30 rounded-full group-hover:scale-150 group-hover:opacity-0 transition-all duration-700 ease-out">
                        </div>
                        <div
                           class="absolute w-6 h-6 border border-brand-purple/50 rounded-full group-hover:scale-125 group-hover:opacity-0 transition-all duration-500 ease-out delay-75">
                        </div>
                     </div>

                     <!-- Energy Core -->
                     <div
                        class="relative flex items-center gap-1.5 z-10 group-hover:gap-2 transition-all duration-500">
                        <div
                           class="w-1.5 h-1.5 rounded-full bg-brand-purple/60 group-hover:bg-brand-purple group-hover:shadow-[0_0_8px_rgba(160,141,246,0.8)] transition-all">
                        </div>
                        <div
                           class="w-5 h-1.5 rounded-full bg-brand-purple shadow-[0_0_12px_rgba(160,141,246,0.9)] group-hover:w-7 group-hover:bg-white group-hover:shadow-[0_0_15px_white] transition-all duration-500">
                        </div>
                        <div
                           class="w-1.5 h-1.5 rounded-full bg-brand-purple/60 group-hover:bg-brand-purple group-hover:shadow-[0_0_8px_rgba(160,141,246,0.8)] transition-all">
                        </div>
                     </div>
                  </div>
                  <div>
                     <h4 class="text-xl font-bold mb-2">Volt (Potencia & Dinamismo)</h4>
                     <p class="text-sm text-slate-400 leading-relaxed">Representa la tensión eléctrica y la carga
                        estática. En el software, significa rendimiento puro, latencia mínima y sistemas capaces de
                        procesar millones de peticiones por segundo sin caída de tensión.</p>
                  </div>
               </div>

               <div class="flex gap-5">
                  <div
                     class="w-16 h-16 shrink-0 relative bg-slate-900 border border-brand-green/30 rounded-2xl flex items-center justify-center group shadow-[0_0_20px_rgba(127,219,182,0.15)] overflow-hidden">
                     <!-- Ambient Matrix Glow -->
                     <div
                        class="absolute bottom-0 w-full h-full bg-[radial-gradient(circle_at_bottom,rgba(127,219,182,0.2),transparent_70%)]">
                     </div>

                     <!-- Architecture Stack -->
                     <div class="relative w-full h-full">
                        <!-- Base Layer -->
                        <div
                           class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-[15%] w-8 h-8 border-[1.5px] border-brand-green/30 bg-brand-green/10 rounded-sm [transform:rotateX(60deg)_rotateZ(45deg)] group-hover:translate-y-[0%] transition-transform duration-500">
                        </div>

                        <!-- Middle Layer -->
                        <div
                           class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-[35%] w-6 h-6 border-[1.5px] border-brand-green/60 bg-brand-green/20 rounded-sm shadow-[0_0_15px_rgba(127,219,182,0.4)] [transform:rotateX(60deg)_rotateZ(45deg)] group-hover:-translate-y-[50%] transition-transform duration-500 delay-75">
                        </div>

                        <!-- Top Glowing Core -->
                        <div
                           class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-[55%] w-8 h-8 flex items-center justify-center group-hover:-translate-y-[85%] transition-transform duration-500 delay-150">
                           <div
                              class="w-3 h-3 bg-white rounded shadow-[0_0_15px_rgba(255,255,255,0.8)] border border-brand-green rotate-45">
                           </div>
                        </div>
                     </div>
                  </div>
                  <div>
                     <h4 class="text-xl font-bold mb-2">Ora (Core & Era Digital)</h4>
                     <p class="text-sm text-slate-400 leading-relaxed">Raíz relacionada al aura, núcleo y la era de
                        la información. Simboliza la estructura, el monolito seguro y la base arquitectónica
                        inquebrantable sobre la cual levantamos todas nuestras plataformas.</p>
                  </div>
               </div>
            </div>
         </div>


         <!-- Visual Abstraction of "Voltora" -->
         <!-- OPCION 06: La Bóveda Arquitectónica (V como el monolito seguro e inquebrantable) -->
         <div
            class="relative h-[500px] flex flex-col items-center justify-center p-6 bg-slate-900/40 rounded-3xl border border-white/5 overflow-hidden group perspective-[1000px]">
            <div
               class="relative w-64 h-64 flex items-center justify-center [transform-style:preserve-3d] group-hover:[transform:rotateY(-20deg)_rotateX(10deg)] transition-transform duration-1000">

               <!-- Caparazones Protectores (Anillos 3D) -->
               <div
                  class="absolute w-[120%] h-[120%] border border-brand-green/30 rounded-full [transform:rotateX(70deg)] group-hover:[transform:rotateX(70deg)_rotateZ(180deg)] transition-transform duration-[3000ms] shadow-[inset_0_0_20px_rgba(127,219,182,0.2)]">
               </div>
               <div
                  class="absolute w-[120%] h-[120%] border border-brand-purple/30 rounded-full [transform:rotateY(70deg)] group-hover:[transform:rotateY(70deg)_rotateZ(-180deg)] transition-transform duration-[3000ms] shadow-[inset_0_0_20px_rgba(160,141,246,0.2)]">
               </div>

               <!-- Shield (Cubo de cristal protegiendo V) -->
               <div
                  class="absolute w-40 h-40 border border-white/10 bg-white/5 rounded-2xl backdrop-blur-[2px] shadow-[0_0_30px_rgba(255,255,255,0.05)] group-hover:bg-white/10 group-hover:shadow-[0_0_50px_rgba(127,219,182,0.15)] transition-all duration-700 flex items-center justify-center">
                  <div
                     class="absolute -top-[1px] -left-[1px] w-4 h-4 border-t-2 border-l-2 border-brand-green rounded-tl-xl transition-all group-hover:w-8 group-hover:h-8">
                  </div>
                  <div
                     class="absolute -bottom-[1px] -right-[1px] w-4 h-4 border-b-2 border-r-2 border-brand-purple rounded-br-xl transition-all group-hover:w-8 group-hover:h-8">
                  </div>

                  <!-- EL NUCLEO (V Fuerte en el centro) -->
                  <div
                     class="w-24 h-24 rounded-full bg-slate-900 border-2 border-slate-700 flex items-center justify-center z-10 group-hover:border-white/50 transition-colors duration-700 shadow-[0_0_20px_rgba(0,0,0,1)]">
                     <img src="<?= IMG_PATH ?>logomini.svg" alt="Voltora Vault"
                        class="w-12 h-12 drop-shadow-[0_0_5px_white] group-hover:drop-shadow-[0_0_15px_white] group-hover:scale-110 transition-all duration-700">
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   </div>
   </div>
   </div>

   <style>
      @keyframes dash {
         to {
            stroke-dashoffset: 400;
         }
      }
   </style>
</section>



<!-- Misión y Visión (El Manifiesto) -->
<section class="py-24 bg-slate-50 border-y border-slate-100 overflow-hidden relative">
   <!-- Decoración de fondo estructural -->
   <div class="absolute inset-0 opacity-20 bg-[radial-gradient(#A08DF6_1px,transparent_1px)] bg-[size:32px_32px]"></div>

   <div class="max-w-7xl mx-auto px-6 relative z-10">
      <div class="mb-20 text-center">
         <span class="text-[10px] font-black uppercase tracking-[0.3em] text-brand-purple bg-brand-purple/10 px-4 py-2 rounded-full border border-brand-purple/20">The Manifesto</span>
         <h2 class="text-4xl md:text-5xl font-black text-slate-dark mt-6">Arquitectura de nuestro <br /><span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-purple to-brand-green">Propósito Global</span></h2>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 gap-8 lg:gap-14 relative">

         <!-- Conector Central de Datos (Oculto en móvil) -->
         <div class="hidden md:block absolute top-[40%] left-1/4 right-1/4 h-[2px] bg-gradient-to-r from-brand-purple to-brand-green opacity-40 z-0">
            <div class="absolute top-1/2 left-0 w-3 h-3 bg-brand-purple rounded-full -translate-y-1/2 -translate-x-1/2 shadow-[0_0_15px_rgba(160,141,246,0.8)]"></div>
            <div class="absolute top-1/2 right-0 w-3 h-3 bg-brand-green rounded-full -translate-y-1/2 translate-x-1/2 shadow-[0_0_15px_rgba(127,219,182,0.8)]"></div>
            <!-- Partícula viajando -->
            <div class="absolute top-0 left-0 w-[40px] h-full bg-gradient-to-r from-transparent via-white to-transparent opacity-80 animate-[ping_3s_linear_infinite]" style="animation-duration: 3s; left: 0;"></div>
         </div>

         <!-- TARJETA 01: Misión (Terminal Mode Estricto) -->
         <div class="relative z-10 flex flex-col bg-slate-900 border-[6px] border-slate-800 rounded-[2.5rem] shadow-2xl group hover:-translate-y-3 transition-transform duration-500 overflow-hidden">
            <div class="absolute inset-0 bg-gradient-to-b from-brand-purple/5 to-transparent"></div>

            <!-- Top Bar tipo Terminal -->
            <div class="h-8 md:h-10 bg-slate-800 flex items-center px-6 border-b border-white/5">
               <div class="flex gap-2">
                  <span class="w-2.5 h-2.5 rounded-full bg-slate-600 group-hover:bg-red-500 transition-colors"></span>
                  <span class="w-2.5 h-2.5 rounded-full bg-slate-600 group-hover:bg-yellow-500 transition-colors delay-75"></span>
                  <span class="w-2.5 h-2.5 rounded-full bg-slate-600 group-hover:bg-green-500 transition-colors delay-150"></span>
               </div>
               <div class="ml-auto text-[10px] font-mono text-slate-500">./execute_mission.sh</div>
            </div>

            <div class="p-8 md:p-12 flex-1 flex flex-col">
               <div class="flex items-start gap-4 mb-8">
                  <div class="w-14 h-14 rounded-2xl bg-slate-800 border border-brand-purple/30 text-brand-purple flex items-center justify-center shrink-0 shadow-[inset_0_0_20px_rgba(160,141,246,0.1)] group-hover:scale-110 transition-transform duration-500">
                     <svg class="w-7 h-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                     </svg>
                  </div>
                  <div>
                     <div class="text-[10px] font-mono text-brand-purple uppercase tracking-widest mb-2 flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-brand-purple animate-pulse"></span> Present State</div>
                     <h3 class="text-4xl font-black text-white tracking-tight">Misión</h3>
                  </div>
               </div>

               <p class="text-slate-400 leading-relaxed text-lg mb-8 font-medium">
                  Nuestra misión es empoderar organizaciones desarrollando núcleos tecnológicos de grado empresarial. Convertimos requerimientos de negocio complejos en <span class="text-brand-purple">arquitecturas de software hiper-escalables</span>, seguras y libres de fallabilidad técnica.
               </p>

               <!-- Terminal output visual effect -->
               <div class="mt-auto bg-slate-950 rounded-xl p-4 font-mono text-xs text-slate-500 border border-white/5">
                  <span class="text-emerald-500">✔</span> Compiling robust infrastructure...<br>
                  <span class="text-emerald-500">✔</span> Zero-downtime architecture deployed.
               </div>
            </div>
         </div>

         <!-- TARJETA 02: Visión (Glass Mode Expansivo) -->
         <div class="relative z-10 flex flex-col bg-white border border-slate-200 rounded-[2.5rem] shadow-[0_20px_60px_rgba(0,0,0,0.06)] group hover:-translate-y-3 transition-transform duration-500 overflow-hidden">
            <!-- Brillo superior -->
            <div class="absolute -top-32 -right-32 w-64 h-64 bg-brand-green/20 rounded-full blur-[80px] group-hover:bg-brand-green/30 transition-colors duration-700"></div>

            <!-- Minimal UI Header -->
            <div class="h-8 md:h-10 bg-slate-50/50 flex items-center px-6 border-b border-slate-100 backdrop-blur-md">
               <div class="text-[10px] font-mono text-slate-400">DATA_PROJECTION // YEAR: 2030+</div>
               <div class="ml-auto w-2 h-2 rounded-full bg-brand-green shadow-[0_0_10px_rgba(127,219,182,1)]"></div>
            </div>

            <div class="p-8 md:p-12 flex-1 flex flex-col relative z-10">
               <div class="flex items-start gap-4 mb-8">
                  <div class="w-14 h-14 rounded-2xl bg-emerald-50 text-brand-green border border-emerald-100 flex items-center justify-center shrink-0 group-hover:scale-110 transition-transform duration-500">
                     <svg class="w-7 h-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                     </svg>
                  </div>
                  <div>
                     <div class="text-[10px] font-mono text-brand-green uppercase tracking-widest mb-2 flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full border border-brand-green"></span> Future State</div>
                     <h3 class="text-4xl font-black text-slate-dark tracking-tight">Visión</h3>
                  </div>
               </div>

               <p class="text-slate-600 leading-relaxed text-lg mb-8 font-medium">
                  Ser reconocidos globalmente como el motor principal detrás de las plataformas digitales más resilientes. Queremos establecer <span class="text-brand-green font-bold">los nuevos estándares definitivos</span> sobre los que la industria construirá el software del mañana.
               </p>

               <!-- Network nodes visual effect -->
               <div class="mt-auto grid grid-cols-3 gap-2">
                  <div class="h-10 rounded-xl bg-slate-50 border border-slate-100 flex items-center justify-center text-[9px] font-bold text-slate-400 uppercase tracking-wider group-hover:border-brand-green/30 group-hover:text-brand-green transition-all">Impacto</div>
                  <div class="h-10 rounded-xl bg-slate-50 border border-slate-100 flex items-center justify-center text-[9px] font-bold text-slate-400 uppercase tracking-wider group-hover:border-brand-green/30 group-hover:text-brand-green transition-all delay-75">Global</div>
                  <div class="h-10 rounded-xl bg-slate-50 border border-slate-100 flex items-center justify-center text-[9px] font-bold text-slate-400 uppercase tracking-wider group-hover:border-brand-green/30 group-hover:text-brand-green transition-all delay-150">Legado</div>
               </div>
            </div>
         </div>

      </div>
   </div>
</section>

<!-- Valores Centrales -->
<section class="py-24 bg-white">
   <div class="max-w-7xl mx-auto px-6">
      <div class="text-center mb-16">
         <h2 class="text-brand-purple font-bold text-[10px] uppercase tracking-[0.3em] mb-4">Principios Core</h2>
         <h3 class="text-3xl md:text-5xl font-black text-slate-dark leading-tight tracking-tighter">Nuestros Valores
            <br> Fundamentales
         </h3>
      </div>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
         <div
            class="p-8 rounded-3xl border border-slate-100 hover:border-brand-purple/30 hover:shadow-xl transition-all group bg-slate-50/50">
            <div
               class="w-14 h-14 bg-white text-brand-purple rounded-xl shadow-sm flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
               <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                     d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z">
                  </path>
               </svg>
            </div>
            <h4 class="text-xl font-black text-slate-dark mb-4 tracking-tight">Precisión Absoluta</h4>
            <p class="text-sm text-slate-body leading-relaxed">Atención meticulosa al detalle. Desde la planificación
               de la arquitectura hasta el despliegue a producción, garantizamos un margen de error cercano a cero.
            </p>
         </div>

         <div
            class="p-8 rounded-3xl border border-slate-100 hover:border-brand-green/50 hover:shadow-xl transition-all group bg-slate-50/50">
            <div
               class="w-14 h-14 bg-white text-brand-green rounded-xl shadow-sm flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
               <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                     d="M13 10V3L4 14h7v7l9-11h-7z"></path>
               </svg>
            </div>
            <h4 class="text-xl font-black text-slate-dark mb-4 tracking-tight">Rendimiento Operativo</h4>
            <p class="text-sm text-slate-body leading-relaxed">Optimizamos cada consulta y cada proceso para lograr
               tiempos de respuesta de latencia ultra baja. Velocidad que se traduce en conversiones.</p>
         </div>

         <div
            class="p-8 rounded-3xl border border-slate-100 hover:border-brand-purple/30 hover:shadow-xl transition-all group bg-slate-50/50">
            <div
               class="w-14 h-14 bg-white text-brand-purple rounded-xl shadow-sm flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
               <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                     d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4">
                  </path>
               </svg>
            </div>
            <h4 class="text-xl font-black text-slate-dark mb-4 tracking-tight">Escalabilidad Nativa</h4>
            <p class="text-sm text-slate-body leading-relaxed">Nuestros sistemas están preparados para crecer.
               Estructuras modulares que evolucionan fluidamente con las necesidades expansivas de su empresa.</p>
         </div>
      </div>
   </div>
</section>


<!-- Our Path (Trayectoria y Evolución) -->
<section class="py-24 bg-slate-50 border-y border-slate-100 overflow-hidden relative">
   <div class="absolute left-1/2 top-0 bottom-0 w-px bg-slate-200 hidden md:block opacity-50"></div>

   <div class="max-w-7xl mx-auto px-6 relative z-10">
      <div class="text-center mb-20">
         <h2 class="text-brand-purple font-bold text-[10px] uppercase tracking-[0.3em] mb-4">Evolución Continua</h2>
         <h3 class="text-3xl md:text-5xl font-black text-slate-dark leading-tight tracking-tighter">Nuestro Camino
            <br> hacia la Perfección
         </h3>
      </div>

      <div class="max-w-4xl mx-auto space-y-16">
         <!-- Milestone 1 -->
         <div class="relative flex items-center justify-between md:justify-normal group flex-col md:flex-row">
            <div class="md:w-1/2 flex justify-end md:pr-12 text-center md:text-right w-full mb-8 md:mb-0">
               <div
                  class="p-8 bg-white border border-slate-100 rounded-3xl shadow-sm hover:border-brand-purple/30 transition-all">
                  <span class="text-3xl font-black text-slate-dark tracking-tighter block mb-2">Fundación y
                     Base</span>
                  <p class="text-slate-body text-sm leading-relaxed">Nacimos con la premisa de que el software debía
                     construirse como ingeniería civil: sobre bases robustas y con cálculos precisos, no sobre
                     improvisación.</p>
               </div>
            </div>
            <div
               class="absolute left-1/2 -ml-2.5 w-5 h-5 rounded-full bg-white border-[4px] border-brand-purple z-10 hidden md:block group-hover:scale-125 transition-transform shadow-[0_0_15px_rgba(160,141,246,0.4)]">
            </div>
            <div class="md:w-1/2 md:pl-12 flex justify-start items-center w-full">
               <span
                  class="text-[10px] font-black uppercase tracking-[0.3em] text-brand-purple bg-brand-purple/10 px-4 py-2 rounded-full">El
                  Origen</span>
            </div>
         </div>

         <!-- Milestone 2 -->
         <div
            class="relative flex items-center justify-between md:justify-normal group flex-col md:flex-row-reverse">
            <div class="md:w-1/2 flex justify-start md:pl-12 text-center md:text-left w-full mb-8 md:mb-0">
               <div
                  class="p-8 bg-white border border-slate-100 rounded-3xl shadow-sm hover:border-brand-green/40 transition-all">
                  <span class="text-3xl font-black text-slate-dark tracking-tighter block mb-2">Escalado
                     Crítico</span>
                  <p class="text-slate-body text-sm leading-relaxed">Desarrollamos frameworks propietarios para
                     acelerar el despliegue de microservicios. Implementamos arquitecturas serverless permitiendo a
                     nuestros clientes escalar de forma infinita.</p>
               </div>
            </div>
            <div
               class="absolute right-1/2 -mr-2.5 w-5 h-5 rounded-full bg-white border-[4px] border-brand-green z-10 hidden md:block group-hover:scale-125 transition-transform shadow-[0_0_15px_rgba(127,219,182,0.4)]">
            </div>
            <div class="md:w-1/2 md:pr-12 flex justify-end items-center w-full">
               <span
                  class="text-[10px] font-black uppercase tracking-[0.3em] text-brand-green bg-brand-green-light px-4 py-2 rounded-full">Expansión
                  Layer</span>
            </div>
         </div>

         <!-- Milestone 3 -->
         <div class="relative flex items-center justify-between md:justify-normal group flex-col md:flex-row">
            <div class="md:w-1/2 flex justify-end md:pr-12 text-center md:text-right w-full mb-8 md:mb-0">
               <div
                  class="p-8 bg-slate-dark text-white border border-slate-800 rounded-3xl shadow-xl hover:border-brand-purple transition-all relative overflow-hidden">
                  <div class="absolute right-0 bottom-0 w-32 h-32 bg-brand-purple/20 rounded-tl-full blur-2xl"></div>
                  <span class="text-3xl font-black text-white tracking-tighter block mb-2 relative z-10">Liderazgo
                     Corporativo</span>
                  <p class="text-slate-400 text-sm leading-relaxed relative z-10">Hoy nos consolidamos como la
                     principal firma de ingeniería para ecosistemas digitales complejos, integrando automatización e
                     inteligencia predictiva.</p>
               </div>
            </div>
            <div
               class="absolute left-1/2 -ml-3 w-6 h-6 rounded-full bg-slate-900 border-[6px] border-white shadow-xl z-10 hidden md:block group-hover:scale-125 transition-transform">
            </div>
            <div class="md:w-1/2 md:pl-12 flex justify-start items-center w-full">
               <span
                  class="text-[10px] font-black uppercase tracking-[0.3em] text-slate-dark bg-slate-200 px-4 py-2 rounded-full">Estado
                  Actual</span>
            </div>
         </div>
      </div>
   </div>
</section>

<!-- Leadership / Equipo Clave (Tech & Design harmony) -->
<section class="py-24 bg-white">
   <div class="max-w-7xl mx-auto px-6">
      <div class="flex flex-col md:flex-row justify-between items-end mb-16 gap-8">
         <div class="max-w-2xl">
            <h2 class="text-brand-purple font-bold text-[10px] uppercase tracking-[0.3em] mb-4">Capital Humano</h2>
            <h3 class="text-3xl md:text-5xl font-black text-slate-dark leading-tight tracking-tighter">Mentes
               Maestras <br> detrás del Código.</h3>
         </div>
         <p class="text-slate-body font-medium max-w-sm mb-2">No contratamos "programadores". Integramos arquitectos
            de sistemas apasionados por resolver problemas imposibles.</p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
         <!-- Leader 1 -->
         <div class="group cursor-pointer">
            <div class="relative h-[320px] rounded-[2rem] bg-slate-100 overflow-hidden mb-6 border border-slate-200">
               <div
                  class="absolute inset-0 bg-gradient-to-t from-slate-900/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 z-10">
               </div>
               <!-- Placeholder abstract shape instead of photo -->
               <div
                  class="absolute inset-0 flex items-center justify-center bg-slate-100 group-hover:bg-slate-50 transition-colors">
                  <div
                     class="w-32 h-32 rounded-full border border-slate-200 flex items-center justify-center relative">
                     <div class="w-16 h-16 bg-slate-200 rounded-full group-hover:scale-90 transition-transform">
                     </div>
                     <div class="absolute top-0 right-0 w-3 h-3 bg-brand-purple rounded-full"></div>
                  </div>
               </div>

               <div
                  class="absolute bottom-6 left-6 right-6 z-20 translate-y-4 opacity-0 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-300">
                  <div class="flex gap-2 mb-2">
                     <span
                        class="w-8 h-8 rounded-full bg-white/20 flex items-center justify-center text-white backdrop-blur-md hover:bg-white/40 transition-colors">in</span>
                  </div>
               </div>
            </div>
            <h4 class="text-xl font-black text-slate-dark tracking-tight">Estrategia Global</h4>
            <p class="text-[10px] font-bold text-brand-purple uppercase tracking-widest mt-1">Chief Executive Officer
            </p>
         </div>

         <!-- Leader 2 -->
         <div class="group cursor-pointer md:-translate-y-8">
            <div class="relative h-[320px] rounded-[2rem] bg-slate-100 overflow-hidden mb-6 border border-slate-200">
               <div
                  class="absolute inset-0 bg-gradient-to-t from-slate-900/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 z-10">
               </div>
               <div
                  class="absolute inset-0 flex items-center justify-center bg-slate-100 group-hover:bg-slate-50 transition-colors">
                  <div
                     class="w-32 h-32 rotate-45 border border-slate-200 flex items-center justify-center relative group-hover:rotate-90 transition-transform duration-700">
                     <div class="w-16 h-16 bg-brand-green/20 border border-brand-green/40"></div>
                  </div>
               </div>
            </div>
            <h4 class="text-xl font-black text-slate-dark tracking-tight">Arquitectura Core</h4>
            <p class="text-[10px] font-bold text-brand-green uppercase tracking-widest mt-1">Chief Technology Officer
            </p>
         </div>

         <!-- Leader 3 -->
         <div class="group cursor-pointer">
            <div class="relative h-[320px] rounded-[2rem] bg-slate-100 overflow-hidden mb-6 border border-slate-200">
               <div
                  class="absolute inset-0 bg-gradient-to-t from-slate-900/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 z-10">
               </div>
               <div
                  class="absolute inset-0 flex items-center justify-center bg-slate-100 group-hover:bg-slate-50 transition-colors">
                  <div
                     class="w-32 h-32 rounded-2xl border border-slate-200 flex items-center justify-center relative overflow-hidden">
                     <div
                        class="absolute inset-x-0 bottom-0 bg-slate-200 group-hover:h-full h-1/2 transition-all duration-500">
                     </div>
                  </div>
               </div>
            </div>
            <h4 class="text-xl font-black text-slate-dark tracking-tight">Data & IA</h4>
            <p class="text-[10px] font-bold text-slate-500 uppercase tracking-widest mt-1">Head of Engineering</p>
         </div>

         <!-- Leader 4 -->
         <div class="group cursor-pointer md:-translate-y-8">
            <div class="relative h-[320px] rounded-[2rem] bg-slate-100 overflow-hidden mb-6 border border-slate-200">
               <div
                  class="absolute inset-0 bg-gradient-to-t from-slate-900/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 z-10">
               </div>
               <div
                  class="absolute inset-0 flex items-center justify-center bg-slate-100 group-hover:bg-slate-50 transition-colors">
                  <div class="w-32 h-32 flex flex-col gap-2">
                     <div class="flex-1 bg-slate-200 rounded-lg group-hover:bg-brand-purple/20 transition-colors">
                     </div>
                     <div
                        class="flex-1 bg-slate-200 rounded-lg group-hover:bg-brand-purple/40 transition-colors delay-75">
                     </div>
                     <div
                        class="flex-1 bg-slate-200 rounded-lg group-hover:bg-brand-purple/60 transition-colors delay-150">
                     </div>
                  </div>
               </div>
            </div>
            <h4 class="text-xl font-black text-slate-dark tracking-tight">Experiencia & UI</h4>
            <p class="text-[10px] font-bold text-brand-purple uppercase tracking-widest mt-1">Lead Product Designer
            </p>
         </div>
      </div>
   </div>
</section>

<!-- La Metodología de Trabajo (Methodology Data Flow) -->
<section class="py-32 bg-slate-dark text-white overflow-hidden relative border-t border-slate-800">
   <!-- Background Grid -->
   <div class="absolute inset-0 bg-[radial-gradient(#ffffff0a_1px,transparent_1px)] bg-[size:24px_24px] opacity-20">
   </div>

   <div class="max-w-7xl mx-auto px-6 relative z-10">
      <div class="text-center mb-20">
         <div class="inline-flex items-center gap-2 mb-6 bg-white/5 border border-white/10 px-4 py-2 rounded-full">
            <div class="w-2 h-2 rounded-full bg-brand-green animate-pulse"></div>
            <span class="text-[10px] font-black uppercase tracking-[0.2em] text-slate-300">Protocolo Operativo</span>
         </div>
         <h3 class="text-3xl md:text-5xl font-black leading-tight tracking-tighter mb-6">Framework de Ejecución <br>
            <span class="text-brand-green">Voltora Core</span>
         </h3>
         <p class="text-slate-400 max-w-2xl mx-auto text-lg">Un proceso estandarizado para transformar ideas
            complejas en código desplegado en producción, sin caos ni sorpresas.</p>
      </div>

      <!-- Interactive Pipeline UI -->
      <div
         class="bg-slate-900/80 backdrop-blur-xl border border-white/10 rounded-[2.5rem] p-6 text-left shadow-2xl group/window relative overflow-hidden">
         <!-- Glow background effect on hover -->
         <div
            class="absolute inset-0 bg-gradient-to-tr from-brand-purple/5 to-brand-green/5 opacity-0 group-hover/window:opacity-100 transition-opacity duration-1000 pointer-events-none">
         </div>

         <div class="relative flex items-center mb-8 px-4 py-3 border-b border-white/5 z-10">
            <div class="flex gap-2">
               <div
                  class="w-3 h-3 rounded-full bg-slate-600 group-hover/window:bg-red-500 transition-colors duration-300">
               </div>
               <div
                  class="w-3 h-3 rounded-full bg-slate-600 group-hover/window:bg-yellow-500 transition-colors duration-300 delay-75">
               </div>
               <div
                  class="w-3 h-3 rounded-full bg-slate-600 group-hover/window:bg-green-500 transition-colors duration-300 delay-150">
               </div>
            </div>
            <span
               class="ml-6 text-[10px] items-center flex gap-2 font-mono text-white/40 tracking-widest uppercase bg-slate-800/50 px-3 py-1.5 rounded-md border border-white/5 group-hover/window:border-white/20 transition-colors">
               <svg class="w-3 h-3 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                     d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
               </svg>
               deployment_pipeline.yaml
            </span>
         </div>

         <div class="grid grid-cols-1 lg:grid-cols-4 gap-4 px-2 pb-4 relative z-10">

            <!-- Phase 1 -->
            <div
               class="p-6 bg-white/5 hover:bg-white/10 rounded-2xl border border-transparent hover:border-white/10 transition-all group relative overflow-hidden cursor-default">
               <div
                  class="absolute inset-0 bg-[linear-gradient(45deg,transparent_25%,rgba(255,255,255,0.05)_50%,transparent_75%)] bg-[length:250%_250%,100%_100%] opacity-0 group-hover:opacity-100 group-hover:[animation:shimmer_3s_infinite_linear] transition-opacity duration-300 pointer-events-none">
               </div>
               <div
                  class="text-brand-purple font-mono text-[11px] mb-4 group-hover:-translate-y-1 transition-transform relative z-10">
                  01_DISCOVERY</div>
               <h4 class="text-xl font-bold mb-3 tracking-tight relative z-10">Auditoría Técnica</h4>
               <p class="text-xs text-slate-400 leading-relaxed mb-6 relative z-10">Mapeamos la infraestructura
                  actual y definimos
                  la arquitectura lógica y bases de datos necesarias para escalar.</p>
               <div class="h-1.5 w-full bg-slate-800 rounded-full overflow-hidden relative z-10">
                  <div class="h-full bg-brand-purple w-1/4"></div>
               </div>
            </div>

            <!-- Phase 2 -->
            <div
               class="p-6 bg-white/5 hover:bg-white/10 rounded-2xl border border-transparent hover:border-white/10 transition-all group relative overflow-hidden cursor-default">
               <div
                  class="absolute inset-0 bg-[linear-gradient(45deg,transparent_25%,rgba(255,255,255,0.05)_50%,transparent_75%)] bg-[length:250%_250%,100%_100%] opacity-0 group-hover:opacity-100 group-hover:[animation:shimmer_3s_infinite_linear] transition-opacity duration-300 pointer-events-none">
               </div>
               <div
                  class="text-brand-green font-mono text-[11px] mb-4 group-hover:-translate-y-1 transition-transform relative z-10">
                  02_PROTOTYPE</div>
               <h4 class="text-xl font-bold mb-3 tracking-tight relative z-10">Prototipo UI/UX</h4>
               <p class="text-xs text-slate-400 leading-relaxed mb-6 relative z-10">Diseñamos la estructura en Figma
                  con la
                  experiencia de usuario y UI final antes de escribir una línea de código.</p>
               <div class="h-1.5 w-full bg-slate-800 rounded-full overflow-hidden relative z-10">
                  <div class="h-full bg-brand-green w-2/4"></div>
               </div>
            </div>

            <!-- Phase 3 -->
            <div
               class="p-6 bg-white/5 hover:bg-white/10 rounded-2xl border border-transparent hover:border-white/10 transition-all group relative overflow-hidden cursor-default">
               <div class="absolute right-0 top-0 w-24 h-24 bg-brand-purple/10 rounded-full blur-2xl"></div>
               <div
                  class="absolute inset-0 bg-[linear-gradient(45deg,transparent_25%,rgba(255,255,255,0.05)_50%,transparent_75%)] bg-[length:250%_250%,100%_100%] opacity-0 group-hover:opacity-100 group-hover:[animation:shimmer_3s_infinite_linear] transition-opacity duration-300 pointer-events-none">
               </div>
               <div
                  class="text-brand-purple font-mono text-[11px] mb-4 relative z-10 group-hover:-translate-y-1 transition-transform">
                  03_ENGINEERING</div>
               <h4 class="text-xl font-bold mb-3 tracking-tight relative z-10">Desarrollo Core</h4>
               <p class="text-xs text-slate-400 leading-relaxed mb-6 relative z-10">Implementación de frontend, APIs
                  backend y conexión a bases de datos con testing automatizado integrado.</p>
               <div class="h-1.5 w-full bg-slate-800 rounded-full overflow-hidden relative z-10">
                  <div class="h-full bg-brand-purple w-3/4"></div>
               </div>
            </div>

            <!-- Phase 4 -->
            <div
               class="p-6 bg-brand-green/10 border border-brand-green/20 hover:bg-brand-green/20 rounded-2xl transition-all group relative overflow-hidden cursor-default">
               <div
                  class="absolute inset-0 bg-[linear-gradient(45deg,transparent_25%,rgba(255,255,255,0.1)_50%,transparent_75%)] bg-[length:250%_250%,100%_100%] opacity-0 group-hover:opacity-100 group-hover:[animation:shimmer_3s_infinite_linear] transition-opacity duration-300 pointer-events-none">
               </div>
               <div
                  class="absolute -right-4 -bottom-4 w-20 h-20 bg-brand-green/20 rounded-full blur-xl group-hover:scale-150 transition-transform duration-500">
               </div>
               <div
                  class="text-brand-green font-mono text-[11px] mb-4 relative z-10 group-hover:-translate-y-1 transition-transform">
                  04_DEPLOYMENT</div>
               <h4 class="text-xl font-bold mb-3 tracking-tight text-brand-green relative z-10">Lanzamiento</h4>
               <p class="text-xs text-brand-green-light/70 leading-relaxed mb-6 relative z-10">Despliegue a la nube,
                  validación de certificados SSL y monitoreo de estrés para lanzar al público en producción.</p>
               <div
                  class="h-1.5 w-full bg-slate-800 rounded-full overflow-hidden relative z-10 shadow-[0_0_10px_rgba(127,219,182,0.3)]">
                  <div class="h-full bg-brand-green w-full relative">
                     <div class="absolute inset-0 bg-white/50 w-full animate-pulse"></div>
                  </div>
               </div>
            </div>

         </div>
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
         <a href="#"
            class="btn-serious bg-brand-green text-white hover:opacity-90 flex items-center justify-center gap-2">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
               <path
                  d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.438 9.889-9.886.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884 0 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981z">
               </path>
            </svg>
            Contactar vía WhatsApp
         </a>
      </div>
   </div>
</section>

<!-- Complete Enterprise Footer -->
<?php include 'includes/footer.php'; ?>