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
define('DB_NAME', 'united_ukc');

/** MySQL database username */
define('DB_USER', 'united_ukcadmin');

/** MySQL database password */
define('DB_PASSWORD', '@yArRh6.PF~)');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         ';e!#[o|J,=}Lubkv);09;C,}{v$y 2^{{i}O/!}_Vh6/r 4lFrNaBww,Ta3l$e^ ');
define('SECURE_AUTH_KEY',  'iHGl^i^G^J-SWylJY]3gcHIuLGc_7h%CQA{8^=AWnxm4wlv12*X75(pEe&v[rK/q');
define('LOGGED_IN_KEY',    '(tOn03M4RMj/nCLJ}Hw4jJ5R7gDS/XC(78=y(d6&eRW+/0y%Y^;o-oQY$L=H9eX]');
define('NONCE_KEY',        '=]Y53q4:C%i|HFN^SD^T3m6Ql//Aw}@<<kw83-VM!-&T%,B=L[&m|=c9n/|~ fq2');
define('AUTH_SALT',        '</*RzW<ASH]E0i}ly$k ?,Zw,z.$4TBCK):[wb4P2y2:(x|7GSx4g-Kh|{0nNn}L');
define('SECURE_AUTH_SALT', '8@q$.Vih)e;+|+mej/b5-fuJx98S9g:]|E2}^,4E rPWKX?kYc$oRg%+{xby+*=[');
define('LOGGED_IN_SALT',   'f||%v!Q]V:S(P=GsQ%;cA0Kst1>A[>6ILZze+O |j0cQXtCIk3h+s[O]yT^K&BLY');
define('NONCE_SALT',       '7C3^C^4jgvG#x$^=kQ,EulD:5r_Nb533*YKNI;D{8myL/i|~XyM!b Cx/YC%9PBy');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
