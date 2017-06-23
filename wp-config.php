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
define('DB_NAME', 'cr2systems-wp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'VyAKYhv&Y9hb.7(+yQ[jQe,gZ]{rvE[q+D J2yxd_ginC}&G~lV-up/TV+T$pFX|');
define('SECURE_AUTH_KEY',  'Zn|sk!<)@78@FM.BN;HK/`_5_$+lGB;(8:& i./X&D/OG`wS<i`Nz%~p2Dd%=}d8');
define('LOGGED_IN_KEY',    '/_4U<<sp 1nx^C;8ahG@lyh|_]H_RIrdCyp6U.&_8MNG5lXgc(S6xLlEFPA6Bbs2');
define('NONCE_KEY',        'qOo[tHUD(1EVyBV@ m-LT~+c+R=8`YG;Q<v?Idl/2!1EM/:T_hpo&HZy6{Z+_NSJ');
define('AUTH_SALT',        'j74Vg&O4DI=a5L:(BLPGDUG|f?C$>oD!hI-riR]dx29M0C]Wp0-%A-:qW&ICi+Vt');
define('SECURE_AUTH_SALT', 'g2A_)nVV4&59Zc3JQ]:!]DU<Nb1QiMlLb2dy;Ua#w zB!P,^;*)x6;RR)NG`a>_-');
define('LOGGED_IN_SALT',   'HVUfXe6/#Piw_c*I3pEzVm`xAonY!Gr|BosUDNCanw&#TWjEj0=`:t&7vEt)L)UG');
define('NONCE_SALT',       '3x{L,v-Q$VGI0S;2ET>r+&]yd&&:^ Do94)ur*a=Fsqg WttGE_IwlZ|VX4l~,8f');

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
