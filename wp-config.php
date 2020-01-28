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
define('DB_NAME', 'happylandd');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');
define('WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST']);
define('WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST']);

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
define('AUTH_KEY',         'gEyiRShtpMUnez9Dhz2tX5aDBNxUOG3DCZ3OGfuNwk2JcCu4U9DYzkXxhoUJjI1T');
define('SECURE_AUTH_KEY',  'oCHkJAAwKpcXfsu3lelsBs3ehsBO0XM9UxppdbNSL47RS673F5utKAPXPCRKX1EI');
define('LOGGED_IN_KEY',    'lBOWdpQiM78XF3sHHtldnBnHYiZeL2wjJayVouVeZE5y3ZtjNUs9sFygTg72tYYM');
define('NONCE_KEY',        'o6WLTaCIXLdKng7dpV25AmtJ0xHoKGgEMfjZKBEWejBYtbsVKjmdTQlDHdcG47sI');
define('AUTH_SALT',        'vdKIme6yfK7JDVeZ2cMG6RKtG4ZJCKkrFju5TBLTtGawITcNzozf0JwIZ2wU2FHV');
define('SECURE_AUTH_SALT', 'Lvg3PwMqO1XGKHwTTvk9kKYu3faWMQKQCNFK1hQsJQkW4rkg6J1EYr9zwZX6pRTg');
define('LOGGED_IN_SALT',   'ZXrhTaC7jBp46eAaiojdpKBEdjAAtIux0NETK3ITZDYMYdzBFeOATN44NwMt7kHY');
define('NONCE_SALT',       'mJZOzoPC3QrNvEzVwVvM6fAf5U7xYpU9lKr84ynOfSITz4kqZ8cpsAJY4M42yG3c');

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

/** Disable post revisions */
//define('AUTOSAVE_INTERVAL', 300 ); // seconds
//define('WP_POST_REVISIONS', false );
