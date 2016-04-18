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
define('DB_NAME', 'kerfoote_kfcon');

/** MySQL database username */
define('DB_USER', 'kerfoote_kfusr');

/** MySQL database password */
define('DB_PASSWORD', 'LJMuZ76t7oxa');

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
define('AUTH_KEY',         'qJ86HKjn+xz-XUCK@YVMP<EOfo<VoZ0e*^*~l.}hf?{JR!=!OD[{_f.ezg0K4/UR');
define('SECURE_AUTH_KEY',  'N84x+<v-xv~vg.4&Z$x( 7{HYP@Dw|FCG>3lUa,A4KPgPtw|MyQ]tD`z1Q.gaP&e');
define('LOGGED_IN_KEY',    'z(4<N6Ub!~JmNY@--h+@TRtbBi6OHEn|}35riQr{rZkV[1RCF/{-cqrxuNVE-h`I');
define('NONCE_KEY',        '(J9Hr5PxHef~DqlI.H=8yhmg>aK|QDYg}|s_iEC$P0d,qF!/4R=zClvWk+`yv7&J');
define('AUTH_SALT',        '>D:(`SCb(s/^`=Q=V3j^XX1bD^@j44niT@<WvU9-~I|nZtNs}MHI~WH_Q!!|f;q]');
define('SECURE_AUTH_SALT', 'X@cik %slR%; o-Qx=vq`iB[T.?rNAsED7XBw.ur<q}y6j=``*Y;(f+D:RLFqzvd');
define('LOGGED_IN_SALT',   ':z*-62j/oXe .jF^vf|a2K<gu|-BC>L*h>NV0GF;nL+P8<1q1-_c+Vo$J?|<RsA+');
define('NONCE_SALT',       ']9Dj$ vf>SgA_O-IkUcC1g-sua@0iJ)v,(fiDw1F{}#7Qxhb|Pe@!{.R!w+nzU{V');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wkp_';

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
