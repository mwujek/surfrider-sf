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
define('DB_NAME', 'surfrider_sf');

/** MySQL database username */
define('DB_USER', 'mwujek');

/** MySQL database password */
define('DB_PASSWORD', '10293847566Matt');

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
define('AUTH_KEY',         '=8vs0f`yI6XnA$iO1tX@Cg~GPo=r+H6he`au>::#H!V_Z0QBHY_K!gTAk?v3c0*i');
define('SECURE_AUTH_KEY',  '[6 K _2AWVH%V,cu!&1}`9gvh0?YtixzM[1o:%<tGv[6TATpJ)}:Ovtv7Mm?(By2');
define('LOGGED_IN_KEY',    '2eGkm-X4D;&o`MEY%/%(r|#]t[pJ{Pl*Q?$pmNT(5pc8f,`A(#%%ISuOiU6=G#dk');
define('NONCE_KEY',        'gG!.L 6.[{?;K&2^|ZYf0#1jCGldTRxXYZF!:y/B%o9I*DT_FoQ(UmH/HGA)DcB0');
define('AUTH_SALT',        '9rDTymdb!mDe{C1wGidv)D8cekW~8S3uX.x!)`! ~1071Df}ipep WRYy@NX6e[t');
define('SECURE_AUTH_SALT', 'og4IenPg !kb<7hO^Z2R^><=iL4f>o(k8ljx^%lC[PrIP2x*[B:szC}A9PeWbT3a');
define('LOGGED_IN_SALT',   '}V9I5hD}HrwKjh)_]=UC(`q`m: <Y< #qBaPY^L4]/_y`=z3/Y=C93FOHOVXIG>u');
define('NONCE_SALT',       'JcqK IH,0*Rb4G5P>GLaN:K>N-h1T;ea:Edi#fk|im.D&i,8BgC=*4 ^{=|i3Q-j');

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
