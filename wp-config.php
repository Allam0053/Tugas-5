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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '|/k8iNq}o|2p=<==sd*;lW/e*5(QcN=c+j%/(|bCK[A)evn1/]k=9aP5 XB}Cc_?' );
define( 'SECURE_AUTH_KEY',  'Nx{toT2jWkp3U~Z;73>wMw~&C~;Vb6zE;{DTL62,/^Qpw3aq<}SjW>;=Znbw@je4' );
define( 'LOGGED_IN_KEY',    '0:rs9~C 5`TLXQ>0v1[IS)$@B<^HCM-/fxhPW[*jS?7rA+qxyqqr/MnvuS2}3a~L' );
define( 'NONCE_KEY',        ',N%~S.Shd6T:B*cr<i9p3_f9{@vXw$m^zt=`[O~~@<&wtD2u[Iyqsro1KprZOY4L' );
define( 'AUTH_SALT',        '8;/R7pCOH$U)}4_*#hrZ~<Bs{8v4uoPPwT.dZ4hS:1Z^,vi3xbZ>ae?y1@@~~:zh' );
define( 'SECURE_AUTH_SALT', '%iSYzcz>qTv<g3?ch[k$&9/I5di#>@h.#kCOab}f93;zR8%ij~x{V^I(%3<5Sc8Q' );
define( 'LOGGED_IN_SALT',   'g1gdw_k6g?+|<eg ;yf6}1{6khNl.t=+kgnd?~*{!+`6WgF{#RnR(<}8ZYA6TZ.q' );
define( 'NONCE_SALT',       'bl2u`b}4aCiw=}&UH/dV=H15prPN*K9jQ=W?m^*x >@AIK~~?q8Hm>9%e+9LNuoZ' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
