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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          'dh`W7fac9mGy~,v6g+:d%9}h<LH`a,vC`L`KZb5L5I]fyhRkYr*6C%y^^f%qrKU,' );
define( 'SECURE_AUTH_KEY',   '![4?<$0W~ Z77HHfd@|[D}=zMdP2vDA+X+;qnIhdRw5~*YpoP<vCsn1F;zfc|cJ)' );
define( 'LOGGED_IN_KEY',     'DA3Le!0#j/1hHFJUmtCtwj6E@r$atWFK>,-tM#LWi}pWQl~rg5h8-ODAwYkw]hOJ' );
define( 'NONCE_KEY',         'iT*Ldh?.w`jP]WllA^R:]sKyHL?z)_-[F8pFy)<0G=NraRfm~_p(Nw6w2H {%vFD' );
define( 'AUTH_SALT',         'O}b^J+^@jlA<LM!GqDE_kFg9P+]~=u63nSwD:YyN3qj^.S<6tbh_jLc1~AjhAf*Z' );
define( 'SECURE_AUTH_SALT',  'fJ#RI~CSL1q(JxzXBRzjrmTRh@H rm7ZN?uNO?G4g,9r-W zQ|*JSjP4@i0r3!;x' );
define( 'LOGGED_IN_SALT',    'Zk?lLRY}ralTYdl+Z<.8!??V!u;Cl)RO&{;Wlz!iC#tN?}v8khzh*dEiZIuCskOZ' );
define( 'NONCE_SALT',        'M5f`} O$s1`1#_rN[^(SI~yhuDTzTO1Tx!~/AE73*g6/{Y0D8uAX5tSSj0e [kJ<' );
define( 'WP_CACHE_KEY_SALT', 'v37|fg/FWOJdC(.w?gz}j[p|1Bz9GzuNJJ=mx &Wkq<v@QTk`Vi;0~U(TJKo@Jx?' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
