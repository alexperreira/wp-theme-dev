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
define('AUTH_KEY',         'Op1xJcQfuRQnKce6CvMVkcTYNchYMf9leYg064Q28Wm0KyAXXBv4ZTwUu8sXfNxAz66hzNFacPaRI3WwRlQ/Rg==');
define('SECURE_AUTH_KEY',  'ZO/wjwHX82B+9L03XpiPOaWF1r07EOEJ5XWtq+Lk1/JtFfgRJHyZ+DuyZB2b7PZv96CLf5Obptaf+LHmjw1stQ==');
define('LOGGED_IN_KEY',    'o/bDZcuDz8UHOxQoJXSbB7iGpsZ2vw8MfuQftsqGCeqkJZLZ73jLlaD8idqq1qnp/B1C5YRt50k3X24S9nsYiA==');
define('NONCE_KEY',        'RY/ZKmvFs3rEax2v6NBCVOoGXbjT5dkzQ/PoQ+zYILevXLQEk6cXbcdoVprrmB0LxcoX1BfVP52CMaBt2JN7Sg==');
define('AUTH_SALT',        'anSA4xSP6kf+HRF5OvRJygZir6nSxkCjFDyU/VEPoACWv8ZoONnp3NXFnyHb3KDvSHlohYjaMKl4sa2YBkaDbA==');
define('SECURE_AUTH_SALT', 'pNSpv4bywDDL72+qtFmASfRa2oQ8O7JIYUa3m0N5/JTGiCJ0gWHMJWR7lN/6tYUAN0A1RFhirgfLRR5hrLXOew==');
define('LOGGED_IN_SALT',   '4qnTQUY8tjUbErOctVP2fgJ1X0XB1RLSXtolE94B7umpIRHdp03nijmVTQJcTE8NAzYhvvMxtmPLYKydP+QBIA==');
define('NONCE_SALT',       'k6xScdtr8CWaBuMVGV5tFRKhxTnBDlWyV6Ks3HV4VzCV99Avx3RibqGVNMyTvQzYRGE4PYsbPWzZLBEZf2IWfA==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
