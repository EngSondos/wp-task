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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpressdb' );

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
define( 'AUTH_KEY',         'p=MseLWgH`~~VoRPRig_u6}dM/RqQp/a]6vntJs^c)V*2e;L|L>.TS#4lhNIXjHO' );
define( 'SECURE_AUTH_KEY',  'O%b@a.?%YW{g|<]04gV`z}5!+:TW4bMRZPpJZnyPfE9_{u<Sdwsa->SYRnNhX5kJ' );
define( 'LOGGED_IN_KEY',    'e`Gm0L`yXr&:4ywor[]o?ZQ_{uzL}s%Z{D`^CFt3h2J@`Z/(B:zLkh`tb*rTJMq(' );
define( 'NONCE_KEY',        'BBH)~Z 0U!u~og~GN69x0u[j2YRQ8e*=6<5 Wq:^8Sj8o7VBx1sDFPqbTw*Peu51' );
define( 'AUTH_SALT',        ';ek+U>s/TxOR_rFi;ZExZ4-[~egz><WK{<{SDYfES|C2.Vhr=4<`3h,%@$Y9rg.V' );
define( 'SECURE_AUTH_SALT', 'Pm_Pa!cfWxe<P+v_qX(N@8;sFb3MZvM.+P|a8oj<bchAEK=xcLX,q4Q+@jgtn4#t' );
define( 'LOGGED_IN_SALT',   'yMnvY)f&<_PI*L@?$c9@.6:=pEI{(KYP++6=L&e2;0tV>r,^=RDOp2iYV_lfO%fB' );
define( 'NONCE_SALT',       ')1=Mo0T6L3i,,CPMH73}N}=qlpYmMZ-dk@`xLbyNjhk]r SE{m*ChSlAG{9lCH3A' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp1_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
