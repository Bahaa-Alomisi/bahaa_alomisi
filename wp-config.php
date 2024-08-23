<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'bhbh' );

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
define( 'AUTH_KEY',         '/sfx9^-30|Fq#ydnQ**(r{<8?3osK5x@.,d{@Z|vD@WXO=saro:T/dRVYvD(NASh' );
define( 'SECURE_AUTH_KEY',  '9_A1{hj:_X^d=&q^:xY^7oAl]giTTr(..3@x[m;V/M{oMXE]I$$7L[i:3:KqexWd' );
define( 'LOGGED_IN_KEY',    'Dm+*y]i!P)q%Ucc-f9[h,>|,b;e&G.1Da|gq6v.$$aG{E+pA?iij|pa(:k }zspD' );
define( 'NONCE_KEY',        'IjE^>-V,H/bPC3e[dzd|bpZf+=CG/FMMCwg9rO!Qa;zpiWUo;u?%BsjwZk9n9 4S' );
define( 'AUTH_SALT',        '4HC1M@fw{sE~ ?,jO~](2 4{tSp:4*akQ,X)S#%3*n!7^1mY$qB+4[>4 (S<>?o]' );
define( 'SECURE_AUTH_SALT', '`A#bw9/3(%aj#C)p-P6bOq<sm Loi,nb j-8{i-M<[ORmnv=JRzg$v^}0{S%M~V_' );
define( 'LOGGED_IN_SALT',   'K_g1FIL#-W&FOTfMBk4qkM.j]-%F|#.D4,{7Cans]C^qCwDPLoC;Mg0pa[yh<?Cz' );
define( 'NONCE_SALT',       'SD|Xy-sW(5nE`m*{P%UcW(|DIEP}%g[Xb{G*TxWgJ4!]d; Axxmj~_zasT$6wzaY' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
