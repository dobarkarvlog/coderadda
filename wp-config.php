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
define( 'DB_NAME', 'coderadda_db' );

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
define( 'AUTH_KEY',         'K@2UK8+BRp&m.)INO+hs*SQ]Xy=1o[cFWY9`)`dy 0f},x|K^3Or[4rh 8eOn0&k' );
define( 'SECURE_AUTH_KEY',  't:/a&/PIu(V|JZm[DL_5[d#[]M$oA?K+@Tk>f>2fLKl6PHJp_y`1bZh6Ao-LNai(' );
define( 'LOGGED_IN_KEY',    'zqQ ._W{^~nlS<t`NOHsj=_G@*b,<iqItF=lC=7(jKUjz?RX6?F!Z;gqAT;=4$0<' );
define( 'NONCE_KEY',        'Sm?8LfS>Tp~TPN#<)|uO1_x@i0G?D0;NwL{@T=RY5[C/ffqr<*f])u)zk^a2vUdo' );
define( 'AUTH_SALT',        '_4I1;-QdI}XMwR|Bo[uM#fh.`*4p~DuV&}RF-Jys_fS(R7j_Ja>w~TlP_@R=eisk' );
define( 'SECURE_AUTH_SALT', 'r+pyusH[?nqp)&Z+m^9Qm5#77*0{|Ck`|m pD||/L$BQ=P1H.2|WFMR+[_MQ0V@G' );
define( 'LOGGED_IN_SALT',   '&F.@482N9U8|/;&|:hr~JX[,KQo.V8n</N;G(I&2ZsJeLxk^Zvt!cR9H!/gKQFI+' );
define( 'NONCE_SALT',       'sh.Dat:2IM<L;^`3L)TP`qG@9UggiDvs!ae#6t$2F/ru2fr;u1Vojin` S<C<Sr7' );

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
