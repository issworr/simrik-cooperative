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
define( 'AUTH_KEY',         'z7m7,%V!UI_nB|TGqdaoKOuFA?g%Tr]f@<V6 j>I^~=5L+a3u%W9Tb7vRU6T6G5f' );
define( 'SECURE_AUTH_KEY',  'r%.wcA7nGw^lwdT:>b>pP&D#xg7wK3-]5x`|~&#tEB,PwjY($WV)R5mjgY0zC8le' );
define( 'LOGGED_IN_KEY',    '!sleiM]9L~:Oz4Zmiu2%,tL fGz=@>9:~!L~J~`z?b]J@(j@zzfcb<n:j5&nNpe=' );
define( 'NONCE_KEY',        'r?UtsRKx|{Xy@ncszAcpB%{>}]F.=%5y}p<mOe[aLLd,<yfe8K .Ri#Z_4..PN~v' );
define( 'AUTH_SALT',        'G((i Ct.:lg#1]UTzm^=Tn(cfH]r`h~<[!zf]y?hejJ[EXoo@fZaO0o8/%}AOSLV' );
define( 'SECURE_AUTH_SALT', '.nm#^lkQpi>Rx.f$m5mOK;jYS:?9*>P^,d=eiJ7>A#9`vYI(;,yA5 ABbV;RoQ=d' );
define( 'LOGGED_IN_SALT',   '`,0P>65RQ~?}OLC?0TZbd]kM$ufY)(=/}ATezTVe~}QOZtM$a6}^ *=>`Kl6f%36' );
define( 'NONCE_SALT',       'B1)K18CwYp$1juH#D,G/Dlv{Xz9lb@zG!PlV(~;OO2uCr!)alQL=s7g6O&-RML4f' );

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
