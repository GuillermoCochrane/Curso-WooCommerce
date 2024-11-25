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
define( 'DB_NAME', 'woo_db' );

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
define( 'AUTH_KEY',         'p;/?r^j#: O|?mM#%Jz4BlSKwC[gW6(:F1;*Xrg-=Bf<M,N{ JVLVzggu9NS5/b;' );
define( 'SECURE_AUTH_KEY',  'P~3[O$#b=A[G;|M_`s$~OqdZ)D~j^(pLLHj6=^$z2NrfQ:!$nK1J9>wMIF[7VqA}' );
define( 'LOGGED_IN_KEY',    'U|c-ld/dGV#K2]sQ*}hwoBCt^5B9NMAycMg/ (^_ORx8$A {,(bI5}cR03-va.8y' );
define( 'NONCE_KEY',        'HMD/3X%<AJ%0[p(QI]*}]0[jSE[S)Yg,@Fan&;XLpQ6]Hx8MG`<*SySuoVIN.si9' );
define( 'AUTH_SALT',        'xBby(GCl}A]cjpnfZ66#z,A&{(]}89)/F @K&X!1F4=(u.t^>k<HTIUz+c+x]ryo' );
define( 'SECURE_AUTH_SALT', '}Zm+i-Q,ss/.y>28V+L1[n+:KRxK4)-M4PEq[1WlQ<iD`L4~vT,gVX2h>N0){Ynu' );
define( 'LOGGED_IN_SALT',   'Wg<Ao/SmUPwHP[v}b{i~ Adm,(c]vMg0;h2D(Q`Dy@H(*:%2!6Qz}If|R5JK<4tz' );
define( 'NONCE_SALT',       '|)N<6(Yu|:C.q,$_ZZhvvu0q@@QJjh6@^y&.X&z_~]i!o8`6pmN`;X{+-m8:4]lQ' );

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
