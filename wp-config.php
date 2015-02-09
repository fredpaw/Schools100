<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
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
define('DB_NAME', 'gaozhong23');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '++=.u(|_p4j;3Z-lmOw6dI`* lsa<eac~[9n[+zd4QN0%J/h}~oVcNX%E($bo8vs');
define('SECURE_AUTH_KEY',  'OHdkTCj3n3J_#Ku_),@2i0hM=~5bE4<(-|/DB$,{Ro.1ZMM_T+UMMJf_[,[RPL^L');
define('LOGGED_IN_KEY',    '^L*K0m|ng9E$ss]4R b<YWC[(_mEqi)(n*pi+<}y)TMkzK n(L7S-:&xe7$yoict');
define('NONCE_KEY',        '|?H!7/,(sv,Y|kVF-`-;<SK1cQYRK1}&<#|}6Wf:X Jv-k~?M-[R`?(;bl-Pq?*o');
define('AUTH_SALT',        ';+V(Sh^Ah+M8cS:x:-eZ2I/IhJTg&~M)6QD:KnGYNc!#B>{k3<Tb7[S:NSyL,:5P');
define('SECURE_AUTH_SALT', 'KR^TSridI&q{7X*{$>6FEkHQ!*cb`[cN;^i-~%o?L{xgTPWPP4L##Q2LjoXI|V^W');
define('LOGGED_IN_SALT',   'kg_@c|2#N}<-> M!Be[ *`3e#akW-[mGk%|r.f+LU*iYgEw*[7!p2z9z]qh4*Ik.');
define('NONCE_SALT',       'cdUB|wUg(7C6}?*v~[-,!~eCABb?gS5/zT)>|Tw>$h@Bd%bE#jw~UJt0xHIEY6[_');

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
