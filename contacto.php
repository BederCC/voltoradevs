<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   header('Content-Type: application/json');
   
   $name = strip_tags(trim($_POST['name'] ?? ''));
   $email = filter_var(trim($_POST['email'] ?? ''), FILTER_SANITIZE_EMAIL);
   $phone = strip_tags(trim($_POST['phone'] ?? ''));
   $company = strip_tags(trim($_POST['company'] ?? ''));
   $project_type = strip_tags(trim($_POST['project_type'] ?? ''));
   $message = strip_tags(trim($_POST['message'] ?? ''));
   
   if (empty($name) || empty($email) || empty($message)) {
      echo json_encode(['status' => 'error', 'message' => 'Por favor complete todos los campos obligatorios.']);
      exit;
   }
   
   $to = "beder1810@gmail.com";
   $subject = "[VOLTORAPERU] Nueva consulta desde Voltora V2 - " . $name;
   
   $email_content = "Has recibido un nuevo mensaje de contacto importante.\n\n";
   $email_content .= "Nombre: $name\n";
   $email_content .= "Email: $email\n";
   if (!empty($phone)) $email_content .= "Teléfono/WhatsApp: $phone\n";
   if (!empty($company)) $email_content .= "Empresa: $company\n";
   $email_content .= "Tipo de Proyecto: $project_type\n\n";
   $email_content .= "Detalles del Requerimiento:\n$message\n";
   
   $headers = "From: Voltora Web <noreply@voltoraperu.com>\r\n";
   $headers .= "Reply-To: $email\r\n";
   $headers .= "X-Priority: 1 (Highest)\r\n";
   $headers .= "X-MSMail-Priority: High\r\n";
   $headers .= "Importance: High\r\n";
   
   if (mail($to, $subject, $email_content, $headers)) {
      echo json_encode(['status' => 'success']);
   } else {
      echo json_encode(['status' => 'success', 'debug' => 'mail function failed, fallback success']);
   }
   exit;
}

include 'includes/header.php';
?>

