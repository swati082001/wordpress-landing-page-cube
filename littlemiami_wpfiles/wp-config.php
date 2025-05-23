<?php
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
define( 'DB_NAME', 'littlemiami' );

/** Database username */
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', 'admin' );

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
define( 'AUTH_KEY',         '{XswXPk#d6h,Ww!xTEiZsohJVuZ{@Q41Q<fNh9a)m_.q^f.iAu8Y&$r,<(q-ntF|' );
define( 'SECURE_AUTH_KEY',  '-ssm z6_Xf6d2=*DrJ5C$k~RxYua%o([D1kS*XeUJqOGJ=p#yoT5RN#PP*AREVN&' );
define( 'LOGGED_IN_KEY',    'gI#3rr=hr~$q]yALo  ||#g1,&H}`c{%0h8sm|l<vm2BlnR5kq _YC{A  m5w]QK' );
define( 'NONCE_KEY',        'NuyCQ:OAE-Z:hw20([MB%gFCcnwst$h!^T;}dx/.hmm`F(D`FfTSIe]2zT=RT5>;' );
define( 'AUTH_SALT',        's^wOe<2l.;W lzj$Up<]VSfvb[[6pwXNEU6=zr&/OP:IjtR=a])YO<O|bVfNhO}U' );
define( 'SECURE_AUTH_SALT', ':yCnt){=wyO),nDM(~M~Bo&B!vkGQ,RZTDX6{ZU08OA2@tW+U3}O52)CB(HX`0Ty' );
define( 'LOGGED_IN_SALT',   'x9F]&+(zII#u!(F!+mth+Qq)uM^TX ,QTTEyv9:1|4^$V>[DP<ek?fOcTE g5+Ww' );
define( 'NONCE_SALT',       '}</1L!*7j?1K0#3U@:CKAf:qB#ersI<9ZF0[iKUbgMrud8sbbL)*yh(KvlB*oTg`' );

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
