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
define( 'DB_NAME', 'personal' );

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
define( 'AUTH_KEY',         '?8(c~HixDSlJe77S^//?YSBvt+8OLXr1*>/t{hY,AHUA-gwI{[pa`O>>1cp[p5%8' );
define( 'SECURE_AUTH_KEY',  'Os:n+hoCtZg6u_C-ca{A&)nOG:TtK0jfKft,7cCJH[>eSQ9T,*/zw3]cp`J#}>R4' );
define( 'LOGGED_IN_KEY',    'n}foX[pB>FE(g`Kkq1E7z7/wK;xpMO4O<y@F2up.m-fTQhdYlgvS]SNcYkFh10&z' );
define( 'NONCE_KEY',        ' tb5^N4nqkQKDWCKTII>%foldufsP>Dx&O56[$]>LUvz~C;<*O*,tFDG?2(]N;)G' );
define( 'AUTH_SALT',        'SjUdAxWOl:V,F.V,P)eEQRkni61%_gf%E&U|eCYhy9FOZK2YM>fQpMTkKE:6)ce=' );
define( 'SECURE_AUTH_SALT', '[@Nl^7-o@7w>a^P&969sRQ;l-KK.OH6FRQu!$qI ?IWiA`Arp`}=ZJD^8Dk)n0;B' );
define( 'LOGGED_IN_SALT',   'bS8mB3?C/s7c_b%R#XdVl`yJ=t;U]KXMN12}I]&]{_La!,ur@+8?wvRUsO%RR4y:' );
define( 'NONCE_SALT',       'm@u!E rS-1Ss/vxT(Op6z{3j| Vu2w/G?,Ra}|:gF=`E ,j*4y*(eU1V)HUGa<tk' );

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
