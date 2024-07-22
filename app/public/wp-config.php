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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',          'whIYKeI8VlO@c|_d;1!*!^^04)xi>fz#GTE]Dd5<je_iXCT)BK8WCyS!C|~qo0L:' );
define( 'SECURE_AUTH_KEY',   'WAx&zj8q`qy)}n NtfvpZ(_*SH_Rskt},p#~%iiLw!3Y:f8.z>iaM&csF%HF4Aul' );
define( 'LOGGED_IN_KEY',     'mP)sWXM+y,_9HuuqPja~0i%8+H.p:?VUR!35UiByD%h@QJq?BAr}upSG)<Jv@V$m' );
define( 'NONCE_KEY',         'nutH6zvir*oJqpTZ%SzVB{R3hg3b4ujgC:YBryOj-vcc:F| n2>L.UUB6k7HgIpd' );
define( 'AUTH_SALT',         'QxY8SyJ-d&} ELM5o .4aNlSu`Js*:-ktE u:q<3;WX[)+ `;:!xwf3V44>/*i),' );
define( 'SECURE_AUTH_SALT',  '}xEns^+.le;x%24y?.05(%tbL9|woqP1x4_hZ.*tX}aJFs+u11S){M#@/C0Cw3>D' );
define( 'LOGGED_IN_SALT',    'C5#}`<!!%JC@mYRmti~o|Zmj:W3h4[l*_9$J6V$(B|hmS)5,#+^K`*ad?fGZg?!H' );
define( 'NONCE_SALT',        'iRNbuD7VD0xyP5IdVAD<RAXErXlZG+%14][n+>]Zk#jgFYX5^mB1Xgy4Dw@XqJF+' );
define( 'WP_CACHE_KEY_SALT', '*rK9~cK+2c~B~8p<-6q`XYU*_:HT:`N>jX?KdhnH9lU,?9l{od50T}%v88Mc]KuV' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
