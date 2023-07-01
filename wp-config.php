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
define( 'DB_NAME', 'hami' );

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
define( 'AUTH_KEY',         ' T}0LbHQYW%4!hh@+a<>9x?6q70bog@cBU5OSZg7)l=:@>$LNaZAd<ZS|3y~uGL+' );
define( 'SECURE_AUTH_KEY',  'kjP/RfGDobZ+v/(/*a`*VW}@MrNS3]fse>|mdmLad*]e~_#{{BK)HUhguo&Q_MIy' );
define( 'LOGGED_IN_KEY',    'I~sj4h8K#~.5PWeOB2[l%V(s6Q@0_<}Uo0kF/UY$bDI$$47DN*ePU&?bK;xlx^AS' );
define( 'NONCE_KEY',        'E^,{-8>Cgn%1Ar]e!XblW_^G$GI!J[,LzjG1kREBHEtrt*V3LwGMl),Q:v%#)[~L' );
define( 'AUTH_SALT',        '}S)xw~eiP5t$*?e3+CjcMQ]S0wvq%:@ek$n,{60!|kJ5@YB*#B:3/Y0}1jG?n|Ax' );
define( 'SECURE_AUTH_SALT', 'YCp;e]jO&p??$e,Ue>Ew?hGT]@}uPWv;r]-R|#rVH5PlkWMVNG7~;iN]X!m8z*,1' );
define( 'LOGGED_IN_SALT',   'e5%3xAwVrgZuP#&t<{?:u0X`q$-Q$6zJo(u.]i V{<xD}u Ji#^!b_&L~B8).JM>' );
define( 'NONCE_SALT',       '?v9.2)nIuldo&2&=5Vd!#y`Y4>V_*c3bg)6DnejG[Q7Nq,f<u7CB[Zfu5g++K!+C' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ca_';

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

/* Multisite */
define( 'WP_ALLOW_MULTISITE', true );
define( 'MULTISITE', true );
define( 'SUBDOMAIN_INSTALL', false );
define( 'DOMAIN_CURRENT_SITE', 'localhost' );
define( 'PATH_CURRENT_SITE', '/hami/' );
define( 'SITE_ID_CURRENT_SITE', 1 );
define( 'BLOG_ID_CURRENT_SITE', 1 );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
