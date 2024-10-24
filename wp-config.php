<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpressProf' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ']c~~)[Qhw?6Cdth<;Yfx)F}O^zx}>yKEl=kMRaKt<a<&vuUBH6Baws]Am:-fke%f' );
define( 'SECURE_AUTH_KEY',  'iyCKob!{i}<$lyWsJE<*;^CSa3DH0X(7A7ZaiPe.@D8Bcxw>/}@p?TD}He]?5I|d' );
define( 'LOGGED_IN_KEY',    '#PrRS#wROMH.o9Tfpja6GzCYwD[0cs3dcr&TfRd#%s q :>I}{p&BX;l4DpKiDbJ' );
define( 'NONCE_KEY',        'j@qlp(5: cEIYyh`S7&K!3)x0-es32;p]bMF{,gS0C:ZdLDob#J[VA.A67fVS#X;' );
define( 'AUTH_SALT',        '/z{cY*VSX> vOw;3T>}y{oeA&<y7VD5;C$[8^baP]Go(+!B*Gl{;{JwHi_Md9EYh' );
define( 'SECURE_AUTH_SALT', '.7J;.@}#M;}#HM0!M);^ HVeicuHPzFcgWg&@0Hag;CA&(KwN}~p6;$St/8+3-sU' );
define( 'LOGGED_IN_SALT',   'UQsal@=k=U;a20xYIa;<yW/uwlbucnq[K#5.s}[s>TY75QJh-%7=!9]BFq&u@a%[' );
define( 'NONCE_SALT',       'nY?E?%s2b/%6VHQ1]^aq!ROoYlQI7`G#xjS/YmB@M:gQ)DDBRL$w.9<?AEsnFm^2' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
