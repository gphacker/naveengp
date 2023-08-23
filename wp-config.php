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


define('AUTH_KEY',         '6MKRhLFKo1faI/LZS2C10j1sww3lFq2HWhmSF55E+W68uXjUGZeHsIA0bpqno3W95hsIFsIDV9f7KYAKIpV3qA==');
define('SECURE_AUTH_KEY',  '3bs/kVmygSCtBACMDoK71l8zlCxnAvnNCgkd/pc9qRBqJdIZifuztN16LIMcWnETWSqaG91Kzf4aVn35hPDdfA==');
define('LOGGED_IN_KEY',    'WTDdkMLNJqRq4EQ5IR8gvqWNp4tlb6Rqv8aF0bgjIL72qlP/BiGofp5fmAxhWsXLeu9iXKKAA0CibAUqgFY+Wg==');
define('NONCE_KEY',        '5ipUp1cL5OpXOAWUKMrlqxOAEb+RuF1dvphno10vUTa1Zdv2qhYiJJl22+UqHKaau+WbmNgeO32mU4W76HnbVA==');
define('AUTH_SALT',        'PCO+qtu8ylLwaKz9kDtUf+8OQl5ITkTrVRMa/MtzpezmdDYCHEY/dFRlOVtds6lvLKS+Nzxh5a7yq1W9UvV2pw==');
define('SECURE_AUTH_SALT', '+TZxgHMFEezEdPYScwTVR1bzX55ZccHpBaVY3PJZSPQoZRbsKDpAhgEadqjx+iMEz9Oyxm9pJWItOFnrh2ihDA==');
define('LOGGED_IN_SALT',   'Ht7CvtQLAE0UBdbhd5GASLmtgwCvvsLEH/yrzrjxUxXxIlRvQEXr5RgwtO0uelbJiNMQQDGo1FLlcewEnwD/lg==');
define('NONCE_SALT',       'FpB2wof90CkbXgGp13pDU1E9jP1nW3RWusfGlOsj8bxmaqmgmnC50oJdA7YGXqWzzmzj6SvAyzIwp3EPD+8yEA==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
