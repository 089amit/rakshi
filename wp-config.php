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
define( 'DB_NAME', 'rakshi' );

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
define( 'AUTH_KEY',         'pM&:CR4L0Yg>-; GIx3l2aE3PE@c>XI-0hIlrD`uF 8GU(_8?vp#GfMn7~~y@=fm' );
define( 'SECURE_AUTH_KEY',  'O4Ds#W;><n5k<Xr@E|t|T/+dLtZjB>Kfi--t!+XG$eLKnQY]-ZI0m5^e_;olTh*=' );
define( 'LOGGED_IN_KEY',    'YFL*dc)v&x?-t_RW{6jXf#?fA:hg&xfCIRUs@N^0ike5)fLp:b+3i&>N;:IQ8$Tu' );
define( 'NONCE_KEY',        ':*kJ}sn,ByyLGZkF5W-;_s$?9X_k8`II{M#6A`bE{Un!MJ<soll+0GXs88Vv+3uU' );
define( 'AUTH_SALT',        ';VM-/{3YYK$Lyo8(qwXz&tt#28#j9>-l$Zb{bnmTM]+[;Ng.`LnV!=k-lUKOlD!X' );
define( 'SECURE_AUTH_SALT', '8:JQ{gWrNQY]d9etJ}]7M}8MRzbvnnC&YpY,CuQ});UeDOugAfxiW9RPQs5Gc!+L' );
define( 'LOGGED_IN_SALT',   '}T}&U|8<R_cCRgm0resk:6CY)HnPvu$.OAUs$;8l*<@Y#A:CI1wd}<,8zQBRVrOG' );
define( 'NONCE_SALT',       'LjG#$x7S[3at?B{*0e;YriMVqTy]R%9]T%}sYW(_^Sd:UbN|8 xuFEsb3I8l`o8l' );

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
