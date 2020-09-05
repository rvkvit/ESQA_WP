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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'word2' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '2kE?ERY m1mhoK)>B:cwN?mV2ML}XZ^!FNM4?{tmXoNml||}9!g4X2Rhv}|3^`%J' );
define( 'SECURE_AUTH_KEY',  'y.E^<v%ywkXq~Klu+Y6K6N#<yIx%bOn5.-dd2ZOw/JK9A_3kKw+z@tM53p9Jh;X?' );
define( 'LOGGED_IN_KEY',    'Wv}ne#EY@V311V5^J8/N ZD>-C3>m-?xY5u7)6 YC^2ZN 8p=X|r=MoO<mx2=]mu' );
define( 'NONCE_KEY',        '8mE5p*`a;Mg,SQKYzcOaX_}A24h14u zxrM=|tEOa qS:P-R<Wo2REA_j&N*z6R&' );
define( 'AUTH_SALT',        '{tTa(d@JIv3Sr(;%*7a,._q}< 8#5qJa(gM@:h;z.~DPF1f|2}UW[b<h_3{m=L;s' );
define( 'SECURE_AUTH_SALT', 'ad(ex )/* (e2JW%VjRCq71#@@}WX!YN;(1Cv6B}~KEcvIV 8e/HZVc_d>LJXg45' );
define( 'LOGGED_IN_SALT',   '=V7C_^_8+0oV>Zu^kS=&{N^QpYZ/PO~64wgZhQbx*JL^fc/`Y.kQc|^|6*_Y}0H$' );
define( 'NONCE_SALT',       'UX2A0B}gdrY?/r4n/UX`L2|@B0*u~@d%Py`c2$X00&-k~!VNv$Im5UL*vRGbpar<' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
