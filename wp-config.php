<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('WP_CACHE', true); //Added by WP-Cache Manager
define( 'WPCACHEHOME', '/Applications/MAMP/htdocs/sidi/wp-content/plugins/wp-super-cache/' ); //Added by WP-Cache Manager
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'playstation2');

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
define('AUTH_KEY',         'puWZ8J n;5+!t{FiSy:<NW#<a L+o!|YQaPp./]V4w+Po (XC}ELhwa#.8!3VQf0');
define('SECURE_AUTH_KEY',  '8>y@[uTvLp@MhePHnCR0z,{/94lYip{|GiO<T?a%R8J1j|ZCKdV0yg5h`BP%E=7e');
define('LOGGED_IN_KEY',    'RFEG`:F*v@#O`~@87yYf;$3+E]p)-K%SO2@E&8=(39iJkXhZi8Tj!^41j(>-01PV');
define('NONCE_KEY',        '9AK?8V=k?RyG<1QFf9AUy1JUFOkQjp>wk6^FHp1(g -<jmSgF$)s{/U|WE=JN5|U');
define('AUTH_SALT',        '~HZQkFuN< =dd+Hd0|x!zlk4/$ wKbR,pv2aiz%ocx{f^2zs^#8|&>&Kw~Ohx$/?');
define('SECURE_AUTH_SALT', 'bi#`s,nIlyb?y<3{?7TTagG PxOnFdf7>/=<G|(ym}p f1wz!%{XL1AAIXERKBgR');
define('LOGGED_IN_SALT',   'CN( 4*mMrr?CQcVZ$rb71$m-(J%<!*^r5er_4m/96<SBRe(nKBa69,?z(qb%]ePu');
define('NONCE_SALT',       'fu1O[~lT+^1^,wq-3LE0p1*f{}^(Wl,E|FbXy6Ey6d +-bZ}nPP&%6.&# e`T?^j');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
