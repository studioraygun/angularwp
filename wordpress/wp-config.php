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
define('DB_NAME', 'site');

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
define('AUTH_KEY',         '[wh?tESgc_0mA<:wf? G2a}1l9&G,DY4Lmd~jLm!nrh{X_w-L=rziVCmr|byK<xx');
define('SECURE_AUTH_KEY',  '(|@zMF=AQ1i+oR)wXCb`(hFqz6|w]d&[kk*-tZL|mLe`,Rbj;rHgi6d siP;#3T~');
define('LOGGED_IN_KEY',    '+2a j--f#{WuqHI[;6K3F8h4nk7IN3/2agG#aO1;Qu4L]{b>yI6rp:9K={pl>>|u');
define('NONCE_KEY',        'QRb&wDM(Cz<uN)e.53OZeI3r.;t|2uI`U%b?B^&OI1Z]!j*K,,@};53gl{|k|(md');
define('AUTH_SALT',        'l|KS$;{^*mG;+:-M-_$eU|6O@e?8$Ar?^ oAR)@b6[n|O-R~o<.x0P%2O*%Q?Bd`');
define('SECURE_AUTH_SALT', 'S[d2DQ1WU|]u*S%F(XN]A5$K|RsDW62J ydmE:<u$p%OW#`PW+n,eAt?D0d+KDG^');
define('LOGGED_IN_SALT',   ')6!L8,$BiK}<+^+Og-~8e4-5?a@Hr$+;tuwiP49euzLt_|}oC?S>FS]X,ZK,+;Ag');
define('NONCE_SALT',       'JFJx+3OnGmG>|vG4#Nmwsn-H->R;~h7 WHRywv^!R?|-;`ALgB |1T1dr=`]:o/+');

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
