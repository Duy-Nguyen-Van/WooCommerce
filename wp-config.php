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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         '{F5-Uc*H%B@yO7(|jr)PL<^M0wD8@)c~KmxD_F#%p};ue{u|P:?zLZgp]q? i7]t');
define('SECURE_AUTH_KEY',  'dTXWj$FZuOlv>%dW|1i]hkm`$$Bw-rB9$0%R; !$@}p|Q>pndg0*:hXnG: Al&;(');
define('LOGGED_IN_KEY',    '+[=s{B2X5Q/Eo-Z20y- s];+hOg)U:nq4l$xpxX=aN -xxJVk-[U2O]ThXD>uvUU');
define('NONCE_KEY',        '++,|3rq,nqlM>CU+(ytYj9jJoDe|q3lROLfyn#JBl=c&F9X/_PMd0;SIQGuLAB^r');
define('AUTH_SALT',        'ddr,#w.jNPP?t_T;:L&]z$hWB[,X}&XW@u{Su.RZ?Evw+]VxHY~puv);3vMgp8TC');
define('SECURE_AUTH_SALT', '[0|t!<`NUJUlP>U><Mvl}9g6.#OASCT|Uh3qIkf_C1<_66{W2  007`d!<T 9=M<');
define('LOGGED_IN_SALT',   'S+ 4PM0rp)OAoFG]Jkf^CGy[q3fbK2wY:VeOuQXe-P,oHN(AqI7<91aCYXnM2bX:');
define('NONCE_SALT',       'h@|RYbVR!ME0oi*==Wn}8eTs=L?ehRtC}VT,O,b~>A<C2hV#enKd%Z)[&t_Mh!xe');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_woo';

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
