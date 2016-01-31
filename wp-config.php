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
define('DB_NAME', 'wptest');

/** MySQL database username */
define('DB_USER', 'densem');

/** MySQL database password */
define('DB_PASSWORD', '777A123$');

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
define('AUTH_KEY',         'G5:z%q1YG[Mief6[tnUj;}suHRf4Kc9>4~ 2u&#up]J@TO6zLqkjwa6V FKW_81e');
define('SECURE_AUTH_KEY',  '$G|u^~S+%;3KBX(i=)<{jZ/8frWmVjk+r0@GX{5RkDYhU|oCj(S$g,k2$]vI7r;X');
define('LOGGED_IN_KEY',    '-1eo!q{&nz67U;,ZJu-s)%3*9o&Y-xgQMUeQ)ip.S9GsL=PtTUFABRW?yfz%TxH%');
define('NONCE_KEY',        ';yGAU.K?Q(R<96X-gX>(Oj)JM87O&x$L0#?awL]_uH!f-h]K,hf?$Im59_d<M+Fd');
define('AUTH_SALT',        'Oip_RWrr5@{+KqR}F2WzPZf^wqw/E%z|4ZM+50grV:F/WZq,Q+A@x.Es`XV|o8oa');
define('SECURE_AUTH_SALT', 'fHHfO*SiL=;=?$T1cMB3!rvB1@T9l<AP>ql<<0:q&Mzp[466}R}/Y}{;Og@7<lP!');
define('LOGGED_IN_SALT',   '-r4=Hspd$V5k2H*5Y `E -+#nc+&72j!a8O1dmA%P0an/./h!Y3;Y(z%/;JWL9I}');
define('NONCE_SALT',       '!FF<Ppu@S+cW`o6z{n,8E5Z|-=S<0ptY0;9VP^+j|YR/u443gRk_zDUwhhpZ2e:]');

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
