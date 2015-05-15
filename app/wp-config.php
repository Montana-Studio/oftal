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
define('DB_NAME', 'oftal');

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
define('AUTH_KEY',         ';TBiqwKcf$x<M)_!P1b:^SN,NRxA}m!ci;/&m]^-WCug3IkLhV=lk1Z*T)1zV6%!');
define('SECURE_AUTH_KEY',  'Cyk[0^[PEX{{1S@,^!p]%%8K]Og-qaytIh.6|; -DMOv+3R|G1? U]yX+rmQ%D^;');
define('LOGGED_IN_KEY',    'u:~8Ko8ZC+bttk[muscrn5af:0&*R 0-$BN?,wO~~*6^_]ljDu~P!1r(zHWH$H-}');
define('NONCE_KEY',        'U+XxohNG!ZSmw+M|YRru {Z:Su|$g<u)@U-S3#]]3p&+Zz|iD3Kz}5OZBj`U+2Ev');
define('AUTH_SALT',        '^beh=%,?Kx<!; ew|wP[-t5eRZfnf9upzT1jW.sN|aH+{F{-h[z>z?iZU,6O 82n');
define('SECURE_AUTH_SALT', ' $j%+lRO?_+,n|4d/!sTuPgT=d~~f8(7d--MNhU<$X^d=dcTf`LZt45!<8wlk:;X');
define('LOGGED_IN_SALT',   '+oK@A92yiem1ORM`VJqL0|=8/h-U:[bA&&mA4879?8OK>IsT9%-@XM*$8uhK@J@k');
define('NONCE_SALT',       'JTP*h,9}G,j9qkg|*Y<};4R||ok(|t7vbCo{0|yrk$piUgW,_$~bx[PCh3|<SOq.');

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
