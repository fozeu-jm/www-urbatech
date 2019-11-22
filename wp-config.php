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
define( 'DB_NAME', 'urbatech' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '.#|V3HEU:TOznH2z3;I=dxl b)acjRP~ss+7D|6c7iUvlvc=H)ktnEE6`r|M;-c-' );
define( 'SECURE_AUTH_KEY',  'sFkWpNX?1 WabsUjB&*8?tT>-#OzTM1D~,K6kcN!{Z.Y.y[%Z`Xxw9H=&d=nhgm>' );
define( 'LOGGED_IN_KEY',    '-5kbN`R#^Ia_t&$2,*6]ZxHBW./T{&[^*~2D1_6]Q-xF:4iJ+Mzrsv5rIb@if}8~' );
define( 'NONCE_KEY',        '}opEcf&Hwz)h>q,RrVQVIP9*^QPYkp_H2I[=MqP<a xPLwljvYI>E<4qhh91_%+M' );
define( 'AUTH_SALT',        '22JIRgKf:t[9%P&0E%B|Cyh-(G^,I`/(#N6Yu5J%3N1U.5V#/{/s%/}9*sv8TdQY' );
define( 'SECURE_AUTH_SALT', '[S[sGo=)=1nm4mX( w{H?-3IT*.`IS9F]akk=yyVbBkt8siQt}JqBB!ljSpl8Kh?' );
define( 'LOGGED_IN_SALT',   'RKU|YEN-}&sse.>SOO]Pi<Af&LYT7O_.F3`7D%Bf,uKP!VJ:!%vxM8{u!x&@(R!=' );
define( 'NONCE_SALT',       '-M2$M1@1yc`31!X-n]0])m)QvL(1bDsd{1BaW8mjwgq9>-*VUbc[Ck^HJraY.iaf' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
