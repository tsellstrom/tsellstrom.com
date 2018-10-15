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

if ($_SERVER['SERVER_NAME'] != 'local.tsellstrom') {
 	define('WP_SITEURL','https://www.tsellstrom.com/');
 	define('WP_HOME','https://www.tsellstrom.com/');
} else {
 	define('WP_SITEURL','http://local.tsellstrom/');
 	define('WP_HOME','http://local.tsellstrom/');
}

define('DB_NAME', 'tsellstrom_wp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
if ($_SERVER['SERVER_NAME'] == 'local.tsellstrom'){
  define('DB_PASSWORD', 'root');
} else {
  define('DB_PASSWORD', '!Argosy123');
}

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
 define('AUTH_KEY',         '@sTMBN-w/UL,IIO~b (vMe2Y#!w@Xgd+Y0vdbr3[-.{Kgo@6p!KybD,YH-T=c[Em');
 define('SECURE_AUTH_KEY',  '@]Gu*{?L<fWZ^ZxAf|M4)T4,<6>#j)7w=|>-nQ}oX9Mj+)`-yK N@:?^4QC~qK`r');
 define('LOGGED_IN_KEY',    'sdhH0Cv+,zYo6ANO`8&|hyxgqR;&ei`45U~D-qZsDzm-.?-1P-$SSKl_i6Su^V4H');
 define('NONCE_KEY',        'h|>9~-G7xiZ.BqyRlj8u$^!o!@Xz~JFXm!~wP[c%S{bSI-_RZ1Oo.V3/z-IbM!%q');
 define('AUTH_SALT',        '9d HDYyJ8$8xrbP9wZk*98AZ|e3+j0I57Hb-u(!Q6H0{!~|rbdeNXN!uDw5DRvu:');
 define('SECURE_AUTH_SALT', '@hGr,}g!sV:*(VQv_C,qJQ+xj039[U&7Szw.x;`w.@BA1zz;/jT-]al}]PzjFgWI');
 define('LOGGED_IN_SALT',   'Q%!(ggV&h%`4=8pa]<yi1Drw,@5RheG++q*z([pdT.1&uD0n6Utq+[#lv}((-:Y ');
 define('NONCE_SALT',       '-=^T|dX^}qf!I3Cv_UeBioFaWW`pLxhf|_iqm&PB<a=U![MibO|]jpuAv.=R`r,u');

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
