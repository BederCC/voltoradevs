<?php include 'includes/header.php'; ?>

<!-- Projects Hero Section -->
<section class="py-24 md:py-32 bg-slate-dark text-white relative overflow-hidden">
   <!-- Glowing Ambient Effects -->
   <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-brand-purple/15 rounded-full blur-[100px] -translate-y-1/3 translate-x-1/4 pointer-events-none"></div>
   <div class="absolute bottom-0 left-0 w-[600px] h-[600px] bg-brand-green/10 rounded-full blur-[120px] translate-y-1/3 -translate-x-1/4 pointer-events-none"></div>
   <!-- Grid Overlay -->
   <div class="absolute inset-0 bg-[radial-gradient(#ffffff05_1px,transparent_1px)] bg-[size:32px_32px] opacity-35 pointer-events-none"></div>

   <div class="max-w-7xl mx-auto px-6 relative z-10 text-center space-y-6">
      <div class="flex items-center justify-center gap-2">
         <div class="h-[1px] w-8 bg-brand-green"></div>
         <span class="text-[10px] font-black uppercase tracking-[0.3em] text-brand-green">Galería de Ingeniería</span>
      </div>
      <h1 class="text-4xl md:text-6xl font-black tracking-tight leading-tight">
         Ecosistemas Digitales <br>
         <span class="text-brand-purple">Que Mueven Negocios.</span>
      </h1>
      <p class="text-slate-400 text-base md:text-lg max-w-2xl mx-auto leading-relaxed font-medium">
         Diseñamos y programamos núcleos tecnológicos robustos, escalables y orientados a la automatización de procesos empresariales críticos.
      </p>
   </div>
</section>

