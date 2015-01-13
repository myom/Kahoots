<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '%!na){87lmkzP0mm5RY%j@>&AuP- /p|E|L:=FW}U6u;PPWOiJ!e>~n|!g5&W5!B');
define('SECURE_AUTH_KEY',  'ZVa#Je?3k+DY|d,):Fd+Nn6C|XcERxPSx`H-/0Bkd&;o;y;H*wnJ.0Wi,@@-LlDK');
define('LOGGED_IN_KEY',    '~2,OM+iRMs$!ffMWOe|KwWkW}&g+3RG&{v(8X<6TJ:,y~Wv1!Y+30tBS~42BEJRN');
define('NONCE_KEY',        'DeE`Ar|k#gZS8-5[-hhgo~|aa`&AvzO-k61,V+}!p[z4I>z++3<9aaMztJPIL1j.');
define('AUTH_SALT',        ']GG6GkMM/a]pqz]* q^r/c}HR)0AsXCz{KYmJT+K{q.!RL]1+GeCto+QIv&Oq=pi');
define('SECURE_AUTH_SALT', 'RCDc>j5NDw[`<2.fyRp*++%//xWH-24=`?FQ2o-- =2H|ihLZ*ZZi1Ue>yR@0HO1');
define('LOGGED_IN_SALT',   'L&a!XNo.J)H|_ebDXoD0heEtr+pSO4^XggU-lqy9>8u+ 1r`ugqV3$&^gE9n3<En');
define('NONCE_SALT',       'H#>WM`I6zi@f0^$>Do^>EXFvvXh#(&i]QS;uSf :hww8BFrE-i4&#6-?V*+I9Dg)');

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
