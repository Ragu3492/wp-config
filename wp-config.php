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
define( 'DB_NAME', 'zippyopsdb' );

/** MySQL database username */
define( 'DB_USER', 'zippyops' );

/** MySQL database password */
define( 'DB_PASSWORD', 'zippyops' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          's:_jE@LpJC@G]a:zMv~Iv-)C8bhBbpUFAae=ZLi5ezB&R[l9{)My^|a 7R9 GOUn' );
define( 'SECURE_AUTH_KEY',   'Er-U#{<o4q3dr7Ow,6R?-U@M6a- l|tfvM687y4>oE?Kca(azA8nt(pqf~D@DhG2' );
define( 'LOGGED_IN_KEY',     'F3_n6|5,nV#:I?Njx>R:`,yv^I5p4T7 %UO/ypJ]/~A&rI8?p~0$[.i+m&!XZ&$2' );
define( 'NONCE_KEY',         'u:&Ybs} !| z%&GBogHAsQ3[a%gWvUc#3g^1bCPa6DXb ojz%MSC)^6]K4$iI|P!' );
define( 'AUTH_SALT',         '09.vf1(J Y-*yhVJ8.yqohYrD{EsM5^FvrJUPw?)|o6Ze>v^B_>9R)gN~MK%Y#w_' );
define( 'SECURE_AUTH_SALT',  '@9?s7}u0Yuw^b[vhg:MEWS5lrZ%$K yw|/}P[SQr2$31hqA]{;4am=p+8rc7l/mF' );
define( 'LOGGED_IN_SALT',    'HMx 1=QD[`xb_F/Nr}$4U%89n:Ii[a@ql{ZyqcQSr;u#n?9>Ch(r&tIMjh&tg[AD' );
define( 'NONCE_SALT',        '5@U[YQBIu;zr}tHwhR6H/{2s%0$r!Vsk,E+bt>fe<tXm>hp}I#!Kv)% kW6NRp_r' );
define( 'WP_CACHE_KEY_SALT', 'MA~W5wy<U;C`@P{*w%8bu[$Yx)>+|W{nvppS2.q@I>O)#TAHN Nnsh3qQuvbNVyF' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
