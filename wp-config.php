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
define( 'DB_NAME', 'wordpress-101' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         '{I41lpoX9Lu{,0z?a)m/_.E+VsBC,=CYPZvPfmzpX!~sv<~neX!t0l.Nu`UW;{OS' );
define( 'SECURE_AUTH_KEY',  'V938na~6HmR[CT?=qyc-+J#an2bO(0Y`=@|hU@[*d7_L`/}AR$g?v2@#~[wSQ*;r' );
define( 'LOGGED_IN_KEY',    '4y<>C1nsl?G[JiDw0:p2jtOBzg3EXpvi,_[-1i;PV)._N<Eoy/3jFRjj9jyR!6?X' );
define( 'NONCE_KEY',        '[dDxHbMK>(SE1L)Z0@iwK `&Yb#Lc_po(7SJhMzW=BZPH][wh-2Ze$Yrcoy0>RGP' );
define( 'AUTH_SALT',        '3kU+ojfxZn0OJsp(z]Jeig%asQ~+|p[QSZW[ZyTy%6X(^7K/>hR%?x^K&+W$Y^H!' );
define( 'SECURE_AUTH_SALT', '{gv@M|(;<cETVYx~WZAPT~ECX$UOY.2(FF,4yZmqUd$F{=((M,<.L%aP ppEc&xM' );
define( 'LOGGED_IN_SALT',   'gsu`[/UGiZL{cWbEiF8&#Yu=B}*lU6zl61>y KeN1%:<W[/~apRGMf#rc^@;dk1f' );
define( 'NONCE_SALT',       'YmFoIr?~VxiACHeXz?[)-w;qnq1P;PB6$U461QBtKZ16*dpYV!/D@O:JzDJ{/BdL' );

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
