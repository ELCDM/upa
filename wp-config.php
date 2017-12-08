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
define('DB_NAME', 'cooperativaupa');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'udB8YdTn).iFX},&2ek#m%8]#i#3FrjkP/tFl6VA =(Yi4WO<A~~V0s*=06^PIW:');
define('SECURE_AUTH_KEY',  'L}xOv*O]x/;|O=6I<C!RstL|dji(iQrnWV;Kqhqo^!Tj0|~6kY}AcsOL])@aw@GS');
define('LOGGED_IN_KEY',    '5Y[9R>.{b:lahKl]X5N&WSOeU  W$),u]}Kt[-S62+~~GA>KK91shPn-e}C9,)b<');
define('NONCE_KEY',        'wYz,ADK1b4ovQK8d>ed^9mkVe!nI653nrx>)grymiPABKVLKnMy2+qRv? Iw)Wn)');
define('AUTH_SALT',        '|z7Fo`K<X6%Vu6C)N)5tB~O:sQl6Y`)*3?o*0Gf(!J3I~BDOq=z=;x*0!+hQxwX*');
define('SECURE_AUTH_SALT', ')K1e<N8wt.>OM(>=9oGH#U:d6}:SHw/xn]dUl~u[s7=i;CwJSVO.J2v=CxN4QWh-');
define('LOGGED_IN_SALT',   'HE`t5B&S.X1%/7O#(:/&KLGJiB#U;~Gj@<%gF,qDNYe.foM7-U9Xm]dL5|P ?v0@');
define('NONCE_SALT',       'A}795~zA3#g){|{|)k_Tf@G(?B~uHb ILV{e+)3<jQ:S>)9TdlrBfpGjEX%*L*4i');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
