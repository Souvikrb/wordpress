<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ongbong' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'ubl?IZG<M=d,ePPY]!J`ke<X+@dOQmc#x]Dl2S+<APi*I2#W)yc[jtK*ki$$2`.]' );
define( 'SECURE_AUTH_KEY',  'z;+%EL!a^W?aiuI XLu85Hh% hllO%M/|V !I.Zo%cV+5CK/rUP1e]6?C9^ql_wZ' );
define( 'LOGGED_IN_KEY',    'ez5&SI`*A#}j0%[4teb[DGan2-/]-=K_S+e>)$Z-V|!w~msji>AJkJ/c9A5H20>/' );
define( 'NONCE_KEY',        '/MvQ]N,E^7ADUst;uT$;6@V]Br->~~[9@Uu[BG#s#?^iYdj..Id{.SGg[7:e3zL#' );
define( 'AUTH_SALT',        'fov|fMfEPh-V/)TkU=6&X;-.O2Q7f4Wg9Rs3|6Cs:_2.s7|K<@$/)bjMR7=:ihjV' );
define( 'SECURE_AUTH_SALT', 'S_|.%0SDV]y]91MBEK6!6AG;@uC&(7hL~Qc^Bk2o??o^k7&+Pc*bb? MmuiQ53?x' );
define( 'LOGGED_IN_SALT',   'xeU+>Ox^.{<iX13]Y?]hSd^g^SNfM((qEpJxaV2-S_]fNHl,#X(KtxoTIwU}Zu)}' );
define( 'NONCE_SALT',       '(|oAZQQ/xzq{ ZvutGt4~.D1.!MgffJiesW1KCfkgBEHP&2q)5)P1K(-OXj?C7~e' );

/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
