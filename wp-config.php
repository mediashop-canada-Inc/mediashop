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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'mediashop' );

/** MySQL database username */
define( 'DB_USER', 'mediashop' );

/** MySQL database password */
define( 'DB_PASSWORD', 'mediashop' );

/** MySQL hostname */
define( 'DB_HOST', 'database' );

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
define( 'AUTH_KEY',         'd0j^C;U_Bo!soZh7wHjR~d&Q4JX]c0dgJKxukAO0]N9jo%~[[(E/P,yBZ}>,l+(L' );
define( 'SECURE_AUTH_KEY',  '/(#rgdQ.5,<=qQNE__6gmW l1+PV3DxI{dLZy4:W;R~HD35RIC|`{!qBH6e?ud3_' );
define( 'LOGGED_IN_KEY',    'j%#2cn6FC:E&nDw?aP7SDs>(-?%wk`*i=%pPyw1sMpV<AHAM6U>sx(ytCCGb/Yl>' );
define( 'NONCE_KEY',        'UeOAsfEKdI gaa7_oE}ZOqDdzk!MXpHpnO+.gy;79Tu-5XI6[3fd`;tK6>~j6G@P' );
define( 'AUTH_SALT',        'B4,+SBk]ew(mO])~.(pDGo_IW9TftZnDi&mGyT>l+:$0tY|GIb,=}}BO:^;GEOI*' );
define( 'SECURE_AUTH_SALT', '(:9%@na0JV;R/5kizgu3@>7=I!ef3t+$4N}5~Ub^y=N#zT P]R$&vl;aIm,U|!or' );
define( 'LOGGED_IN_SALT',   '!$U/hKiVz]OvMPJ]3SPor t$@<T{sH@F:QE8(IhD=O6uz ;pJc2]Z!6|n2}Q]XqY' );
define( 'NONCE_SALT',       '_^5&HCnX|F$b`SjTe5zSDMr} 0xq/.f4Vt,5zsz9O}8{enphS=>EK_Z_0.(>%nTM' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('FS_METHOD', 'direct');

define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
