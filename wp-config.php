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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '!@C1kYW0.[5*4ztOTXaA5Az--ibuiZ/F~7/IycB=TcF8&)P?lJ[OQhBJ*?<oGn!1' );
define( 'SECURE_AUTH_KEY',  'y~t;: h8Y$f cT:3^yu(4prz}4 6=N0;|pix;!zS@SxPSchFNp,rh%ig<R@~4w]~' );
define( 'LOGGED_IN_KEY',    'wgozV%%exsZav$z_Fd7]yo2^St5`h+edbFw0m3{hj4t0c{DGC[VP%Ipi-xW8MSBW' );
define( 'NONCE_KEY',        'IZb14Gya]oU!v4]sfz2sTS0>s!#A0qjnczPoxVifaN#-.>iJk&>!l$/*g)x.ZLK[' );
define( 'AUTH_SALT',        'WJzbA@cFGkCa[t}XKw=qQQ 5_c$b$lG%rpaD0zfE97<OV%j_GbEEMqh.a pMZJnE' );
define( 'SECURE_AUTH_SALT', 'l-jN3rfzAd$FMw#Zz8Rm|$94xHCM>luWzOHxU>91p{X5V$it2{@7<Kg@ZF>t_wnB' );
define( 'LOGGED_IN_SALT',   'H4hYHGiv{AV62DY~ zWCgc,6|J4w2hqv4)+_?x%k)Q5#Ii^Pa+-NNAML9sr#-/nY' );
define( 'NONCE_SALT',       '^eW#Hi#_,Uvl3P4E<s)~isAMCr!9DtJtgv6=HGE)1p7IhqM&]2a)37h-&NeQ,Y) ' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
