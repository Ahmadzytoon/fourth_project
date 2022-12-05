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
define( 'DB_NAME', 'pro' );

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
define( 'AUTH_KEY',         '3wl |oOeCkRDYbsZ(nA/{nM.X$(m}L?[*r3c}GEcdy#TAkpokRgA$IM$/$<NC]Qh' );
define( 'SECURE_AUTH_KEY',  'zg$s@ZN#pk2kXsIx]cAdS!(=nE,){#Tt$?V6#m2c?N*3GHCvO_DXYUV@I,G_ytZB' );
define( 'LOGGED_IN_KEY',    'K/EZP_;2jM v|GoPH}5!; BotT_#qST>2{<p b1CuwBQj!aONa=DZ$a~YvUzzXI~' );
define( 'NONCE_KEY',        'ODBi.tdifZxv},105./Y0&3kEZwC)?[hHlcQlr!A#Vq}46iFFFA)1SI jQ[gsJpy' );
define( 'AUTH_SALT',        'n4*s}VU&Ro1Rs;v70@hdZ3D6+_s[1r?#j_g_fv *8BV}z)V~U&<i~5B<.?i4$3g5' );
define( 'SECURE_AUTH_SALT', 'L}/bC-L@8;I>l=jVuac.ZFC|Okii4VVmOHy|DUB/6trlcNzF|Bh!(g+#a-kL*^@x' );
define( 'LOGGED_IN_SALT',   ':v>kc>1%jF3>z&UFa,A@7|%b*`0Y3Mxgc3jGPC o/RYYa(j4XUU6B:P`s^k^7C5R' );
define( 'NONCE_SALT',       'a0FO9?[PR K;l25[*2rp8&/_?v%*&losr2K%VxMg<5[.Vb?F0Q;T]x<q)#i^aZG3' );

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
