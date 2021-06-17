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
define( 'DB_NAME', 'wp_mediamechanics06102021' );

/** MySQL database username */
define( 'DB_USER', 'umm_admin' );

/** MySQL database password */
define( 'DB_PASSWORD', '9(p2!6N@TkE0xN5!' );

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
define( 'AUTH_KEY',         'd$I*Pd3ljG] -Jlr@NMEpP`N@sDnM@Z[%?J8}`P9|GzNa*kG<@G#JGU ^7qTI2Li' );
define( 'SECURE_AUTH_KEY',  '{kZl@*$*1V*e$=TjPz>_~=A?Ra#U/^)If0C9<OK%(MOS>)qQGV8_6{&b&h0YV^yR' );
define( 'LOGGED_IN_KEY',    '4Rf+@I,9l{Qq?Fw?/R^&^T3NG5b/TKo>n6hS:K4mt[Fs5f.lOyR~#&%f[]ZG6iA.' );
define( 'NONCE_KEY',        'Z2/sq,p@-c)gGHDkz(VI!SB#,q|2)o<2T1[k,>L!r?EB@$;y}{dDFZ=xG!p<+6QE' );
define( 'AUTH_SALT',        'l<Gh@ou%JWu &d!|A8W2.~xZ=,Y&x3UtsaIF(nip$U/HY*z9+mY4n>~z7Ak|_uy;' );
define( 'SECURE_AUTH_SALT', 'M=}Gjp:q[ m.WNE)Ote/1{+rnKJ$dalSs<Yvkc9tw&N#o5OW#_|(mGY1kbMb],sq' );
define( 'LOGGED_IN_SALT',   'VkjG!T`?ZT}=ggDyqOr.+pyq8YU@CehR44QuD<AUObW.3&iM,I9VIv30-lg|T?>Q' );
define( 'NONCE_SALT',       ' *I|e9~j+R3<`W<i]$KY,9-?AnP~B/-s3z3)%G>i?[x]~tuuOLO!*]+E3El+$sPg' );

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
