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
define('DB_NAME', 'base_wp_db');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'jovenbrandadmin');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'jovenbrand"123');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '#TN/-2EfNq;.MG]K1aGrbC?bTIsw8Qo{(-u{X/%5Ycp@%8h+ow,wQAz|]mQMUN`-');
define('SECURE_AUTH_KEY',  'XKv2_r0Pp!ae8dNPoJ6V:V;qPg|I1I8+E-6_,e7!|jJCe40heI`L7s9#0[[%R}_d');
define('LOGGED_IN_KEY',    'b/}ytY0Jh2!a|)y.1JIc(A68%*di2**@l2bSz(2W>^bk!r7;$DIKwy|3!uo `1|b');
define('NONCE_KEY',        '[<C|)s3^5X2bskZezH!PaC1&2w3&i6@&Z:>[5aC1a25#-2bh<0;FUg+~zzadAI!*');
define('AUTH_SALT',        'x&O?aL?R?|rnM+Ob+9P:]?KT25yc9*[_3cS+o2^|E+:7c$Rs%]|/|$dg,g5QZoGD');
define('SECURE_AUTH_SALT', '@|r@^H#bILi7 q4THjr,[X[`rqkPp6~{b&cdP+ sII:R@4:~4?0h6<*d1;.Q-MOL');
define('LOGGED_IN_SALT',   '38@}HD0g>WdE<5KG?x,i`mbmh<x?_2Q|E&3~{hg;I|v.@gc`:+Un}a8. 6@plso2');
define('NONCE_SALT',       '^#Kes0U59tIvd`-/4(wx~+Vj:-e =6Vo?AVUz#|8AjZT )|TJ]4+|O#/v>P4z%J7');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix = 'kdt_';


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

define('FS_METHOD','direct');
