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
define('DB_NAME', 'blog');

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
define('AUTH_KEY',         '0oy&S(PZ-0!-/efXcR<M?+S0?S0OBOHFUJSu6eciLw-r$ZQ:H{>1f=fwH_CLKrW<');
define('SECURE_AUTH_KEY',  'p,J&9LV5ggvTD=fwfm!~{c-*(( 6`#lKekUE?WrDSP?wrF/}c0@*nYj3YQTa+x;~');
define('LOGGED_IN_KEY',    'uL}z^/)u6t&TWLTBII7+#yfB+H>oHUOocZ1fd&Wv]x5f!|/Y4FK$_sQ.*u?-n%Hh');
define('NONCE_KEY',        '-)ddMP+Sg8[DRN`b*4C7-fv4#ji#ea^>DJ[NIu7E#Jf$+~I -%Xqy&Q<;=)`s0K.');
define('AUTH_SALT',        ':s^-<Ysc}J)vw/K~{=^fhyMp5+v=$RzSnMc!Zi-qE-JVg43etlt+:32Qt3,r#$Cm');
define('SECURE_AUTH_SALT', 'dO-iWSd8zjW9+z<R<^x6f.[}Rr:`-$6b$B:-{*sBS%h)+b55v[B@QSd{ZM0eZI?#');
define('LOGGED_IN_SALT',   '4``.7Q`M=x$%vg)3@|x#tt-9ls+)T)og(lJ-;J,W^.l,xRTHT}H^j~R>(sRP[*(Y');
define('NONCE_SALT',       '-$>wUimB|-9)?^jFPhT[yXu g642R4Ll+/VB*|0[`(W.c4L7+z_GY9Ruy6+!h:x%');

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
