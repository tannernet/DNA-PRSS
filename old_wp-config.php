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
define('DB_NAME', 'dnaprss');

/** MySQL database username */
define('DB_USER', 'dnaprss');

/** MySQL database password */
define('DB_PASSWORD', 'Supp0rt!');

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
define('AUTH_KEY',         'VGWCARc19-c!Dlh+qH;NI.$O?}p49cXN%rz0!x?3*l/t_mJqgl]C-t(a$e T(X[(');
define('SECURE_AUTH_KEY',  'hwP&|bYik9L8CmWOlL^|(|/A_*qS~3 saK{`-~W9G?jSAZO!3yWR)5!|G-y%HjO ');
define('LOGGED_IN_KEY',    '3=3*2gXD~`>^%,z{`M|NTJ-JbMu*uU:*<O[>YF<$.6W _^)Iw_^%kda0C}|ave,J');
define('NONCE_KEY',        '66wY}Nnl.9<!9V706Kq}b*9XbI:^9P9FoS2nh-5(E8RU/<`_(A:fLw-ix;~B25=.');
define('AUTH_SALT',        'CKZ-evxGrdEeHIC@jsFcG~jr@/P,ir jdB :^|-qS]6Vx)%~pYg*m*lRwjZb,ftQ');
define('SECURE_AUTH_SALT', 'ss>:tdnq58{do$JCeZ_ zQH)<pJYu]7cn7bx{.TH3JNaERR2qgg0c8m^@ :qvZZX');
define('LOGGED_IN_SALT',   '!/I 30o*]G`VqR}- *;vrNY*KEUs$J2/iLrzBrJ%Grf5nw}=(Ak-pvCz(w|rwXTl');
define('NONCE_SALT',       ';Ab.Ac:`M|=5FKW44 O<J>(Sq*& ?L?8?DT/2+DA(?.2~Pj?LV#2{U;7psw=b94j');

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
