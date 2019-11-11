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
define( 'DB_NAME', 'club' );

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
define( 'AUTH_KEY',         'x7]#.Oq(P4P)TFPCGE@SnJcX7W7:PRmUc:$:ms~?;{JGQP#0oiI0ieY]u[3o{.}1' );
define( 'SECURE_AUTH_KEY',  'Ks6-3HyOGy wDyh[j^Mf^#[cG*oQd?CuAi5f*n2n6<!JNURpjru<(fsk-[_#%]6N' );
define( 'LOGGED_IN_KEY',    'VbWcTA)UhHR1  O&Vr}iNz}gE53-jvs_[*Y<v_##MH_J|Jz8ZV$Vljw[Nw4^d$e,' );
define( 'NONCE_KEY',        'Q<SDlVdB!Y+J-}*3|+O<=(wdl/X)G&<O4WZ6#qyT!#g/qe%ZKaG-&TvC|3tSK/a7' );
define( 'AUTH_SALT',        'e=UQ7 C~!2/mjWUOsZyAN>LW,DMc ;ZPjly`nP{ybN^e{b[k,PXyi_v`V4D@O[@F' );
define( 'SECURE_AUTH_SALT', '_#FgFjg(J4tf||K:bcefbvH(Dawo&D~q<TOA{AjJq;]H!cU~S3f|l}<(A4G9/cCG' );
define( 'LOGGED_IN_SALT',   'E6F]D#*Fv-R[}ijLxPX>E2)CgWj=AP)q 2|k9&hvG3`7Kw<GC+%Ps;{a)2r~9?(^' );
define( 'NONCE_SALT',       'T*<>!y=!DcD+:%#kC#(|CMQ>Ac=Kh+@;rBP/4[rJ^}bN31%maBWfXPiQNbQqgKm-' );

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
