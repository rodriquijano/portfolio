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
define( 'DB_NAME', 'rodrigoquijano' );

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
define( 'AUTH_KEY',         '~ -G?*%Wu0bf6pS*~o+3>L%PBk@j`66mDum[I-nj;Fx5]ebrtwzr3#r;6Fd4W@Fl' );
define( 'SECURE_AUTH_KEY',  '5za/EY_8<5ZJ+/gbOVqGqM(1ENfelA$dzI>TU)*W5V.|7hW.6Ry`;NF5lol:E<M%' );
define( 'LOGGED_IN_KEY',    'v?>MXF9]7M5Hre.!7_wCpLrIU,*lQ.jNNLSX^+EV#V^K1jk],5Wi<dEo-Os4|zB1' );
define( 'NONCE_KEY',        'XS:mEQ/5i}sxy[8dtrI)*Ixy&w#=LKgn7Y7)vs)l>CGYYD=J(@gXl`{w7`?Ys:|p' );
define( 'AUTH_SALT',        'v~:8y1=**3NZfd:<mm)}{s6AM_#6&IP/_w X0e[fZ:$l/p9-<CFNX-R-:nm}/9H{' );
define( 'SECURE_AUTH_SALT', 'P) P{2*w@K;h{1@11Ue.mcIfhHn_F=dP3O%{8z(njJ^eiW4C)GDi2.SyjKneK-Ar' );
define( 'LOGGED_IN_SALT',   'X!PSC$DWaG$085@gg@~6n |qwGpxA)+pP:UN)LUdrd)UpHMvE/PAX7zxA|9+1`hz' );
define( 'NONCE_SALT',       'W%A9QU)E#p-G]/*y!Cb)cxZbwEiC{A^n:K2Xc_IKeoQj K5g`vI8ML}iU;a{D/Lk' );

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
