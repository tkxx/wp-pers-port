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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         ':+C9nW,v~=-URofhEFx[9C5M`=U8][ojKc5Lug0UZyw:yv1Q0}^Q>{&C$<d=/ !w' );
define( 'SECURE_AUTH_KEY',  '7!{DZQrD/8WHB3HG[f7r4*lxW}5X`0X1)wRXzbWR9(7m[yyRX%@T^$^D_UuUn18F' );
define( 'LOGGED_IN_KEY',    'K-gP?Jxg$w;M*~Mh8l.Fo_!0AUY+#e5KwN}097;I<XqBiU,H]K)ls-Y,!nfIe2T^' );
define( 'NONCE_KEY',        'K>|yd~yUUuhg|eoItd_{!,7Lz5yH*[1dn-_DH.+!xzO=+P;c7Q{b()JTdz9c97tc' );
define( 'AUTH_SALT',        '?bD+1qh6EpKW>/v@6eCdNZ>l6Fv[nTnQfz!zo_C7)Q/]p-}x*]i1>Xg&|^G5}trZ' );
define( 'SECURE_AUTH_SALT', '![t9w)<m7AVvU(M=*zKsq@,kj?K]%my0Ye9_`#=?O>8{eqI8X]L{CIo;Mdx,kR:F' );
define( 'LOGGED_IN_SALT',   'Y]KyuS}{XU.wQ!Cw+AltR[5&aq3m.8Oiplh_7kd*tQ[&wK_5)^R0vM`aZTHP9`8J' );
define( 'NONCE_SALT',       '&,8y:j&8>vNdPi6PX)Z`Q!K1cIB 1ajvKO{i7:ohKx1my13O@2{e)~Za1qE>8Y-M' );

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
