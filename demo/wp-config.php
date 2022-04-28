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
define( 'DB_NAME', 'demo' );

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
define( 'AUTH_KEY',         '@era5Jfkc8>DMh2,1,Xy|F.Rq8qF]}L96{2$ZY>:D|u$Zk<#9,Q8>OytflVRH&^g' );
define( 'SECURE_AUTH_KEY',  ' ;>&|xXR}LjOHD;<bR| nU9e$q55[_0_10U*5U`u)Q*% [qU`a.~v`Gbw:V_zx&Z' );
define( 'LOGGED_IN_KEY',    '(GiqtAp(.1>Hej g_/>T5:@yVUBb};N)b0wN.K]ot^1hQX/gkjlljU=<rn!WK0rD' );
define( 'NONCE_KEY',        '@479EizBwvZKrQc#?z1&,+/:wPlNZtr=;l+$!Q.9<cvYHW.mkN9SgcvIb*YB0v2x' );
define( 'AUTH_SALT',        '|H)~gy,~ 31WRuD eamx=4<HPpq#7?tcL[t/pt1!j)iY1tA*X|b1F$|$7Y,NTcMM' );
define( 'SECURE_AUTH_SALT', '4_a;=9#v(I!}?z7?AV3Y+E&e4(dm`MVtJQ08mL2EKV%{qOI(~22NHkO?O]EDygzK' );
define( 'LOGGED_IN_SALT',   'X|+r#kLcB@.r|FYqz%Z;:$M+M<ITCwa{a~YI]k[d~jIY39H36dIY>mH; P:a{3q%' );
define( 'NONCE_SALT',       '/9`*/Tg0D]a{f/[LiSuK:wJd7VIYnJ:vV7xpD~j`fPLdT~_DPBoyF!HisOT6 X#!' );

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
