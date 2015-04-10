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
if ( file_exists( dirname( __FILE__ ) . '/local-config.php' ) ) {
    include( dirname( __FILE__ ) . '/local-config.php' );
}
else {
    // ** MySQL settings - You can get this info from your web host ** //
	define('DB_NAME', '915273_rownyc');

	/** MySQL database username */
	define('DB_USER', '915273_rownyc');

	/** MySQL database password */
	define('DB_PASSWORD', '56xIH7CshT09');

	/** MySQL hostname */
	define('DB_HOST', 'mysql51-129.wc1.ord1.stabletransit.com');

	/** Database Charset to use in creating database tables. */
	define('DB_CHARSET', 'utf8');

	/** The Database Collate type. Don't change this if in doubt. */
	define('DB_COLLATE', '');
	
	define('WP_HOME','http://www.rownyc.com.php54-3.ord1-1.websitetestlink.com');
	define('WP_SITEURL','http://www.rownyc.com.php54-3.ord1-1.websitetestlink.com');
}

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'q?7.IEG3YyY]/a+ZuEmKVnKD506E0gR*@Ww-q~`-<NoEX+=%{h=Cxm%PCcfwV0gu');
define('SECURE_AUTH_KEY',  'g@#=P]7Eig2KIZxbLqliUMv/Nf}#mx4}pxR/SZ*@-oL#wn+ll$?3)r) ZX_k8h2:');
define('LOGGED_IN_KEY',    'UXU]04aVRCrt].s:aP,pBb_-T<S5GP=Rmos25O_J.Pl&*r$W-3i}8n/#_91H}p![');
define('NONCE_KEY',        'xmQ(*5~U0TdUEL UT7v/0>uGFdm|6%JuB=B]*I=#}YBI1 ^-L@nVI-K$ltonKCC5');
define('AUTH_SALT',        'TZJ*k4-|v1S_]njiqnv ?YPx=Fgbsvfsa0GlL|;!#C?A-FNQ4AEri14wgn8m,!Py');
define('SECURE_AUTH_SALT', 'hE@P;BBd,<fX_kV1m2ir2r*`oqqP:d|g FSl@&O&B1xN6f=dZ0=y$YK 3{MnMH3[');
define('LOGGED_IN_SALT',   ' JwKHI~H1~H]n#3Kv=u}{X_8$Ouw98*?&{5JL%!G84])r+`/Wy_vQQ2RZ1;e~k@y');
define('NONCE_SALT',       'gfq!B/Fo5}gM-DdZu7BwUU2>TI {232!N/MJ0j8Ta1Bg/pDb,{y#$K7ooLE$!Z)W');


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

define('WP_MEMORY_LIMIT', '256M');
set_time_limit (300); // 300 secs = 5min.