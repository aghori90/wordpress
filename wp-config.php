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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wp' );

/** Database password */
define( 'DB_PASSWORD', 'Ranchi@123' );

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
define( 'AUTH_KEY',         'DdRmhs2v_?NYg$BH41D2PLT3{mSDQ3yi01H;P0R5?vd#w&A&[J)a|+N)j+6+7)n-' );
define( 'SECURE_AUTH_KEY',  'b1,WztGw;v&w3S#sd7F?VNuKj-vI@p)-zg6T<4VM`?o>_7/by;9B}![zXHyhZbvG' );
define( 'LOGGED_IN_KEY',    'P@a3HifjpIHp$B$u&,nQiI3:jL&WZjT/hI-q=UXKKe6FjJ4LG[zKMu<Ulh?pUD&y' );
define( 'NONCE_KEY',        'IP`@-1<|sLLe[uN%1iH&&fDk61$3VA0!+iv#Q Ub2VzkomxBnCjjvqacm3Z[Y6..' );
define( 'AUTH_SALT',        '#Jrfadrt,I-:4PZ9@_<Vf2R8K pF{PXBEF{4pad.18nnW-gFvy64:)G[(Pm4bOYn' );
define( 'SECURE_AUTH_SALT', 'pmM(%!ASGDC@,33.L3;*+s#@E-SH;?pGVBU1N?T4B|ZzjcnqR~n[ThS/ULq1x^s{' );
define( 'LOGGED_IN_SALT',   '-}}z`pOY}?F8yfZ2odzIV(4,=~oM4^3^vmD-+34;j^{D6}[7]Bmh6)P.+LD+~<q~' );
define( 'NONCE_SALT',       'U)z}N>u^miq|Qk@g+ce3B[X8dmJ6RT`_Oy,1pYDi&y;K{ib2@@15uu9ws-4K1+TP' );

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
