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
define( 'DB_NAME', 'number1' );

/** Database username */
define( 'DB_USER', 'nehal2' );

/** Database password */
define( 'DB_PASSWORD', 'nehal2' );

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
define( 'AUTH_KEY',         ' MQm?EF@l3gPKHEqkp?Y:)k4?A^(of/iI;ytoU4sz4k#VUb=c!d|FCphy/{A}c ^' );
define( 'SECURE_AUTH_KEY',  '(3Wu!XRpGNnI?x3gz?49^Hx7h-TblyXrwC[pmq1^>9eVT)N-I0gBo;0qA&%|>x&g' );
define( 'LOGGED_IN_KEY',    ' ;s%fIot j54CX6kwb*#bw9jz)cdM)zP-)T!:=2j dRT_D}frFvqM(xw4]#~=7oN' );
define( 'NONCE_KEY',        'l-rj]C=_JuL!9|i.nEg+nLMHI*TYUO)/E>.B90~sk(#mX 9--Fk1V;3k_mil&i&r' );
define( 'AUTH_SALT',        'Ny0;W:tW/DGA[pVR_=q%CyGD[IRZxiwl>~j]3(a c|R0%|A)qQIy%3/j;nDB[fc<' );
define( 'SECURE_AUTH_SALT', '+aH&2e&e`7g S)g|kRP4RAYH<ma(J@(y_bc)Uz@4j0B#>[]WTg#Qv8a-2=Zc?q4!' );
define( 'LOGGED_IN_SALT',   'zcNilpZw!,x!Lx+FZBLCg(dnx<X$6bFhDP6WC:#{H*i.Gd{53dL<h[DWva;l`poQ' );
define( 'NONCE_SALT',       '>6};G:Fo$_X_S:s.Qc}=pLr%7rY!T2~gNHobpmv&6mmZ2D#8)/X<>QQGt^Ph`*Pd' );

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
