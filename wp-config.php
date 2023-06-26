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
define( 'DB_NAME', 'testingemen01' );

/** Database username */
define( 'DB_USER', 'testingemen01' );

/** Database password */
define( 'DB_PASSWORD', 'testingemen01' );

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
define( 'AUTH_KEY',         'b|!nqR.Yt?rT?uS3c=-U65|WptE3020$8)Pm&5cjM`73|y2)UQtnremW[{Gm6]Wd' );
define( 'SECURE_AUTH_KEY',  '.>8{H(h:K8N}+sJhK`K$OMq!Wm.l^U/2@}t`S#q8Trdu~ `6`EW d0wp*#-uY5WC' );
define( 'LOGGED_IN_KEY',    '!u^Clp6-BWa8!d.o#uAWAM}tam7Lk{]3K<O0OEAqDOo:$3Qj#-~q4uhO64h:Am_2' );
define( 'NONCE_KEY',        'NhrzN7,U!_az%X:lIN`4&0; Y,h I.rJ@/e>g{&B|SuvH;7La&q1-##4Y^b=|Fy`' );
define( 'AUTH_SALT',        '^R^m<4c|:=:^7D6i~TQ1-0fx7kV= vyQv;0if[pWLNdoWV6Ip-zSkPHv&=]A&iEt' );
define( 'SECURE_AUTH_SALT', '%Z%_XUr[n .F;<v]F,bF`_~7 ),_k.dz?uHb.n<Ia]CKNj#^Z*YRBusglkxb@=aB' );
define( 'LOGGED_IN_SALT',   'O[!%M?uv29RE+nho`4#`8VS?J^dDT9C8b+/L1@[%ve/l`}<,S}(mOV4r[._A 0Ud' );
define( 'NONCE_SALT',       'I/N:5a^a({m26Z{%F&UKKz:NU*Z5i-qcso`]L #GEEkS85v=N5NG~g,,Diga+(Jo' );

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
