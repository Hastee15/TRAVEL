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
define( 'DB_NAME', 'travel' );

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
define( 'AUTH_KEY',         'h0hx2X)rd06AkaJ%n3bo8 %rt)A DZ&%e/#[AzkHyW -vbW|m,,Gf8+^A5vatv9q' );
define( 'SECURE_AUTH_KEY',  '_hoOcVSH.[Tabg;3{&=[g3Q=yl.lO;Q%nA*UcywErrBvJ:Yat?|y%U~/b&1)ayxG' );
define( 'LOGGED_IN_KEY',    'mC9@~})>fs$K-<a_U0qX0K>IKwQIxVfP,;.q2g}1)OLG;B9oN%SCwH)y5jBaM,(n' );
define( 'NONCE_KEY',        'ciHtQ!nuX}_|2ek[{[3,/~pl2IUMzipSoE*#L6MH((SdBroMcsL>@?b~YPPthT~-' );
define( 'AUTH_SALT',        '*WF!],Ygx,g}c!DU89Yfk}><Rbr}sQq5XsP6{BE:mG}ipz8flsGPr;I2OF#NlZx;' );
define( 'SECURE_AUTH_SALT', 'pxjt^#TvCXo/fu/}GV$fJ;VKyG`^&xOxZYF~p$S,=~2Z |rR tSXi+3B**2CZm@t' );
define( 'LOGGED_IN_SALT',   '7$%;9d~14t,sk>i#nL*}/C=v.{>:mB{2( VFibyxVjX-Yn>:/):@:%aR9KD*+-Pm' );
define( 'NONCE_SALT',       ':z[N}DkGd).?+!BmG#g9z[R2L=p(_sp!5N`WZ`F0{D2GOdhROVkDAeSR0$EHpRQ|' );

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
