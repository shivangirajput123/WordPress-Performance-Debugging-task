<?php
define( 'WP_CACHE', true );

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'task' );

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
define( 'AUTH_KEY',         'UZ&_ws9 xv3K;Ndx8#kog4|5UZ<R3i;=wsm4d^J$:NRqY_]ykn6fGNuBxX`B!^,$' );
define( 'SECURE_AUTH_KEY',  'V-B>lbc*pFbe`l-OkF/pg%(}H`HoXvrcW_JqITt96/DWh|?4}OZ8zco)r,QJeOg5' );
define( 'LOGGED_IN_KEY',    'n8,gl*kXZo HS4rn/,u.5RmR{Ry}b-6NtQ~B0QL<D1XyKL>k8>E4x8hQ_/cb;Ft:' );
define( 'NONCE_KEY',        ',Y6G/mbrmBsJi{,w159I=@9r9ib<2hmj6b@)@z$VzGn[_E?IS?BDjejTb*S{tR@S' );
define( 'AUTH_SALT',        'uxVetdTLZ{IKbJ>74C>|Q1e80`I0ig/*!tUc{qY.s/w;$q }8qG ki0}C`BfvUUa' );
define( 'SECURE_AUTH_SALT', ')i^q 8v.2KZZ[u$4%VZjSC|uIZvGQ=V05[Z^H$s@K1+F<%o!b)/8b+ 2BKD)A:vo' );
define( 'LOGGED_IN_SALT',   'mz 5(J :1 9/cG!Be@Q[XG~]VlxdFpM2Gfjqt;/u*nm[af;=ixL U<^Jv;aNj(Tv' );
define( 'NONCE_SALT',       '+;7Yh4*!yVbc,fxS#5F |yj%BIag.^ogo6y%:[IcH)cf_yx2=N>{06L}@ME#quKS' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
