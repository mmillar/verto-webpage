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
define('DB_NAME', 'verto_wordpress');

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
define('AUTH_KEY',         'd_=&h|X{fT.L?1.VfaC:-@X{At7;f.UHW|&A|]vrGO]r#l$n)AS[,1>Of-y._++R');
define('SECURE_AUTH_KEY',  'kqqAXJ^jd1t6@%@i&[nnCO( u@|<3/unh1m[|3m!|?Xd.GF[6?c(7D}}O8++s0bV');
define('LOGGED_IN_KEY',    'BMrURLpSG|i-+3cm-~iAd)kE^ksX#ovliE/G~7J1#E{;vR6PfT{dXdfYiGO#v`Ve');
define('NONCE_KEY',        'pdW2g`W%dm/b2M%AA>g%u^ tf>j6}]AtOtak(DetaMb6y5Pz^,stp`g-3zqY%mP<');
define('AUTH_SALT',        'Z>x);.|$:cj18|,5>xI+<[?t-YLcji{SmqIl@,nK`X@PN.*ZOVJ2B44@ZD-=0<8@');
define('SECURE_AUTH_SALT', 'u%22n}F?T^9[>Jly AJ$$J])X>{X9e-@A3FN|w^}iC]+7wZbRiKwCweYh,96P`w1');
define('LOGGED_IN_SALT',   'u<:9f|Yj  4NZW63w)!^ |Dd#+fRnY*edQfLU_Y!:BuV$s=@3<d;w4yy~_eci2^M');
define('NONCE_SALT',       'o*iph(V](u^~ww7*eB4SOLO1,_f|-S-Xvt{|}zKq9h`mif&h|T D|T/IDtmx#X|O');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'vertowp_';

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
