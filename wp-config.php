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
define( 'DB_NAME', 'data_vis_project' );

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
define( 'AUTH_KEY',         'C~$4[Y}#rNW*Ar1{l@I^*AlW4qF:20b]N{+0 $z+u6;+$XBk#}^] PN(Gt%[bn6F' );
define( 'SECURE_AUTH_KEY',  '<e~ym|Gl(,1T+:yJT)Ql(oj<^}g>C5St_7H[y.nHhSo%Z.4GK4rQeA/UtAN1]puv' );
define( 'LOGGED_IN_KEY',    '0O!BPb.JYori;~9wmQ43S13 RqIv5+R3V>jT)b=*:z8rfo=oC4,(wW@n??F``wR]' );
define( 'NONCE_KEY',        '#jl}jK,r`f,p#6C/c9+27,7RE}5|u+&M>&`3.3x{]V)p/FyZi(~#{dSsqm</;>~w' );
define( 'AUTH_SALT',        'Dy. ,OJf~ly?hVE8yS^S;5}}S:Be(r*6jMg|4iKl_LYrr6U)Ng<}pPxo2beY4#Ut' );
define( 'SECURE_AUTH_SALT', ')F:C9~ d(M/A4C40my,d0keT,i:B35N3CF]F-*7~y~*+h*[Ig3mC[:Q+X8&fLqI5' );
define( 'LOGGED_IN_SALT',   '%f;5#<DC 6.MEJCf[}Qd@}fAK}1c>s,(Lht`8)V/[Z(pPp{c}n=-#CSXc|z~yUdI' );
define( 'NONCE_SALT',       '<g*n._gofP[p<F.%eSKatDR1sSH]>EFyYD4vo<oGDM@|(xxe7ea*WSEssJl|W5A#' );

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
