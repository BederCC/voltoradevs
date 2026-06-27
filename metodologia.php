<?php include 'includes/header.php'; ?>

<!-- Methodology Hero Section -->
<section class="py-24 md:py-32 bg-slate-50 text-slate-dark relative overflow-hidden">
   <!-- Ambient glows -->
   <div class="absolute top-0 left-0 w-[500px] h-[500px] bg-brand-purple/5 rounded-full blur-[100px] -translate-y-1/2 -translate-x-1/4 pointer-events-none"></div>
   <div class="absolute bottom-0 right-0 w-[600px] h-[600px] bg-brand-green/5 rounded-full blur-[120px] translate-y-1/3 translate-x-1/4 pointer-events-none"></div>
   <!-- Grid Background -->
   <div class="absolute inset-0 bg-[radial-gradient(#0f172a03_1px,transparent_1px)] bg-[size:24px_24px] opacity-100 pointer-events-none"></div>

   <div class="max-w-7xl mx-auto px-6 relative z-10">
      <div class="max-w-3xl">
         <div class="flex items-center gap-2 mb-6">
            <div class="h-[1px] w-8 bg-brand-purple"></div>
            <span class="text-[10px] font-black uppercase tracking-[0.3em] text-brand-purple">Metodología de Ingeniería NX</span>
         </div>
         <h1 class="text-4xl md:text-6xl font-black leading-[1.1] tracking-tight mb-8">
            Ingeniería de Software <br>
            <span class="text-brand-purple">Transparente y de Precisión.</span>
         </h1>
         <p class="text-lg md:text-xl text-slate-body leading-relaxed font-medium max-w-2xl">
            No creemos en cajas negras. Creemos en un proceso estructurado, ágil y centrado en la transparencia absoluta, donde usted controla y observa el progreso de su software en tiempo real.
         </p>
      </div>
   </div>
</section>

