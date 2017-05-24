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
define('DB_NAME', 'wp-coworking');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '');

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
define('AUTH_KEY', ':y(KFCLTwEpI}5){3)X*-<U$pk%?2hT|fyXo;r+bGzw:,}n1>d=^>AhR65X7wqz(');
define('SECURE_AUTH_KEY', 'u:jgkbgDrjX2B]?d$eRcVdJ=6`XM6sguz!^IG(>Y$|F.A5Ej_rb%DJ:cv.Y:o?dJ');
define('LOGGED_IN_KEY', 'WJo(9Zrv?o/KW%c={u,WEQ`dRI/G}J7vqEo<uLLv%HEycD7$6y<6!ABZqLQ(x,*0');
define('NONCE_KEY', '_^]RLSceUSlo,z_TsHLvF29&V+pPD~0xy)?P:`pu0dF,eu*]Q>3vM%=%BvpLWg~z');
define('AUTH_SALT', '3m][g9Umdp8BX@F5=f^die YDfXt(Qwjj1>i%kAq~tYqWfO61%Tz8?}(o1L:bYBo');
define('SECURE_AUTH_SALT', 'lHGFjsftU3~7tPm#r1qn0[nanJPlAY)TUfC:qNx}e)AVPP5WSbPHREsQ](>EwJl{');
define('LOGGED_IN_SALT', 'jn>JrEl6Ljsyr.jv`eS> `[w`1Z9K7Q||>8o47uXVR$G.;| *;VwfDI%!6!Gnd<_');
define('NONCE_SALT', 'D<1y% 5JEioT[1}+ZaZQDfF?q$L(!pwY,LYrA*8oON#`rORBmMCEymJq[/>f??lp');

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

