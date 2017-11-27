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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'tianangyy');

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
define('AUTH_KEY',         '{=a;:#_#c~3QdQy0g6L-52uOLD_S{F[D5BG1ad.<$|U}W&<Ed1.9FDwUbN5=>4!/');
define('SECURE_AUTH_KEY',  '{TRu#L~Qdv~Mc[ff:v<]P#vN`-q*G)`C2ty8TbuF,n9`%n+JogQZ )~!2cHOz>hi');
define('LOGGED_IN_KEY',    'w}^FYVRUzTYkPM?|uNbaoB!L&rh@m>;~+20c>H!2Hn:-*w]}1hUO=rBJ88jV5.jE');
define('NONCE_KEY',        '`U[~wf%v`+S}`sPJnR<DM6GU8+cpi-D~a~XhEci|zEp`Y%`BGr0{p{hg?:]512T!');
define('AUTH_SALT',        'H>OVHLbYmIYq]cr5nc=5-D~oS?G-Kyuh>cC}/&sk7kvdc7@mp 7srhhojp@%1wX8');
define('SECURE_AUTH_SALT', 'Z6,;zE?gXeIR)w:[PCzjGBKM%W&fgS[{J;0Z2L:YG YQk!x?>/#NVB%M1h691&+V');
define('LOGGED_IN_SALT',   '+yW>-M9kyBTs5S(m1sv>+=t(^:P%Vqyo1gU|zzfG zh[T2UPB FoSjT!oOHSZ,8n');
define('NONCE_SALT',       'vzn(R8gO@7VD!7:UGf7o6`;>SV2#.!|Qj VHaOnCZq(=M[[ @j4;rNrMR$aO$+Lv');

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
