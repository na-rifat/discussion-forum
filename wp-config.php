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
define( 'DB_NAME', 'discussion' );

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
define( 'AUTH_KEY',         'tINPvM[v}v~$X`UKTE6r>U8VTl-}.(VbglFx3)342xYwX|D07y%#szcH%S2N)dgF' );
define( 'SECURE_AUTH_KEY',  'WZ-~M<x;pt3y,z&2@<j]}%LPfS}SQ&/y62qFN!(mG_OU^ka{O}V=Zx*bR/K*|r00' );
define( 'LOGGED_IN_KEY',    'Q bIv[I)oJ;WH;3A+<@s!O)!BvtW f<xH$K>+kyA-sgo;3by,iTb-O>VY^:8BQL.' );
define( 'NONCE_KEY',        '8k#X#NZ9$kF#CD4EkxtL)ifV;fC~Kb!rs!+x+P07P,=#_#Nq;J2-cG4plCEYPt2N' );
define( 'AUTH_SALT',        '@5<yaSoy@@C)}|c:xghF& 16wpa)43#hkPs:g$f,<=98%Z-hHo?/yvTd%B).w!e`' );
define( 'SECURE_AUTH_SALT', '1yvq*nGi?^?1F)VID|SNeZM,F[[{DbRZd_zDyRL[kuG_QCXd%-JvnZRYbGB<%4xW' );
define( 'LOGGED_IN_SALT',   'DmTJ/kXjp}0@u&_-%]r1h:8&X{<@D^4^%9^^Ts7E%=_@^hul#5Y7M.A]CMPY]?Z`' );
define( 'NONCE_SALT',       '^EwuF7b*}cCm/>c$daBLb`!]Fz/,9XvR(Fqn<Nwp?2U$7rroaRSQz^n75E: ]wpY' );

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
