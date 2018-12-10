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
define('AUTH_KEY',         '$<@?|*v1Up<<5iyf>M%lA#%33eP!M>K,KWdRTu%+q>6d{iSJR`5RG|RlNEaGS,iM');
define('SECURE_AUTH_KEY',  ';<g/G{H+gg}cr)/B9]!:y%Brcldjkg4oYR{J5d6. )-`D8xojjE=%6^bIp3cDc+x');
define('LOGGED_IN_KEY',    '^]nbIZ82wxpS,PT|mN:~l n)ajo|vT6og=JzQa-[ UWy}u]!wBfeJ]UKX4HhQ2$}');
define('NONCE_KEY',        'niDv95b5GIe3w:{eX.1__eoRymepsPHpyQ^k*V2Z,]zr36Um6A<V%#lk1mkP+ @E');
define('AUTH_SALT',        '4qC`4P*TW(~5VC`~j~DTTA7.LVH.Bv9L0*tz3?n[v`*lfD/AI@c+_-,g>^]TV(`+');
define('SECURE_AUTH_SALT', 'r m}HbVC_}(]}Ie|<Zd(k)4|}Vhvj$pdNTM2+oR>VcV]4b!+yUf)LweBsfrl@b.%');
define('LOGGED_IN_SALT',   'VIP~C_((&4STh4%DKDQGDtl[gF@/qFLnxU`z:FnhE3Gj)^#cpvj=2L0j/9xf}Jf3');
define('NONCE_SALT',       '{5C!.6NiV4S5]4?`/ao/jZM+]%v:KIqhCiR3Ft)D|pyxgfO.6 /K+IohFfZ?+@pz');

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
