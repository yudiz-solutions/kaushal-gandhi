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
define( 'DB_NAME', 'block' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         'sTQrbodG,F@~!$q$wQQr`V|*TuVsGi&HuJP}jcKwx+LHd]!^[UJC?coZM+=HqnX<' );
define( 'SECURE_AUTH_KEY',  '8M>*AxJH_oc`gjy%(~i9G*(~;;X0~^p`oi)!AlHtZ#h_?x]Lop0Dx^{:GZ3!,BON' );
define( 'LOGGED_IN_KEY',    '>Sl?AMhQ|XwL39n?g`WuUt)vqkS_5.fYB50Vg3`U;K0C3-n]K9tfd=6ol3K;?gxc' );
define( 'NONCE_KEY',        'jFD^DeY>17*V[GppI;S p#hlKrll-{]/uI+0sYuyNUs~=^pn[+N=h@y~m621}:|E' );
define( 'AUTH_SALT',        'Hy8l+D);A9LW $bq:X0.3RT3~hbCox9WaV fsyv+?<?]!g(1ewDr{3fbcepG|%,y' );
define( 'SECURE_AUTH_SALT', 'l$11YPmX}{|L&:RLEmy8A*Xx<uK~Cc;F2q`6xIWuHye9i1+]=V]B[{a~qq<gGQty' );
define( 'LOGGED_IN_SALT',   '0Z-t=B5CH>vWZsYc/izY--ymaJ>qhI%t3OtD/v7?S|oMB*sJ2fPq*!{iJO!AAC;U' );
define( 'NONCE_SALT',       '#-~jf;zm8CFz_~k~R7?&7FAg!Tw:z2TF7ayK$yh1A.Qn;~O0#dSskh(w-vt/ciJU' );

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