<!-- Filter and Projects Grid Section -->
<section class="py-20 bg-slate-50 relative min-h-screen">
   <div class="max-w-7xl mx-auto px-6">
      
      <!-- Premium Filter Bar -->
      <div class="flex flex-wrap justify-center gap-3 mb-16" id="filter-bar">
         <button data-filter="all" class="filter-btn active text-xs font-black uppercase tracking-widest px-6 py-3 rounded-full border border-slate-200 bg-white text-slate-800 hover:border-brand-purple transition-all duration-300 cursor-pointer">
            Todos
         </button>
         <button data-filter="ecommerce" class="filter-btn text-xs font-black uppercase tracking-widest px-6 py-3 rounded-full border border-slate-200 bg-white text-slate-400 hover:text-slate-800 hover:border-brand-purple transition-all duration-300 cursor-pointer">
            E-Commerce
         </button>
         <button data-filter="software" class="filter-btn text-xs font-black uppercase tracking-widest px-6 py-3 rounded-full border border-slate-200 bg-white text-slate-400 hover:text-slate-800 hover:border-brand-purple transition-all duration-300 cursor-pointer">
            Software a Medida
         </button>
         <button data-filter="erp" class="filter-btn text-xs font-black uppercase tracking-widest px-6 py-3 rounded-full border border-slate-200 bg-white text-slate-400 hover:text-slate-800 hover:border-brand-purple transition-all duration-300 cursor-pointer">
            Sistemas ERP / CRM
         </button>
      </div>

      <!-- Projects Grid -->
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-12" id="projects-grid">
         
         <!-- Project 1: NexCart (E-Commerce) -->
         <div class="project-card bg-white border border-slate-200/80 rounded-3xl overflow-hidden transition-all duration-500 hover:shadow-[0_30px_60px_rgba(0,0,0,0.06)] hover:-translate-y-1.5 flex flex-col justify-between group" data-category="ecommerce">
            <div>
               <!-- Interactive Interface Cover -->
               <div class="h-64 bg-slate-dark relative overflow-hidden flex items-center justify-center p-6 border-b border-slate-100">
                  <div class="absolute inset-0 bg-[radial-gradient(#ffffff03_1px,transparent_1px)] bg-[size:16px_16px] pointer-events-none"></div>
                  <!-- Glassmorphic Mockup UI -->
                  <div class="w-full max-w-sm bg-white/5 border border-white/10 rounded-2xl p-5 relative z-10 backdrop-blur-md space-y-4">
                     <div class="flex justify-between items-center border-b border-white/5 pb-2">
                        <span class="text-[9px] font-mono text-slate-400">NEXCART B2B ENGINE</span>
                        <span class="text-[9px] px-2 py-0.5 rounded-full bg-brand-green/20 text-brand-green font-bold uppercase tracking-wider">+182% Ventas</span>
                     </div>
                     <div class="h-16 flex items-end gap-2.5">
                        <div class="w-full h-8 bg-brand-green/20 rounded"></div>
                        <div class="w-full h-12 bg-brand-green/40 rounded"></div>
                        <div class="w-full h-16 bg-brand-green rounded"></div>
                        <div class="w-full h-10 bg-brand-green/30 rounded"></div>
                        <div class="w-full h-14 bg-brand-green/60 rounded"></div>
                     </div>
                     <div class="flex justify-between text-[8px] font-mono text-slate-500">
                        <span>Sprint 4</span>
                        <span>Staging Live</span>
                     </div>
                  </div>
               </div>
               
               <!-- Content -->
               <div class="p-8 space-y-4">
                  <div class="flex items-center gap-2">
                     <span class="text-[9px] font-black uppercase tracking-widest text-brand-green bg-brand-green/10 px-2.5 py-1 rounded-md">E-Commerce B2B</span>
                     <span class="text-xs text-slate-400 font-semibold">Agroindustria</span>
                  </div>
                  <h3 class="text-2xl font-black text-slate-dark group-hover:text-brand-purple transition-colors">NexCart Enterprise</h3>
                  <p class="text-sm text-slate-body leading-relaxed font-medium">
                     Plataforma comercial de distribución masiva y facturación electrónica automatizada integrada con sistemas de control de almacén ERP SAP.
                  </p>
               </div>
            </div>

            <!-- Tech Badges & CTA -->
            <div class="p-8 pt-0 flex flex-wrap gap-2 items-center justify-between border-t border-slate-100 mt-6">
               <div class="flex flex-wrap gap-1.5">
                  <span class="text-[9px] font-mono bg-slate-100 text-slate-600 px-2.5 py-1 rounded-md font-semibold">React.js</span>
                  <span class="text-[9px] font-mono bg-slate-100 text-slate-600 px-2.5 py-1 rounded-md font-semibold">Node.js</span>
                  <span class="text-[9px] font-mono bg-slate-100 text-slate-600 px-2.5 py-1 rounded-md font-semibold">PostgreSQL</span>
                  <span class="text-[9px] font-mono bg-slate-100 text-slate-600 px-2.5 py-1 rounded-md font-semibold">AWS EC2</span>
               </div>
               <a href="<?= BASE_URL ?>contacto" class="text-xs font-black uppercase tracking-widest text-brand-purple flex items-center gap-1.5 group-hover:gap-2.5 transition-all">
                  Cotizar <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"/></svg>
               </a>
            </div>
         </div>

         <!-- Project 2: Medixflow (Software a Medida) -->
         <div class="project-card bg-white border border-slate-200/80 rounded-3xl overflow-hidden transition-all duration-500 hover:shadow-[0_30px_60px_rgba(0,0,0,0.06)] hover:-translate-y-1.5 flex flex-col justify-between group" data-category="software">
            <div>
               <!-- Interactive Interface Cover -->
               <div class="h-64 bg-slate-dark relative overflow-hidden flex items-center justify-center p-6 border-b border-slate-100">
                  <div class="absolute inset-0 bg-[radial-gradient(#ffffff03_1px,transparent_1px)] bg-[size:16px_16px] pointer-events-none"></div>
                  <!-- Medical Grid Mockup UI -->
                  <div class="w-full max-w-sm bg-white/5 border border-white/10 rounded-2xl p-5 relative z-10 backdrop-blur-md space-y-4">
                     <div class="flex justify-between items-center border-b border-white/5 pb-2">
                        <span class="text-[9px] font-mono text-slate-400">MEDIXFLOW CORE</span>
                        <span class="text-[9px] px-2 py-0.5 rounded-full bg-brand-purple/20 text-brand-purple font-bold uppercase tracking-wider">HIPAA Compliant</span>
                     </div>
                     <div class="space-y-2">
                        <div class="flex justify-between text-[10px] font-mono text-slate-300">
                           <span>Frecuencia Cardíaca</span>
                           <span class="text-brand-purple">74 lpm</span>
                        </div>
                        <svg class="w-full h-10 text-brand-purple" viewBox="0 0 100 20" fill="none">
                           <path d="M0 10h10l5-8l5 16l5-8h10l3-5l3 10l3-5h10l5-8l5 16l5-8h10" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                     </div>
                     <div class="flex justify-between text-[8px] font-mono text-slate-500">
                        <span>Filtro de Datos</span>
                        <span>Staging Online</span>
                     </div>
                  </div>
               </div>
               
               <!-- Content -->
               <div class="p-8 space-y-4">
                  <div class="flex items-center gap-2">
                     <span class="text-[9px] font-black uppercase tracking-widest text-brand-purple bg-brand-purple/10 px-2.5 py-1 rounded-md">Software a Medida</span>
                     <span class="text-xs text-slate-400 font-semibold">Salud & Clínicas</span>
                  </div>
                  <h3 class="text-2xl font-black text-slate-dark group-hover:text-brand-purple transition-colors">Medixflow E-Health Suite</h3>
                  <p class="text-sm text-slate-body leading-relaxed font-medium">
                     Software de gestión clínica, legajos médicos digitales en la nube, y control inteligente de agenda y turnos con encriptación avanzada.
                  </p>
               </div>
            </div>

            <!-- Tech Badges & CTA -->
            <div class="p-8 pt-0 flex flex-wrap gap-2 items-center justify-between border-t border-slate-100 mt-6">
               <div class="flex flex-wrap gap-1.5">
                  <span class="text-[9px] font-mono bg-slate-100 text-slate-600 px-2.5 py-1 rounded-md font-semibold">Node.js</span>
                  <span class="text-[9px] font-mono bg-slate-100 text-slate-600 px-2.5 py-1 rounded-md font-semibold">FastAPI</span>
                  <span class="text-[9px] font-mono bg-slate-100 text-slate-600 px-2.5 py-1 rounded-md font-semibold">MongoDB</span>
                  <span class="text-[9px] font-mono bg-slate-100 text-slate-600 px-2.5 py-1 rounded-md font-semibold">Docker</span>
               </div>
               <a href="<?= BASE_URL ?>contacto" class="text-xs font-black uppercase tracking-widest text-brand-purple flex items-center gap-1.5 group-hover:gap-2.5 transition-all">
                  Cotizar <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"/></svg>
               </a>
            </div>
         </div>

         <!-- Project 3: BuildTrack (Sistemas ERP) -->
         <div class="project-card bg-white border border-slate-200/80 rounded-3xl overflow-hidden transition-all duration-500 hover:shadow-[0_30px_60px_rgba(0,0,0,0.06)] hover:-translate-y-1.5 flex flex-col justify-between group" data-category="erp">
            <div>
               <!-- Interactive Interface Cover -->
               <div class="h-64 bg-slate-dark relative overflow-hidden flex items-center justify-center p-6 border-b border-slate-100">
                  <div class="absolute inset-0 bg-[radial-gradient(#ffffff03_1px,transparent_1px)] bg-[size:16px_16px] pointer-events-none"></div>
                  <!-- Gantt Chart Mockup UI -->
                  <div class="w-full max-w-sm bg-white/5 border border-white/10 rounded-2xl p-5 relative z-10 backdrop-blur-md space-y-4">
                     <div class="flex justify-between items-center border-b border-white/5 pb-2">
                        <span class="text-[9px] font-mono text-slate-400">BUILDTRACK ERP</span>
                        <span class="text-[9px] px-2 py-0.5 rounded-full bg-brand-green/20 text-brand-green font-bold uppercase tracking-wider">Multi-Obra</span>
                     </div>
                     <div class="space-y-2">
                        <div class="flex justify-between items-center text-[9px] text-slate-300 font-mono">
                           <span>Avance Físico</span>
                           <span>84.2%</span>
                        </div>
                        <div class="w-full h-2 bg-white/10 rounded-full overflow-hidden">
                           <div class="h-full bg-brand-green w-[84.2%] rounded-full"></div>
                        </div>
                     </div>
                     <div class="flex justify-between text-[8px] font-mono text-slate-500">
                        <span>Sprint 8</span>
                        <span>Production Cloud</span>
                     </div>
                  </div>
               </div>
               
               <!-- Content -->
               <div class="p-8 space-y-4">
                  <div class="flex items-center gap-2">
                     <span class="text-[9px] font-black uppercase tracking-widest text-brand-green bg-brand-green/10 px-2.5 py-1 rounded-md">ERP & CRM</span>
                     <span class="text-xs text-slate-400 font-semibold">Construcción</span>
                  </div>
                  <h3 class="text-2xl font-black text-slate-dark group-hover:text-brand-purple transition-colors">BuildTrack Inmobiliario</h3>
                  <p class="text-sm text-slate-body leading-relaxed font-medium">
                     Sistema ERP en la nube que gestiona presupuestos complejos de compras, cubicación de materiales y avance físico de proyectos de construcción.
                  </p>
               </div>
            </div>

            <!-- Tech Badges & CTA -->
            <div class="p-8 pt-0 flex flex-wrap gap-2 items-center justify-between border-t border-slate-100 mt-6">
               <div class="flex flex-wrap gap-1.5">
                  <span class="text-[9px] font-mono bg-slate-100 text-slate-600 px-2.5 py-1 rounded-md font-semibold">Angular</span>
                  <span class="text-[9px] font-mono bg-slate-100 text-slate-600 px-2.5 py-1 rounded-md font-semibold">Laravel</span>
                  <span class="text-[9px] font-mono bg-slate-100 text-slate-600 px-2.5 py-1 rounded-md font-semibold">MySQL</span>
                  <span class="text-[9px] font-mono bg-slate-100 text-slate-600 px-2.5 py-1 rounded-md font-semibold">GCP Kubernetes</span>
               </div>
               <a href="<?= BASE_URL ?>contacto" class="text-xs font-black uppercase tracking-widest text-brand-purple flex items-center gap-1.5 group-hover:gap-2.5 transition-all">
                  Cotizar <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"/></svg>
               </a>
            </div>
         </div>

         <!-- Project 4: FinPay Ledger (Software a Medida) -->
         <div class="project-card bg-white border border-slate-200/80 rounded-3xl overflow-hidden transition-all duration-500 hover:shadow-[0_30px_60px_rgba(0,0,0,0.06)] hover:-translate-y-1.5 flex flex-col justify-between group" data-category="software">
            <div>
               <!-- Interactive Interface Cover -->
               <div class="h-64 bg-slate-dark relative overflow-hidden flex items-center justify-center p-6 border-b border-slate-100">
                  <div class="absolute inset-0 bg-[radial-gradient(#ffffff03_1px,transparent_1px)] bg-[size:16px_16px] pointer-events-none"></div>
                  <!-- Financial Grid Mockup UI -->
                  <div class="w-full max-w-sm bg-white/5 border border-white/10 rounded-2xl p-5 relative z-10 backdrop-blur-md space-y-4">
                     <div class="flex justify-between items-center border-b border-white/5 pb-2">
                        <span class="text-[9px] font-mono text-slate-400">FINPAY CORE ENGINE</span>
                        <span class="text-[9px] px-2 py-0.5 rounded-full bg-brand-purple/20 text-brand-purple font-bold uppercase tracking-wider">0.2ms Latency</span>
                     </div>
                     <div class="space-y-1">
                        <div class="text-[10px] text-brand-green font-mono">>>> Ledger Conciliated Successfully</div>
                        <div class="text-[9px] text-slate-400 font-mono">> Active Nodes: 4/4</div>
                        <div class="text-[9px] text-slate-500 font-mono">> Transactions /sec: 14,249</div>
                     </div>
                     <div class="flex justify-between text-[8px] font-mono text-slate-500">
                        <span>Sprint 12</span>
                        <span>Staging Verified</span>
                     </div>
                  </div>
               </div>
               
               <!-- Content -->
               <div class="p-8 space-y-4">
                  <div class="flex items-center gap-2">
                     <span class="text-[9px] font-black uppercase tracking-widest text-brand-purple bg-brand-purple/10 px-2.5 py-1 rounded-md">Software a Medida</span>
                     <span class="text-xs text-slate-400 font-semibold">Fintech & Bancos</span>
                  </div>
                  <h3 class="text-2xl font-black text-slate-dark group-hover:text-brand-purple transition-colors">FinPay Ledger Engine</h3>
                  <p class="text-sm text-slate-body leading-relaxed font-medium">
                     Motor transaccional de alta velocidad para microservicios financieros de conciliación automática y liquidaciones en tiempo real.
                  </p>
               </div>
            </div>

            <!-- Tech Badges & CTA -->
            <div class="p-8 pt-0 flex flex-wrap gap-2 items-center justify-between border-t border-slate-100 mt-6">
               <div class="flex flex-wrap gap-1.5">
                  <span class="text-[9px] font-mono bg-slate-100 text-slate-600 px-2.5 py-1 rounded-md font-semibold">Go (Golang)</span>
                  <span class="text-[9px] font-mono bg-slate-100 text-slate-600 px-2.5 py-1 rounded-md font-semibold">Redis Cache</span>
                  <span class="text-[9px] font-mono bg-slate-100 text-slate-600 px-2.5 py-1 rounded-md font-semibold">Apache Kafka</span>
                  <span class="text-[9px] font-mono bg-slate-100 text-slate-600 px-2.5 py-1 rounded-md font-semibold">Kubernetes</span>
               </div>
               <a href="<?= BASE_URL ?>contacto" class="text-xs font-black uppercase tracking-widest text-brand-purple flex items-center gap-1.5 group-hover:gap-2.5 transition-all">
                  Cotizar <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"/></svg>
               </a>
            </div>
         </div>

      </div>
   </div>
