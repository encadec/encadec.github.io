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
define( 'DB_NAME', 'encadecWP_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'mR7LuCl,tD_t@ M%8{NY-!e3ig4DQjg/De#(Oc<O*OfE0vAaxPHNb5plT6D3Jo$`' );
define( 'SECURE_AUTH_KEY',  '-c$]R-X&C+^FSSfYEvsE}>X?F+~*$gTci?Xb:m@*ieu d!%e@=Fp5&N7z8-(|t e' );
define( 'LOGGED_IN_KEY',    'QGX$bt<tF?hD*x_6E|TISEZUPSbMDW&|myH$JKJ6ZnZbyP{:*S}`GExI7%BOc96u' );
define( 'NONCE_KEY',        '1luP4fj}S8){UTZT$dY@:iZ0^i?T+_pg)J*;15>|YEK@|O?:KwdS=@=Yp4K2H|.+' );
define( 'AUTH_SALT',        'iW(3egh6H/H^O.F@h@}}-%%Q<#pHH:a]$*-wApt=+)cUoYm:}PL&bmVlXL|7>/do' );
define( 'SECURE_AUTH_SALT', '2kO,fjzi]:V%!EiI~0m O<I~m|f5*C-LtP>ULt%R#J77|mMI2:{s;]MP1Lav!N><' );
define( 'LOGGED_IN_SALT',   'r7+3c<MQbKd&$]K{jSm.wV?4!C>]82jAshmV}nawYiR}u~r3HKe*g7kqL*@mg*x<' );
define( 'NONCE_SALT',       'NT ]ua;eXzdB}ifiDi&F,]u n<POLE~_C>9wfz0r7,,3tWOm&04$YRq+nG@%~3mJ' );

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
