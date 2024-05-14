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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'saad' );

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
define( 'AUTH_KEY',         'q@T14)z;4/KcB|d?Sa.>Ale:_vVwq,jefN|jR,3?T#t$9il-?TXnced>=Jwkb)+j' );
define( 'SECURE_AUTH_KEY',  'A8jC?*+&X?j}~CmYXm LijAxbQEGvBv9H-BK>%/lYd10L2B6i=bk>tK^GGIT_37{' );
define( 'LOGGED_IN_KEY',    'h;{:iH}Id2[#pOZ2YXei#GO,>hzk@;W:U2HMU89aCko%qy!v#zMp!+l>Ra7r]0T9' );
define( 'NONCE_KEY',        ',!SaRpQgcfEhWE!YpG;;v[gU)1qDvvnGpY2V./Hhqx_}vPta(U6nX1.j/zgQLG~Z' );
define( 'AUTH_SALT',        'oqO{Q/v6A3_2}FggH!TPB4P+.xg|<[6F=()z6d]X ;_j,HO<.<eBZVSo_j6/WlAC' );
define( 'SECURE_AUTH_SALT', 'VcozR}ioLY_[sq;1(B^&w(VPuC9!v)|2$Z.FK]L~?[NbuZAylk7CxCuB-b1nbGS_' );
define( 'LOGGED_IN_SALT',   '>vytt[Xti=;Obtcu}sj1}B_ehDP`M]N:jZgDZ%`rqHdn:K_!x|u^n9oXyu7b<L0(' );
define( 'NONCE_SALT',       'UU _U_>@LssSDxY5zgCfjf]!pP{6~dT,%|(l{.ON+nlCdU2]JTFSu[}sD_1P0;H[' );

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
