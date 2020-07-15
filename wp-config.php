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
define( 'DB_NAME', 'u173387507_ygej' );

/** MySQL database username */
define( 'DB_USER', 'u173387507_ygej' );

/** MySQL database password */
define( 'DB_PASSWORD', 'aQudyBasuN' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'd*M]{a948m6(^/sZ+`;~8w+_`6h`-gRy@2q+;QriZ@}NX>dYn6l*&k!SuJ|MAb~m' );
define( 'SECURE_AUTH_KEY',   'p/`rQl_{.e<T|i}dZ1Xxgz%X;s|v5N@6@?Rlmmt@j*x/#!HRL7<T (-A@&.Nk2}K' );
define( 'LOGGED_IN_KEY',     'diYoXp!bM91r2D3GrDv;UA$!%00qZxgz&WgHVSLMhy@lJ=Ro 4I[}uc}&i/0OQ%(' );
define( 'NONCE_KEY',         ',9`CG7!G$j%2y5.>+LT`$x8OBDLOM:1tg*W7Nx<NcI*k[YK/;fVweXO:*J`7>MA ' );
define( 'AUTH_SALT',         'u.?fFN)Hwu@R{N#Z,sx[epnRAE1v=Q2T7rfp9-,> a3u{kDB3Z1NHyc~Y*/,p)Ph' );
define( 'SECURE_AUTH_SALT',  'hFoBtcjMJF$88,1>7u<sPH$px,`:oD1GE8r*_=.q-gz^XWCX^GrgZ[6VYu<CQ4U_' );
define( 'LOGGED_IN_SALT',    'zy6>n&;0)$7r$8,3MR! Y?<t9d->fQwc,Mj2kjSqtq(^v7$f]kp>.go12_cGR%zj' );
define( 'NONCE_SALT',        '5<c1%o]lz[!;%k;<r+;!FihRloVua5dA36)qc15vy/Ug=W]8->e4/z}z(WEG(320' );
define( 'WP_CACHE_KEY_SALT', 'o3D-&pd;>0e~l?}=+[_-;e[5h$8@>?_!kHP#>0N`*X}ta4.I+,Xe+[ &dn%u`r=I' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
