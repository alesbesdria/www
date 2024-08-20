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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress08072024' );

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
define( 'AUTH_KEY',         '~L=cV%M/T!Q~E2R0=R=-x#qW:YlTbv_dkx]cx+Ddt0pym4!_$.BN:SIjE*UyO?b ' );
define( 'SECURE_AUTH_KEY',  'w.zWMb2&}s `DCD^sFG1&ZN6X),QL7RheWdw7(BZ h-ZC; X#%BMKIDU$$Qr~$(C' );
define( 'LOGGED_IN_KEY',    '~~ku#U8F*p vYgLY[vP7RQ!9T/,MRlKev,7Lp7S79&5H78D?W]A,@ocaS9JCml(d' );
define( 'NONCE_KEY',        'OLjrvTrSl/7PG0^z6o.@,z.+0of@KGv@tMH!k>P[NGgbYSFE&UuL_qthOiJ4~nN ' );
define( 'AUTH_SALT',        '*0 n_hUyIZ8*-PH[iVASn(AVR3_P4*5a1?~Z{00S%rB_eP}wVE*clQ%b{.:}C>r%' );
define( 'SECURE_AUTH_SALT', 'yO;HQ0YBv*|v-;TMrV/:+qMjgf>AY}LYNY,*~PShTnTA:cqo*;&Kdj.o>WQ/*O~1' );
define( 'LOGGED_IN_SALT',   'Oxdzy!S4@)[F%}`L]5EEbL.P #+xjCcEt}6=SCb]kSsMOETNUS=t1>k],yp/MV_<' );
define( 'NONCE_SALT',       'sy!&l@=51xy<gjwZ:rfvQ]Rt6w+.zrv:iyRcG|OAR7mCw4D2y9Hf~1k6:CysgYmH' );

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
