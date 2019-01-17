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
define('DB_NAME', 'smartgrains_newsite');

/** MySQL database username */
define('DB_USER', 'smartgrainsnewuser');

/** MySQL database password */
define('DB_PASSWORD', 'newusergrains');

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
define('AUTH_KEY',         '+q@u<$.6VfV)A1)D~H]cwvD%h&)*Z;9 >s<=.n(UY6rWIcLA!^b(-k+<Mv(ok%_I');
define('SECURE_AUTH_KEY',  'jAdY{? ecaW7MW+INn>8:&in70GL2^V2`>j~<IT.IH:a{:w[fFbv<RCp (`Mb^P?');
define('LOGGED_IN_KEY',    '}Fz`;rPUO;2L@j8?Xgeo_cLQ~$B_KU9Bv?TE1$#]=.y&3W2I/g)[3`%V]HX`x%=b');
define('NONCE_KEY',        'r~c7{bW{46^~cyMVxix#VG]~QSUh%!sFFjB|!ThR9YGvam60(.Zyjp;Bc3k*hLR@');
define('AUTH_SALT',        '^e]6%~]$bWB11Jl>-JaWEU|R$F76Mtx nH@7*n{f`7}olc~-Re7KC4WME/vI^{+V');
define('SECURE_AUTH_SALT', '=avpK9>BF#JYgeBn0|{_nA:|op#oj8DS9Oqw*#nFp0CU_Y +wm>* :]^$brohO G');
define('LOGGED_IN_SALT',   '!LdAS`?&wka/DBEIf/m *%w)A.a*M#p*#o5$>2_PnX92_}gp~7[4h~^yD<KEh:8p');
define('NONCE_SALT',       'o^X_.<`.V_<7Dfh_-IrfzqJxR8b{vqul4*EcDQUI@Y+<JK[HcShK;~;+3diiR=H;');

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
