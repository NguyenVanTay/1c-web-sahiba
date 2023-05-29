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
define( 'DB_NAME', '1csahiba-db' );

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
define( 'AUTH_KEY',         '4q+~S*f}`t(5rq`=SqRXab8B7tr|1@RhTD;zE,H?^*vT9.2*2QZy0c?Yv8WV_wAb' );
define( 'SECURE_AUTH_KEY',  'AelT,mDP%k%I=lxlkOxXKizvhz+=yoYj[r~,<mf^RzS~wSP-}|7)of3/%}+<@6[S' );
define( 'LOGGED_IN_KEY',    '^#]+8I!dh*qk4Mp3|.L]EO$Os[7CpP?8$FAR:)@T`.-ILDjHfIhn-UF/w;qf:4({' );
define( 'NONCE_KEY',        ':3>30^)Hp+;y<4XS{_jjps3el07o1[>WRNT>vzR+|kmu=j^N2}v-%0J;&W+iH7j4' );
define( 'AUTH_SALT',        '4eZ.Dnr| 3No$=Lojhdg*t</lLL`La&2O./qo|VB@i3ZjSbtN;x/dD&Ey6Lv5n$M' );
define( 'SECURE_AUTH_SALT', '%l-6K@+$W1$n}H5V@4W6~h(98~G9YR>V~3p_Kq`o.:0Q%f7/inpLlj7/61s#@k`X' );
define( 'LOGGED_IN_SALT',   'b|W;`OM3H|uxH}wjXU]O4Qjg$3h^n}#3bY=@&,_P68Uez9p:N(oQ]lM^zjxSLV>?' );
define( 'NONCE_SALT',       '?pDcd_aG)O=NZz@vr)-G)iL3>+QXJ&R`J}|E>>2^ZI=;Bix11bVJccWSDJPp,<<P' );

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
