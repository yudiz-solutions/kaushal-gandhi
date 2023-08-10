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
define( 'DB_NAME', 'whoocommerce' );

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
define( 'AUTH_KEY',         'P-_|EbNUk%SteM:F*6AyB-1g30?_0EC(@-NR`5~_EWCL09vfs!r |(:HsF4Uv_QG' );
define( 'SECURE_AUTH_KEY',  '--{G1E0oN~?6<hHG=r:k1;y3b_}p)Q_o-(+|wwJc}kRcWxl+3kfZqM:9KNpx_$Q(' );
define( 'LOGGED_IN_KEY',    'cZ##<6`B4,6/QU@P4Lb(a8v,gc$#i4GLq mH0T0B=rsos1kTS*Lc6)Im-z~b+kj/' );
define( 'NONCE_KEY',        '%!7-z4sZbOw8XUz.Vg8g$t>4Giv@0eV 14}8fgs3^sN~*{@w0XT2$EcLFl$X0[C0' );
define( 'AUTH_SALT',        'wZwJvX6F|HC]x4H)i|Yxc4NkrbD2r?[CO53l4pXC;4 DHw@3#SRs#OuZr@4>z5)E' );
define( 'SECURE_AUTH_SALT', '8eHsy>r,fKwuE3|B2<q/ks-A!Atl3^:h`k|Vo*b4<g;|xW$h>Zf&#?C7t}>eU*P0' );
define( 'LOGGED_IN_SALT',   'oi7uYZV.YXaJmfSt-N_%M:i&VT$w$U| LTPE/P~lHK&jx7a]fIn!WP}Qdq$XF$,s' );
define( 'NONCE_SALT',       'lCe|_@IM.Ew,UCRZ&C2Ai|{<x0P2]Av_.ap5<Sb4@)btG)c!RzE1q^j5=$XF!4@U' );

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
define( 'WP_DEBUG_DISPLAY', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