<!-- Section 1: Real-time Progress (Avance en tiempo real) -->
<section class="py-24 bg-white relative">
   <div class="max-w-7xl mx-auto px-6">
      <div class="grid grid-cols-1 lg:grid-cols-12 gap-16 items-center">
         <!-- Left Column: Context & Promise -->
         <div class="lg:col-span-6 space-y-8">
            <div class="space-y-4">
               <div class="flex items-center gap-2">
                  <div class="h-[1px] w-6 bg-brand-green"></div>
                  <span class="text-[10px] font-black uppercase tracking-[0.3em] text-brand-green">Monitoreo Continuo</span>
               </div>
               <h2 class="text-3xl md:text-4xl font-black text-slate-dark tracking-tight">
                  Avance en Tiempo Real y Despliegues Diarios.
               </h2>
               <p class="text-slate-body text-base leading-relaxed font-medium">
                  Eliminamos la incertidumbre de los proyectos de desarrollo. Desde el primer día, habilitamos un entorno de pruebas espejo (Staging) sincronizado automáticamente con cada avance de nuestro equipo técnico.
               </p>
            </div>

            <!-- Features list -->
            <div class="space-y-6">
               <div class="flex gap-4 items-start">
                  <div class="w-8 h-8 rounded-lg bg-brand-purple/10 text-brand-purple flex items-center justify-center shrink-0 mt-1">
                     <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2".5 d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                     </svg>
                  </div>
                  <div>
                     <h4 class="font-black text-sm text-slate-dark uppercase tracking-wider mb-1">CI/CD & Integración Continua</h4>
                     <p class="text-xs text-slate-500 leading-relaxed font-medium">Automatizamos el flujo de trabajo para que cada funcionalidad aprobada se compile y publique de inmediato, permitiéndole hacer pruebas interactivas en vivo.</p>
                  </div>
               </div>

               <div class="flex gap-4 items-start">
                  <div class="w-8 h-8 rounded-lg bg-brand-purple/10 text-brand-purple flex items-center justify-center shrink-0 mt-1">
                     <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2".5 d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                     </svg>
                  </div>
                  <div>
                     <h4 class="font-black text-sm text-slate-dark uppercase tracking-wider mb-1">Canales de Comunicación Directa</h4>
                     <p class="text-xs text-slate-500 leading-relaxed font-medium">Usted formará parte de nuestro espacio de comunicación diaria en tiempo real para resolver dudas técnicas y coordinar mejoras de diseño sin retrasos.</p>
                  </div>
               </div>

               <div class="flex gap-4 items-start">
                  <div class="w-8 h-8 rounded-lg bg-brand-purple/10 text-brand-purple flex items-center justify-center shrink-0 mt-1">
                     <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2".5 d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"/>
                     </svg>
                  </div>
                  <div>
                     <h4 class="font-black text-sm text-slate-dark uppercase tracking-wider mb-1">Demos Semanales Claras</h4>
                     <p class="text-xs text-slate-500 leading-relaxed font-medium">Cada fin de sprint realizamos una demostración interactiva en video de los avances del software, para que observe de manera tangible cómo avanza su inversión.</p>
                  </div>
               </div>
            </div>
         </div>

         <!-- Right Column: Visual Dashboard Mockup -->
         <div class="lg:col-span-6">
            <div class="relative bg-slate-dark rounded-3xl p-6 shadow-[0_30px_60px_rgba(15,23,42,0.15)] border border-slate-800 text-white overflow-hidden group">
               <!-- Subtle glows -->
               <div class="absolute -top-10 -right-10 w-40 h-40 bg-brand-purple/20 rounded-full blur-[40px] pointer-events-none"></div>
               
               <div class="flex items-center justify-between border-b border-white/5 pb-4 mb-6">
                  <div class="flex items-center gap-2">
                     <div class="w-2.5 h-2.5 rounded-full bg-red-500"></div>
                     <div class="w-2.5 h-2.5 rounded-full bg-yellow-500"></div>
                     <div class="w-2.5 h-2.5 rounded-full bg-green-500"></div>
                  </div>
                  <span class="text-[9px] font-mono text-slate-500 uppercase tracking-widest">Voltora Dev Dashboard v2.0</span>
               </div>

               <!-- Live progress simulation -->
               <div class="space-y-6">
                  <div class="p-4 bg-white/5 rounded-2xl border border-white/5 space-y-3">
                     <div class="flex justify-between items-center text-xs font-black uppercase tracking-wider">
                        <span class="text-brand-green">Módulo de Reservas & Cobros</span>
                        <span class="text-slate-400">92% Completado</span>
                     </div>
                     <div class="w-full h-1.5 bg-white/10 rounded-full overflow-hidden">
                        <div class="h-full bg-brand-green w-[92%] rounded-full"></div>
                     </div>
                     <div class="flex items-center gap-2 text-[10px] text-slate-400 font-medium">
                        <span class="w-1.5 h-1.5 rounded-full bg-brand-green animate-pulse"></span> Despliegue en Staging: Exitoso hace 5 min
                     </div>
                  </div>

                  <div class="p-4 bg-white/5 rounded-2xl border border-white/5 space-y-3">
                     <div class="flex justify-between items-center text-xs font-black uppercase tracking-wider">
                        <span class="text-brand-purple">Pasarela de Pagos Stripe / Niubiz</span>
                        <span class="text-slate-400">100% Completado</span>
                     </div>
                     <div class="w-full h-1.5 bg-white/10 rounded-full overflow-hidden">
                        <div class="h-full bg-brand-purple w-full rounded-full"></div>
                     </div>
                     <div class="flex items-center gap-2 text-[10px] text-slate-400 font-medium">
                        <span class="w-1.5 h-1.5 rounded-full bg-brand-purple"></span> Pruebas E2E Automáticas: 42/42 Pasadas
                     </div>
                  </div>

                  <div class="p-4 bg-white/5 rounded-2xl border border-white/5 space-y-3">
                     <div class="flex justify-between items-center text-xs font-black uppercase tracking-wider">
                        <span class="text-slate-300">Despliegue a AWS Cloudfront (Pruebas)</span>
                        <span class="text-slate-400">Listo para QA</span>
                     </div>
                     <div class="w-full h-1.5 bg-white/10 rounded-full overflow-hidden">
                        <div class="h-full bg-white/20 w-[100%] rounded-full"></div>
                     </div>
                     <div class="flex items-center gap-2 text-[10px] text-slate-400 font-medium">
                        <span class="w-1.5 h-1.5 rounded-full bg-white/40"></span> Pendiente de revisión del cliente
                     </div>
                  </div>
               </div>

            </div>
         </div>
      </div>
   </div>
</section>

