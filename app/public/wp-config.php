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
define( 'AUTH_KEY',          '!#( 0CvufjJy_R%`oBCpRa(:|[=!OCwIwkq7Svd{w t8F4,`G/`)nM5e>*<&MVGV' );
define( 'SECURE_AUTH_KEY',   'B.h;293VqIQ~kYx$|xV|1%>V[F6_!uCB$v/w8WIMdKZCB-hu&}Q4kd;iLE7Ea2nr' );
define( 'LOGGED_IN_KEY',     'C12}Y-cb3}S1odRr^,.$Q)rW$m`eu92!:2hZW^4n|h2.#XK,K;GW=cl7JNW5GjoP' );
define( 'NONCE_KEY',         '71T$qA0~/hbk!!V9=#.ZK|;REN?[1,kf[nvt22:v$UO=]bL-5#(c#>%O@RfnDs{c' );
define( 'AUTH_SALT',         'Tx.$X<nu_w?j.#Bs>w~OxJndc,#I?!FL[>>.F}Mdg?LG#+X`6SP8Ku3T$/LmY3mK' );
define( 'SECURE_AUTH_SALT',  '4rb!|O$Sz!5E#P+w`X3>>fPX*iqfql[A2EpL[>bLlo_{a(+M^ck6o(z-8B!nFya]' );
define( 'LOGGED_IN_SALT',    '2li?UVOXdzpC_u!BAfSL+B`6gH}wgBoOX:<hUB^3BtW GW|U~p8VKJlK$`4^v70R' );
define( 'NONCE_SALT',        'JS)|x/DtoF&H}.PUVIb-!EnVf]5.}tyT=^.uvIzx62X<(5V*m+j0o%D!M&e<)CT|' );
define( 'WP_CACHE_KEY_SALT', '|dH5] w< ^TO[t|wTu8_Sj]5(q%,tzOQ` E%pYIb0u%o]]{30B;D%%;~3 a@0sts' );


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
