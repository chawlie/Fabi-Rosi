<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'fabiandrDBy0kqk');

/** MySQL database username */
define('DB_USER', 'fabiandrDBy0kqk');

/** MySQL database password */
define('DB_PASSWORD', 'g2J8ESB38');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         '$b3UB^n>jQ*PIi3j^mM3UvrBcV|F}sZzJG,B7n>vUBc8,F#_SpleW4VC_8|lSpO5');
define('SECURE_AUTH_KEY',  'VG:hd1!D;P_pD;te2.TDxG1lS#xWH+h5#a+l{yMI$m7<b$n7<bXA]bLmA<bX{yM6X');
define('LOGGED_IN_KEY',    'el<.X^7<nU6<H+i6<mX{yMmXB>cN}@N8s}@R8scQBrc$QBrc0}gN!r~S8sdC:dO_D');
define('NONCE_KEY',        '3^e*mA]qb{+6qX{<rY}N8rY}>YJ@8[nY}>cJ$n>YJ@zN4ZKl8|ZV[-K5W]wZJ[zJ');
define('AUTH_SALT',        'uA<I$n7<nX<y3+i6<mX<y2mX<yXInU>J4oU>zYJ@k8nY{yYI$j7YJ$j73ZK-k8ZK~');
define('SECURE_AUTH_SALT', 'Qc7>YJp[-K5pl9#aKl9]oZ8[ZK~8[dK~oO8}zNoZ}zNJ@k8[K},UFzvJ4kV-5#ZG-');
define('LOGGED_IN_SALT',   '[VJrF4oN!vJ4c0!pa_tL5p2.aLte6#d1#aKtd5#O_xL]PEyA{jT$nEj{$iH+mE;X');
define('NONCE_SALT',       'v>UJ{qEjX{UE$n{UFkZ:VG@o1!VK~G1znB!UJ@o0kY}sG4aKtH1pa_tL5p2_oZ:');

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
define('WP_DEBUG', false);define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
