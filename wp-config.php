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
define( 'DB_NAME', 'saigones_st264' );

/** MySQL database username */
define( 'DB_USER', 'saigones_st264' );

/** MySQL database password */
define( 'DB_PASSWORD', 'S59g.H!pF3' );

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
define( 'AUTH_KEY',         'u5th1nm9sj6uxoy8sku6zqcyg5mvjaf71aj6zaxqtilja1a1ffiw6xnhpcnqezix' );
define( 'SECURE_AUTH_KEY',  'sc9egntlw53d473fe1tn7osjzktgnqc7eqkdujmlxqzdebls2vkoinuas1trudnm' );
define( 'LOGGED_IN_KEY',    'e08rdpn26tv0gdnepppmdwqleerg0xq6b2aysrmshkbvnyja1wktt8rgsjushcqu' );
define( 'NONCE_KEY',        'o3qmvkh2we7xkhpu3dg6ifl2t817ifwzyscntqojnlrqvb2woggoyx4vbwabfdwg' );
define( 'AUTH_SALT',        '1pvpmj0dmmckitu9dkeavnfrpkxqtv3nedhuitd6lwodwejaczb31ydkq167czxe' );
define( 'SECURE_AUTH_SALT', 'ixnzndmoquld1hukkfhublckqd4a0h7zf1ipqlplpzzdgtdnp6082tkcjrcz5niq' );
define( 'LOGGED_IN_SALT',   'jkoescrwqcbcc6uo9celamirwpffctnvommewod66cfgldhb1fft7uyeuzpfvttx' );
define( 'NONCE_SALT',       'ib0nq8w8dmzxtfu1bcje8ooex9vsamr6ny6fl3rrmcpghfpy0dbd2pgy019haujq' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpii_';

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

/* Multisite */
define( 'WP_ALLOW_MULTISITE', true );
define( 'MULTISITE', true );
define( 'SUBDOMAIN_INSTALL', false );
define( 'DOMAIN_CURRENT_SITE', 'store.thichcay.com' );
define( 'PATH_CURRENT_SITE', '/' );
define( 'SITE_ID_CURRENT_SITE', 1 );
define( 'BLOG_ID_CURRENT_SITE', 1 );

define('DISABLE_WP_CRON', true);

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
