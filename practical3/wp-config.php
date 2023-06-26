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
define( 'DB_NAME', 'practical3' );

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
define( 'AUTH_KEY',         '.}G;on!lxX)j9{9S$K9U4hO b_c6V6y8oC[/~M^HKkXlt2`~jTRX(3LL5iM?!>_3' );
define( 'SECURE_AUTH_KEY',  '{xMf$i3nx{-n#Ms};#~L^<s}^uG1:?V^T!>bypx;;?+C^~cohcXCwp]hGH~P-u4.' );
define( 'LOGGED_IN_KEY',    '2qCn9*h_UY<rxhe37m${dxSmQ2T!>31ml=EjoX(HZSO?HJ/3go]c|.Tn Y-/eS^F' );
define( 'NONCE_KEY',        'FN4s_/e6=~?JS%6ez]wl,LCb8?:^{1KsdH~^nO4#Xk,ftAgRaG{Md3D*mW8$Woly' );
define( 'AUTH_SALT',        'H|kF?[~(X!KqIGr=^H cO<?R^E[txCh>lz<1+Z$[w4c!%O;rz?E_C;!564.0>2,O' );
define( 'SECURE_AUTH_SALT', 'j.yqmne{g*DRq0Het>Vtn_MweU^2qJZV(#{z{UI43h|b=7J&A`i^P(n=|#Mp*?Z)' );
define( 'LOGGED_IN_SALT',   'mru1@nP9T-:i:.A/(G:G{7~)%3D}6tz_r.oCPDSO[Vw={BD&g%4*UX*|zz$ON9BB' );
define( 'NONCE_SALT',       'Rae <G3H^AayxrOZn2b,-q$.q86}yBVC4X?(7c$^3BDR,)kDks+z(Tx{0Uyj%W^B' );

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
