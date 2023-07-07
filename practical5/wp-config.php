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
define('DB_NAME', 'practical5');

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
define('AUTH_KEY',         '@QxvDq=nFp%zssLk_um*PVidGoP=-lW=Aa:3QLCobvofh*5=uH2qed_+_>~8`Qv1');
define('SECURE_AUTH_KEY',  'sR9RuOUe3W:llHF:$TsCIc0`p@i1uJwa?KaLFMlC$K,39SX;^p<PAd_C:xAdv^MO');
define('LOGGED_IN_KEY',    'm1?#cifKb(Oi(!f6GN|F67<jQ20%incS,TC0BLJ$79F>CI8/tG/u (Y6jKRmnuc.');
define('NONCE_KEY',        'xU*Za!k-{1&0I_4URFgh:M enIFVtm;Y(rlo!+nd7`hUC:-x!dGS|3MkE;z9Nrx&');
define('AUTH_SALT',        'i}3) sp]:V=,T@/<bexm&W>$>{{Y(cJf@8rhJcgEzNOYloz~F^UPx&:GZCf;p4lU');
define('SECURE_AUTH_SALT', '<Jy22{,or.%Yt$g@Oy?~eALCp8*E+MfNayQXKL/g.[Me(w#8UuVD7W3nV3rEli v');
define('LOGGED_IN_SALT',   'z3g(C>/Pfz?OA,gs)_(`OD{=#)^VcUgL,}=brUZ3+_[j(`+qU^_3o/kA}CTodp8N');
define('NONCE_SALT',       'W@>gx|/HHU6|!CDV&GK5c!wBF]i`EY sB]k)w$814ogX7A!sR.0mYe8aSz}0zPnJ');

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
