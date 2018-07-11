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
define('DB_NAME', 'bkpbhcam');

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
define('AUTH_KEY',         ',7rk7Z7oZk.8HC=L _b}1bLFs*u@mCDab{aYqL_!~t@#A$a54JhYM*^Ow>Q4e1H9');
define('SECURE_AUTH_KEY',  'y;#@Zq0{5P%TPV0FyL7uln4Tc!uLlM`jC%M5.]lVenRdcr2|Vxhmn!XfW/5y4~;K');
define('LOGGED_IN_KEY',    'Xj(})ddtT?H?(Udp|>M2{C8~XJ5Pdj n@ElUyf:MyqndFtW AC.tv}-Js{G2Skk5');
define('NONCE_KEY',        'V$eu9G_Q7ANv;B]59^|I3)xo$]4~-_2lw~xV 7 4^zn=&uRiZwSodEVhE?4K%p(8');
define('AUTH_SALT',        's6J<-uEtwBXy%K5_1OqGhNEjw$ [^*+Dm9!97%vA@:.i|.M~wUY)yJ4R 6{yMN7e');
define('SECURE_AUTH_SALT', 'FZ8VQ^Y#G<@tLsTPgYZmuUBD/kFcWe8OX*?K)(zU`M-v>!tsF<6$?qxXvo|5(uvi');
define('LOGGED_IN_SALT',   '%r->l#XTZ$;lK7w[1^<HY ;n/:vfRmGMr@U_;c&-@u4p~0hiJc*.8W-uc9$O8>WZ');
define('NONCE_SALT',       '6)*n,?#QKv<6_mf~v3slA8}RFe$~X-%p~Cli`t,Ww:5mp5_Y2/;J.YawgY[@A~6K');

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
