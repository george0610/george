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
define( 'DB_NAME', 'george' );

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
define( 'AUTH_KEY',         'l#q=(<%YF+o UVpT0^C|j*^coG2)Nl5dNmwhr!7^Tp~zNHa?NH?VN}b4eZ/C00s?' );
define( 'SECURE_AUTH_KEY',  'RK^eqsWukgu.F=~-n*-r^)-ldri8~xrkZ0U?s+`O<Bi?42$<$iuGm-j`nV1%@A r' );
define( 'LOGGED_IN_KEY',    ')#U]E~|5]W{.1O:H>>O)7X)kw5a).B}qUhOU7G5hf&]dldE?Y+vgH*xOxWD}!PrK' );
define( 'NONCE_KEY',        'XoV&7b#:$f3_(!|7$!.`i6:DFOr3nvjihf[9{Mem4uq !`tDnPiqLS|IgLsQFj~&' );
define( 'AUTH_SALT',        'k|SRNlg*K0m|Usz6$mCG.%e*<2VtoRM($sCM_P#nmQFQCWe|UwhB|}tRIIkCmjn9' );
define( 'SECURE_AUTH_SALT', '3OMinHKoV8FSMvK>_%),Q4oGv,j>9q0nOob@];7h+Vs-N-dv5mBWkOGXDpABm|ve' );
define( 'LOGGED_IN_SALT',   'Se69;zI5nGH{}FEa=X:TV8yE7-MokcRg$&iQs-IVYg-dx0w>Y]pKf9>5qt-Q+HDI' );
define( 'NONCE_SALT',       'RX4/E1 xd}&%PE@]LGz>8#0|q6OY!acY1_aK)X/ jNT3WGiYG4hw=$UMbc;UZ#DJ' );

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
