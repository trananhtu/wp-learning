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
define('DB_NAME', 'learningwp');

/** MySQL database username */
define('DB_USER', 'learningwp');

/** MySQL database password */
define('DB_PASSWORD', '123456');

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
define('AUTH_KEY',         'AQ@j|E|AS,lw]M/WH|!9AG|Bx-0!jHELB%,]:? :u2O3Q4gf7R|K|!o?~9*MV,{M');
define('SECURE_AUTH_KEY',  'k;S!!%Sre)KtHR./g.&vr+gHu4|b^Rg0dvwkh;>E|>80X[aeaXN}.?>or@B3HLD&');
define('LOGGED_IN_KEY',    'ldG2DdY|4L#`~2xf[wLv,3W-#<h|Z],X` cj7Z!Mov|eTiK{Z8*+X`?3leh0rM,Z');
define('NONCE_KEY',        '}t,~lYcM7{.q6i=hy[[+g6Z}#M2s`o*uuWt(xSi{0a6|U2pGX-XW A<$-,*,n&,o');
define('AUTH_SALT',        'Q6ww[l.f[X@v{+W#a)JVr5#N*4mdy&3MaISM@Oi%$@#bXmDOExy@Ebk;oYhHC`5x');
define('SECURE_AUTH_SALT', 'hQ8i$Z!,N<?JRM +/J]X~Jpw#(wi7ZqI<}QJ11-]xdK|Pil$K7eA+u,YFHJU7LpE');
define('LOGGED_IN_SALT',   'jW@2j1}|d2;f,~lHp~13@PDHpAW/`/*U@8;BDqVe7.TG5i[) *&s&R3k_Tm14Os)');
define('NONCE_SALT',       '&|e-#Fi;)36;+*>bty]=?@76Le:jFVM)M%#<rs6rdzvZ%VXxZ] LQQ9Rr$-!O9Zv');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
