<?php include 'includes/header.php'; ?>

<!-- Hero Section -->
<section class="py-24 md:py-32 overflow-hidden bg-slate-50 border-b border-slate-100 relative">
   <!-- Glow background decoration -->
   <div class="absolute top-0 right-0 w-96 h-96 bg-brand-purple/10 rounded-full blur-[80px] -translate-y-1/2 translate-x-1/4 pointer-events-none"></div>
   <div class="absolute bottom-0 left-0 w-96 h-96 bg-brand-green/10 rounded-full blur-[80px] translate-y-1/2 -translate-x-1/4 pointer-events-none"></div>
   
   <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 lg:grid-cols-2 gap-20 items-center relative z-10">
      <div>
         <div class="mb-8 flex items-center gap-2">
            <div class="h-[1px] w-8 bg-brand-purple"></div>
            <span class="text-[10px] font-black uppercase tracking-[0.3em] text-brand-purple">Especialidades</span>
         </div>
         <h1 class="text-4xl md:text-6xl font-black text-slate-dark leading-[1.1] mb-8 tracking-tight">
            Software a Medida para <br>
            <span class="text-brand-purple">Cada Sector.</span>
         </h1>
         <p class="text-lg text-slate-body leading-relaxed max-w-lg font-medium mb-8">
            En la economía moderna, toda empresa es, en esencia, una compañía de software. Diseñamos e implementamos ecosistemas digitales y páginas web de alta ingeniería para optimizar operaciones y multiplicar el retorno de inversión de cualquier industria.
         </p>
         <div class="flex flex-wrap gap-4">
            <a href="<?= BASE_URL ?>contacto" class="btn-serious bg-brand-purple text-white hover:opacity-90">
               Agendar Consulta
            </a>
         </div>
      </div>
      <div class="relative flex items-center justify-center w-full">
         <!-- Premium UI Card -->
         <div class="relative w-full max-w-[480px] h-[360px] bg-slate-dark text-white rounded-3xl shadow-[0_30px_60px_rgba(0,0,0,0.25)] p-8 overflow-hidden flex flex-col justify-between border border-white/10 group">
            <!-- Background Glow -->
            <div class="absolute -top-12 -right-12 w-48 h-48 bg-brand-purple/20 rounded-full blur-2xl group-hover:bg-brand-purple/35 transition-colors duration-500"></div>
            <div class="absolute -bottom-12 -left-12 w-48 h-48 bg-brand-green/20 rounded-full blur-2xl group-hover:bg-brand-green/35 transition-colors duration-500"></div>
            
            <div class="flex justify-between items-start relative z-10">
               <div class="flex gap-2">
                  <span class="w-2.5 h-2.5 rounded-full bg-slate-600 group-hover:bg-red-500 transition-colors"></span>
                  <span class="w-2.5 h-2.5 rounded-full bg-slate-600 group-hover:bg-yellow-500 transition-colors"></span>
                  <span class="w-2.5 h-2.5 rounded-full bg-slate-600 group-hover:bg-green-500 transition-colors"></span>
               </div>
               <span class="text-[9px] font-mono text-slate-400 bg-slate-900/50 px-3 py-1 rounded-full border border-white/5">voltora_matrix_core</span>
            </div>
            
            <div class="space-y-4 my-auto relative z-10">
               <div class="text-[10px] font-mono text-brand-green uppercase tracking-widest flex items-center gap-1.5">
                  <span class="w-2 h-2 rounded-full bg-brand-green animate-pulse"></span>
                  Sistemas Integrales Activos
               </div>
               <h3 class="text-3xl font-black tracking-tight text-white leading-tight">Digitalización en Todos los Niveles.</h3>
               <p class="text-sm text-slate-400 leading-relaxed font-medium">Unificamos canales de venta, automatizamos tareas repetitivas y robustecemos la infraestructura de su empresa.</p>
            </div>
            
            <div class="flex justify-between items-center border-t border-white/10 pt-6 relative z-10">
               <div class="flex gap-3">
                  <span class="w-12 h-2 bg-brand-purple rounded-full"></span>
                  <span class="w-8 h-2 bg-brand-green rounded-full"></span>
               </div>
               <span class="text-[10px] font-black text-brand-purple tracking-widest uppercase">99.99% Uptime</span>
            </div>
         </div>
      </div>
   </div>
</section>

