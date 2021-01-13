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
define( 'DB_NAME', 'ds_sportstore_db' );

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
define( 'AUTH_KEY',         'Y#dL~J aV!dCmL9K4myPo,uy53x,%KreNqr<e/+}E=2Ye;!KubHmd.r)t]NuOOiV' );
define( 'SECURE_AUTH_KEY',  '.OQ`Q)cr~l$PaG&WhT{n,0e$@]cYxfs0Sfa#05,zi9#dndoi.YjR*WQ=kMwSEB(C' );
define( 'LOGGED_IN_KEY',    'Tp;u`ETNZz*M%q`D}D&MRwLfj+A]@F2LCrY<KwT1S3X{w79-Jz4(psKjrTU}q^L5' );
define( 'NONCE_KEY',        'l?bl-}&PTxNWXj@6H6QQ$B*KRm)1j.k+>+rwm1uKH<>@?PPAz3ysZ|SkZMzYAn4d' );
define( 'AUTH_SALT',        'euG9?8,QKwBi%3yZlE??EhS?fStH8NJFw6G8sRQ9M;WcanbK-}V3sY!#ZY{jJQv7' );
define( 'SECURE_AUTH_SALT', 'J@f;T65mH)AXYf8e$TLIv$+N5l/g5h1kS`VFI/ca`!Y1I0=hvSfegzjV6S!p^{d5' );
define( 'LOGGED_IN_SALT',   'v;eeI=G:8iY_eo&n2<ow4:fe4Yve!icocM4HH6NDQrkuH m~<6ElAV=InTMOg,cq' );
define( 'NONCE_SALT',       '_$A}J;4@>|iIimOv}ABbH*Foe6p( tis?3UUxg$T$hP&TH#&l>V2a0e!?GP8<Oi#' );

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

set_time_limit(6000);
