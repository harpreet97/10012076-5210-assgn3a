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
define('DB_NAME', 'db5210');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '123');

/** MySQL hostname */
define('DB_HOST', 'wp_mysql_5210');

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
define('AUTH_KEY',         '087l[<w_@/x|kh^|?ii*!|&ID5Q`s/2z2Gv%x ;f,h}Dx`/ZB>LOJF4>?Qct Q8d');
define('SECURE_AUTH_KEY',  'mo6:-9twC<T8&c_Jb2ek+tA;?-I8XD7Tu5jgR4/X(9TWy-T%Gz]{d`k8|)q/U+s/');
define('LOGGED_IN_KEY',    'ofv<w7jdG[^.9%}b6DY8ihQfR0Jbnf){Ocn:r.hV&ZZ_Z_CT4mWCgn@wK$J6I!~s');
define('NONCE_KEY',        'j#kpmGe#d*ZW]d6(c6+zX%0[/YbPopl|zvmd0-xIV`w,cs]~g(]qwyP^7?/{.5)|');
define('AUTH_SALT',        'WQ)YsD=M=&p5k+P20}s8i$NlOk8?Ds<6%W;OA9YG[4^nGquOSMjt@7/.Nl|s]YWU');
define('SECURE_AUTH_SALT', '/-*:t&Aw=Rh%wiJ2J9zy0R]e^a tL!D&m.x)92$J/L?L{np`[z]^AeeCB&9EXgf!');
define('LOGGED_IN_SALT',   'cVs@zfFK<=;!Za5BP+Y~eN(m fiF*,>8aC)hcDTBf{4n$XM6H=um=_YfF<=5>U7b');
define('NONCE_SALT',       'uB*wUp4e0T%qQ5}L=yOTz=k6j5XJ:Z?,]k,0868,`#?V?ANJ*8dqbO<0LFw&#)Lf');

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
