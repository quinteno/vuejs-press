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
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         ';l<abo~g};R$eMzt+oeK+l4JoFW<`x8E}l[#5tZ-3gyz3`?f]]zp`E{Ug^}5=xxH');
define('SECURE_AUTH_KEY',  '7F|{(>nCm$YQI<<)]Y q[M4p{h?#^4G4nrPeEIms4gpc(F]gVD9[d:h]bokmqp4L');
define('LOGGED_IN_KEY',    'q+d%jgC!NGLRQB 8PBXheOk0~)47,~yZ2|N]J1$Fd<9BW 0N/8P*a&PE.E5&qs/5');
define('NONCE_KEY',        '#Ws=1TEN!d.;@W8Js zuma0mij/k5z.pcyqN&5?Gr8g~dc]lauE_fm?.}*,[,0WA');
define('AUTH_SALT',        'bMQZGbXlO]iA7FYwU~&CtG^_YhLSm<+MSrQ/94vN+J8ysB07A3!8XXz&nSt{/O1/');
define('SECURE_AUTH_SALT', '#>z>^ P]|JV R|I&gU(6YhN .CO@n,7<O([;9tEeK*0NN3?!#N_Zc+:8|Gu/Mo.S');
define('LOGGED_IN_SALT',   ';>hnI rVrq[kW`V8;p?cqNkFEfN>nyD0?0>nOWv,D>z9QR(m|bk[u{[wNLwv`</=');
define('NONCE_SALT',       'vb}7B~}O}*EU:Mi;kf+i&N(h$SZJ/9I9SR !e+`6(`kvl8x#J^2CHMf/p2aeA|q]');

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
