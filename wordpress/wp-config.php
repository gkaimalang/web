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
define( 'DB_NAME', 'gkaimalang' );

/** Database username */
define( 'DB_USER', 'gkaimalang' );

/** Database password */
define( 'DB_PASSWORD', 'oraetlabora' );

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
define( 'AUTH_KEY',         ')L2VKs+D`1okSX:SW>x32YmWZE3-k)6;>qDbbh_QY2NB U}jnlXyRxK^LH.7LH?7' );
define( 'SECURE_AUTH_KEY',  '[(+;NW0&G:WRFPKSVY%GqR^4U936.qbMey?pE:FCD~>G*yi;E-BQ^6iUs:guWK!H' );
define( 'LOGGED_IN_KEY',    '1I{7Of73bqyC]tk_*koy=l8mm:zlOHqRXdO9LZ4*uL=xfUs k~Hz}9/.].@RR9Rp' );
define( 'NONCE_KEY',        '<DnYgRd(&pq{umnO;3^*_]vnYXn8N<@M@;y_4]npYo5T7:mR2=^zH]Yh)q &m3J^' );
define( 'AUTH_SALT',        ' 4nHO##ssJquWM9!f{+ZQ%g&,R_GCPcRp<$<s tcB`q7Lm%OrL30tYE@HJ*J_lE1' );
define( 'SECURE_AUTH_SALT', 'N ?bwXfQc3Y|UE>Wkjk.}@nc{G&/oS~.YCXx0y.s@hJLZk&aZ8_Tw?{k5Bmk:48m' );
define( 'LOGGED_IN_SALT',   '<=.,6_x;oU8my4.m@~N~cQxSrw1W-iuun7xv_lEBqP>@dBiQGaro1>Td1:K-S9h|' );
define( 'NONCE_SALT',       '!NP?WhtD>Ik3AZAG*!gL-t([09([jriV66&dAO7C`~JgDDONq<YZW+eUPk(4Uk#K' );

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
