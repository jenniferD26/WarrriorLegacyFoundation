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
define('DB_USER', 'wp_admin');

/** MySQL database password */
define('DB_PASSWORD', 'ppython');

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
define('AUTH_KEY',         'D~Vq+)JC_)d/k6,[6!N0t3baxv9a84)9io&OHDN#[=)o,>* NtKHc5~trsK 81}H');
define('SECURE_AUTH_KEY',  'sD{ISF[(d#/IwO.,oym)?IMD=MZf4HQGlvgBVdP@{$36BQvj!c?JInYmWCbtk:D]');
define('LOGGED_IN_KEY',    'lRASZm^#e1qhD$|X!esH!GIsllQz23(Bd+32fssWSkQ,6<}]&bFVVj}<9[QdT5IN');
define('NONCE_KEY',        'S/c2Rz#mBu]}[Cvmxf(xDRmNJo6pFUmcUA:B!uDJ HfEB`8B)y)DPAkwFTsRa%PC');
define('AUTH_SALT',        'DS[Mk5N2O??T{Riid])?tbVA~9,3{_I^y5ffq[R-^QJ#X//&GQdu<@g>7K=uHCh^');
define('SECURE_AUTH_SALT', 'NOe}vifNHAE?M#Ywe:kugH`l1XH^&58V{F[jJd1wO0dGd8G;Romqv,iY6A|W4BG)');
define('LOGGED_IN_SALT',   'dxWo)q11qD6|%t<Mj;evn0X;4)}-*M:F+3:90+hs)T4pLl3X8#JEQ%I$6aE]x3/H');
define('NONCE_SALT',       'Bj.O(zH>-EV0{B)pP[>mQC&pb8$k#5E18$k|tSl@n6X8+F7b3T,)Gw-9B((k1o6U');

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
