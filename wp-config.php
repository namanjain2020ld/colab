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
define( 'DB_NAME', 'mytrial' );

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
define( 'AUTH_KEY',         'k<[4<>/N69%4Z!#U[cYp[ol<]1Mg*W0f}t/Yesl}ok2Q0$yO~@%@5c3mR%8;S#),' );
define( 'SECURE_AUTH_KEY',  '7&.S%3F!b=8/KlcKhQO)W`siV:W3!IQI0:<Eq;b0*Uxn2pF]PWdrTfzP.X4ND8?w' );
define( 'LOGGED_IN_KEY',    '$gGA0t]#ZC6t)3}zTHn bCA`hA:ZoFw-`FgH9pObXJ7]iyKFn@J+Ft&@,dA1xy+d' );
define( 'NONCE_KEY',        'c#m:ZfCu3g]h1:*@5qrB5skL@hid`K]T)|7nAU>HSxFdyLWl$OK>P+LxQ8Z5wx7s' );
define( 'AUTH_SALT',        ')pdD^%%}oQ-rA.^LT/0|2>NO[)+)FG=46a+%]&djz~t64T)<U3B? CU0kP*/wLqw' );
define( 'SECURE_AUTH_SALT', 't6o6X47rM7q&;ji5vJA>HQ_664pXe/H9#ax!;pLiO,+WaD`eBg2qK(>Xd[i7-Q#4' );
define( 'LOGGED_IN_SALT',   '*)UBc.2T^27aO{)tXcXBWs!Fd)/L=Q(eufmW_S;A2_+|ZCo$b,J8#8Zku+NPyi9y' );
define( 'NONCE_SALT',       '>#et !q).I`;,5t&xTNSV9k]5VVsd13E#c--e6XSyeaQ>T}[~brLcU*jy ddKPd/' );

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
