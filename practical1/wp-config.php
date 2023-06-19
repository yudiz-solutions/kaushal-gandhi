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
define('DB_NAME', 'practical1');

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
define('AUTH_KEY',         '%yG`J;/_h^5>})xm %p8dqTLBg-{e28HtV$y:}ROhQI$E=1at;P,$;}B ?LqM:B-');
define('SECURE_AUTH_KEY',  'E/f@#Sc-dPx7O8ryvyY&=bJf +</>5]@R1<S?h%[lK}`-@5VzZ(vY/^jPqO2R]Xh');
define('LOGGED_IN_KEY',    '^K|h(|b`xV^{%R5h<XdFNGK=qA9W|_|rLgTom!3@fwsu:1RU4--K]TaEfAJOE3k.');
define('NONCE_KEY',        '1%lF5D{ON21Ml$@j&>`zpxkVaW&t]klDmM-2?N$eP:ca}%tY-yB_|D hM{##sBs%');
define('AUTH_SALT',        '%V$z`8a/sy@k)|k911A;:FL7:UFQYdVynKVG8E:X,+q5Rs7M,y&wDOo{}Ae`r@7z');
define('SECURE_AUTH_SALT', '%b.U@jJ6Wzwr)5!/}OE;ZI/:pK0PbhN?VgNsElbZ]]Xc+7I356JRoYs5p%~.Al|(');
define('LOGGED_IN_SALT',   'RW7]B-J~u>l^;7,|B<P+Y1}@ijE{O/|{v|Kvj]7zle/i1j/{k)-+C8$B]Lr$LL:.');
define('NONCE_SALT',       'Wr=NG3UL,&xueGU]zJ3eL<i;e/(:dCt L&pB-!nk1Hh7TIYhf:~cJeqvtM!H/l.-');

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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
