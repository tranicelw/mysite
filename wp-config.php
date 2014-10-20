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
define('WP_SITEURL', 'http://' . $_SERVER['SERVER_NAME'] . '/wordpress');
define('WP_HOME',    'http://' . $_SERVER['SERVER_NAME']);
define('WP_CONTENT_DIR', $_SERVER['DOCUMENT_ROOT'] . '/wp-content');
define('WP_CONTENT_URL', 'http://' . $_SERVER['SERVER_NAME'] . '/wp-content');

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'database_name_here');

/** MySQL database username */
define('DB_USER', 'twiley');

/** MySQL database password */
define('DB_PASSWORD', 'TZJpj2wcJJ2RCmvR'); /*TZJpj2wcJJ2RCmvR */

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
define('AUTH_KEY',         '$?@a-?89pC4Q7S:b- 0RBMs~_EHrK.70)-++4Imr^JAF= Y,NK)EX<)O_Y43Aa6|');
define('SECURE_AUTH_KEY',  '|Q=a$y@g~POCQX,,#y)x||*stLiAfA-CAh*53w[^1R!=#2`DTPvyxWDF[]:vzU`I');
define('LOGGED_IN_KEY',    'G9=2)Z,[]_x9?{zSmN72J+cUtZhPgVhv eyP.h3ur)?GPRjx @Yu5]#GFSjBb=mi');
define('NONCE_KEY',        ' !u)FYdY}d;F;U~! LxnHE^mZ<iEFyPh$Ho:q{NN[sIU`X=l>+7;O`V?odyf7R|k');
define('AUTH_SALT',        '(I4^=EGe)[s3?+.KSXm+#e{:%jK~F}>M@@a|PX>C<~HrfNT:yd,fST<DcaoL@q(X');
define('SECURE_AUTH_SALT', 'y*cn)Mk+|>/#<6GW}c<|VWO`rv.]#[T!h! jZUaSao`^,>Ci%`KbuY/_On*k8d5>');
define('LOGGED_IN_SALT',   'na#hIYe8e7]eQu4ke|lAdzZ)roP-hFEW/@,WfSo^bqv-+8k694iUC3.zSIci?2F+');
define('NONCE_SALT',       ';#CZfLyt5)i;F}UvYWh$Ea>`[iFfxzzS]Y>M&yzQ>zRL%j<Wsq_5ejWnp=aeOQ~P');

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
