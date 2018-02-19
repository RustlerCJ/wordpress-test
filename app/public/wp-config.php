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

// ** MySQL settings ** //
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
define('AUTH_KEY',         'DMV+fnKqkLluJADMl42rpsQ9pjDaTBGhk9sb7dF8lJBD6KLzVI2RjcGPLbEPo59GzAuBvIxjUlbJ+hcz/Lhlfg==');
define('SECURE_AUTH_KEY',  '4SvlALXY2IcLGx5u54ZrKg7N90OtAK2lR/BZcelJ00oSaTgvzbiXUhEGTeVv+1R2HfcIlJCaBfIta0vUMsBGUg==');
define('LOGGED_IN_KEY',    'UffE2DfxtQttudIWc7CMnD5CT1u2K4ZpIYXSmkxX2Yl5hz08n4qJS70Q/xqMatCWhECGmwnEv13agSoawWaK+w==');
define('NONCE_KEY',        'jybpS0wsU3VRc8YOmfSvYJuO2fM3VUlFQB9uBJyPeEr1vEX7mqi08+WyQg8LiQSt0yPvuk2pRne2zMu3qUETrA==');
define('AUTH_SALT',        'jGlhFK7kzqI/mmjsnTpn7CGa36tquNbyM1fc/WeK94RuaT6ezMG6fibGNA7IyHydIdXiUttJUdW3BNptUuloIw==');
define('SECURE_AUTH_SALT', 'x6/AJBh4M62I8Ql5vh4MYkXYeoqi/BD7n4gLoVlvF4c0xh9g0NpNzIVQPPjX+HRbiOloUkkV6fJRtQJKAFLgyw==');
define('LOGGED_IN_SALT',   'GW9+jyEHfIxrPz/PQOEjc6rHT1lLqLwFVjMrht8By0iqAfd1dQWPvdONnjcB7UPFC7cnljaDG8zXhWJKQQYxAQ==');
define('NONCE_SALT',       'pGUcEmUt3553sTrSnh/Z2YGRikewpa/62bgVEWoW0lFCbnurrg18Qhuq+UW4CzPj1FZ6th5qeyRlmjvjMK7I4w==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';





/* Inserted by Local by Flywheel. See: http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy */
if ( isset( $_SERVER['HTTP_X_FORWARDED_PROTO'] ) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https' ) {
	$_SERVER['HTTPS'] = 'on';
}

/* Inserted by Local by Flywheel. Fixes $is_nginx global for rewrites. */
if ( ! empty( $_SERVER['SERVER_SOFTWARE'] ) && strpos( $_SERVER['SERVER_SOFTWARE'], 'Flywheel/' ) !== false ) {
	$_SERVER['SERVER_SOFTWARE'] = 'nginx/1.10.1';
}
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
