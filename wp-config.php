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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '2Ip#]aXl/;^<Q9@wtuX!rcMPT0Mu`N6;`S5*h$WLv#Z?QJo_ J*8`4Tl`+h4(>[;' );
define( 'SECURE_AUTH_KEY',  'Ih$/JaL+TWAJroyg.J_Z$`uOBZGo:cuL<@ZhB:HN*P*{_*=&^b:b!?#0k2:1OShA' );
define( 'LOGGED_IN_KEY',    'DCh/Dsx`,>%(N~&A*C5]`T$lcKRz,,91Lb?3IUjX>Pfc3f121K5?o7w.tOJ7j^uT' );
define( 'NONCE_KEY',        'K7FG=iai;tK*vC:i:2G!!T?@@%au8 LR%qgAgpzy!7B*n<}cQQ41tsGg]#&*nIa%' );
define( 'AUTH_SALT',        '=y><+vfEi&Um#PaZBR/dY&~S4Bh^hkCHql}P:C+f+h&GcuSlo#TZN]wI`j2UL}Ul' );
define( 'SECURE_AUTH_SALT', '*Fxd}Uv^F&-m.$$[})8J1#Em:(/my7cg[1M888zP/V%`WabSBBqq3TiP&p28p[]F' );
define( 'LOGGED_IN_SALT',   '0dJBy2pq>pV>2joYV2H-t<,+YoG_|c>%yKl2<poaeOKpKHrnNG4h2KU5<MKrad}?' );
define( 'NONCE_SALT',       'N!&3N[YLPAc5?%E`+C)!1cq@BhCpUK;1(~:WTM@hwJ{=CYKGk,`~G^seu?z!S(/2' );

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
