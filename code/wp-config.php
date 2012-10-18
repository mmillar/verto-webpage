<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'verto_webpage');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '*tPmKWz,/I7*PuzdQuH6A4s0s]4Xd>KxYA+)P41joKRBqY;UBoh6.voUH^rCsnU+');
define('SECURE_AUTH_KEY',  '[|[NC#T7Ux!qT9Alb(/]in=ccbsN|0a=kETtHT=&:Nj8i:9;$/_qprVI#IJ%+cgY');
define('LOGGED_IN_KEY',    'sen|?k#,R@DzyU+z%`-?UEBI|hIpq6uBId!-0CqrhE(G$m`;P@cd+l6G}GHtV{v1');
define('NONCE_KEY',        'RZo2^hL(R@MFL|sGy4ZKtT+mr&tM@#5p;1 Z:`k.&cx>PQ?xvM-FUe84|m@<Xl#w');
define('AUTH_SALT',        'dc({fqOP0qI,^Ip^j]x1mOqu.#1<Kb0%12>X8*CUEm])pQnj{LW7X,HHP$S%p+s[');
define('SECURE_AUTH_SALT', '`[;Q<.EWJ[?vQdTBX7I|dp|d&1<i@#d}+,]B?tuF -TwKtcr+InSRsr`k$<P m=>');
define('LOGGED_IN_SALT',   'J1B%B=+*O+-Nln7h:j%{]DIocM)}~tK/K7JsJ+`{>|P0?Jy|07X.oHv]%&YN_OHe');
define('NONCE_SALT',       '+J&Cs$-Jd,Ep*TIt|hqo0-ybB@r9(Qn96,+qbVg/u(DN8:!/FFprtE2xjg~.{|+A');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
