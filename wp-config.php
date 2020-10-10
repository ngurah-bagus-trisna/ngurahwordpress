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
define( 'DB_NAME', 'dbngurah' );

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
define( 'AUTH_KEY',         '&nab[^tRG<ne.Pc`jPYX|@!Rx8]Z8TpP*PBnA/F{CCA?%NWE&%2Adl83y~f+|0/x' );
define( 'SECURE_AUTH_KEY',  'F,y7cMpK[#9GWK*&T TBEd9g(G$v@4[~=SvxF#v7R$|>w?lZ*KJXz6{tD++MwA.~' );
define( 'LOGGED_IN_KEY',    'C4m:)$2@R}5orq{#aoA!naFlp8DJOa[}m(!w3iP9mF5n%S>Uv$/0`T}T<rpinwOb' );
define( 'NONCE_KEY',        '1-Vn-)W~jk}h2T8;t:egN t%0GxAn_aiMN0x(2ev#oYYX;<a30AxA>em(>D>+V9P' );
define( 'AUTH_SALT',        'hNU*|R%Dod/`#:xd):eZsvjBN=V;c8dSW&%WX%0#b&2p) n8&?FvRfL;rJS3X/8Q' );
define( 'SECURE_AUTH_SALT', 'Fr`h(i8k/q~fNiFU5|8AaSj+Lc|kQ4b=[)O0uaR?4$]~IJ!P-iShT^+,@l3%U=E%' );
define( 'LOGGED_IN_SALT',   'sX[#7c  6g*}:b`Ut)iMF*O7?BUCJa>Z5dN.MtO1 ~l[-ED3</6&o@cG=KGYq7I2' );
define( 'NONCE_SALT',       '[KJl}rwKig.kTxBOd]9i|z-f0vC)gq{Ag0iUlFp!!-_B]jHK9 j<y,{VAz@HkH:=' );

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
