<?php

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'practical6');

/** Database username */
define('DB_USER', 'root');

/** Database password */
define('DB_PASSWORD', '');

/** Database hostname */
define('DB_HOST', 'localhost');

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '9i:gEULe4c=$Hc[C12LxeHSN:ZtKuvE$`PbprN JbQ.2lY1F@ <7!%l@g}~~RN1!');
define('SECURE_AUTH_KEY',  'ZWWLHM%0~<2/72Q>$p1w]u]/fF_<Y6T=%=-+~zHiV{v=&wzjjS+u-x[m-8XE{9Xu');
define('LOGGED_IN_KEY',    'V(k `=e8X<M<pz75wg)uSv0+ VK^IU1!o;1y|i&jdI4Yv$*L@u_)p%bL0[zhB]!K');
define('NONCE_KEY',        'mC6IR-DO>_{Kh@(Nd;Fp5WuWz1ueX{|bA5kqQEBUac1F%CflL;YfVzjO}dh-NxgX');
define('AUTH_SALT',        '=1%~E{XI]4?p9Z!K=?=j7.0y>et1X?w7,l2)ggeIsHBi`_KG(ID[py2Dq3&zW2)f');
define('SECURE_AUTH_SALT', 'fMbS&4^TexbtQb6<J1PX/(-v a&m}cN9BU`jaD,d> ;d|aZrTC,9=.d[l.%IF:`m');
define('LOGGED_IN_SALT',   'UI@6r -k[c7U>^`9`.>vax~)pj5[#1$! U,VAj*QPs/a`CvKQ:r+JS#~+j5(sqNq');
define('NONCE_SALT',       'qDxt/#ks|rDm^a[e.z_^S)I;VxI5u+U+nL:fd7I*eKj ^rjc:ilgdl<{jy[GEtc~');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define('WP_DEBUG', true);
define('WP_DEBUG_DISPLAY', true);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
