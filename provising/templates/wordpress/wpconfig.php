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
define('DB_NAME', '{{db_name}}');
define('DB_USER', '{{db_user}}');
define('DB_PASSWORD', '{{db_user_password}}');
define('DB_HOST', '{{db_host}}');
/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'k|X !U)CtwbVbjyl`eZ{UilcPbZ{wVJkn#dI* oB*%VbxH<1f?LmRZ97Eun`r0Q6');
define('SECURE_AUTH_KEY',  'E#ee|lGR;YQ^cY+|%B[;i6s5Ypx+fnGKKDL#nAFIrbzGP^e+)6,p&^2aC/eFQ}%?');
define('LOGGED_IN_KEY',    'u yw*WF8+08fXUx/@}wn!:BtsmIB7fXh]tfD-[m-e|${8ao7n-aC[U]t:`l!<B}z');
define('NONCE_KEY',        'I7a+ul4{zYv>0h[pvtTVyEDt8f`6ZA3+3xD^]RyXe#4HU@i?uzqx5&~5n}wStm![');
define('AUTH_SALT',        '9voq=_]YB4svm/I8p;g%;E9XRNl(^oyfcB,X|cd|_dsD,OMR$Z7Vzk5OZ8VPNWM%');
define('SECURE_AUTH_SALT', 't8((u%|J:>DsZ[^oU**-e;uYie^%4`&U1#G5&[i:#$^Mxj$*xfPWHV}f-?1+db`(');
define('LOGGED_IN_SALT',   'qZz;~6*GWm<>PtA#<W{bhG}>u{j5!9eU,.dzX?(FwQZQcT7|4$3Dp:d8 k -rk+Q');
define('NONCE_SALT',       '{I)r2|EHiEFFAAA(TQ}|sbyYPI]Ke-@Hgm3yi937-(QF)jiA|n;0kH@d)6kbRdZ2');

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
/** define ('WPLANG', 'en_US'); */
/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
