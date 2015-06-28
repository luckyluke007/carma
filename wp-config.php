<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'carma');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'F//nZpP_0/9zi|qg+9W$*D2&9Ii,t5s-8h/:wML,nWP$)F#v8.d`644%#x(MMAY=');
define('SECURE_AUTH_KEY',  '3+sr~_y|+zL%17+8I5_seZL+O,Rzj`t?Dj@igiJ&[=A^,H).gqfREPs`RL|<pTqq');
define('LOGGED_IN_KEY',    '+]+JjG-q0SO8C}eyVP!o#n6J94]9sa`-9eDo3(ssV0)_ Fsc|vA+5hyw&.D7<}sD');
define('NONCE_KEY',        'U,a|}-Xq5Dp+o#61hs*}yTK>kCIz$+8*#;/qT:b2kW5me@I;7s4SYhMdpD[t[ZUZ');
define('AUTH_SALT',        '0pG2c4d2pBu.;N,D7z2,Q(H1YJ-Sd`+La<f!i<-m9>rMEW^_z1$lZTMk,JQju-_x');
define('SECURE_AUTH_SALT', '+o.^[<yuQ2c_~Ea^.l(+uF2|>-U:.U:4{W:bsiSE{>Nb~CE(B^EkrycAR7&C|#**');
define('LOGGED_IN_SALT',   '=dimGb-#}RM~-|:&B|QGI?_P{C$>N&dpdTb|.B`^eM_EDu!`Rbxm9dprv+0<#&m/');
define('NONCE_SALT',       'MMY%C|$3lK[|s;@li+4g8I]/[taNTFGd?#4~+wYy`G{<;0MfWxP5O T!(~$A&y[ ');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
