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
define( 'DB_NAME', 'mywp' );

/** MySQL database username */
define( 'DB_USER', 'mywp_user' );

/** MySQL database password */
define( 'DB_PASSWORD', 'fcJBdm74tivc' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql' );

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
define('AUTH_KEY',         '<0%L;kg) ,HP<q=Z+{z~9d4BwxMjTU1!C:N>u3|sta`@`+gKl|SYy:Ue/j(3H[6}');
define('SECURE_AUTH_KEY',  'toa1LHQ${j@0E(^/e^S4}d3m9/{n![R}(4n}BAck`SYl6g2j=%TggOu-k}(yZ+~b');
define('LOGGED_IN_KEY',    't6EO5_hG{^MRw@TAaZf#ck@-4LsxUuO<eX^X(=u;9?A#>9zJWREXq1 LW-a-r%|#');
define('NONCE_KEY',        'Z!6,>YI1Q:@zr1#+H5`vVli1rsv%Ka3Nps 8Dmt3hF#0L#:`jP$4+1:N+3>]o=P9');
define('AUTH_SALT',        'IK5[{&y]v-P9$4~7T])0]Dn;4a||#_b+YqIZ0QyP0w4C>92C6<:sIz%s[ZQx_^H4');
define('SECURE_AUTH_SALT', 'oRkOl*:~QM?8b{BF3|GO1Oo+R-h(xXk5:+E}e|X#FT`+NX:D)-{+BhG)a`/:IXu;');
define('LOGGED_IN_SALT',   'OUx>X`3UzUK1l#vgnIfnB|_|@}q[m4p0$EKn|J?3Dv^@e*po$)S/|bdp-J84d|/]');
define('NONCE_SALT',       '4*VX `Qoai*8Ani>1H[2]-*Yg04.qXs[rLaT-YU Bm2O+!6`{#sG$0M;zez$eaHh');
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