<!-- Section 2: Core Development Methodologies (Buenas metodologías) -->
<section class="py-24 bg-slate-50 relative">
   <div class="max-w-7xl mx-auto px-6">
      <div class="max-w-3xl mb-16 space-y-4">
         <div class="flex items-center gap-2">
            <div class="h-[1px] w-6 bg-brand-purple"></div>
            <span class="text-[10px] font-black uppercase tracking-[0.3em] text-brand-purple">Nuestros Estándares</span>
         </div>
         <h2 class="text-3xl md:text-4xl font-black text-slate-dark tracking-tight">
            Metodologías de Ingeniería Aplicadas.
         </h2>
         <p class="text-slate-body text-base font-medium">
            No improvisamos. Cada línea de código y cada flujo de base de datos se estructura siguiendo las mejores prácticas recomendadas de la industria para garantizar estabilidad y rendimiento.
         </p>
      </div>

      <!-- Grid of Methodologies -->
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
         
         <!-- Standard 1: Clean Architecture -->
         <div class="bg-white border border-slate-200/80 p-8 rounded-3xl transition-all duration-300 hover:shadow-[0_20px_40px_rgba(0,0,0,0.03)] hover:-translate-y-1 hover:border-brand-purple/20 group">
            <div class="w-12 h-12 bg-brand-purple/10 text-brand-purple rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
               <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/>
               </svg>
            </div>
            <h3 class="font-black text-lg text-slate-dark mb-3">Clean Architecture</h3>
            <p class="text-xs text-slate-500 leading-relaxed font-medium">
               Separamos el software en capas independientes de la interfaz o base de datos. Si necesita migrar de base de datos o modificar la vista, el núcleo de su negocio no se altera.
            </p>
         </div>

         <!-- Standard 2: SCRUM / Kanban -->
         <div class="bg-white border border-slate-200/80 p-8 rounded-3xl transition-all duration-300 hover:shadow-[0_20px_40px_rgba(0,0,0,0.03)] hover:-translate-y-1 hover:border-brand-purple/20 group">
            <div class="w-12 h-12 bg-brand-purple/10 text-brand-purple rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
               <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"/>
               </svg>
            </div>
            <h3 class="font-black text-lg text-slate-dark mb-3">Desarrollo Ágil</h3>
            <p class="text-xs text-slate-500 leading-relaxed font-medium">
               Dividimos el desarrollo en Sprints (entregas quincenales). Esto le da flexibilidad para reorientar prioridades comerciales a medida que el software cobra vida.
            </p>
         </div>

         <!-- Standard 3: Test-Driven Development (TDD) -->
         <div class="bg-white border border-slate-200/80 p-8 rounded-3xl transition-all duration-300 hover:shadow-[0_20px_40px_rgba(0,0,0,0.03)] hover:-translate-y-1 hover:border-brand-purple/20 group">
            <div class="w-12 h-12 bg-brand-purple/10 text-brand-purple rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
               <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
               </svg>
            </div>
            <h3 class="font-black text-lg text-slate-dark mb-3">TDD & QA Automatizado</h3>
            <p class="text-xs text-slate-500 leading-relaxed font-medium">
               Escribimos pruebas automatizadas antes de desplegar código a producción. Esto evita que actualizaciones nuevas alteren o rompan funcionalidades que ya funcionaban bien.
            </p>
         </div>

         <!-- Standard 4: DevSecOps -->
         <div class="bg-white border border-slate-200/80 p-8 rounded-3xl transition-all duration-300 hover:shadow-[0_20px_40px_rgba(0,0,0,0.03)] hover:-translate-y-1 hover:border-brand-purple/20 group">
            <div class="w-12 h-12 bg-brand-purple/10 text-brand-purple rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
               <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
               </svg>
            </div>
            <h3 class="font-black text-lg text-slate-dark mb-3">DevSecOps & Nube</h3>
            <p class="text-xs text-slate-500 leading-relaxed font-medium">
               Seguridad desde la concepción del código. Configuramos servidores virtuales, CDN y bases de datos con encriptación avanzada de datos en reposo y tránsito (SSL/TLS).
            </p>
         </div>

      </div>
   </div>
</section>

