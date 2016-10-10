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
define('DB_NAME', 'target_opentext_training');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'Target@1234');

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
define('AUTH_KEY',         'Bl%d X2Y#h/,vhlru3gN^c<WS,@-n~M{-Fd$|8_g>h7ff}o,ybWWCb%@Qs pC~;3');
define('SECURE_AUTH_KEY',  '[];uFE(WKeEjrTEt<}SN} Ie_D&?!y{a<a_}+Z$K~:>LB8wsVXsC+S OcVGwahq]');
define('LOGGED_IN_KEY',    'TwgDDMTwoG7(ScAOA>K0;xS[JtB=t`jzIc2Cu*Ga*A{ l;A#d+M3/0&(9v_Lr?y/');
define('NONCE_KEY',        'F]]#J83L=B_r[<L)#bOdv6Lz24-+iH9I(gFzw@6P+3}9),MD.GK4x3i%3E(jYe/6');
define('AUTH_SALT',        'ohvSdj6<=Xp~D ASz55]Tam%E?/e-y{0X2|5*=65*M]!0?q//TZVEfu8,+ t(EW-');
define('SECURE_AUTH_SALT', '0%$YxvIY3a*Po>V[3TX@Le}-vC1W@R:t1)9s 9O^))r.JfMQ-Zy~kO*IFdE< o]7');
define('LOGGED_IN_SALT',   'UGwg0];gdk:Fe=*0B]F(oc&mg6@e#r+kC{cc9LlvU[tzGIrBD(Y8-f.l5Gr%s5zC');
define('NONCE_SALT',       'BRL_1!^&cSVFy#7VCVb4gT;kukUK}8!5EuU<+Aa-[A*=X2GH:4/K%*+{DKtzg>+k');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'tg_';

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
