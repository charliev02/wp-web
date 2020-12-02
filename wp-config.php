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
define( 'DB_NAME', 'restaurant_wp' );

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
define( 'AUTH_KEY',         'ddDNxGwLVaI@uR$t=ubTqlR^gMK0*7gn=Chk1rJ/rl!=<1IcQ@.=T81`dG~|HV&E' );
define( 'SECURE_AUTH_KEY',  ')s[]u#$z_;YRR6d:Xc(BSKtrOALg~956dJOd:So(u)Nqgi>x2Gg@Fb;CLz?S<l3X' );
define( 'LOGGED_IN_KEY',    '*iuF_0 X<Q8[,Wbx3IK~Qe(o$WPwTfaoft%ZY[~.;>8B[9-g8M$_i]1AC0Y+wfJ3' );
define( 'NONCE_KEY',        'w.*u>wjy4v8T(24 ~+8aA).}^iZwLfVNG6*MW^2CL8@4_JbUC5v-KSr0OTd(X/12' );
define( 'AUTH_SALT',        'O6Td_N[F V6RnH)o{M HJIvdiX2WzNIpJ[37oWBgis(RQ+E.TCW<T2&G;49~6x/v' );
define( 'SECURE_AUTH_SALT', 'e?4eQNZ:;&wGrUIx%RS|XcXw M(;Ila]0J0*oO7]%ZWFH9-{O2*)NLta.R9pDY^z' );
define( 'LOGGED_IN_SALT',   '9GMG@eU*U@P%yeltW!BYLGQu:MVjkl^sa7)26X_?!!B1bPd9!bt>:O$od Mi>/t]' );
define( 'NONCE_SALT',       '#${L?K~r88hc-Ko59w[i40{MMq+zm.ad-Kud/gpH[^8_!oi6jP8xD |OX}NhO6=6' );

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

//define('WP_ALLOW_REPAIR', true);