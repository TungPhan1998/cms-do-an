<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wedding-restaurant_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'UBW~4lK!uE-mBse!Q!mZwG&;r?utuso*KfG+X7K*dipS:]{@uDv9klOx0p)TJw#G' );
define( 'SECURE_AUTH_KEY',  '$*2ZO1A2nh3t.?DHbwy=H[PQJg@7lji4YM;<[KMSJHNE|kV)Uww]% [Xr$TD![%Z' );
define( 'LOGGED_IN_KEY',    '&Ctaz6l*1`lEiN-7m~rH5DEwHg@Z3wF$U^6k,L@l;]Z2%}6r# G~Cqep,$jwid{<' );
define( 'NONCE_KEY',        '.$K#Cmb8e:/A<]lJ>0gR7}U(EyevF2--Uo/a#kJEv 0npPNg2izq2YovgBs%6L>o' );
define( 'AUTH_SALT',        't}(x*8-2r0EIx31Ai(=aQ]G 5;Y#[22_SP@ua1!yze}HwK:$i)hs6PSGwbwuDo.W' );
define( 'SECURE_AUTH_SALT', 'sV84tFv|mK=u^Di_ZceyR~m{@(8W`QoQqDE5p@+F`$m>E.$E; ~(Xd#giC0i`y2k' );
define( 'LOGGED_IN_SALT',   'las[Eeok2&4~]2_{-otbil4q>f%0O:cQJ!JZ6YnHKw/O+b,)nCW!XRt,xrS2z`8+' );
define( 'NONCE_SALT',       'mxj*;a{7<XyJ@1{h/]n8`^EA<TpiT]^mXlEb+/,{YwQo8Hw+RQ~ayzB$+Q,8L3>T' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
