<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'tqiO1Hqr4mhlCDwKaJCDA1NRaUeRredAUBGGxfT/3LRY2RFb5OpmpqUeTq8Ixg3z4xAK8jRP6MRGfq4JP/unuw==');
define('SECURE_AUTH_KEY',  'gPtxB9p3Kg9oQ6ynallNMKfHP8kYzZ9/856xr0GMQvYwZo8mHBGsc6omi/WlEl1XaVUDmDndAIIio46eR98yjw==');
define('LOGGED_IN_KEY',    '+vdEb45uhHDtINCmeLMq9IGTWgE8ihU520AriJD/HzMo9nu9NNX/VM0NcySpfM2CDQ9p90CJGgoXuW6zhZuh2A==');
define('NONCE_KEY',        'uerlz8yPdpdkiqc2PDoghqqIZhv/m5SkDUu8OVFwLtX8rZTvUgr1wBGdmAx780XWFcutTRsJRUUxFsADC5Fu+w==');
define('AUTH_SALT',        'P+FGAN5jP556JcPK/d2RCx5O6il+82pdaTSmKbVJZM+ffYtnlg5bXMZsnN0OE1P6TsQt5sITR9C615KkIkZIXQ==');
define('SECURE_AUTH_SALT', '1g1khlp3ME8e7tTRoXoqL2I3hkABqQ40HqeQxUHAQHtvLrQWb1mIFzKbMZcG9BQDrGLeFDXHRXrILLALna5uBQ==');
define('LOGGED_IN_SALT',   'bXMXB7DaF3b7VLFGrYjTpfFlKG9I7IdcfomlHQsr8d2IZRPBVfTR1aJ9XPVCQg0g1ZXMveM/8qlsL+8tiwEIlQ==');
define('NONCE_SALT',       'hOcJIqoR69WZMCt93YOzm3nWeZVmtHMd9Eh/rRFOwuZVwBTPQeZiSOhV/FvclJADThgM5O94arn2rnUrAycPsA==');


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
