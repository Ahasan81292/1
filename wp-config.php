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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', '41' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'ht8HR)f.[m0YBF$xG;ypXXhgt-3IIqV8099>LGZB[=0>39@H/C+TE2^>f]Fa%D u' );
define( 'SECURE_AUTH_KEY',  'qJ.34:TC$L@w?m,9oW*C6xC]b@_|e7TPyy-9~IO-Y)N[|)bgFh)<%Axhq0S9uHcG' );
define( 'LOGGED_IN_KEY',    '}n@pr-/T;Y-T&93EjwZ#MV#i$X,/WTcW_Y%]5,cT@|2e91eF^-PAVfGI!J;xoPX-' );
define( 'NONCE_KEY',        '8l$8={[8I`<J_$%7OMpPfaNLui15RusN=so%sOQU;i4haZ.A>XI=h+*0Uwm#p8pp' );
define( 'AUTH_SALT',        '[<A^BiC@eD;#YVt}FNA]hP%MI2ea/w>/;$Q@c6=hkvAi0M{k!ETKeW}hk+yg)bfr' );
define( 'SECURE_AUTH_SALT', '[(W{-[La9+`VBhFk??Sx!+sB9;qM?9:D^2sObq2:KKjB1nw&4.73B<bP[.bP7<kK' );
define( 'LOGGED_IN_SALT',   'P{3+s-U?:Mypi/z/x>1mR yGvL7cP5WFSZmZSj=&DL0i9PGj:pcBUh{keWzAli#h' );
define( 'NONCE_SALT',       '!c@O*.gUL5uOt~E=JN*wF$>?8Gz~0[R Q{ct[gExvjet~zK9wZ!Q5[`b2,SLD7BO' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
