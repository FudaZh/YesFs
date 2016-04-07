<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'YesFS');

/** MySQL database username */
define('DB_USER', 'YesFS75');

/** MySQL database password */
define('DB_PASSWORD', '3F49{_}.Dq$~');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'kI!-OEMo/u%>yq}FOzl9H>lYRaoni;/)HG)MNcic=o3Jt0-`3L.UsR1P`l4.HJ%!');
define('SECURE_AUTH_KEY',  'p(#%7ns;QqMT(8cMv&$$,u3H3|7fy7GU+.}++<+E;]w=I@:wDQ]?KL!91<3*lC?%');
define('LOGGED_IN_KEY',    'A?+U=fC26HFVj}XA[IvIdPjlC8KmP)y50X!4R 7~.B3z*+Ce =%WJ~#eI_KI/>YH');
define('NONCE_KEY',        ';(DOCvQ|FeQsu8-j!F%e4TP}2a@9Ub=^mz)sF5CnR?W,A4-;SEGUbU^9SmL!NW2K');
define('AUTH_SALT',        '1V]]}rgRtZREpTEQ.k}%9QnrR2sXK:l;2h*6x;Zol-!GL!0b&U}Ip8Um%O03ekc6');
define('SECURE_AUTH_SALT', ';lO?ubr<Q1NgN4g_9ZpP4s{GP#IaG5ul<=#{Q~RNyk7/|P?*8WH4RHg[4sH[*^`B');
define('LOGGED_IN_SALT',   '*n);v5/}y>0KLqGLI-K_$=&Tr|[7p%f14cPa]h5iex,dl{yDh8g2A9VNc sYNTo#');
define('NONCE_SALT',       'K/zUW-`Fq<=ibF=%3a?Ri,/~Od.6NY2lRaAdEkz9K~ec280p/NS#?To`kS-rFv?P');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', true);

define( 'WP_MAX_MEMORY_LIMIT', '256M' );
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');