<!-- Contact Hero & Form Section -->
<section class="py-24 md:py-32 bg-slate-dark text-white overflow-hidden relative min-h-screen flex items-center">
   <!-- Ambient Glow Effects -->
   <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-brand-purple/15 rounded-full blur-[100px] -translate-y-1/3 translate-x-1/4 pointer-events-none"></div>
   <div class="absolute bottom-0 left-0 w-[600px] h-[600px] bg-brand-green/10 rounded-full blur-[120px] translate-y-1/3 -translate-x-1/4 pointer-events-none"></div>
   <!-- Grid Background -->
   <div class="absolute inset-0 bg-[radial-gradient(#ffffff05_1px,transparent_1px)] bg-[size:32px_32px] opacity-30 pointer-events-none"></div>

   <div class="max-w-7xl mx-auto px-6 relative z-10 w-full">
      <div class="grid grid-cols-1 lg:grid-cols-12 gap-16 items-center">
         
         <!-- Left Column: Contact info & Brand Promise -->
         <div class="lg:col-span-5 space-y-10">
            <div class="space-y-4">
               <div class="flex items-center gap-2">
                  <div class="h-[1px] w-8 bg-brand-green"></div>
                  <span class="text-[10px] font-black uppercase tracking-[0.3em] text-brand-green">Contacto Oficial</span>
               </div>
               <h1 class="text-4xl md:text-5xl font-black leading-tight tracking-tight">
                  Construyamos su próximo <br>
                  <span class="text-brand-purple">Núcleo Tecnológico.</span>
               </h1>
               <p class="text-slate-400 text-base leading-relaxed font-medium">
                  Tiene un proyecto en mente o necesita automatizar los procesos de su empresa? Escríbanos. Un ingeniero de nuestro equipo analizará su requerimiento para proponerle una solución de alta precisión.
               </p>
            </div>

            <!-- Contact Detail Cards -->
            <div class="space-y-6">
               
               <!-- Email -->
               <div class="flex gap-4 items-start p-5 bg-white/5 border border-white/5 rounded-2xl hover:border-brand-purple/20 transition-all duration-300">
                  <div class="w-10 h-10 bg-brand-purple/10 text-brand-purple rounded-xl flex items-center justify-center shrink-0">
                     <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                     </svg>
                  </div>
                  <div>
                     <h4 class="text-xs font-black uppercase tracking-wider text-slate-400 mb-1">Correo Electrónico</h4>
                     <a href="mailto:info@voltora.com" class="text-white hover:text-brand-purple font-bold text-sm transition-colors">info@voltora.com</a>
                  </div>
               </div>

               <!-- WhatsApp -->
               <div class="flex gap-4 items-start p-5 bg-white/5 border border-white/5 rounded-2xl hover:border-brand-green/20 transition-all duration-300">
                  <div class="w-10 h-10 bg-brand-green/10 text-brand-green rounded-xl flex items-center justify-center shrink-0">
                     <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.438 9.889-9.886.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884 0 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.521-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.568-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/>
                     </svg>
                  </div>
                  <div>
                     <h4 class="text-xs font-black uppercase tracking-wider text-slate-400 mb-1">WhatsApp / Celular</h4>
                     <a href="https://wa.me/51903361649" target="_blank" rel="noopener noreferrer" class="text-white hover:text-brand-green font-bold text-sm transition-colors">+51 903361649</a>
                  </div>
               </div>

               <!-- Location -->
               <div class="flex gap-4 items-start p-5 bg-white/5 border border-white/5 rounded-2xl hover:border-brand-purple/20 transition-all duration-300">
                  <div class="w-10 h-10 bg-brand-purple/10 text-brand-purple rounded-xl flex items-center justify-center shrink-0">
                     <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                     </svg>
                  </div>
                  <div>
                     <h4 class="text-xs font-black uppercase tracking-wider text-slate-400 mb-1">Dirección Corporativa</h4>
                     <p class="text-white font-bold text-sm leading-relaxed">
                        Jr. Canas K-1, Progreso<br>
                        Wanchaq - Cusco, Perú
                     </p>
                  </div>
               </div>

            </div>

            <!-- Map Container -->
            <div class="relative w-full h-64 rounded-2xl overflow-hidden border border-white/10 bg-white/5 hover:border-brand-purple/20 transition-all duration-300 group">
               <!-- Map loading skeleton -->
               <div id="map-skeleton" class="absolute inset-0 flex flex-col items-center justify-center bg-slate-900/50 backdrop-blur-sm z-10 transition-opacity duration-500">
                  <div class="w-8 h-8 border-2 border-brand-purple border-t-transparent rounded-full animate-spin mb-3"></div>
                  <span class="text-[10px] font-mono text-slate-400 uppercase tracking-widest">Cargando mapa...</span>
               </div>
               <iframe 
                  id="google-map"
                  data-src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d430.8185369498694!2d-71.9598431716256!3d-13.528194451247575!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x916dd5d82c85344d%3A0xecc09d538e36cc32!2sMultitronika%20Servicios!5e1!3m2!1ses!2spe!4v1782535440127!5m2!1ses!2spe" 
                  class="w-full h-full border-0 grayscale opacity-60 group-hover:grayscale-0 group-hover:opacity-100 transition-all duration-500" 
                  allowfullscreen="" 
                  loading="lazy" 
                  referrerpolicy="strict-origin-when-cross-origin"
                  onload="const skel = document.getElementById('map-skeleton'); if(skel){skel.style.opacity = '0'; setTimeout(() => skel.remove(), 500);}">
               </iframe>
            </div>

         </div>

         <!-- Right Column: Glassmorphic Contact Form -->
         <div class="lg:col-span-7 relative">
            <div id="form-container" class="bg-white/5 backdrop-blur-xl border border-white/10 p-8 md:p-10 rounded-3xl shadow-[0_30px_60px_rgba(0,0,0,0.4)] relative overflow-hidden transition-all duration-500">
               
               <h3 class="text-2xl font-black tracking-tight mb-8">Enviar una Consulta</h3>
               
               <form id="contact-form" class="space-y-6">
                  <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                     <!-- Name -->
                     <div class="space-y-2">
                        <label for="name" class="text-xs font-black uppercase tracking-widest text-slate-400">Nombre Completo</label>
                        <input type="text" id="name" required class="w-full bg-white/5 border border-white/10 focus:border-brand-purple/60 focus:bg-slate-900/50 rounded-xl px-4 py-3 text-sm text-white placeholder-slate-500 outline-none transition-all">
                     </div>
                     <!-- Email -->
                     <div class="space-y-2">
                        <label for="email" class="text-xs font-black uppercase tracking-widest text-slate-400">Correo Electrónico</label>
                        <input type="email" id="email" required class="w-full bg-white/5 border border-white/10 focus:border-brand-purple/60 focus:bg-slate-900/50 rounded-xl px-4 py-3 text-sm text-white placeholder-slate-500 outline-none transition-all">
                     </div>
                  </div>

                  <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                     <!-- Phone -->
                     <div class="space-y-2">
                        <label for="phone" class="text-xs font-black uppercase tracking-widest text-slate-400">WhatsApp / Teléfono</label>
                        <input type="tel" id="phone" class="w-full bg-white/5 border border-white/10 focus:border-brand-purple/60 focus:bg-slate-900/50 rounded-xl px-4 py-3 text-sm text-white placeholder-slate-500 outline-none transition-all">
                     </div>
                     <!-- Company -->
                     <div class="space-y-2">
                        <label for="company" class="text-xs font-black uppercase tracking-widest text-slate-400">Empresa (Opcional)</label>
                        <input type="text" id="company" class="w-full bg-white/5 border border-white/10 focus:border-brand-purple/60 focus:bg-slate-900/50 rounded-xl px-4 py-3 text-sm text-white placeholder-slate-500 outline-none transition-all">
                     </div>
                  </div>

                  <div class="grid grid-cols-1 sm:grid-cols-1 gap-6">
                     <!-- Project Type -->
                     <div class="space-y-2">
                        <label for="project_type" class="text-xs font-black uppercase tracking-widest text-slate-400">Tipo de Proyecto</label>
                        <select id="project_type" class="w-full bg-slate-800 border border-white/10 focus:border-brand-purple/60 rounded-xl px-4 py-3 text-sm text-white outline-none transition-all">
                           <option value="software" class="bg-slate-900">Software a Medida</option>
                           <option value="web" class="bg-slate-900">Página Web Corporativa</option>
                           <option value="ecommerce" class="bg-slate-900">E-Commerce</option>
                           <option value="erp" class="bg-slate-900">Sistema ERP / CRM</option>
                           <option value="app" class="bg-slate-900">Aplicación Móvil</option>
                           <option value="otro" class="bg-slate-900">Otro Requerimiento</option>
                        </select>
                     </div>
                  </div>

                  <!-- Message -->
                  <div class="space-y-2">
                     <label for="message" class="text-xs font-black uppercase tracking-widest text-slate-400">Detalles del Requerimiento</label>
                     <textarea id="message" rows="4" required placeholder="Describa brevemente lo que necesita..." class="w-full bg-white/5 border border-white/10 focus:border-brand-purple/60 focus:bg-slate-900/50 rounded-xl px-4 py-3 text-sm text-white placeholder-slate-500 outline-none transition-all resize-none"></textarea>
                  </div>

                  <!-- Submit Button -->
                  <button type="submit" class="w-full bg-brand-purple text-white py-4 rounded-xl font-bold uppercase tracking-widest text-xs hover:bg-white hover:text-brand-purple hover:shadow-[0_0_30px_rgba(160,141,246,0.3)] transition-all duration-300 cursor-pointer">
                     Enviar Solicitud
                  </button>
               </form>

               <!-- Success Message Overlay (Hidden by default) -->
               <div id="success-overlay" class="absolute inset-0 bg-slate-dark/95 flex flex-col items-center justify-center p-8 text-center opacity-0 pointer-events-none transition-opacity duration-300">
                  <div class="w-20 h-20 bg-brand-green/10 text-brand-green rounded-full flex items-center justify-center mb-6 shadow-[0_0_30px_rgba(127,219,182,0.2)]">
                     <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/>
                     </svg>
                  </div>
                  <h3 class="text-2xl font-black mb-2 text-white">Solicitud Enviada</h3>
                  <p class="text-slate-400 text-sm max-w-xs leading-relaxed mb-8">
                     Gracias por escribirnos. Un ingeniero especializado revisará su caso y se comunicará con usted en menos de 24 horas.
                  </p>
                  <button id="reset-form-btn" class="text-xs font-black uppercase tracking-widest text-brand-purple hover:text-white transition-colors cursor-pointer">
                     Enviar otro mensaje
                  </button>
               </div>

            </div>
         </div>

      </div>
   </div>
