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
define( 'DB_NAME', 'word2' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '%uQk~eIkL{C.YyZ+6:Er{GEvL%UyU=M7gkTX{(0%11>`[1ge4s_byS{~cwuZfui&' );
define( 'SECURE_AUTH_KEY',  '-@ 9W;ki+#9RfvW{i%^G*l.`@O-4d!Z[g]-;GH6r$fIl$gDgTe#53xzFtj#P%vWJ' );
define( 'LOGGED_IN_KEY',    'Z8~7]z_4_6)p^s{ird-z),[vjh7x+;2lpN~tXqm`,qS{)~^POela)(3|u,zPt=$Q' );
define( 'NONCE_KEY',        '=lPfTnnL3H|9G^B=(<$OCVQ|O[d:C+}$3bOpm&bw@HJ} x{G`pJ5%Da/9A74eMnN' );
define( 'AUTH_SALT',        'ZxQl>^z ]|et P<O+^r8rh-!tSL#>Q~KUT*R^ibYT,wysW; 8E&4q}ACRY-/?%sk' );
define( 'SECURE_AUTH_SALT', '[[S/>akx]11k#/uD:XgN~+FKg*Th2fv]6{;#5P6_D!~!~+rB<:lPkBTeFNTRP?Aw' );
define( 'LOGGED_IN_SALT',   'tOi5ITZ!hCHQ=l15Fj{+cy* 2{&X-C/~T!OG00l2nAknOYHQD=`uEys>+@l5n}+M' );
define( 'NONCE_SALT',       's!YLAdEt|[B/VrgH3HHv1_v9}c6inus.4@/wfIp!gQN?YD=8pw! Z 7>JjQLFJ]j' );

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
