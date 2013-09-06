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
define('DB_NAME', 'dreamcoasts');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'password');

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
define('AUTH_KEY',         '_+-j&]&@QpjX||/N(~|YByhcV1=[ me!!S7-+>,q{&u[]F}TXP-z]|0:aj>#36:@');
define('SECURE_AUTH_KEY',  'IxwDd||+`fjpm,O7:QaoxtOwYTQwe^x3GlTcR-^=PR=)C]ChNfAo)xPs-KG3Aq[J');
define('LOGGED_IN_KEY',    'wLcfz~|wHu9SHC*u1f+64=G=i|x)Z0lhV ~ R:<)(+5a9GP/B#bj*p=8Ox8-^+~G');
define('NONCE_KEY',        '2W0f(qDii.=%a!YIuc^m,:v6Vv !4|0LGC-6ffEN!dow*NfZFPqQiq+ZMk:2w,=a');
define('AUTH_SALT',        'UU2`w !083_F5Ao-Vw@f3U+w->7rmWt5t@JHI7]F@X#6T`Q~-P^pa15AB=pf8T<k');
define('SECURE_AUTH_SALT', 'M.[>~fQCvyFc||{i@?cg]|$VBC5=;,%*mKl_-V36*wZN;_B{k-#*RFR=-rBd{x.t');
define('LOGGED_IN_SALT',   'f2TZNmi/{90%0>,ITmWy+q&7Q=u1-a`)$D&rufiOaPLq1*N vrFp*/#.v4X8F_b`');
define('NONCE_SALT',       '+O_AD!u/kJ_VR~R??Tsy<`I%rW4|}S&Q Cm!?b}l<*se)QXENw-B!~a7Kv^WN{-g');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'dc_';

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

