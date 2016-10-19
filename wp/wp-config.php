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
define('DB_NAME', 'bhr');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         '|?a<:3uS+r85EH`)jCQc%6O4[)vJSP(e~^7PbVdfeFjN?h6sihnH4}K%QVdZ1K~G');
define('SECURE_AUTH_KEY',  '(K~r36fjh]PBtiv4ROr@6M!@r} AF;t$cwx%oXRNu:j=OW#0<n7sSDQ%Oq?xkLLn');
define('LOGGED_IN_KEY',    '!Dh#Tr/?}AE-dXx]+Lu>yYqzS3eeQCJXY}:cv<{2xmA_X0sQnrrD.!.|dA^qS61o');
define('NONCE_KEY',        ']5@D~FNOEGZ%!`Ra{*XV?:-q%7D!0@POk_S%JT.K[n0.tmf;-I~Npt/d1j!#~sXr');
define('AUTH_SALT',        '`&!i?p6vRS(*}xUFlA9lC@tO0OlY:s#MZWleaaldb`8=!OVsKhM/Mv!Xa44T/V{E');
define('SECURE_AUTH_SALT', 'bi:VyV#:W4N;E7<w2@IgTUE00/&M7wqJ M)=!X?tIAYOa_M7D>=F oz-$;ABu=H[');
define('LOGGED_IN_SALT',   'z !$b<:ISpZ-v0|k}?_*Z!ExvQJO9S+.UX 1rC=,ure?^U!SA;FGj/0mda3^zgFw');
define('NONCE_SALT',       'Z;C,@,C<}$m;Qlo>z`9 S^8l[!*O1W6CE)R4+@m2,e6_4%Jc;[uiA @:#S&dvE$k');

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
