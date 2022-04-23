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
define( 'DB_NAME', 'project1' );

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
define( 'AUTH_KEY',         'aW -X0r;]|&`G,@EK)!ScjDn`WNl5?3i)8N,*2mArM$xzt`CXRTjS=va(`J.bG(z' );
define( 'SECURE_AUTH_KEY',  'B2*d06N;n@%]}=@+YTB]sFyCJ!` NF5[A=zN.^+[4G*XPx>m4#jU|a>k/{o |MPl' );
define( 'LOGGED_IN_KEY',    's#fgz!;q.%3>01bgDLJH`LxR}a`6sV;,5`,Z.}NBt9(g*|g@[EbsnuC(imE4jL@i' );
define( 'NONCE_KEY',        'QgXoVqqIaG{ZhJ35#6WyfENtbS{E{7lYCiR)1j3=h9r_<Q8<Nf{KSl.^@w|?FiIw' );
define( 'AUTH_SALT',        '!U?;,8mI`m;@jD3fO1ZaFcI>L+;?hgSP76CA~|C)m#/di{K@ |,L^<or@_Dfc{J[' );
define( 'SECURE_AUTH_SALT', '2|>9XM&+s=y21js;T8D29_*JO//n.] ^M$xR#&<fB68|Er<{Ja(H@ k!Z$vj.U|A' );
define( 'LOGGED_IN_SALT',   ':qEq$CV&z&/Pg4hYhB39-aO6{Or91Q:PieJ7n1&i+8=U^HRKAM+fQ5>sS43ONC(.' );
define( 'NONCE_SALT',       '=V@(tK5HU{:9ydqg(bhk>&kO)+L_ wSm9zGLZ8>wP#(9/v]|uHeM<]G(}CL0N)1R' );

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
