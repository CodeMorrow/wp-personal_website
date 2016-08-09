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
define('DB_NAME', 'wp-personal_website');

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
define('AUTH_KEY',         '}]?Wts;bcJGjQq[%wnJ&|-4Or$j2x@<6[n<`e a b-um>|i^}fELmjYOH+<bltP)');
define('SECURE_AUTH_KEY',  'Uu~QYMT1BG9.Adgv~JZqk~9@[;)knxN9^t!;wefX?)T,^E|%q3Lh(Rve_bD`&ht`');
define('LOGGED_IN_KEY',    '?oEtz#z.usJ-J?oN2<kW`MD!Hp04b++3&FjLFw]+ hVm9 ZgXO<Vn;@L%4nD)?pv');
define('NONCE_KEY',        '=lqYT}iZ 2j<kG~(pWFd@(E0+q:#@Pa1V<8lYR-VVC3-EFFk<QKa!Q5`qw!}$/h{');
define('AUTH_SALT',        'w%*Qr2},/Xg2Q^dozZV^qRO|~qUTVzH|20?x)9K?AtV!Ah7&=M4}tv_Ux8}:Ah.d');
define('SECURE_AUTH_SALT', '60QK.:3SloJlK(XOB0w)4QOLciO,}8hn$/BtOJ),]A>1+?79R?angEjnyoq8O%Q$');
define('LOGGED_IN_SALT',   'J;Fmf~l@&.u.;UElGxw BGDkJ=e;k$,x-&GQbEaFF]M5aU>>HXTbI>A&*SA8/kT#');
define('NONCE_SALT',       '?*CU]/O<?[Mj4si<?g_hm7,n:1*bgr^aBN8ndsSMZY)a`9$b3~w$od%+i`m9JO_h');

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
