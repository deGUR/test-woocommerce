<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress-test.local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/** Deleting FTP requests*/
define('FS_METHOD', 'direct');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Zu{uJ4!W1q@f@vTZY8M;(B]{zM$IP`fVi+bO[bECZM@FUOda(LT]>y-}D*q=S7.>' );
define( 'SECURE_AUTH_KEY',  'P3iVmC<%{4d2IJ-XJ}6{SrF,nlWyp*!&6D5y$Cm|^g0,;_OjAOo(qW`mxKdNNFYP' );
define( 'LOGGED_IN_KEY',    '?E4q~4c0E[=&dgt{U=zLl!r?3QDF+rR{a97Xq(~7O5=6s_EqFsCJZcurI GH<gH>' );
define( 'NONCE_KEY',        '^5}vJgy=Aic`;QI4XVJufM_ &aTE(ihjYRpw4uLB$$n0psEyPW0KIQS(g-=r?Y}v' );
define( 'AUTH_SALT',        'u(_8ZayeqN6YpZRRACc)n;]|MDel6]?,9WG=Xw~G1CGN_)[*UTlwAlRt_A{1f#w=' );
define( 'SECURE_AUTH_SALT', 'y+[[!{__Z><l3SU;#J8J(oWC)tO`)LsmOd_|:^1ihyQ<@6>|h2uk+pT&~jTCvcgs' );
define( 'LOGGED_IN_SALT',   '~+*bf>i>yszpGXX5gs?|%j1|FXhsIRr! c2-@+Ki<9>IFe]`_xokvX&Ce?.-Z/ X' );
define( 'NONCE_SALT',       '`PnXIq[]{iV9S!(uS0JI51xe[XN}97@Xyt/DmWnZ<Ftm;5HTMM`b|<K,k.>-RbBV' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpt_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
