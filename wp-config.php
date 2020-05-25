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
define( 'AUTH_KEY',         'HXA[#/.De6$>?#`T[t1.VK/1sDQgx.L]Wxi.VI}3xC)+X#{ Rc4kd~E5_aq@EH~W' );
define( 'SECURE_AUTH_KEY',  'Xy 9s|RM>_j<.xar3bvv:F9p?Wc9C|1[w}0EQ7Y{i>bTws`#Q/TaXDPv)2=z5YR)' );
define( 'LOGGED_IN_KEY',    'mQ7,f*G|YnY<;Qe[xe-.2;f6dzrNn4 sxqf)cub>1zkKD,*Ydt-/`7{:+[9^IZ9R' );
define( 'NONCE_KEY',        '.u}zQwySyi@iu^T`?MPLX}*gWn@7D?$a5<fEmAFn<,UNR,a;{d)zDY2U#Vc.P.|T' );
define( 'AUTH_SALT',        '< <ba,Wfr, FT(lJW4cvoyx9r7=1 1uj%>n9&N`iR+M&[Y?Qb_^$z#Fi&D9#x]dM' );
define( 'SECURE_AUTH_SALT', 'q{ofQ[NEc$<04U=I.Jn-{&<]L1iSFL/bwLP2X64yb%L+mg|Zmi{Rzn& uc_4>/]m' );
define( 'LOGGED_IN_SALT',   '+!skcLLfdf~Ys7]uj[7AIdxPYv5&>G6,,Bg^<bTx:Ue5E~C?MG=(rfh*GBo06?lc' );
define( 'NONCE_SALT',       'bM<M:%qXacxw^ROg~td!d!y7vCfF;M*~n)Q ?cVXX(ZeKg/<O=r[,PSlBQ{v._o=' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'xyz';

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
