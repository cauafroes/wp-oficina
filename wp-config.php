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
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', 'eujogodemf' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',         'X8kpv8pmq(u4kwgVeG854<`S=(kp&=y.W.WhC)2zaZf}?C[@l]XRXMzbB-KZX]il' );
define( 'SECURE_AUTH_KEY',  'HU6u44 dp3aqz5Zd^7OvMB:?jB&k0+BpuSAw;AWEFn][scSK3Y+yKb&JZ&MW<%C,' );
define( 'LOGGED_IN_KEY',    'N=GN/aT1fc?9a,!)UXen.^?XQdJHg]jZB I(H@;+hBZRHjU:hPPU,$HebweS%8,E' );
define( 'NONCE_KEY',        '/*CtJ&2LgwHsa${~hN9)q!Rj]_4eL.1 Rc<YlG,}HB5~E<3W{2[vp:<S_Z.V-.i^' );
define( 'AUTH_SALT',        'ddU#]U{[j=FK,!X|n3,+daYn~QraG{puJLxn[+79y0wVQy]G57;iVsbYeKTPfVlx' );
define( 'SECURE_AUTH_SALT', 'u=kl*tYWswG:d#ZdIa~th7{e&3so!y>pw@FX!KGm*hy%G?{$5B$ULh50pmUh%q+P' );
define( 'LOGGED_IN_SALT',   'Uo5w%&auQhie)2fcf>>8bX;L-$>tWo!PHm|-lvj%0Kskbm[[B,*78d-<;i;@-u.R' );
define( 'NONCE_SALT',       '4ssREkQPbG;<<Y@q2KaHV 8QzMLk7XG7Aoq9UO.8%eFJ|G%62j%eD,k2,MmcQI84' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'oficina_';

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
