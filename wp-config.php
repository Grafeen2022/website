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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'GRAFEEN BATTERY' );

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
define( 'AUTH_KEY',         'vnEHO^v-t( ;a?6%j8:BJmM|oE&fRkPdq4LaT:(.5(BULMZdwPKxSfs)JUgpCu^v' );
define( 'SECURE_AUTH_KEY',  'BWzPV%1G0FDW4aag!=HLreJ}f@4|xX.;s$?9xP(2Sd2-0oqQsMu0{@wa2;2O.n^T' );
define( 'LOGGED_IN_KEY',    'X3*]={{sqiiRtM[8{wwu@uH6>1REJ<d[$o0D3T<N-KVR^;xei9*]^!,fF=QkJV0`' );
define( 'NONCE_KEY',        'iS[TGy,P>O[iZP2r|zgk9N0pGv`;GY~oz::o3xKn$X`A]!AVxFN1/)g50wL]>}z,' );
define( 'AUTH_SALT',        '7C-u@R}kV5^).*nn3=Aq<jgraVP+JmKqGtvbH2h7r.G?*s<(mS/nTb%VrVN<]BFM' );
define( 'SECURE_AUTH_SALT', '<Wcj;*i`F}iM|VvNEqR,wU>sL[^H/NxaZV2864Q(G|D6nR3B6ivR2U(6|-%: 4dq' );
define( 'LOGGED_IN_SALT',   '|9Ioa0Mz>nS{7824a:LDaOY0G>2r9Z:F.#W!o%340=vLhCJTI`|$lmiE$(9Dh^. ' );
define( 'NONCE_SALT',       'ekNH/W^ Ms|.G^K2ck3bcJ}(a)xg0^A/d%E~s2,N&gy;P,kO${SLGG@ogYfFm{eU' );

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
