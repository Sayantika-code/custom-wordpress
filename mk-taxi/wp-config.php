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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'mktaxi' );

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
define( 'AUTH_KEY',         '7_}CWj%g$(xsR[v)CnBZIocey>//uF9[I7~_M|+rI##^sox&a-G]g)LI>RJGCy=f' );
define( 'SECURE_AUTH_KEY',  ')xw{wxy4C.5o)CXk&0e[zq}M0oWqJ7,)06dz5Ys/Kol?%2*h3Kl_X|Fg/,qGTU/6' );
define( 'LOGGED_IN_KEY',    '|Ci|fGU8f_O=lc[S@x8hv[N#kCfVM[}{M}x0c&KQF!tVj%1jyY/WCBClRMJ%sEG;' );
define( 'NONCE_KEY',        '@f3k*(VrZdERk|!/!#ca@=mgSSw!se_`{&0%V#h$@KgfT[Bdg:aY05H[xPO;R~=o' );
define( 'AUTH_SALT',        'QVM*N;nY[<=OkhWxDSX+`JaS]:e7oBUV(Uc<ji_VvC07VUpv!a5[:A%n)cy%Y<XP' );
define( 'SECURE_AUTH_SALT', '*9t!5h+v;fmq=N+]N+f+2rv{1K+:>QB|mS}uD<01t<b58|Sc`Q6w`mflN]~wF0zX' );
define( 'LOGGED_IN_SALT',   'JL -Xdk@TRj0?6oxq4n&~.a,NgsgX1aU*R{!M_+taQ:.3)x6`O=|9Nfcs~Q=n8k+' );
define( 'NONCE_SALT',       '#_u5];)-U $c D-=I_nh?A^FKx`dB9HgjnocRB;[ >8[i~);m%ACC~#Q!gc@-xQ]' );

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
