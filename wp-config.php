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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         'LdQF}Z=BHl=R&8^Vq4Nfu;1M>5J)1RuEh?C|MHTfoZ+K}=.4Yifk`2H6UB0Sy5-~');
define('SECURE_AUTH_KEY',  '_8HOwc-Y<E^.lgAp5##UjH^&:ZDlaH-]q:X[1$kD?CigX51|O8v~T-4+Osw-ESI_');
define('LOGGED_IN_KEY',    'Cu[_3C|h}NZ,sKx|L-&R)&Axw6o<BO{>2Z-|Siy-R|N#?prZg!D:FJ~FfywSG[*N');
define('NONCE_KEY',        'bRX=}RW|o+--?n=)>=ktgUbMag5B)EX@@.X3T0*KPe<Ts8+UhM@(Y%9Wp-JxfN|j');
define('AUTH_SALT',        '(U^Gn034hj:12.uCf Ai:^jS|+rUE+jQ$fb.=iiAuq=J,v_}4-g_)pi+M]RF7%aj');
define('SECURE_AUTH_SALT', '2fc]+fyX^?/S1LiI3BN+Yw]i*&Lp8W `DODUM09-+[i/,S;.ef+.{><C(Kcc.Lrh');
define('LOGGED_IN_SALT',   '!r2qo@SWgKq6YjqG}xB95<<RAjX)$nDtow=NJ~E1]fYA~Xl%8w_Lk)=5RbBD0aT2');
define('NONCE_SALT',       '9|),Gsqz=.%dt#j7UEx|NA(sHb^Q/E?kgb {GQd?K+:r9rUS,59s>3qqin-- Dcv');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
