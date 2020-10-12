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

if(strstr($_SERVER['SERVER_NAME'], 'rymerpressacademy.local')){
	define( 'DB_NAME', 'local' );
	define( 'DB_USER', 'root' );
	define( 'DB_PASSWORD', 'root' );
	define( 'DB_HOST', 'localhost' );
}else if(strstr($_SERVER['SERVER_NAME'], 'mrrymer.com')){
    define( 'DB_NAME', 'kmmkcamy_wordpressOne' );
	define( 'DB_USER', 'kmmkcamy_helvin' );
	define( 'DB_PASSWORD', 'Dora0411!?!' );
	define( 'DB_HOST', 'localhost' );
} else{
	define( 'DB_NAME', 'wordpressOne' );
	define( 'DB_USER', 'helvin' );
	define( 'DB_PASSWORD', 'dora0411' );
	define( 'DB_HOST', 'localhost' );
}

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
define('AUTH_KEY',         'qc28XSLEIRufTtB24geiE57aC7Pdq8y3g68UTQPK3mR87/D0YUEWXndTnnL9cVMO94YuayjCqW4lmgLQKkGhrw==');
define('SECURE_AUTH_KEY',  'jgYvL3llA5qbkVyLV1qfftgleob+uz0EtiZbF64ic1TgGTKiY12PyCC3KPlhWDL7irS8ydjwgmjjxIMEHsc7qQ==');
define('LOGGED_IN_KEY',    'jiZruTMpF+te4OT4J+gypPMcZBiSLO+zEI1J01JmO0nokpupOlaBv0tZHysU+0hdMTO7GivlT3NWV2h9PATJRg==');
define('NONCE_KEY',        'r1m/YoMjGSQKtqJzrVwXqX2V3whBUi87ajmIpsoz3dEWCE2WeGMKNejgh4HVn4NnLmagrP0AUDb0Yw6o5zHYQg==');
define('AUTH_SALT',        'UbQuGhpJhqOroSC5MhCm4J6afUZPgEGvbDzlgPftx3PwxvS1GGuqlOI6YwgciYj9J1Y2UcjDD7guXy4I0JBbZA==');
define('SECURE_AUTH_SALT', 'yQyiHUX49TnlBw34LxniHjEN/K3J4CEy5D4srndylsijlOSSP02360qCTGvTE2jd3GGLDdCJGEBdl4pV41nrIQ==');
define('LOGGED_IN_SALT',   'hQKcXe2D3mSc20I4Asq0kAvj3AGyZLlgdAyeDANe0uNv6oCLsZfFgyVDJ2BzKGBiiIWFJjqPaJPXV5KZw+q0iQ==');
define('NONCE_SALT',       'tGIOookybyZh8nWqU/8SttWHAYMKLeb6CAjXyOOS8xTiFpV6dGpO+7G0GefxBUPdtLZLWqV3BDVotJ89kdtxog==');

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
