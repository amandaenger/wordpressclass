<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'amanda2_wordpress');


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
define('AUTH_KEY',         'VqPN>`k.Ev#DF);4|Jj=6Jp@PHWye-8}VD?,0>NR|,z4j.{x}-,tiqHWd.--,kpe');

define('SECURE_AUTH_KEY',  '|ZXON3RMDq>Nn,-mtJ #7GA(PUWiAdk$S4(-%dinWx63j&eUJ`:2CKcPy[VN-)*3');

define('LOGGED_IN_KEY',    'Bnn#J+v3~KDhX>,O3h~u-68|i!Z@+so@VW`3,2g;lP):~Qt7hE{he[E,MR;|y^-0');

define('NONCE_KEY',        '7I;0~(m_|VKQ4n+Pb7k$HBx<eue#;4S6?,TA5Fha~o|y_z:zc./-G;d1J=VW+r#/');

define('AUTH_SALT',        'm*Q-5By+:L`(/>Y0qQ_(g5Q[Z7>2yR!{t.I:|~!8WUR[j]0|ILbR,U!D66Q`P;1T');

define('SECURE_AUTH_SALT', 'v~J*)?Pj=@91A,!RDg^~haUNvxxVN[R_C|#zZ[G+!Xr=PnMvSTQ6mf.vr)/.3kSD');

define('LOGGED_IN_SALT',   'hv~;x^W`hl+#)k_La@5?nx03^6yO>>pkdDK$2Ry{U^j{X#uzJ&tEDV=06-s6^2*W');

define('NONCE_SALT',       'hm_ew$l^F|cU*6A@ QcLT2qTTo%nDL,h:F*j{{c_}v2WHlp.%~R:g~NYxV/jSeT^');


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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
