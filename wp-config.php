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
define( 'DB_NAME', 'macroswebdb' );

/** MySQL database username */
define( 'DB_USER', 'macroswebuserdb1234' );

/** MySQL database password */
define( 'DB_PASSWORD', 'EtdGt2kacM6cLmF' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/** VA to remove ftp problem */
define('FS_METHOD','direct');
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
define( 'AUTH_KEY',         'N}ts 5H#6=,)y;my*t3q387mF`Czn^0CYlP7 5o9WF|-Luv?R22J&E5i5*Q&mw<Y' );
define( 'SECURE_AUTH_KEY',  '4n|MTos5:k9eci3h}A=9a7VO<qyz@n.x!bu-!F9~&?F~L[AAhMc<hG,O5hlsW#l^' );
define( 'LOGGED_IN_KEY',    'd#8mtbznTxf@gWT31asPBor|<64j_ARwk`W:e8|]xYV0$}xM4@nN3xF0n:}0{ XN' );
define( 'NONCE_KEY',        '.6wXTn=&J7Ux^:{!LsxrGm>eza1,ks^uPs)Uv5EK7Zd2!po+B.E5WI:DR/OoDH;?' );
define( 'AUTH_SALT',        'Fb1&qX8L];q~{~Rbu8kZM;n,1tJHnz@/7b{SG;%~U)S0XG1e>vQ^0q7p(9XI35 [' );
define( 'SECURE_AUTH_SALT', 'X<Mz/wSR2ZOCeD2p|2k_+Mq?r|Vv[;&-92Wd7v7Q={Y*MNk0uB,:V*cT(Z5ma{++' );
define( 'LOGGED_IN_SALT',   'pIGG):be==,wk(~&8{7?L{8c@HD&.A@hT)MEI;iB>UoTM*Y[m}6BG/KJqm@RCw89' );
define( 'NONCE_SALT',       'khKfI)+syll2t{%UnWau #Llv0wG%8(_BoVtEjC+zP5{;_)l>vNh%xL3)jH6r(I,' );

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
