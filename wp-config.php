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
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', 'admin' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );
define('FS_METHOD','direct');

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
define( 'AUTH_KEY',         'v**.93&.Oc.|>PCs;_24!2:4@j)Nc$Y8Ae&`-No(Ez1r1ZLGxS>l[wKwP^as.HWC' );
define( 'SECURE_AUTH_KEY',  'Zg8xNX(*|<}h`u;d2wTU%aAG.e}gi*GjH$Nt?eIYnZ;BO2y<dZtS<P%3m}nGg7F@' );
define( 'LOGGED_IN_KEY',    '#ir>zjxYM0g5;PTJ?>*H>>2NViz>E?f-D7g&jiPa?J-(#/pinRWtro:X?sjK^]!.' );
define( 'NONCE_KEY',        '{5QIpRY6opW#)HM61*Jq<NU0,.[t/7+0/N3esQmMHQa/}3RDuIETD0&@.Th~_[l#' );
define( 'AUTH_SALT',        'n l+3KHU(ljBR5r**ywV<XdV Kn f#Ebg$nkL[8fzi.B%f?B{yC=[O^>v,wQRlN*' );
define( 'SECURE_AUTH_SALT', '@@PSfoqvg0bdR[4{oo%&S/(ydq|1c>3>@YjeoIDz|ir*w)LA)j`.kZL}3`~B8:$r' );
define( 'LOGGED_IN_SALT',   '><;qa+//(t3oFUS@{zJkvW:dSup?Y~1gGr2>p&:1|nwg;Eaz8C %9t).8;u$|;]0' );
define( 'NONCE_SALT',       'nb9ndKK~ofdh~{!m8d|@ziU}9035u?om]5-If7+HfOU2t%T:9Buo03h[8ws}+-/|' );

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
