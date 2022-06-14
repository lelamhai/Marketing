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
define( 'DB_NAME', 'mk' );

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
define( 'AUTH_KEY',         '.mEG5<uHPkZ%#rG,efIE%8{+S1MMpb!,do0~EG!%%5wLW)cSo9+sBlkH.l3%?yd&' );
define( 'SECURE_AUTH_KEY',  'Q!aP,xSqw##_`m<:ne%:~Jjt)$-):E)csgx$5(yu@sc5q*(>:E}dj1X6,Mnam?XJ' );
define( 'LOGGED_IN_KEY',    ';lB/H/5%<*blxZp^PKBf6:LA:r@nmC+)x} xQ6Emh8aCVy9f-&*_Y|+&7)jCFEm+' );
define( 'NONCE_KEY',        'WYNx74,rh5n!e;RO!Z9SQ-c@KoN]MyA_a 86C2l6!e!O]CgRO-+&EZ*VkwCHlR,>' );
define( 'AUTH_SALT',        's;$}!Qt~6awPeR]^I;s(,7*Y?o(8~l8~8AT-zeQVl+9iO*|tS6GR_v14BlN2ATx#' );
define( 'SECURE_AUTH_SALT', 'gARB6X|lA/bmO0nz3Cj5lGkB/%*R4RXP!;8ZLeM8]:Re{/:fqNjP:7XFe+%LpM7#' );
define( 'LOGGED_IN_SALT',   'ujTGxj@TD#1),OLOjTA#IPq/y_nN3du%9YUZOb6U0Z:$3M`;m7*R[ncys|w`Ufr,' );
define( 'NONCE_SALT',       '.-+/4ogI#yb@<qHfc2[SDnF64 *eD|?m#oCrKX^A3Q4XdKdu.lCTTNNp/XuW%fA`' );

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
