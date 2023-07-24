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
define( 'DB_NAME', 'practical4' );

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
define( 'AUTH_KEY',         '2ASGYYSQI@oXU{I;zi#@^cSDI<Ri&o;Ly2t>)3s!)Q4;MGHi|RC;OJiT{DpwJ.c!' );
define( 'SECURE_AUTH_KEY',  'cO/c$=.D M|ac+9@Ze?zWbd}(XNTM#G;.#5MUG8_{me/[WAgrh*J`KY5W5vRF):t' );
define( 'LOGGED_IN_KEY',    'uzG46qh&N=-@JtZ[buKD`57#nw{Yufrz $IBX_~nXP:VS>i-k%A@oj=~UyEixFDd' );
define( 'NONCE_KEY',        'rh,nEfw~3#>b5Y[eFxEb?8^Z#;u%OBShohiu+?hX|CTiB.(O`<5T^&?Hy7hR2M_d' );
define( 'AUTH_SALT',        '(RNMnAS^?IsIq`s1Q@r`-@<Eg0,(B@8[~RNsUY[&sWIISvC>Px#|(![}XN$&vlcS' );
define( 'SECURE_AUTH_SALT', '[UztE@6)W6vec)r%azu/[3]Hftwr(d~ 7-KsFZUebW2QCs$$!v-+P|dpW@.4waU*' );
define( 'LOGGED_IN_SALT',   'vd;Z=gcBL5;gkzESvU8PfGr`-Fr2OsiN7+B7/z1V,}Z5DTT`bRm@y,pfoiw_+{vR' );
define( 'NONCE_SALT',       'U^~,=~Z}VS$N%Rzt8JbVoZ|Jf]|Dq1CG_v ]A|fW[4=8`HmntlI`o7&.]&yf!Atn' );

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
