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
define( 'DB_NAME', 'miss_jane_austen' );

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
define( 'AUTH_KEY',         ')My/%}X5eLG:<6T&!p_K[0*3$Enz.$B8#SiTLg#ZIl}-EviJ}i?},?QH,RL,~AQ%' );
define( 'SECURE_AUTH_KEY',  'qow@i{iz=<Al+N]-_SGEF?K^?JD.}cLtry^`-r$zN}F*li #8c e&4>EY0kbKF H' );
define( 'LOGGED_IN_KEY',    'lI@o&@j$ {+6vH#ji7Vb@wDCq~uA6]r@2?$!LFQqABlt0^B%LVX<M$VN4ei0Mvo=' );
define( 'NONCE_KEY',        '*(D>PQYss~WA{9U%.|Lg5q-eybwX7g(_Ph<</hbVqgno/N0)!4(R24u7+Vx/~Qgk' );
define( 'AUTH_SALT',        'G$^-!*Kj,Y_xF@ak?eHCX;asO4&X%,SyAjXr+fO*#)Dg=&}>Wi<YKW:0, _aDfcI' );
define( 'SECURE_AUTH_SALT', '%kmauGR6ZnBW8e|Be$l$eFU><U<xf$,(c/^c~wO/Di36bO>%b_5><VNxCnqfFSm$' );
define( 'LOGGED_IN_SALT',   'o@BQX$me1[b^bfy5*/y)REGR=jI1|a1cFV91L$ldVt@>gO?731t-G:i-Wv@>fqa:' );
define( 'NONCE_SALT',       ')slaQl5?%uFX9aGSCh-mbdKVB4=;F[aN;_Kq;NSuFE:yAz[*67k_lDP=uo1C@bbz' );

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