<!-- Industries Grid Section -->
<section class="py-24 bg-white relative">
   <div class="max-w-7xl mx-auto px-6">
      
      <div class="text-center max-w-3xl mx-auto mb-20">
         <h2 class="text-3xl md:text-5xl font-black text-slate-dark tracking-tight mb-6">
            Industrias que Transformamos
         </h2>
         <p class="text-slate-body text-lg font-medium leading-relaxed">
            Analizamos la lógica de su negocio para construir el core tecnológico que necesita para crecer, asegurar clientes y optimizar operaciones cotidianas.
         </p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
         
         <!-- Card 1: Fintech & Banking -->
         <div id="fintech" class="bg-white border border-slate-200/80 p-8 rounded-3xl transition-all duration-300 hover:shadow-[0_20px_40px_rgba(0,0,0,0.03)] hover:-translate-y-1 hover:border-brand-purple/20 relative flex flex-col justify-between group">
            <div>
               <div class="w-14 h-14 bg-brand-purple/10 text-brand-purple rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                  <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                  </svg>
               </div>
               <h3 class="font-black text-xl text-slate-dark mb-4">Fintech & Banca</h3>
               <p class="text-sm text-slate-500 leading-relaxed mb-6 font-medium">
                  Las plataformas financieras requieren latencia ultra baja, seguridad infalible y procesamiento ininterrumpido. Creamos el motor que gestiona su flujo financiero digital.
               </p>
               <ul class="space-y-3 mb-8">
                  <li class="flex items-center gap-2 text-xs font-semibold text-slate-600">
                     <span class="w-1.5 h-1.5 rounded-full bg-brand-purple"></span> Pasarelas de pago integradas
                  </li>
                  <li class="flex items-center gap-2 text-xs font-semibold text-slate-600">
                     <span class="w-1.5 h-1.5 rounded-full bg-brand-purple"></span> Motores de cobro recurrente
                  </li>
                  <li class="flex items-center gap-2 text-xs font-semibold text-slate-600">
                     <span class="w-1.5 h-1.5 rounded-full bg-brand-purple"></span> APIs para Open Banking
                  </li>
               </ul>
            </div>
            <div class="bg-slate-50 border-l-2 border-brand-purple p-4 rounded-r-xl text-xs text-slate-600 leading-relaxed">
               <strong>¿Por qué es crítico?</strong> Garantiza la confianza del cliente, la protección de fondos y la escalabilidad operativa de su modelo de negocio.
            </div>
         </div>

         <!-- Card 2: E-Health Systems -->
         <div id="salud" class="bg-white border border-slate-200/80 p-8 rounded-3xl transition-all duration-300 hover:shadow-[0_20px_40px_rgba(0,0,0,0.03)] hover:-translate-y-1 hover:border-brand-green/20 relative flex flex-col justify-between group">
            <div>
               <div class="w-14 h-14 bg-brand-green/10 text-brand-green rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                  <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                  </svg>
               </div>
               <h3 class="font-black text-xl text-slate-dark mb-4">Salud & E-Health</h3>
               <p class="text-sm text-slate-500 leading-relaxed mb-6 font-medium">
                  Centralizar la información de salud agiliza la atención médica y salva vidas. Creamos sistemas interactivos seguros para clínicas, consultorios y aseguradoras.
               </p>
               <ul class="space-y-3 mb-8">
                  <li class="flex items-center gap-2 text-xs font-semibold text-slate-600">
                     <span class="w-1.5 h-1.5 rounded-full bg-brand-green"></span> Historias Clínicas Electrónicas (EMR)
                  </li>
                  <li class="flex items-center gap-2 text-xs font-semibold text-slate-600">
                     <span class="w-1.5 h-1.5 rounded-full bg-brand-green"></span> Agendamiento de citas integrado
                  </li>
                  <li class="flex items-center gap-2 text-xs font-semibold text-slate-600">
                     <span class="w-1.5 h-1.5 rounded-full bg-brand-green"></span> Telemedicina y receta digital
                  </li>
               </ul>
            </div>
            <div class="bg-slate-50 border-l-2 border-brand-green p-4 rounded-r-xl text-xs text-slate-600 leading-relaxed">
               <strong>¿Por qué es crítico?</strong> Cumple con las regulaciones de confidencialidad de datos (HIPAA) y mejora sustancialmente la experiencia del paciente.
            </div>
         </div>

         <!-- Card 3: Retail & Logistics -->
         <div id="retail" class="bg-white border border-slate-200/80 p-8 rounded-3xl transition-all duration-300 hover:shadow-[0_20px_40px_rgba(0,0,0,0.03)] hover:-translate-y-1 hover:border-brand-purple/20 relative flex flex-col justify-between group">
            <div>
               <div class="w-14 h-14 bg-brand-purple/10 text-brand-purple rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                  <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/>
                  </svg>
               </div>
               <h3 class="font-black text-xl text-slate-dark mb-4">Retail & Logística</h3>
               <p class="text-sm text-slate-500 leading-relaxed mb-6 font-medium">
                  El comercio digital exige sincronización perfecta. Diseñamos e-commerce veloces y sistemas de inventario en tiempo real que optimizan la última milla.
               </p>
               <ul class="space-y-3 mb-8">
                  <li class="flex items-center gap-2 text-xs font-semibold text-slate-600">
                     <span class="w-1.5 h-1.5 rounded-full bg-brand-purple"></span> E-Commerce Corporativo SEO optimizado
                  </li>
                  <li class="flex items-center gap-2 text-xs font-semibold text-slate-600">
                     <span class="w-1.5 h-1.5 rounded-full bg-brand-purple"></span> Gestión de Almacenes (WMS) a medida
                  </li>
                  <li class="flex items-center gap-2 text-xs font-semibold text-slate-600">
                     <span class="w-1.5 h-1.5 rounded-full bg-brand-purple"></span> Seguimiento de despachos en vivo
                  </li>
               </ul>
            </div>
            <div class="bg-slate-50 border-l-2 border-brand-purple p-4 rounded-r-xl text-xs text-slate-600 leading-relaxed">
               <strong>¿Por qué es crítico?</strong> Minimiza pérdidas de stock, incrementa la conversión de compra y asegura la fidelidad del cliente con entregas transparentes.
            </div>
         </div>

         <!-- Card 4: Tourism & Fleet Management -->
         <div id="turismo" class="bg-white border border-slate-200/80 p-8 rounded-3xl transition-all duration-300 hover:shadow-[0_20px_40px_rgba(0,0,0,0.03)] hover:-translate-y-1 hover:border-brand-green/20 relative flex flex-col justify-between group">
            <div>
               <div class="w-14 h-14 bg-brand-green/10 text-brand-green rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                  <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"/>
                  </svg>
               </div>
               <h3 class="font-black text-xl text-slate-dark mb-4">Turismo, Viajes & Flotas</h3>
               <p class="text-sm text-slate-500 leading-relaxed mb-6 font-medium">
                  La inmediatez es clave en el turismo. Desarrollamos motores de reservas automatizados y consolas de geolocalización para flotas de transporte terrestre y turístico.
               </p>
               <ul class="space-y-3 mb-8">
                  <li class="flex items-center gap-2 text-xs font-semibold text-slate-600">
                     <span class="w-1.5 h-1.5 rounded-full bg-brand-green"></span> Motores de reserva internacionales
                  </li>
                  <li class="flex items-center gap-2 text-xs font-semibold text-slate-600">
                     <span class="w-1.5 h-1.5 rounded-full bg-brand-green"></span> Software de Control de Flotas y GPS
                  </li>
                  <li class="flex items-center gap-2 text-xs font-semibold text-slate-600">
                     <span class="w-1.5 h-1.5 rounded-full bg-brand-green"></span> Algoritmos de tarifas dinámicas
                  </li>
               </ul>
            </div>
            <div class="bg-slate-50 border-l-2 border-brand-green p-4 rounded-r-xl text-xs text-slate-600 leading-relaxed">
               <strong>¿Por qué es crítico?</strong> Habilita la venta directa e inmediata 24/7 sin comisiones a terceros y optimiza el uso de vehículos.
            </div>
         </div>

         <!-- Card 5: Education & LMS -->
         <div id="educacion" class="bg-white border border-slate-200/80 p-8 rounded-3xl transition-all duration-300 hover:shadow-[0_20px_40px_rgba(0,0,0,0.03)] hover:-translate-y-1 hover:border-brand-purple/20 relative flex flex-col justify-between group">
            <div>
               <div class="w-14 h-14 bg-brand-purple/10 text-brand-purple rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                  <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                  </svg>
               </div>
               <h3 class="font-black text-xl text-slate-dark mb-4">Educación & EdTech</h3>
               <p class="text-sm text-slate-500 leading-relaxed mb-6 font-medium">
                  El aprendizaje interactivo requiere estabilidad. Desarrollamos entornos de aprendizaje virtual (LMS) personalizados para colegios, universidades y academias corporativas.
               </p>
               <ul class="space-y-3 mb-8">
                  <li class="flex items-center gap-2 text-xs font-semibold text-slate-600">
                     <span class="w-1.5 h-1.5 rounded-full bg-brand-purple"></span> LMS y aulas virtuales a medida
                  </li>
                  <li class="flex items-center gap-2 text-xs font-semibold text-slate-600">
                     <span class="w-1.5 h-1.5 rounded-full bg-brand-purple"></span> Portales de autogestión de estudiantes
                  </li>
                  <li class="flex items-center gap-2 text-xs font-semibold text-slate-600">
                     <span class="w-1.5 h-1.5 rounded-full bg-brand-purple"></span> Calificaciones y reportes automatizados
                  </li>
               </ul>
            </div>
            <div class="bg-slate-50 border-l-2 border-brand-purple p-4 rounded-r-xl text-xs text-slate-600 leading-relaxed">
               <strong>¿Por qué es crítico?</strong> Extiende el alcance geográfico de sus cursos y alivia la carga de gestión administrativa de docentes.
            </div>
         </div>

         <!-- Card 6: Real Estate & Construction -->
         <div id="inmobiliaria" class="bg-white border border-slate-200/80 p-8 rounded-3xl transition-all duration-300 hover:shadow-[0_20px_40px_rgba(0,0,0,0.03)] hover:-translate-y-1 hover:border-brand-green/20 relative flex flex-col justify-between group">
            <div>
               <div class="w-14 h-14 bg-brand-green/10 text-brand-green rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                  <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                  </svg>
               </div>
               <h3 class="font-black text-xl text-slate-dark mb-4">Construcción & Inmobiliaria</h3>
               <p class="text-sm text-slate-500 leading-relaxed mb-6 font-medium">
                  La gestión de preventas y el control del avance de obra necesitan consolidar información ágilmente. Desarrollamos CRM y portales de catalogación interactivos.
               </p>
               <ul class="space-y-3 mb-8">
                  <li class="flex items-center gap-2 text-xs font-semibold text-slate-600">
                     <span class="w-1.5 h-1.5 rounded-full bg-brand-green"></span> Catálogos de proyectos con filtros 3D
                  </li>
                  <li class="flex items-center gap-2 text-xs font-semibold text-slate-600">
                     <span class="w-1.5 h-1.5 rounded-full bg-brand-green"></span> CRM especializado en preventa inmobiliaria
                  </li>
                  <li class="flex items-center gap-2 text-xs font-semibold text-slate-600">
                     <span class="w-1.5 h-1.5 rounded-full bg-brand-green"></span> Control de presupuestos de obra y compras
                  </li>
               </ul>
            </div>
            <div class="bg-slate-50 border-l-2 border-brand-green p-4 rounded-r-xl text-xs text-slate-600 leading-relaxed">
               <strong>¿Por qué es crítico?</strong> Acelera el ciclo de cierre comercial de inmuebles y previene desvíos presupuestarios en la ejecución de obra.
            </div>
         </div>

         <!-- Card 7: Professional Services -->
         <div id="servicios" class="bg-white border border-slate-200/80 p-8 rounded-3xl transition-all duration-300 hover:shadow-[0_20px_40px_rgba(0,0,0,0.03)] hover:-translate-y-1 hover:border-brand-purple/20 relative flex flex-col justify-between group">
            <div>
               <div class="w-14 h-14 bg-brand-purple/10 text-brand-purple rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                  <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                  </svg>
               </div>
               <h3 class="font-black text-xl text-slate-dark mb-4">Servicios Profesionales</h3>
               <p class="text-sm text-slate-500 leading-relaxed mb-6 font-medium">
                  Consultores, abogados y contadores necesitan proyectar confianza absoluta y optimizar su tiempo. Creamos portales corporativos para agilizar sus cotizaciones e intercambio de archivos.
               </p>
               <ul class="space-y-3 mb-8">
                  <li class="flex items-center gap-2 text-xs font-semibold text-slate-600">
                     <span class="w-1.5 h-1.5 rounded-full bg-brand-purple"></span> Agendamiento inteligente sincronizado
                  </li>
                  <li class="flex items-center gap-2 text-xs font-semibold text-slate-600">
                     <span class="w-1.5 h-1.5 rounded-full bg-brand-purple"></span> Portales de clientes y subida de documentos
                  </li>
                  <li class="flex items-center gap-2 text-xs font-semibold text-slate-600">
                     <span class="w-1.5 h-1.5 rounded-full bg-brand-purple"></span> Facturación automática y cobro online
                  </li>
               </ul>
            </div>
            <div class="bg-slate-50 border-l-2 border-brand-purple p-4 rounded-r-xl text-xs text-slate-600 leading-relaxed">
               <strong>¿Por qué es crítico?</strong> Eleva la seriedad de su firma y ahorra valiosas horas administrativas en la coordinación de citas y cobranzas.
            </div>
         </div>

         <!-- Card 8: Gastronomy & Food -->
         <div id="alimentos" class="bg-white border border-slate-200/80 p-8 rounded-3xl transition-all duration-300 hover:shadow-[0_20px_40px_rgba(0,0,0,0.03)] hover:-translate-y-1 hover:border-brand-green/20 relative flex flex-col justify-between group">
            <div>
               <div class="w-14 h-14 bg-brand-green/10 text-brand-green rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                  <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"/>
                  </svg>
               </div>
               <h3 class="font-black text-xl text-slate-dark mb-4">Restaurantes & Alimentos</h3>
               <p class="text-sm text-slate-500 leading-relaxed mb-6 font-medium">
                  El delivery directo y el control de comandas definen la rentabilidad de un restaurante. Desarrollamos pasarelas de pedidos a medida sin comisiones abusivas.
               </p>
               <ul class="space-y-3 mb-8">
                  <li class="flex items-center gap-2 text-xs font-semibold text-slate-600">
                     <span class="w-1.5 h-1.5 rounded-full bg-brand-green"></span> Tienda digital de pedidos propios
                  </li>
                  <li class="flex items-center gap-2 text-xs font-semibold text-slate-600">
                     <span class="w-1.5 h-1.5 rounded-full bg-brand-green"></span> Pantallas de cocina integradas para comandas
                  </li>
                  <li class="flex items-center gap-2 text-xs font-semibold text-slate-600">
                     <span class="w-1.5 h-1.5 rounded-full bg-brand-green"></span> Control de mesas y reservas online
                  </li>
               </ul>
            </div>
            <div class="bg-slate-50 border-l-2 border-brand-green p-4 rounded-r-xl text-xs text-slate-600 leading-relaxed">
               <strong>¿Por qué es crítico?</strong> Permite mantener el 100% de su margen de ganancia sin depender de apps de terceros y agiliza la cocina.
            </div>
         </div>

          <!-- Card 9: Industry & Custom ERP -->
          <div id="erp" class="bg-white border border-slate-200/80 p-8 rounded-3xl transition-all duration-300 hover:shadow-[0_20px_40px_rgba(0,0,0,0.03)] hover:-translate-y-1 hover:border-brand-purple/20 relative flex flex-col justify-between group">
             <div>
                <div class="w-14 h-14 bg-brand-purple/10 text-brand-purple rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                   <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/>
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                   </svg>
                </div>
                <h3 class="font-black text-xl text-slate-dark mb-4">Manufactura & ERPs</h3>
                <p class="text-sm text-slate-500 leading-relaxed mb-6 font-medium">
                   Elimine las ineficiencias de hojas de cálculo aisladas. Diseñamos planificadores de recursos y tableros industriales a medida para centralizar su producción.
                </p>
                <ul class="space-y-3 mb-8">
                   <li class="flex items-center gap-2 text-xs font-semibold text-slate-600">
                      <span class="w-1.5 h-1.5 rounded-full bg-brand-purple"></span> Planificación de Recursos Empresariales (ERP)
                   </li>
                   <li class="flex items-center gap-2 text-xs font-semibold text-slate-600">
                      <span class="w-1.5 h-1.5 rounded-full bg-brand-purple"></span> Software de Control de Producción y Merma
                   </li>
                   <li class="flex items-center gap-2 text-xs font-semibold text-slate-600">
                      <span class="w-1.5 h-1.5 rounded-full bg-brand-purple"></span> Sistemas de Mantenimiento Preventivo (CMMS)
                   </li>
                </ul>
             </div>
             <div class="bg-slate-50 border-l-2 border-brand-purple p-4 rounded-r-xl text-xs text-slate-600 leading-relaxed">
                <strong>¿Por qué es crítico?</strong> Otorga una visibilidad absoluta sobre costos de manufactura, automatiza flujos complejos y optimiza stock crítico de materias primas.
             </div>
          </div>

          <!-- Card 10: Gimnasios & Bienestar -->
          <div id="gimnasios" class="bg-white border border-slate-200/80 p-8 rounded-3xl transition-all duration-300 hover:shadow-[0_20px_40px_rgba(0,0,0,0.03)] hover:-translate-y-1 hover:border-brand-green/20 relative flex flex-col justify-between group">
             <div>
                <div class="w-14 h-14 bg-brand-green/10 text-brand-green rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                   <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                   </svg>
                </div>
                <h3 class="font-black text-xl text-slate-dark mb-4">Gimnasios & Bienestar</h3>
                <p class="text-sm text-slate-500 leading-relaxed mb-6 font-medium">
                   Automatice el control de accesos, planes y reservas de sus clientes. Diseñamos herramientas para gestionar membresías recurrentes y aforos.
                </p>
                <ul class="space-y-3 mb-8">
                   <li class="flex items-center gap-2 text-xs font-semibold text-slate-600">
                      <span class="w-1.5 h-1.5 rounded-full bg-brand-green"></span> Control de accesos automáticos (QR/huella)
                   </li>
                   <li class="flex items-center gap-2 text-xs font-semibold text-slate-600">
                      <span class="w-1.5 h-1.5 rounded-full bg-brand-green"></span> Gestión y cobro de membresías recurrentes
                   </li>
                   <li class="flex items-center gap-2 text-xs font-semibold text-slate-600">
                      <span class="w-1.5 h-1.5 rounded-full bg-brand-green"></span> Reserva online de clases y entrenamientos
                   </li>
                </ul>
             </div>
             <div class="bg-slate-50 border-l-2 border-brand-green p-4 rounded-r-xl text-xs text-slate-600 leading-relaxed">
                <strong>¿Por qué es crítico?</strong> Automatiza la recaudación de cuotas recurrentes de forma pasiva y evita aglomeraciones en las salas en horarios de alta afluencia.
             </div>
          </div>

          <!-- Card 11: Agroindustria & Exportación -->
          <div id="agro" class="bg-white border border-slate-200/80 p-8 rounded-3xl transition-all duration-300 hover:shadow-[0_20px_40px_rgba(0,0,0,0.03)] hover:-translate-y-1 hover:border-brand-purple/20 relative flex flex-col justify-between group">
             <div>
                <div class="w-14 h-14 bg-brand-purple/10 text-brand-purple rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                   <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.286L13 21l-2.286-6.857L5 12l5.714-2.286L13 3z"/>
                   </svg>
                </div>
                <h3 class="font-black text-xl text-slate-dark mb-4">Agroindustria & Exportación</h3>
                <p class="text-sm text-slate-500 leading-relaxed mb-6 font-medium">
                   La trazabilidad completa desde el campo a la mesa. Creamos sistemas para registrar cosechas, controles fitosanitarios y despachos de exportación.
                </p>
                <ul class="space-y-3 mb-8">
                   <li class="flex items-center gap-2 text-xs font-semibold text-slate-600">
                      <span class="w-1.5 h-1.5 rounded-full bg-brand-purple"></span> Trazabilidad y control de lotes cosechados
                   </li>
                   <li class="flex items-center gap-2 text-xs font-semibold text-slate-600">
                      <span class="w-1.5 h-1.5 rounded-full bg-brand-purple"></span> Registros fitosanitarios y de calidad
                   </li>
                   <li class="flex items-center gap-2 text-xs font-semibold text-slate-600">
                      <span class="w-1.5 h-1.5 rounded-full bg-brand-purple"></span> Despachos y logística internacional de carga
                   </li>
                </ul>
             </div>
             <div class="bg-slate-50 border-l-2 border-brand-purple p-4 rounded-r-xl text-xs text-slate-600 leading-relaxed">
                <strong>¿Por qué es crítico?</strong> Garantiza el cumplimiento estricto de regulaciones fitosanitarias internacionales de exportación y reduce pérdidas de merma.
             </div>
          </div>

          <!-- Card 12: Automotriz & Talleres -->
          <div id="automotriz" class="bg-white border border-slate-200/80 p-8 rounded-3xl transition-all duration-300 hover:shadow-[0_20px_40px_rgba(0,0,0,0.03)] hover:-translate-y-1 hover:border-brand-green/20 relative flex flex-col justify-between group">
             <div>
                <div class="w-14 h-14 bg-brand-green/10 text-brand-green rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                   <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/>
                   </svg>
                </div>
                <h3 class="font-black text-xl text-slate-dark mb-4">Automotriz & Talleres</h3>
                <p class="text-sm text-slate-500 leading-relaxed mb-6 font-medium">
                   Coordine citas y mantenga el historial de servicio de cada vehículo. Centralice cotizaciones y controle el inventario de repuestos críticos.
                </p>
                <ul class="space-y-3 mb-8">
                   <li class="flex items-center gap-2 text-xs font-semibold text-slate-600">
                      <span class="w-1.5 h-1.5 rounded-full bg-brand-green"></span> Agendamiento y cola de citas de vehículos
                   </li>
                   <li class="flex items-center gap-2 text-xs font-semibold text-slate-600">
                      <span class="w-1.5 h-1.5 rounded-full bg-brand-green"></span> Historial mecánico digitalizado por placa
                   </li>
                   <li class="flex items-center gap-2 text-xs font-semibold text-slate-600">
                      <span class="w-1.5 h-1.5 rounded-full bg-brand-green"></span> Alertas automáticas de stock de repuestos
                   </li>
                </ul>
             </div>
             <div class="bg-slate-50 border-l-2 border-brand-green p-4 rounded-r-xl text-xs text-slate-600 leading-relaxed">
                <strong>¿Por qué es crítico?</strong> Incrementa el ticket promedio mediante historial preventivo y optimiza drásticamente la rotación de repuestos en almacén.
             </div>
          </div>

          <!-- Card 13: Entretenimiento & Eventos -->
          <div id="eventos" class="bg-white border border-slate-200/80 p-8 rounded-3xl transition-all duration-300 hover:shadow-[0_20px_40px_rgba(0,0,0,0.03)] hover:-translate-y-1 hover:border-brand-purple/20 relative flex flex-col justify-between group">
             <div>
                <div class="w-14 h-14 bg-brand-purple/10 text-brand-purple rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                   <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                      <path d="M20 12c0-1.1.9-2 2-2V8c0-1.1-.9-2-2-2h-3c0-1.1-.9-2-2-2H9c0 1.1-.9 2-2 2H4c-1.1 0-2 .9-2 2v2c1.1 0 2 .9 2 2s-.9 2-2 2v2c0 1.1.9 2 2 2h3c0 1.1.9 2 2 2h6c0-1.1.9-2 2-2h3c1.1 0 2-.9 2-2v-2c-1.1 0-2-.9-2-2zm-9 4H9v-2h2v2zm0-4H9v-2h2v2zm0-4H9V6h2v2zm4 8h-2v-2h2v2zm0-4h-2v-2h2v2zm0-4h-2V6h2v2z"/>
                   </svg>
                </div>
                <h3 class="font-black text-xl text-slate-dark mb-4">Entretenimiento & Eventos</h3>
                <p class="text-sm text-slate-500 leading-relaxed mb-6 font-medium">
                   Venda entradas online de forma masiva sin caídas del sistema. Diseñamos consolas de acreditación rápida con códigos QR únicos.
                </p>
                <ul class="space-y-3 mb-8">
                   <li class="flex items-center gap-2 text-xs font-semibold text-slate-600">
                      <span class="w-1.5 h-1.5 rounded-full bg-brand-purple"></span> Venta masiva con pasarela de alta concurrencia
                   </li>
                   <li class="flex items-center gap-2 text-xs font-semibold text-slate-600">
                      <span class="w-1.5 h-1.5 rounded-full bg-brand-purple"></span> Validación en puerta mediante escaneo QR
                   </li>
                   <li class="flex items-center gap-2 text-xs font-semibold text-slate-600">
                      <span class="w-1.5 h-1.5 rounded-full bg-brand-purple"></span> Asientos interactivos y reservas dinámicas
                   </li>
                </ul>
             </div>
             <div class="bg-slate-50 border-l-2 border-brand-purple p-4 rounded-r-xl text-xs text-slate-600 leading-relaxed">
                <strong>¿Por qué es crítico?</strong> Soporta picos masivos de visitas simultáneas en pre-ventas y elimina por completo la falsificación o duplicado de entradas.
             </div>
          </div>

          <!-- Card 14: Recursos Humanos & ATS -->
          <div id="rrhh" class="bg-white border border-slate-200/80 p-8 rounded-3xl transition-all duration-300 hover:shadow-[0_20px_40px_rgba(0,0,0,0.03)] hover:-translate-y-1 hover:border-brand-purple/20 relative flex flex-col justify-between group">
             <div>
                <div class="w-14 h-14 bg-brand-purple/10 text-brand-purple rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                   <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                   </svg>
                </div>
                <h3 class="font-black text-xl text-slate-dark mb-4">Recursos Humanos & ATS</h3>
                <p class="text-sm text-slate-500 leading-relaxed mb-6 font-medium">
                   Simplifique la captación de talento y el onboarding. Creamos plataformas integrales para el control de asistencia y legajo digital seguro.
                </p>
                <ul class="space-y-3 mb-8">
                   <li class="flex items-center gap-2 text-xs font-semibold text-slate-600">
                      <span class="w-1.5 h-1.5 rounded-full bg-brand-purple"></span> Portal de vacantes y filtrado inteligente ATS
                   </li>
                   <li class="flex items-center gap-2 text-xs font-semibold text-slate-600">
                      <span class="w-1.5 h-1.5 rounded-full bg-brand-purple"></span> Legajo digital unificado del colaborador
                   </li>
                   <li class="flex items-center gap-2 text-xs font-semibold text-slate-600">
                      <span class="w-1.5 h-1.5 rounded-full bg-brand-purple"></span> Control de asistencia e incidencias en la nube
                   </li>
                </ul>
             </div>
             <div class="bg-slate-50 border-l-2 border-brand-purple p-4 rounded-r-xl text-xs text-slate-600 leading-relaxed">
                <strong>¿Por qué es crítico?</strong> Reduce costos de selección y contratación manual, y unifica el seguimiento normativo del personal en un canal unificado.
             </div>
          </div>

          <!-- Card 15: Seguros & Corretaje -->
          <div id="seguros" class="bg-white border border-slate-200/80 p-8 rounded-3xl transition-all duration-300 hover:shadow-[0_20px_40px_rgba(0,0,0,0.03)] hover:-translate-y-1 hover:border-brand-green/20 relative flex flex-col justify-between group">
             <div>
                <div class="w-14 h-14 bg-brand-green/10 text-brand-green rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                   <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                   </svg>
                </div>
                <h3 class="font-black text-xl text-slate-dark mb-4">Seguros & Corretaje</h3>
                <p class="text-sm text-slate-500 leading-relaxed mb-6 font-medium">
                   Centralice la evaluación de pólizas y siniestros en un solo lugar. Desarrollamos cotizadores en línea integrados con aseguradoras globales.
                </p>
                <ul class="space-y-3 mb-8">
                   <li class="flex items-center gap-2 text-xs font-semibold text-slate-600">
                      <span class="w-1.5 h-1.5 rounded-full bg-brand-green"></span> Cotizadores automáticos dinámicos multi-ramo
                   </li>
                   <li class="flex items-center gap-2 text-xs font-semibold text-slate-600">
                      <span class="w-1.5 h-1.5 rounded-full bg-brand-green"></span> Portal de siniestros e intercambio de archivos
                   </li>
                   <li class="flex items-center gap-2 text-xs font-semibold text-slate-600">
                      <span class="w-1.5 h-1.5 rounded-full bg-brand-green"></span> Cobranza e integración de facturas automáticas
                   </li>
                </ul>
             </div>
             <div class="bg-slate-50 border-l-2 border-brand-green p-4 rounded-r-xl text-xs text-slate-600 leading-relaxed">
                <strong>¿Por qué es crítico?</strong> Acelera los tiempos comerciales de días a segundos y reduce drásticamente el fraude mediante flujos digitales auditados.
             </div>
          </div>

          <!-- Card 16: ONGs & Fundaciones -->
          <div id="ongs" class="bg-white border border-slate-200/80 p-8 rounded-3xl transition-all duration-300 hover:shadow-[0_20px_40px_rgba(0,0,0,0.03)] hover:-translate-y-1 hover:border-brand-green/20 relative flex flex-col justify-between group">
             <div>
                <div class="w-14 h-14 bg-brand-green/10 text-brand-green rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                   <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                   </svg>
                </div>
                <h3 class="font-black text-xl text-slate-dark mb-4">ONGs & Fundaciones</h3>
                <p class="text-sm text-slate-500 leading-relaxed mb-6 font-medium">
                   Maximice la recaudación de fondos y coordine voluntarios en tiempo real. Diseñamos portales de transparencia financiera y reportes de impacto.
                </p>
                <ul class="space-y-3 mb-8">
                   <li class="flex items-center gap-2 text-xs font-semibold text-slate-600">
                      <span class="w-1.5 h-1.5 rounded-full bg-brand-green"></span> Botón de donaciones recurrentes encriptado
                   </li>
                   <li class="flex items-center gap-2 text-xs font-semibold text-slate-600">
                      <span class="w-1.5 h-1.5 rounded-full bg-brand-green"></span> Control de voluntarios y asignación de proyectos
                   </li>
                   <li class="flex items-center gap-2 text-xs font-semibold text-slate-600">
                      <span class="w-1.5 h-1.5 rounded-full bg-brand-green"></span> Paneles públicos de transparencia de gastos
                   </li>
                </ul>
             </div>
             <div class="bg-slate-50 border-l-2 border-brand-green p-4 rounded-r-xl text-xs text-slate-600 leading-relaxed">
                <strong>¿Por qué es crítico?</strong> Construye credibilidad ante aportantes internacionales, automatiza la recaudación de fondos y agiliza las campañas locales.
             </div>
          </div>

          <!-- Card 17: Energía & Minería -->
          <div id="energia" class="bg-white border border-slate-200/80 p-8 rounded-3xl transition-all duration-300 hover:shadow-[0_20px_40px_rgba(0,0,0,0.03)] hover:-translate-y-1 hover:border-brand-purple/20 relative flex flex-col justify-between group">
             <div>
                <div class="w-14 h-14 bg-brand-purple/10 text-brand-purple rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                   <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                   </svg>
                </div>
                <h3 class="font-black text-xl text-slate-dark mb-4">Energía & Minería</h3>
                <p class="text-sm text-slate-500 leading-relaxed mb-6 font-medium">
                   Sistemas industriales de alta precisión que previenen fallas. Diseñamos plataformas para telemetría IoT de sensores y control de seguridad en mina.
                </p>
                <ul class="space-y-3 mb-8">
                   <li class="flex items-center gap-2 text-xs font-semibold text-slate-600">
                      <span class="w-1.5 h-1.5 rounded-full bg-brand-purple"></span> Paneles de telemetría IoT para sensores remotos
                   </li>
                   <li class="flex items-center gap-2 text-xs font-semibold text-slate-600">
                      <span class="w-1.5 h-1.5 rounded-full bg-brand-purple"></span> Software de Mantenimiento Preventivo Industrial
                   </li>
                   <li class="flex items-center gap-2 text-xs font-semibold text-slate-600">
                      <span class="w-1.5 h-1.5 rounded-full bg-brand-purple"></span> Registro digital de seguridad y salud en obra
                   </li>
                </ul>
             </div>
             <div class="bg-slate-50 border-l-2 border-brand-purple p-4 rounded-r-xl text-xs text-slate-600 leading-relaxed">
                <strong>¿Por qué es crítico?</strong> Previene accidentes de alta peligrosidad en campo y evita paradas productivas millonarias mediante mantenimiento preventivo.
             </div>
          </div>

      </div>

   </div>
</section>

<!-- Call to Action Section -->
<section id="contacto" class="py-24 bg-slate-dark text-white text-center">
   <div class="max-w-4xl mx-auto px-6">
      <div class="w-16 h-[1px] bg-brand-green mx-auto mb-10"></div>
      <h2 class="text-4xl md:text-6xl font-black mb-10 leading-tight tracking-tight">Hablemos de su próxima <br>
         <span class="text-brand-green">Inversión Digital.</span>
      </h2>
      <p class="text-xl text-slate-400 font-medium mb-12 leading-relaxed">Analizaremos sus procesos actuales para proponerle una solución de ingeniería que maximice su eficiencia operativa.</p>
      <div class="flex flex-col sm:flex-row justify-center gap-6">
         <a href="mailto:info@voltora.com"
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

<?php include 'includes/footer.php'; ?>