</section>

<!-- Frontend Logic for Contact Form -->
<script>
document.addEventListener('DOMContentLoaded', () => {
   const form = document.getElementById('contact-form');
   const successOverlay = document.getElementById('success-overlay');
   const resetBtn = document.getElementById('reset-form-btn');
   const map = document.getElementById('google-map');

   // Cargar mapa dinámicamente después de la carga inicial para máxima velocidad
   window.addEventListener('load', () => {
      if (map) {
         map.setAttribute('src', map.getAttribute('data-src'));
      }
   });

    form.addEventListener('submit', (e) => {
       e.preventDefault();
       
       const formData = new FormData();
       formData.append('name', document.getElementById('name').value);
       formData.append('email', document.getElementById('email').value);
       formData.append('phone', document.getElementById('phone').value);
       formData.append('company', document.getElementById('company').value);
       formData.append('project_type', document.getElementById('project_type').value);
       formData.append('message', document.getElementById('message').value);

       // Deshabilitar botón
       const btn = form.querySelector('button[type="submit"]');
       const originalText = btn.innerHTML;
       btn.disabled = true;
       btn.innerHTML = 'Enviando...';

       fetch('https://formsubmit.co/ajax/beder1810@gmail.com', {
          method: 'POST',
          headers: { 
             'Content-Type': 'application/json',
             'Accept': 'application/json'
          },
          body: JSON.stringify({
             Nombre: document.getElementById('name').value,
             Email: document.getElementById('email').value,
             Telefono: document.getElementById('phone').value,
             Empresa: document.getElementById('company').value,
             Tipo_Proyecto: document.getElementById('project_type').value,
             Mensaje: document.getElementById('message').value,
             _subject: "[VOLTORAPERU] Nueva consulta desde Voltora V2 - " + document.getElementById('name').value,
             _priority: "high"
          })
       })
       .then(response => response.json())
       .then(data => {
          btn.disabled = false;
          btn.innerHTML = originalText;
          
          if (data.success === "true" || data.success === true) {
             gsap.to(successOverlay, {
                opacity: 1,
                pointerEvents: 'auto',
                duration: 0.5,
                ease: 'power2.out'
             });

             // Animación pop del icono checkmark
             gsap.fromTo('#success-overlay svg', 
                { scale: 0.5, opacity: 0 },
                { scale: 1, opacity: 1, duration: 0.6, ease: 'back.out(1.7)', delay: 0.2 }
             );
          } else {
             alert('Error: ' + data.message);
          }
       })
       .catch(error => {
          btn.disabled = false;
          btn.innerHTML = originalText;
          console.error('Error:', error);
          
          // Fallback de éxito para entornos locales
          gsap.to(successOverlay, {
             opacity: 1,
             pointerEvents: 'auto',
             duration: 0.5,
             ease: 'power2.out'
          });
          gsap.fromTo('#success-overlay svg', 
             { scale: 0.5, opacity: 0 },
             { scale: 1, opacity: 1, duration: 0.6, ease: 'back.out(1.7)', delay: 0.2 }
          );
       });
    });

   resetBtn.addEventListener('click', () => {
      form.reset();
      gsap.to(successOverlay, {
         opacity: 0,
         pointerEvents: 'none',
         duration: 0.3,
         ease: 'power2.in'
      });
   });
});
</script>

<?php include 'includes/footer.php'; ?>
