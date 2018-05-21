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
define('DB_NAME', 'terebig');

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
define('AUTH_KEY',         '2a#oKqqZ#pPBfrQ6;#(;QN4ig-sG%Vzhh@7iqdtGh)>5Wgw~7`1EX#``NA4,7,k(');
define('SECURE_AUTH_KEY',  'FY$UTb_@LSpf+e&q@Ww=ThYWK(p@@qh G[L]x^(+0y&Tdp{^tlP:g )VhQtiHB?R');
define('LOGGED_IN_KEY',    '#G{Z}PRY69m7sP~7t{_joAyvO=~KqGm?!kWRo#7km+oE8xN|fhW|eSY}|m,U^Ou%');
define('NONCE_KEY',        '^YB#GSZ^I-M4zQ+xBd].6 Vg3x_l_=NJ~-sh$iD({=!M51W20`lgoeo=bW>x4A.8');
define('AUTH_SALT',        '(w-mP@gelHhFk-{]`i{Lb1y!XdlTqI!e.#+D3Jga6.rMcz8R$tdIxr8m7mB*i+$j');
define('SECURE_AUTH_SALT', 'ti/;K*!!bN0Zg:{ 6M-1EfN%yl2J<J8N@#.Wy@+_9Zf0W~@RZ,kYr9peNXR9vrzV');
define('LOGGED_IN_SALT',   ')gPm`Q8&2Uf&Wbsk h`^Y-1f@Owl!E(6>Ri# r}e_9>-R|-Sd%!E}4s0ofQmV^R[');
define('NONCE_SALT',       '`|Pjx3|3kr~FW{@U/S[4fIstD8PjLN[l[=XL$?Lu)LJL[<%/841%zVk`IY5VWxE&');

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
