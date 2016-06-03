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
define('DB_NAME', 'haikudb');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '3|]$rDt5I(L9i)W;|o2*/QwwBD?<oiz08>UW/L[<1el1nkTa[>pu}*M3(:^T{(-Z');
define('SECURE_AUTH_KEY',  'FXc 5~ ]nlKm8sKY9hr 6X:rRH;::sI@HgQ(-(fFT#o)K0_nhVL`$t0k3jFAqpYe');
define('LOGGED_IN_KEY',    '{^4RwO~`x}a1IVx?HC}=@/M/5;b`7,!D68~kGODY+Jo 8n2w~B5vTs_9su4+m]rJ');
define('NONCE_KEY',        's`,^O ` f([OUn@%[nS( S($}ZF=C)hiXZd#$(YY,Vl,G2[Ep)YCn!$7K+LpwmXw');
define('AUTH_SALT',        'RZCBZgQE{S5KcG;[QuGO>mSBrHAL#ffK/gNqN.-G6;,2/cvs*}}^%%%o_T#m^ljU');
define('SECURE_AUTH_SALT', '(Jf%pAT0%2c>d?&UQ7n74+:N?_|k4i<afV|tuco&@#I(mo6b?ZFNB/M]2PEru8-m');
define('LOGGED_IN_SALT',   'o~m-s=&*U~mizT^N9T[(vT}ATIA^^A)6nr1$X*{!b40!@~>HL1$7fTETI(W.Pd1t');
define('NONCE_SALT',       's)C2v):PDKM X:tI5VZOC,kjYkpL=83E/TH)Y<IQ9/q9f^5G!D!r;6Y;}i)I]r1L');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
