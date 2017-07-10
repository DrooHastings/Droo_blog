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
define('DB_NAME', 'startwordpress');

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
 define('AUTH_KEY',         '8t!&KyS6wP;G-;Jp=*xQvCsjYSRNe5.+A:|ug2oO:(Whl+od6hv-fZQFf&G9rSV~');
 define('SECURE_AUTH_KEY',  '%5d+!ScfX**F%S7R%|V]ZJh,oVbjPpnvP~%w}TDSnf+ykPFW`ox<&t+dr!s[m44-');
 define('LOGGED_IN_KEY',    '!uU7~bb?tfA`?C9}qL|sN;-3n,XdAyk6St|-69-7Y6N?b]r+$|fLp>N4eaW-%1PZ');
 define('NONCE_KEY',        '8f[x8zO7QY(NVh7{k7bQ  ;|v`}uqZkB)J)03)zp|s=A;&>0=IvtTV@n/UCZvEce');
 define('AUTH_SALT',        'Ox3ICe+:(B^zYzx_oi|;HU 3(X[dKY>&q-cs}JY=~PP[t$XsJm=yzPj@NG+2_y2v');
 define('SECURE_AUTH_SALT', '_1FD!`Miyq!>cH9>HB,HBm<y`o-J`#>% k-~^s+TY/F 9Sx8qN_8Rn|xy)bf{VA(');
 define('LOGGED_IN_SALT',   ']qVf-T#UHtri+-O`),Y.MU(cynE=8u6**i7Xf,(&b(9>c^Gx~jHzA<ByE*sI1{8i');
 define('NONCE_SALT',       'LOU;5Sn&24ZVA[5!q9[El3n6[UXU-_Jj]a- }GVqZoVUI*2B8|~r@k6A$q<i&i&I');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'eamd981_';

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
