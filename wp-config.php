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
define('DB_NAME', 'my_website');

/** MySQL database username */
define('DB_USER', 'robert');

/** MySQL database password */
define('DB_PASSWORD', '123');

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
define('AUTH_KEY',         '++Ue*eQ`y}C_a-+P*^D4&%QKQ+w^w*|h*u?3M83BP<@^(+RNm8#,>KzMQ&Elx5|;');
define('SECURE_AUTH_KEY',  'r=M`}*oNC[I-1.b9$Su3+/JEX2v[L8gJSPysE~:=)`q05F$4a<f4!bu2l5jJ+_Ia');
define('LOGGED_IN_KEY',    'qxFW; $W!bnM an$p+PW+?k83|@k+Fd=EHyQ/r^l<_wQ/L3uq-m0Lyee)U*{dXCz');
define('NONCE_KEY',        'RAVx%Te_=M`EPb=lNOwXX#_blfK%qOP@M]$Z2|+~f0dQ)^<s6W:P77k_O`Y*(VB,');
define('AUTH_SALT',        '$5dYuI|]@m`*9d4n?E8q!;zWtr2AyKu=.E-p8O)tWy.YjcrV$)Z?{|!N[@X>%Gmr');
define('SECURE_AUTH_SALT', 'q-h;BmpbfJD[j}cPMQ?{tz>(wM[_WW~h1/![y_*WOsOO{(5C@S+Do.m,Z3f5^DJq');
define('LOGGED_IN_SALT',   '7{Q0F{Z w*D%Ta-|hT!2<OA-35Tdk1s9.UWa@~5mq{]f>d;_Ppem-0:qa:R77BrX');
define('NONCE_SALT',       '.+B`Dbw<:D/NEtuGb^~co>:_)XLoj4?[XvuSt4w[,~P4:+ jwLk_zaTxK+5Pygs-');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'mysite_';

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
