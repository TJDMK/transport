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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '{Pu)@rFsJB{Ixihm?O(@kjsiUUj%cbBg-Kt/d93g-8;?bWO;T3ExO3t<kIbkuC3T' );
define( 'SECURE_AUTH_KEY',  'n!!~A.|Pg>tPO9VTO(E/#I~5qGy[{@<~w;^U6ceKmWZPp5uP]0{;>QHA0G-1:)O8' );
define( 'LOGGED_IN_KEY',    'FvKq6Oy$$ L^FHFXGAIrXR66V=s}xUuaO*gF_L!_c-g=5CYP,C_?7a8UJp/MJ<j9' );
define( 'NONCE_KEY',        '?e82?_IXZcJNN@7:mDE&ygT>vs29ddoQ3*LB?beLS4IP@yDwd@`BB7RHX2F$J:cM' );
define( 'AUTH_SALT',        'geur6Le&GxZ-)4.Rm]2*<UpQ,R)j-hXy|m7LYqqj[,V;Om8|YZCpzV%(]o^6O@j+' );
define( 'SECURE_AUTH_SALT', '+2[E_96}{]C;{<jJ@v-4C:?LzOCe]0CZbQQ;,V=o-Uxcg}v;L$#C?3)/KhRhKa`b' );
define( 'LOGGED_IN_SALT',   '+~hYV1f.]6+C?cnm=Q 8#.H#cp+odw5mNG$2OA=nXMwu)Td2Y)+S.8Y<P|xYtTC%' );
define( 'NONCE_SALT',       'h=/Pk!r+}*E>7*d0GggO$_shk(9f^~ 7XHUce;,.}D*!`z-V*MF*3YfGQ?&t$P+w' );

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
