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
define( 'DB_NAME', 'litnow_db' );

/** Database username */
define( 'DB_USER', 'alexandrum' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', 'utf8mb4_unicode_ci' );

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
define('AUTH_KEY',         '8Ng4m~v=@~-,:EzF.]p##Ji>]Pi~J92=q:;MzdBqFAW?k|+YcM[b!j>joX[1+oo8');
define('SECURE_AUTH_KEY',  '1r.Z[SQ~T6.<4PY{.60XGW. ,$EU[>reyts|+i R1d&vv?qnzy$xxnEoNcpJuGoc');
define('LOGGED_IN_KEY',    ':9(V7fy(-dBb~F-(sh_-R7T|;0|UgTo7T]wh.)SiV?Vh!YEKfB.`;$hA@ab=}olC');
define('NONCE_KEY',        'fRRw4g&]Vpr!=H0##4g}}bC`sBTZ>.FU)Hb3nY!a=!+Dh1Z_>FT o$#)$Du`N~P.');
define('AUTH_SALT',        'eOIRFNhGQX]Ix,AA7e,qwAnR#|Y/FkXj#LDHU};{_|CL`2V.-~K?#u3*]~Q q&Fm');
define('SECURE_AUTH_SALT', '^8EbKBGpHCLbmgamQZP~J%HeM@V!8{z})v|+~9A&4Sx2L3m:|$l6U2f&)u{|$%9*');
define('LOGGED_IN_SALT',   '!B~|])pi3p!!_vN}W$Cn2JZVNN>QbA<=q6.H2K~h#NNSF]r`X4R2V#o3pBq9jwM7');
define('NONCE_SALT',       '+*,*?%V{uy[pTO&nNW^Z)=%uCSp`lE>p^Eo[|(e0}L#^12!os`|22<&?<pe8K=]G');

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

define( 'WP_HOME', 'http://litnow.lh' );
define( 'WP_SITEURL', 'http://litnow.lh' );
define( 'FS_METHOD', 'direct' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
