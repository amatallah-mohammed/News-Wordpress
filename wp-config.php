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
define( 'DB_NAME', 'news_wordpress' );

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
define( 'AUTH_KEY',         'lto;CYEj{KUI6VTLH+ FX%D*6eAv7m2Vs2.~08R+g43HW[]p,%[J/Ao@>,Tx?I}Z' );
define( 'SECURE_AUTH_KEY',  'O:}N@(eOYV7MzHQ!_:pE88<$KB5&|Y{R{1ySe5S:H/l;vW%?{Iz4ls>4/ikavc?-' );
define( 'LOGGED_IN_KEY',    'KtY;k2Pp|!M;T!/$mP2+fed-$.p;o%ei AzlT3*{;}drr>okAo~A&c[5u>d,N{/#' );
define( 'NONCE_KEY',        '77~/Gj4,s$gk2%CJ6:k)-y[miO0Y}EQ#*4T_6VO:LBpRn.7}sbe^L7,6b5>^.QrL' );
define( 'AUTH_SALT',        'VfivO]0wx|_[pT;n%9T2xm$EWM^|.dNa,(,OF0SiIhvHC32NiNb;MT#:{MMiZ)q ' );
define( 'SECURE_AUTH_SALT', '{040sOCuyh61HAjhrIiW8Y|$K-4@W(+2Dhs<pF`?(tx^?G)~_c@wc7?a#Y)E!,IC' );
define( 'LOGGED_IN_SALT',   '^;wz1MRTF0^< 4s$yxBmrs>)PjY&zWwR2SHRMs!KXcLcYV(`D?8i$Uf0ocW2AI]x' );
define( 'NONCE_SALT',       'WG$F+f:{qH~X16M]OtE_,Y^zg%lk>Ku[ev? L14+jgst`7zE:$t^R0o-Fv>0yg08' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'nw_';

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
