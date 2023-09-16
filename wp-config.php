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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'occho' );

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
define( 'AUTH_KEY',         '$Wke*sts%=En4KwlCWCNS$4G&)`jX%|DVGxe90hakwfo0rnirVvAI0l O1N=kofB' );
define( 'SECURE_AUTH_KEY',  'EugNISRgJH:]DBJ07pD0~[/!b9l(P.{R5yH57s=(SI>=,Qf7=kzT2-g4Edd,j8aO' );
define( 'LOGGED_IN_KEY',    '9V}:D|eC+UB/(0@IN:JSyhbD/K{CAZ_3>FZA@`V#S2<i7oAfo_KTOz^3~d&H=DCC' );
define( 'NONCE_KEY',        'RB-kW3=B?q! eG/4G=mcx?P sDXqiO!e(u^^BEfF<SDP`kjwP-S(M~^udtqlz[U%' );
define( 'AUTH_SALT',        '3{tJk4l1iF|Of4YE~J$k/uCe)4pB5j5F@Ypv2h[L?w+9`e$/ppw6?~(8~|SY&cIL' );
define( 'SECURE_AUTH_SALT', '2la9K?.5]c?t9-*}EPH4<=OuS{$&ZEr@[dkVSvdX&GAn~P]_]>W%0/w/Y5mM=% U' );
define( 'LOGGED_IN_SALT',   'E/%vCc $(^$*E/>ww,@uR@WG#Xp nywS&sO1ge1Pidi]uYQk6062d@gG-.pSj6XV' );
define( 'NONCE_SALT',       'jOWzD[O]D:v?rw7)g Q6x)SBvd:^OvGh-13yGn|{Q>aEXYwy]Usbx=xnhRHy3jNH' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