</section>

<!-- Filter Script -->
<script>
document.addEventListener('DOMContentLoaded', () => {
   const filterButtons = document.querySelectorAll('#filter-bar .filter-btn');
   const projectCards = document.querySelectorAll('#projects-grid .project-card');

   filterButtons.forEach(btn => {
      btn.addEventListener('click', () => {
         // Active class toggle
         filterButtons.forEach(b => b.classList.remove('active', 'text-slate-800', 'border-brand-purple'));
         filterButtons.forEach(b => b.classList.add('text-slate-400'));
         btn.classList.remove('text-slate-400');
         btn.classList.add('active', 'text-slate-800', 'border-brand-purple');

         const filterValue = btn.getAttribute('data-filter');

         // Filter logic with animation
         projectCards.forEach(card => {
            const cardCategory = card.getAttribute('data-category');

            if (filterValue === 'all' || cardCategory === filterValue) {
               card.style.display = 'flex';
               // Fade in
               gsap.fromTo(card, 
                  { opacity: 0, y: 15 },
                  { opacity: 1, y: 0, duration: 0.4, ease: 'power2.out' }
               );
            } else {
               // Fade out and hide
               gsap.to(card, {
                  opacity: 0,
                  y: 15,
                  duration: 0.3,
                  ease: 'power2.in',
                  onComplete: () => {
                     card.style.display = 'none';
                  }
               });
            }
         });
      });
   });
});
</script>

<?php include 'includes/footer.php'; ?>
