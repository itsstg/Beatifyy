<?php
define( 'WP_CACHE', true );

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
define( 'AUTH_KEY',         'nlp{07D>M]ZB7yYd^EjTv;j:Kj8+|ov8ede=#UJuW|.w[.0 CX+VRCEQZL%i}S` ' );
define( 'SECURE_AUTH_KEY',  '~(`%2XqE[0_F2W7ZwWFMk:GF5!3cTl<0C k4h?$)Fclr,g_7*8co)GmZ3;ca}s+s' );
define( 'LOGGED_IN_KEY',    'NtKv{#uP&a~oDYN0cou,fLeq0W]awGr6Slpvnu&]?w}Ejh-aLZ-^DfuQPuEc aVW' );
define( 'NONCE_KEY',        'vB(nDLE[JzP08WLtz:WNcLuoYOcs8g?$v`XhKN1-13,|uz/WJbi>ol#W} G/U]am' );
define( 'AUTH_SALT',        'E:Iq*m%] [$sV,38!@d]qjq)mrY,y2O4u}ZaKaMtn9<2;f#<yUtJOa2P7(JvD,N$' );
define( 'SECURE_AUTH_SALT', ';-1z>)5lvA%V/tz`F^KP07*rTmeAv;FZd>a~mFtMpd?aZ?d&h49{DxMzVG(, zg:' );
define( 'LOGGED_IN_SALT',   ']@JD($i]f+*dDz-r(KAYmmbuL0;;StA2LImD/8v_4.*b&|8=493#zTS8yM]q}2dC' );
define( 'NONCE_SALT',       '+X18x2>^i _~;CUBujz6xrSI9Ab./Z1LYDd0e +8Gu B(ExX p}MRzWknCMXEa6e' );

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
