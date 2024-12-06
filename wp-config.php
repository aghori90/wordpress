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
define('WP_CACHE', true);
define( 'WPCACHEHOME', 'C:\xampp\htdocs\wordpress\wp-content\plugins\wp-super-cache/' );
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Domain URL */
//define('DOMAIN_URL', 'http://localhost:90/');
//define('WPHOME', 'http://localhost:90/');

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
define( 'AUTH_KEY',         'e/T{24`w+^X?AQG$4[y%oWePFmz~ueLH!jZarqgu3%3>jw1gNes1>0_?qk2-S>mg' );
define( 'SECURE_AUTH_KEY',  '%fR.)jf@7~/_6B%zYe|IH,v2I((ib<b73crGJWP1Qly*{OLwVk&, =-o~CTGhV<g' );
define( 'LOGGED_IN_KEY',    'j=P#duM`w|SXSyrLPTouU[vx d,sg1t`h;gn2?a#?:_K^Hr_,s-Xh~>9`pNRXCg-' );
define( 'NONCE_KEY',        'xx}dy4~ R@y|X-} L$%f=~ap=&%Y73?<73;(Ak~XT}t?$)fv2_ms,R:yttd`hedG' );
define( 'AUTH_SALT',        'K6E9M>0 bxoXfqF*1y(Kz+C?1hDzk+1rlu5D-w,A(3NM?;xy`&52<cR{6`n15&-x' );
define( 'SECURE_AUTH_SALT', 'bocYE+a/bdry,>nv{>PBYJW(dIU :q)tJ,k2/;~.I9OJ:a^R~Cgpi.;7y3sH:NLp' );
define( 'LOGGED_IN_SALT',   'uEF&Ot(qX<DHaj ,(X@`n.+o8M:[T@JucJTa_mkWva<ZjQ)pLBc 41oG%ICna2{2' );
define( 'NONCE_SALT',       '.z5`LIN2cOU#%Cx6Z+6W6/$}z@IV@^Q4]j}*,`nzB@v_EWSV#`;GVOT{{ch&OL[s' );

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
