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
define( 'DB_NAME', 'themedev' );

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
define( 'AUTH_KEY',         '{C!5w-noR}t60|b%g.rb#,}gt<)WtHz*`N7l2Xp~DyAs5-O2l%m*KtUlqe3IZ*rJ' );
define( 'SECURE_AUTH_KEY',  '4X~6PcJyg`7g#i{NY6Nf%w4nOk)D%^U,Ux-V/Z%LsFKO^i8wU]y[4 e8Y^EG7F@D' );
define( 'LOGGED_IN_KEY',    '>FE3K`H9^7!-cHX:A4xnpxJ~:mC00#/?w!$9_yx!%62P_N9]<QR.d_I#O~`2+x#L' );
define( 'NONCE_KEY',        '%PK{<v{mtnEn5dx:qW>G>3H;f*`TM0Si(/mx#}Y>[B17U4uOKb(Xb+Df<T3Rb`~G' );
define( 'AUTH_SALT',        'c+)RmE=n&#@,z N%N6|<8,+s<.ri^f3=M]2|h_s!@}j@o,tER#[-I`f|7jGNaRth' );
define( 'SECURE_AUTH_SALT', 'LyK!#f(o4s-c&ZzAXd6#7b;(/Vtny7!>HDA)WqXZ:kK2o;u[W5[++*Msdbc{Q58Y' );
define( 'LOGGED_IN_SALT',   'Y~D-ETJ4VEJ:6*`YOn1Cl5|!LU?O]] 2Z?8?*BP1gAak/]36JN:1|BX&!O|&sNr/' );
define( 'NONCE_SALT',       '58>v9U>ISQV=<oucOYB~ZL#H1,g0^c_B^A-=cI7bjrRdjKGG.r%-MWHmW|#>qJdF' );

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
