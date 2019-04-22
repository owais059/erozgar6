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
define( 'DB_NAME', 'erozgar6' );

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
define( 'AUTH_KEY',         ')WDrAkM6:9i/TwI`@7_871kRwk^9FOLYO/G+Kc6t$;4Qn/m({~_&Vz$;o:D@g.K0' );
define( 'SECURE_AUTH_KEY',  '+<gJIa5 i+&/<k199u$u~NO/(b8I]2#Bcc sv9YI+yD-l+R2BSA`*1vY42?@[$5_' );
define( 'LOGGED_IN_KEY',    'XdaCreIINkcNA`qV/h<&+/RYgmqxe74uDC-wKvPIBwr(!YL1NG38$pgv8}|c:Y@J' );
define( 'NONCE_KEY',        'kjhfRfp47CxooJ^tbreft;;HpLh#A6y#JBa J/rOtpK6t)3IvNyVjVQ5`ua`zFSm' );
define( 'AUTH_SALT',        'Z^uBaac<9t&Q-:^RGc{($YElCVTd/])?%)%h.y]Jv;<HPSbl&{0JN//|t{W.o/^F' );
define( 'SECURE_AUTH_SALT', 'dndrb}#,B*ow`:+(K#5VR]&#U?gv$hWb9Ma74Fb9XkmU_rV<5gx>oyE?99`d%UJ&' );
define( 'LOGGED_IN_SALT',   '{QlO6iOgx:/p7UhW-+,Lc[|0n-BrGAf1l8on[OqRJ;@Vish@W9/X8ux[0<hj3Z$l' );
define( 'NONCE_SALT',       'R1HgsYPMlXj{5uLr`m00O$-1ngYg&{-7UnmY02XFo&jr2nDOpA%Q@|5&!/^st9J]' );

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
