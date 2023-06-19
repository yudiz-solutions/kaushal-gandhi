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
define( 'DB_NAME', 'wpdemo' );

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
define( 'AUTH_KEY',         'z-xsB0xO/,BE##vZLLps`op/BQns[I,(/Y$q]P/<81|lf9Gy)=MzJr 7R&k74H7r' );
define( 'SECURE_AUTH_KEY',  'dN%MdAm_+`{qWt2Zn@q,SsB8/UMJ}Z]6j%u@?AHtJ !6y*H}G<J:0UOvg5BR=e4m' );
define( 'LOGGED_IN_KEY',    'mphxXF 5$8RMebOt+2yji%{p>fmBrb[1[erXjNg$6d )G{v>N}8|sCf~25nhVy<-' );
define( 'NONCE_KEY',        '!_U.7~B&Jo1w@?9(gd]9]Dyn[aC-je[MY5ST&^F)^@H+n6,`[.i(Xzlmyef~C]H7' );
define( 'AUTH_SALT',        'oGDoH6#}>.olK$=&DJ;j;uQmR%&_l R _( hx_]Bt[y}.&2vs>gVFWJxX9fnb hE' );
define( 'SECURE_AUTH_SALT', 'Sx ,(kM%IR6ZxD_$x?S*doq?PQqgjoV-LuT:teQ~7S@-/62}tk@;38Lp634o?hAX' );
define( 'LOGGED_IN_SALT',   'g:#k4v[8_Yq*r~(pqLmiHAK<p7km>x+uEJLNq0}p(PMl5r!@$/3Ce4l^b!VyLCF#' );
define( 'NONCE_SALT',       '/q=_%{>?G]5m-cJ7;xA Pq^Dfh4rT>nH]& {YI.1zJik=KhXXh0@+/&t2eh9q.g=' );

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
