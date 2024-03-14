<?php 
define('USE_FETCH_FOR_REQUESTS',true);
?><?php 
define('WP_HOME','https://diy-pwa.com/scope:0.4275727007320931');
define('WP_SITEURL','https://diy-pwa.com/scope:0.4275727007320931');
?><?php 
define('WP_DEBUG_LOG',true);
define('WP_DEBUG_DISPLAY',false);
?><?php define( 'CONCATENATE_SCRIPTS', false );
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
define( 'DB_NAME', 'database_name_here' );

/** Database username */
define( 'DB_USER', 'username_here' );

/** Database password */
define( 'DB_PASSWORD', 'password_here' );

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
define( 'AUTH_KEY','tNebKJ3+ettnVDqI=38(G$]Zv=]6CK$=x3Lzt+Y[');
define( 'SECURE_AUTH_KEY','8>iFqx^#XTaAUI%f]_6G)b%Wr*5YbP/uq*xMmPzC');
define( 'LOGGED_IN_KEY','pDiXZ1cX(&<!.s6ttpY*^=SNhw>g<1Th4VmT<52I');
define( 'NONCE_KEY','zdqH#J]MY,u!h*za_Afm0KoEUaaqx6u0i^F(^fk7');
define( 'AUTH_SALT','&8q&AW]6[WoLiO31zv6ij,]WQ<TB&uY8,!0XAVaP');
define( 'SECURE_AUTH_SALT','IvyQD=uy5-zIi9rulB<j_DpjZ_1/2D=L6<%OlR=e');
define( 'LOGGED_IN_SALT','[1-rYl<Trao%Cj^083)sk/R_0_n%3cc[Y[3Uj3Xe');
define( 'NONCE_SALT','s2HyK2,ewDoU3IkqOU(9O.@/A**+k@$mgj,cf31S');

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
define( 'WP_DEBUG',true);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
