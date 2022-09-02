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
define( 'DB_NAME', 'store' );

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
define( 'AUTH_KEY',         '8Soy^NCRC|a.;xEr4D+C+-?rDtw)^eP{K<mL_^V[Z6#u-,LzKp38DyX0/tkWNNh&' );
define( 'SECURE_AUTH_KEY',  'QvFRvvq^5.g;KjsJnu(^C[B:e{*%=7YfWGemMQ1hw,WGQKpCP/E6qufc6,0LTh?I' );
define( 'LOGGED_IN_KEY',    '0eVDsbtY%Mv3dJ.B4NB_gcqBaXJWQT`:#Pnh2QZ*I:Rds>?=_PsGb8|Oqwg~cdMs' );
define( 'NONCE_KEY',        '?9 lkzS; kn0A7Oa_/L>A2xnYMcg-?$a$qyPM2&5y5CA}35?Na:vSpV}mtSN-WE0' );
define( 'AUTH_SALT',        'GAB<i4|rY>ex$!Lv@#_qDDCq8|UC2nl1up EN~0T<~i#dir:KgqbK~{TKT[7;j5s' );
define( 'SECURE_AUTH_SALT', ']CC]T!2OxUdyYJq5wO2]ym>=X&/kC|Uq|/3wu[9i6jSiUB{n1r-Q8w*`Z`hA<~{b' );
define( 'LOGGED_IN_SALT',   '+Q9:c[{QLJ<_iDI,snOS5!Sv:nJA^)qR=B;ZE_edk_c2VhIA,<P~cqFrwNmbx`_y' );
define( 'NONCE_SALT',       ']E5e/yl9ntiPmz6!Xe2o)@G$[N#KdujD(4__Fb@;pCz{iY~#EAvfY{PKN#vdaq%N' );

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
