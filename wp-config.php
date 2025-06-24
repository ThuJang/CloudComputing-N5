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
define( 'DB_NAME', 'wordpress_db' );

/** Database username */
define( 'DB_USER', 'wp_user' );

/** Database password */
define( 'DB_PASSWORD', 'strong_password_123' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('WP_HOME', 'https://news.joestar.live');
define('WP_SITEURL', 'https://news.joestar.live');


define('AUTH_KEY',         'j,7p)FJlT=%Rd2? B#{lG>?-@+{XZ?-2)K/Jba[bxo@`ZYDF;slZ]nh2<h0.;xv}');
define('SECURE_AUTH_KEY',  '-EN=- a{KN^X4]Q|hM[Njy6$sHs6)Vf^_{ W+`B&B8|U[(8px:hv.}A(`r(On+xw');
define('LOGGED_IN_KEY',    'WQ5*Sd^@y _V/C|0kpXTJ++p@E)8$XRt:{F{o+`l(y+&4NfJ6*{DZEh)!lOE|Z@u');
define('NONCE_KEY',        'CV_@O&6E,FL1A-%%|+doBTnys+42^gYq#-o;-Oo>,(`)U97Cn[2J` do)])WzE+=');
define('AUTH_SALT',        'i^s$bD_sgMT-;Z4o90x|L-cP+yf;p/5u-yDJ;Wwt} n/LOYPMh2BvQq`aX<@|cyt');
define('SECURE_AUTH_SALT', '4*_ZFz[J.VH +`8 AU0aKg5Y)w.|pe>Hj8~z&ii^ioKt`x&I!l5z|C+Nj`+Dcm+z');
define('LOGGED_IN_SALT',   '>*/;]]+rDO-60PI]uQhvn-QTHNZ%A(ZQ&R)DF&@4GR<6V:$@A|AAA^[{RX@VN},l');
define('NONCE_SALT',       'w;?-AR*OQCuQ-U{g2PDTMRPCrRt_:qC#*df2NVqm1x^zc5#nCd=x5+de+L(v)JU4');
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


define( 'AUTOMATIC_UPDATER_DISABLED', true );
define( 'WP_AUTO_UPDATE_CORE', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
