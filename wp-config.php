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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '}pJ.<9!z4-]HjVj=bXcVf]<&s3yV78@$Am/PNa5;>A%?#^jmKg}C6lVvBbUb.ya}' );
define( 'SECURE_AUTH_KEY',  'j4/@SUV}pO=^N3&ic_Rs[>a#4(.d<JHLkxOtdbCKDIHDf<WxI~tz[0baD?$_8;,8' );
define( 'LOGGED_IN_KEY',    'R *wE!%qzs)eU)IbFMH(PU(tThIlUdP5OQI &@@yw@?T^|sugPR&FT$;;rY.z0z>' );
define( 'NONCE_KEY',        '3UgVE8,6LKqk#,w{<kds[%EE$R@wj_,$siM_YYGNdnbRR[G@beQz!hn%&mogql[%' );
define( 'AUTH_SALT',        'LrcjZ|S%$7)6ecY7Nk<D|%1t0Rtl^i/^?+]|nJ)~%GfFnj=tBZ4V&j7R~V`s40N~' );
define( 'SECURE_AUTH_SALT', '%YBVsy4f&BoyT0*3`) M%`Lr}tJm_2i2W,&~ *,.]KxhHmLUghZB>g0=cfiDJ8xA' );
define( 'LOGGED_IN_SALT',   'qHu%Kgft_JQ9O9!Qx|}met~sl~Kj/uksVZv8=gbQT2p n$pB/#2J~uR?h=S!7h$0' );
define( 'NONCE_SALT',       '{n@zJrH%k,@IXgJ+=)~6(U2,hvc14ZT:<Z!q{q*`mz_[h>&`_GRq#4mP`&5CHnEz' );

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
