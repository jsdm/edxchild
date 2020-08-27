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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '+SwfnQ8mkVHUBJESxuPWJCKvuL130py2T9BG5V+a75ajI1c+kw86acv8/lSKsBd63YdpsJLwGaK4hnm8JPdN0w==');
define('SECURE_AUTH_KEY',  'Xvc3R/Zk9TbEykmihU43Ke15zYLtv2HMqxBYChf1lMVGxUuaF3IQoqTLNM4SQ5YG9HlZ/bluQsmRizACLVybGg==');
define('LOGGED_IN_KEY',    'hd8ckRrW4kuyIkj7MUtIejIWOqMPCx4sYS36mx88aw1NI27PPzHu9DpIKGl6C1gNPKigAkws+m2CqIMCSgSEWw==');
define('NONCE_KEY',        'OZIz8VddnJ7DttehChM7LL62TSRxi556e9WsoOoWUS5jOkdgu8GW/MJzB+PigkvoBV5A3xQoKuBPkQOS3Z3Vtw==');
define('AUTH_SALT',        'ofD09jrxKb/k7AGGJkS1S9NcO41ES84MH81uh80TQPaZ/kGCX4xNFCgTIsxjoA+9gd25YWiKo+56pp2eyOyxmg==');
define('SECURE_AUTH_SALT', 'oTAEhsBi++NekbkrZUUNABdfB3MLkwC3oN0Dr6oTJTiQvGkw2bKWC96tryRVG59MHSjef6agjdJa8UHQNVmcCg==');
define('LOGGED_IN_SALT',   'v20DazR/pgC93AcmZUekQaMnyiZMuOiT7EMRAGVd8KlHws3KDSbgsmW3nIbBW0JxM0f5N4kxZSelOBEGJB5HyA==');
define('NONCE_SALT',       'E9nvBbmdJHMXBxMewNlQzewrOjZoO+S4dWBh8Mu9d/dWlmz7Is7XKV6+jY8m0C7d2XcwUxibYIYEbDZ8Uykp3Q==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

define( 'WP_DEBUG', true );
define( 'WP_DEBUG_LOG', true );
define( 'WP_DEBUG_DISPLAY', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
