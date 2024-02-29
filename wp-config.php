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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'xb723323_gr8bulid' );

/** Database username */
define( 'DB_USER', 'xb723323_gr8buil' );

/** Database password */
define( 'DB_PASSWORD', 'ctn200911' );

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
define( 'AUTH_KEY',         'PDo$-+-k$7YY`a&ct|2T1%:/J) @ oNbBhdL/nzBo4)%EIGt`D=vt`=y3Ws8edJ*' );
define( 'SECURE_AUTH_KEY',  '[xs45X/=`j>#g+Rf,l-U^v5[o%$SRJpP{Y/{S.g~b|X-LiH7Q6@N{[5MSq17jWGo' );
define( 'LOGGED_IN_KEY',    'H.Ti6L+@VC4=+ JqySl}h^b RuCeq}J59P{Nk3l~k6)$T7/V=7UM!z%<+offq+R:' );
define( 'NONCE_KEY',        'L%YlD(zf2Kif3.LgIr4]+RhgKY5efu/i2Gk~|hI.brBTRx+Vj2+Eo{xtUREe,)fJ' );
define( 'AUTH_SALT',        'oC@yt>zMf_*5X[ [-{?ay]X%1uYHlDTs|,r=Mr5hv+wd[GI`w-jO~Tam(S7pL9gl' );
define( 'SECURE_AUTH_SALT', '%GK3#6vs|wSoj@OH :7|tk!*+L/N4mK&;V<AsU0R<G)):n(R[F=2@w#i5aEXFxe#' );
define( 'LOGGED_IN_SALT',   '|r=[p|~=/R,;8KMcCrzE0K#R`y~8_Xn}h<Jb9^P<8t|&[g`~}x<&<T_`~TJ?P,&>' );
define( 'NONCE_SALT',       'E{Ui|Oy*A8,9^8bbC;8`+6t:ix(9dg)0n9NBmV?]H:31WmVS2iZ~)p;iYk8_sOP;' );

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
