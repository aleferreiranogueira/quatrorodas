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
define('AUTH_KEY',         '8:!~-<l|G?,O&1KDPCi^]LK?0E_Af]N}j`EA^KAS.rs%T~Sa>tPdlPay6I?5gOG>');
define('SECURE_AUTH_KEY',  'rhN$`F_`E2) u4T/R.$(F]hYidc6L*1Go~nmNWQ=Q]yv6)0gt#{5+[t<L),GH$<p');
define('LOGGED_IN_KEY',    'zgNYnihQf$vQ0_IjChSnCx!Z[y95@ ,+QKRVGsoy^sQ2H&vNh:xBPbouUOvg/pFX');
define('NONCE_KEY',        'gp@Aga~fZMLio.4>$=SHX)u;}(.ibdOd1I,%*=TWV3yS:Ma6Pb1|gr B}]7yB;IV');
define('AUTH_SALT',        '*ln@@-XvvqV.hSZ{]671s-3D}z.$ERO>l=P;*w#]@t9OcO^J}tixtZ;[d;o~kXq0');
define('SECURE_AUTH_SALT', '$U7Fo-EBC#@m2FjSM$W:mfAB+$u:67m7CGx.?k{-!=#BqWB:a@akMAVcvBJAX[`9');
define('LOGGED_IN_SALT',   '&^TrowA6=n7c!#bm<*/;((vSy3I1D=Lh*,6&1rada1q;%X9.x2u={~shzkP`gV2-');
define('NONCE_SALT',       'qT/TD;_=/|47.S,<GF( #PzkR,JvLd+B+K64mHhZrxK%;w.)?t6,WFAGk;xv[q c');

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
