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
define( 'DB_NAME', 'wordpressdb' );

/** MySQL database username */
define( 'DB_USER', 'PCAdmin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'PhpAdm1nPsswrd!' );

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
define( 'AUTH_KEY',         'pG)F-AY^n]>FrXCh$hD^2Fvf*)+4(u_Q!FZclKw9,{I3_}okdWp{TAbVfUcGc(~E' );
define( 'SECURE_AUTH_KEY',  '1l1yyj)9[$C!+X@gQMz4UvSEx?wH5gR)D$b?Q>_h$,6L/=<^[~Wtdi7[{r@`9|Dm' );
define( 'LOGGED_IN_KEY',    'T0TR3,&{36dz0<U{s0LY93`!QlpwT]Pm3P@?L;OV6StFni3Jn*8T2]dUoy^b3m3J' );
define( 'NONCE_KEY',        '.yAu5oB.~z4T^xU)3)gcJ7Ldr+IX,%6-vY6q1/)JO}|!5ce>E6EfIusJ<)WDd^BI' );
define( 'AUTH_SALT',        '=2Yb;(}K8lED-M3:e;[693cH%<YwGi:g>4~iFfRwxa9F{bc^X>$hT1:pW*pz>xcq' );
define( 'SECURE_AUTH_SALT', 'kh0:U|F|+bpv3.]Qq$`]p<%l_&-HS6l}7s#&I9O[-tWwN1ai=4-kWD9T:n)`q;RO' );
define( 'LOGGED_IN_SALT',   '%,tG7,ve[Z=UZ<6~jnN9rP%,V`rag-U,qpg; >upY[iy37LSm{pA|m$Gx7}G.[GF' );
define( 'NONCE_SALT',       'CJ@e:*fTr8ExNQ3-+Vl tm(?RlS0HckOcmyls434D*?=9t=:A[t[:M%<g83Iq*q@' );

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
