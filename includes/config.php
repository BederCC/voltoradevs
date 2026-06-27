<?php

/**
 * Voltora V2 - Configuration & Base Paths
 * Este archivo centraliza las rutas del proyecto para evitar errores al mover archivos.
 */

// Detectar el protocolo (http o https)
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";

// Obtener el dominio actual (localhost o dominio real)
$host = $_SERVER['HTTP_HOST'];

// Determinar la ruta base del proyecto dinámicamente
// Esto permite que el proyecto funcione en subcarpetas (localhost/voltoraV2/) 
// o en la raíz (voltora.com/) sin cambiar el código.
$script_path = str_replace('\\', '/', dirname(__DIR__));
$doc_root = str_replace('\\', '/', $_SERVER['DOCUMENT_ROOT']);
$base_dir = str_replace($doc_root, '', $script_path);

// Normalizar: asegurar que empiece y termine con /
$base_dir = '/' . ltrim($base_dir, '/');
if (substr($base_dir, -1) !== '/') {
   $base_dir .= '/';
}

// URL base completa para assets (imágenes, css, js)
define('BASE_URL', $protocol . $host . $base_dir);

// Rutas específicas para mayor comodidad
define('IMG_PATH', BASE_URL . 'img/');
define('INC_PATH', __DIR__ . '/'); // Ruta física para includes internos

// Redes Sociales - Nombre de usuario unificado
define('SOCIAL_USERNAME', 'voltoraperu');

// URLs de redes sociales construidas dinámicamente
define('URL_FACEBOOK', 'https://facebook.com/' . SOCIAL_USERNAME);
define('URL_INSTAGRAM', 'https://instagram.com/' . SOCIAL_USERNAME);
define('URL_LINKEDIN', 'https://linkedin.com/company/' . SOCIAL_USERNAME);
define('URL_TIKTOK', 'https://tiktok.com/@' . SOCIAL_USERNAME);
define('URL_YOUTUBE', 'https://youtube.com/@' . SOCIAL_USERNAME);

// Control de visibilidad para la sección de Proyectos en el Navbar (Poner true para activar)
define('SHOW_PROJECTS_NAV', false);
