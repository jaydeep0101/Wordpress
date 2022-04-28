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
define( 'DB_NAME', 'seo_demo' );

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
define( 'AUTH_KEY',         'C-mE+&WDs.Q<I~[8K3rq/|T0Lg:fr3*v+fpko)(]AORo74gok!_DvYm.6[IRVOf|' );
define( 'SECURE_AUTH_KEY',  'oh5fssB(fea(Oz3(D#lN|1sAO@9%9Y{;>>(XfQ:up+jy>G.Fo,-JVHhZ/P<8$ Vq' );
define( 'LOGGED_IN_KEY',    '=fFhiT=GV;Rx2sD|#r O4Gy A6h)[pKZP%7V1^~x[N0=<pZ/@-|<Um]`&*-Rtn{M' );
define( 'NONCE_KEY',        '-kSGl`T*$Xt(HSl^3qAg*N0 ^hn,!&aWM+w=kaAS0ERi{]LA^ygl2*^T4k:mA*Y,' );
define( 'AUTH_SALT',        ',3zH5L:7a)v225[4)};_ YuBB)A9 [V27_0UY$-9H~ w*egI+WT`=LIOso{FtOFG' );
define( 'SECURE_AUTH_SALT', 'Db:6z/u fBwDKHgk]KFXdi}@Gsj<2V&Q#Ybuxl)]wjC~w|xcC@ K-?~Xdm2cw1Gq' );
define( 'LOGGED_IN_SALT',   ']gLu!2rvF@N-7`%nkK}3Ov;kdJ,x^33>}|#hFcgfJ&P%+57rjULF_9 s_F!;~=2%' );
define( 'NONCE_SALT',       'VUv!|xR.<^t:OYDo|n2j5j!$SD>x5,$@`%jH-)}O1@JO%^0n=T!/#~7BhKINo7np' );

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
