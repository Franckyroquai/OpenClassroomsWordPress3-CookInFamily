<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'cookinfamily' );

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
define( 'AUTH_KEY',         '%SSypX8J&D0>R7]iu|N5T+=o6J3R0]l{I]HT^@bW)[.oq2vX+[o$1{+mh*$ddbR=' );
define( 'SECURE_AUTH_KEY',  'rw{*sukmU,a)8YVq)Dk~k?mF1*Bpk2BpF,?qq|>`C*=V(R#KjE9#.)ua}77;8bm5' );
define( 'LOGGED_IN_KEY',    '[^dR,G4$1ggdy|%fT^0QVwc:.G={m@%`-8LB(Nw8`8)+}a9^IM+Yd-Xzz5uD:hhK' );
define( 'NONCE_KEY',        'w5|r7Lp)5BOI;,h LUv1zx<j2#FP6qZP0zt|BhpumZlPO.$a=(ZU1B&Dg??mUE9f' );
define( 'AUTH_SALT',        'rlFz4[0(]<^r^I}A`;,1/q{_OMXPn=Z{5|gM)>hv;1#LJJt)kGpWA!]Bk3Hj3tk`' );
define( 'SECURE_AUTH_SALT', 'LO9tZq8JvB{P>Acw*0,+~,S~RJo}(6RQn{-IRk_TKrrV:L=ZO<YTPd*(LE[`37E=' );
define( 'LOGGED_IN_SALT',   'fY)(&gM7B`~^hQWOrH_,=tdLbT$;afhHtkxC{0N6xW&2DI*W5AIBjF8fa_Lnu{&W' );
define( 'NONCE_SALT',       '@[21KEhN]&BJTs=^B5#Un[`>v[kp#YTn?6][9NG&%3jM/6/@@IHG=Dz>L$wQ_)e!' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
