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
define( 'DB_NAME', 'relokia' );

/** MySQL database username */
define( 'DB_USER', 'admin_relokia' );

/** MySQL database password */
define( 'DB_PASSWORD', '111' );

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
define( 'AUTH_KEY',         '`80JP?m{^$n}27aM:.|{/1J]ziw>I8ae3X~S*1x&XG4k-}:):ZnaG2H_1UltWs@l' );
define( 'SECURE_AUTH_KEY',  'PjG3Cb4a-gmE&Za8tShtFF0@)#QuF.=m}NCh])1lwwdP0=+|=|K#<pM@Np9,Z1oC' );
define( 'LOGGED_IN_KEY',    'FVLeqGDvo04*cN-ce;>XQNfx=Fo{l5_IKAmGl<#UjL,$r#RL{4gJ0DMW13|{KxGs' );
define( 'NONCE_KEY',        'Zb<])Opq6Utz^H{rYuaUv~%&Iw;gU5HUkpZ32YCg}vu|34&H)^4$eh!ZJX)<o-*N' );
define( 'AUTH_SALT',        '%LL]XR+2^!Q.0l }f[f!$.<o#d`EV~.nY{|7hDt,+@xRiFq(WwCk])fPjnQ-59.7' );
define( 'SECURE_AUTH_SALT', '3y8Nl:Cbx=ftD]Z7]S+@Cin8Y%5NWd#P!X)KysB:+C*VpF$3hq}ce0{;hZk.^z6 ' );
define( 'LOGGED_IN_SALT',   'cs;D;]p6 DTclto2|3wJ3R}:$IIhW2bjRr0W.c*Af,pit-Zb6lO*R{*>Jgjs{)X#' );
define( 'NONCE_SALT',       't|)[GwTZe?VMoenV1p 5]>+l${/kA%s,|I+2cQsG&lV^UR_pjr{,H75qU#R87lJt' );

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
