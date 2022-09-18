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
define( 'DB_NAME', 'xxxxxxx' );

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
define( 'AUTH_KEY',         'y(SzCa!~S7)|rK^&i@>E Z4v}eu7^t8S5E<iba;{U377JfRabYF|Lfxi3[H-^8+t' );
define( 'SECURE_AUTH_KEY',  '9md+{.u8(x}vB1n!E=T>axNYB-9y`/FX8><1,b5,#^I3QhuQ|fbCMpKks:c1 We$' );
define( 'LOGGED_IN_KEY',    'Tjfc&F>n:p6O#>yu!tfBl{PWPT8?CR[)8@?Ol@<ZDe4DvQd00e#+Dh: )6ap!hMN' );
define( 'NONCE_KEY',        'exn;lO?yH,?Ls|%/=7#zJ_<c_$qJM/:dQWL;kmmv/3A ;YTtI}#%zGd<M@K/5J?A' );
define( 'AUTH_SALT',        'F:~Mkt0NE~)p136S=C%4kxiJtPf@?tRBl[oX)n_6lZ#.#<PR>,VOK{Q@MJd9mOdn' );
define( 'SECURE_AUTH_SALT', 'a:17$y!bkH``EJH1/16PdS`6c!}G,[+<a<wRaBKHQV0+4 %WLTN6U$6{XxB$sh$B' );
define( 'LOGGED_IN_SALT',   'f{$:4l~FOftCGjuHk2$JVk)[p`+p6Xi8i<nn7E<F#dZkMVJIh=Z<BURbpDY0&[`<' );
define( 'NONCE_SALT',       'DXqK#6zBL=F.PCN-J58&]Fv1m?dp5pPK$-E6#3qrxYF{qXpe35Q)2}nv|qx]}X{)' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'jc_';

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