<!-- Section 3: High-End UI/UX Design System (Diseño y UX) -->
<section class="py-24 bg-white relative">
   <div class="max-w-7xl mx-auto px-6">
      <div class="grid grid-cols-1 lg:grid-cols-12 gap-16 items-center">
         
         <!-- Left Column: Figma / Design Grid -->
         <div class="lg:col-span-6 relative flex items-center justify-center">
            <!-- Background design system grid elements -->
            <div class="w-full max-w-[480px] p-6 bg-slate-50 rounded-3xl border border-slate-100 space-y-4">
               <div class="flex items-center gap-3">
                  <div class="w-8 h-8 rounded bg-brand-purple text-white flex items-center justify-center font-bold text-xs">V</div>
                  <div class="space-y-1">
                     <p class="text-[10px] font-black text-slate-800 uppercase">Voltora UI Kit</p>
                     <p class="text-[8px] text-slate-400 font-mono">v4.0.2 / Component Library</p>
                  </div>
               </div>
               
               <!-- Typography and buttons cards -->
               <div class="p-4 bg-white border border-slate-200/60 rounded-xl space-y-3">
                  <div class="text-[10px] text-slate-400 font-mono uppercase tracking-widest border-b border-slate-100 pb-2">Botones Corporativos</div>
                  <div class="flex flex-wrap gap-2.5">
                     <button class="bg-brand-purple text-white text-[9px] font-bold px-4 py-2 rounded-full shadow-lg shadow-brand-purple/20">Primary Active</button>
                     <button class="border border-slate-200 text-slate-500 text-[9px] font-bold px-4 py-2 rounded-full">Outline Normal</button>
                  </div>
               </div>

               <div class="p-4 bg-white border border-slate-200/60 rounded-xl space-y-3">
                  <div class="text-[10px] text-slate-400 font-mono uppercase tracking-widest border-b border-slate-100 pb-2">Paleta Cromática del Sistema</div>
                  <div class="flex items-center gap-3">
                     <div class="flex flex-col items-center gap-1">
                        <div class="w-6 h-6 rounded bg-brand-purple"></div>
                        <span class="text-[8px] font-mono text-slate-400">#A08DF6</span>
                     </div>
                     <div class="flex flex-col items-center gap-1">
                        <div class="w-6 h-6 rounded bg-brand-green"></div>
                        <span class="text-[8px] font-mono text-slate-400">#7FDBB6</span>
                     </div>
                     <div class="flex flex-col items-center gap-1">
                        <div class="w-6 h-6 rounded bg-slate-dark"></div>
                        <span class="text-[8px] font-mono text-slate-400">#0F172A</span>
                     </div>
                  </div>
               </div>
            </div>
         </div>

         <!-- Right Column: Context & UI excellence -->
         <div class="lg:col-span-6 space-y-8">
            <div class="space-y-4">
               <div class="flex items-center gap-2">
                  <div class="h-[1px] w-6 bg-brand-purple"></div>
                  <span class="text-[10px] font-black uppercase tracking-[0.3em] text-brand-purple">Diseño Sin Plantillas</span>
               </div>
               <h2 class="text-3xl md:text-4xl font-black text-slate-dark tracking-tight">
                  Sistemas de Diseño Exclusivos y UI/UX de Alta Fidelidad.
               </h2>
               <p class="text-slate-body text-base leading-relaxed font-medium">
                  El software potente requiere de una interfaz intuitiva. No compramos plantillas genéricas. Diseñamos sistemas de componentes específicos para su marca en Figma y los trasladamos a código limpio.
               </p>
            </div>

            <!-- Focus points -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
               <div class="space-y-2">
                  <h4 class="font-black text-sm text-slate-dark uppercase tracking-wider">Ergonomía de Interfaz</h4>
                  <p class="text-xs text-slate-500 leading-relaxed font-medium">
                     Estudiamos el flujo y comportamiento de sus usuarios finales para minimizar la cantidad de clics necesarios para completar acciones críticas.
                  </p>
               </div>
               <div class="space-y-2">
                  <h4 class="font-black text-sm text-slate-dark uppercase tracking-wider">Carga Instantánea</h4>
                  <p class="text-xs text-slate-500 leading-relaxed font-medium">
                     Optimizamos cada recurso visual y componente CSS para que las pantallas carguen en menos de 1.5 segundos en dispositivos móviles y de escritorio.
                  </p>
               </div>
            </div>
         </div>

      </div>
   </div>
</section>

<!-- Call to Action Section -->
<section class="py-24 bg-slate-dark text-white text-center relative overflow-hidden">
   <!-- Glow elements -->
   <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-brand-purple/10 rounded-full blur-[120px] pointer-events-none"></div>

   <div class="max-w-4xl mx-auto px-6 relative z-10 space-y-8">
      <h2 class="text-3xl md:text-5xl font-black tracking-tight leading-tight">
         ¿Listo para Construir con <br>
         <span class="text-brand-purple">Ingeniería de Alta Precisión?</span>
      </h2>
      <p class="text-slate-400 text-base max-w-lg mx-auto leading-relaxed font-medium">
         Hablemos sobre las necesidades tecnológicas de su organización y definamos la arquitectura ideal para su proyecto.
      </p>
      <div class="flex justify-center gap-4">
         <a href="<?= BASE_URL ?>contacto" class="btn-serious bg-brand-purple text-white hover:opacity-90 hover:shadow-[0_0_30px_rgba(160,141,246,0.3)] transition-all duration-300">
            Iniciar Conversación
         </a>
      </div>
   </div>
</section>

<?php include 'includes/footer.php'; ?>
