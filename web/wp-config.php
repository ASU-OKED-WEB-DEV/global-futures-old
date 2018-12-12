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
define('DB_PASSWORD', 'wordpress');

/** MySQL hostname */
define('DB_HOST', 'database');

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
define('AUTH_KEY',         ',&>@hIog!eGGq6}/ABck2sRmqAJt>E(|G;CLfM?dxW1qeb`k!4[oXduus=}f/0Lj');
define('SECURE_AUTH_KEY',  'XH?@z.>dlM^N}d~V2#6dKhwE8/!#HP9N3`{y~$.6x,AX{tXJMaX!@mkLY`Y7`!17');
define('LOGGED_IN_KEY',    'Msfo$^ZFnRmfpu*({qOi||9kl+y~eA9.I7plb6m=6uf<9?J.j1qCp*p!=}Y()@FJ');
define('NONCE_KEY',        'T`Q1i1,zHfOT?)}ynHrbifw@q:FtrXYB0MDd@^IpGQjTNF/%UA;AMTP;wOub#LZ>');
define('AUTH_SALT',        'R_WthI~!G8}@WU$mKsrm}9*?&dOS{AHh6Q_LifvZd!qjj4gL38tB;v4hovviQIv)');
define('SECURE_AUTH_SALT', 'zMD4u@Z;H~S.T$Sq_D7&n!BuRHVwi#tM>?aP+{B9%_#|!|Ru_6.Tn.RXg_-+m6%[');
define('LOGGED_IN_SALT',   'B^(6@9Ok/Hjp]n-KFnVtO(U@2--mZ]wb>Dvo}Q( s+j{9d!%JVHb^hQ@k7y!,8BL');
define('NONCE_SALT',       '1v[;nmIutE*rm5t$MT6hl2/3_(<pf:4T.=fH+qo5X<iK:qm$e6OfS*76tG{G-H;Z');

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
