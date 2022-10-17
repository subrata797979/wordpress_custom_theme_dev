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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'ftt%*oZn&Ev>^x%0i=%{a;!9WRjhL^z:Nxkr#$-RQ~`41jW`(v~Pl~ayE:%Q1>vu' );
define( 'SECURE_AUTH_KEY',  '/tC/H-1~XJWFd;;Xrwl?>Y&p%9SU/MV9MbAKZ| m)>Z2cvFwY|z/uJo]~,2YxNb7' );
define( 'LOGGED_IN_KEY',    '&qSgDG=G?<nRB&_U6?<os2pwXG&EW+,(;9.ye*IXT0OLS}XsWtxpTWfKZy)bv;4k' );
define( 'NONCE_KEY',        'W-|.QnmAR2FmFnU6,*!g[EK)#$QZOg.n3Q<89j)QIOd [qG3ZK7*GkVf@Z%B)K;V' );
define( 'AUTH_SALT',        'G[;-eG-cktRyfEngSr1zw#/@A~[z<TR[&lp~osz]aq*O6,tO{/>w7e&fXu+[^9~O' );
define( 'SECURE_AUTH_SALT', 'G1VA#.bU~*935*[]Z*)Xf=&0ch@}$gDu:}/1=Jas;K|rb;DmH`e6:TEek#T+no/M' );
define( 'LOGGED_IN_SALT',   'AtnKikxd%_9Y(}4(v;GW#cWFOhw)2-ZVIa$fIzf)?%#9XI-,{T5P{rJ-p|4w7Daa' );
define( 'NONCE_SALT',       'fK &1MhFouwJ!KXw[,D1.lD)bdxD$/:94j8rYz;UUTHrf wcd!m&eP+!9waEEz@R' );

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

// custom code for bypass ftp credentials
define( 'FS_METHOD', 'direct' );
