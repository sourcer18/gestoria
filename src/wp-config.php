<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'gestoria');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'root');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', ' nofwe@F|_@R3yRxT33|W4*l]Xgm`?ik%%]KdeyY#tJ}q_n&@Op1d+rD%|+B9{8i');
define('SECURE_AUTH_KEY', 'Eb|IVv:D+$e&.*;o+L1|@G>Q|WK}9|w6:~>xhwwAn2z/N7F~q%^~8W4`>.w@FqcT');
define('LOGGED_IN_KEY', 'z_%-H,rV-aYH~t]^`J2+o@*EpP|u+/A1p]90gC92q U9{),`W-UKbuyvcmJIO*a>');
define('NONCE_KEY', '!2|N%)];N85EqfY!~?},f8?LUb&Ho2tHZed)d?6n}(:q,_.k3Q|P(dH-+^/fm?q7');
define('AUTH_SALT', '7CTp?+(5l=N5U^.M X<i-~7S9D2&t~w#AHxA-H1-,F~K5mk/:|y}[^!Snj{Z,LS4');
define('SECURE_AUTH_SALT', '5{jwg(^B8/TFR1vbQLn%-Rq,U9>7E-]|JFQW9^n^ZE(@MyF+hT!})|J(,+DOSK!-');
define('LOGGED_IN_SALT', 'HZp/A>zUJtg?ItyEq0;*C|AG4`s|s?yBdP-AU{~w!QhED*|Vj{E$uOz~Q|w0F@.r');
define('NONCE_SALT', 'l58|YUS,<c5FIEM+:8xy=E6eKv3o0&g51:<-wIM|L6icFJ/ePB%@#VI((mkNcS$e');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

