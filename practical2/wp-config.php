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
define( 'DB_NAME', 'practical2' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '@uJ5K1t.uol(D2k*vk^P@@LxQ>wF~/`C`pwJ5j.Q,^rA.?h!j<; 4EmTD1Xz- kv' );
define( 'SECURE_AUTH_KEY',  'mhd1kY4Pfc!aAMwQ?BcwoG6`R+<5zD-!.V`doD<|e4}EAai%1:$eq>bp|CJUt(.V' );
define( 'LOGGED_IN_KEY',    ':pZN=$,x0x9=w?KPnx&ZjP;@0X`qg_a3wsA~(Y,@{w=L/79I7V;6qe)6])&Q5}^~' );
define( 'NONCE_KEY',        'lsLql(g6*VN]IOwz]@1R~h+@mXx_`_;fY>Q`9KWIMWxh/- [*+5+X/ME5Fp{6svi' );
define( 'AUTH_SALT',        'C,p{nAP0W)@H<$8N;*j9y4fD5%8)VyoD*/x0d %U/ze}:^%/q5;B)9hF8:l4F;7w' );
define( 'SECURE_AUTH_SALT', 'Y#olFO=45U~>8@0ps5X.)QMf=1>,yk2l7pnfQlm5vc0~sb! |p.XD^j.{WLJ{F>u' );
define( 'LOGGED_IN_SALT',   'KA;=${H+LtwiT]{O$ZK/<l2^1r5kj7Ih7hxJ,}]QJ}I}S[ab0T/,bNRz`}6Wccp9' );
define( 'NONCE_SALT',       ' fhrzJ8xJD(I+8,sFg/22lyY+;oFS<a&NCX }}mb.%!?Ln86$ZO~gy<h#F87&O,#' );

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
