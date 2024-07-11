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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'lab1' );

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
define( 'AUTH_KEY',         '*d0U}CmD[ `wp{yu<=YfY;`rJwG|7lTkbo`D)]i%Sniot[R^xu{^Hj,W&;3OB]:;' );
define( 'SECURE_AUTH_KEY',  'jZ:BDy4!ZF)_>vS#CrR{I,w_3~k%%?{H3ri_y=8qbHfgP$(ZX1:K#[U:Wr:.2Lih' );
define( 'LOGGED_IN_KEY',    '3twN@.j%#jJy]~_Ag}KVm`cK>y]zqBjL-S!CDEO/&)A-ioEuB:7r+Q7YD~m8>_XW' );
define( 'NONCE_KEY',        'h{2gi0eVfU0kTLA}Fn=]%M:G|c&z%mG3-GyLah8vKjg5I9Xz]1-_MY]Ohh{1l9Ku' );
define( 'AUTH_SALT',        'R|DO3A]o13WP=`g!Tr`kAAR&]g)/yu-p;SJ[-$!orzm]xez-8X(d:+bCoe8Ys*3S' );
define( 'SECURE_AUTH_SALT', '@b0V1^{:6x)q*J*!Uc7r[!~O^daY/ww}KK6uXP|od)kD7+nvA^@/eN+@T&rOS>pW' );
define( 'LOGGED_IN_SALT',   '_}9%+M(&hCSeBF?`vm*7+}&#22Fgr.(x;I^l6Q(.,6*_?]eS08)^4;OEI5N5+wzH' );
define( 'NONCE_SALT',       '0Jqg1)H;nn%l8XlwZfZYvpF-3|-?)^;O(gT-7YNELVaZ~$BBT,Q<Q~jo}A@b,@>S' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
