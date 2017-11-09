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
define('DB_NAME', 'ecommerce');

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
define('AUTH_KEY',         '-:.t1v(M]c#e[rmjijdnh@aS_p[B# tLq&Y!C v5: fY,=t9!xiXrt!`z~PG&y$r');
define('SECURE_AUTH_KEY',  'e=-=aMw*bN+=c*QbwfStzCT$8]TcU#/YI@s8g]rQkj&qY)5/skx6qTHwj4Zo8Jn7');
define('LOGGED_IN_KEY',    '1GN5W~Ixg20l|*s6W|x.Y3?;2M*1$hm6-zE]24nL4p-_-~,6)18CjA}^k8/X%4Ff');
define('NONCE_KEY',        'K?XY!EpH[,!{,UDJT {u2}/gc8BsQ{)JuXz+>F&R9Nfm~)kU*[:xH7z1^<-*w)Qf');
define('AUTH_SALT',        ':hvDhPw#i1n:`Y1S e1DRIJ=%O@88/-G/UGR7~Uap6I n{#+Ar2Pp?B[DZG`[+cc');
define('SECURE_AUTH_SALT', '{(3Ao2Sn0x([QP;%lvA:J<l89/YeP*m<x9*R(2.eCr)Lt[({wF?s5I!45^x2Fle-');
define('LOGGED_IN_SALT',   'HN*:-v}49Q`qM7NAJa{1w:ICy,yUo(N$kCLOS3sN?<UR18cQ}>)5 0lT08m9.`/?');
define('NONCE_SALT',       '&P&bAV{oG*}OO0OO?J(Vu~oCEr7ILIG}MAON),_5zYP([{3fP7<E$JGW1*[(yWF+');

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
