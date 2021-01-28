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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'portfolio' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',         'PA},nnnF]h*Qq-Ru0U&}Ve-+*GEiE8?jP>V*15P.!oj}gg2Z*Wo@1kF({^q3x]Ye' );
define( 'SECURE_AUTH_KEY',  'p;n=nv~W2yNjJfMc!4(rkJHGXa.sp6`M$mL&KO&8>Df/#emX0=vU@zagx6@QJ>$*' );
define( 'LOGGED_IN_KEY',    '09hB3&XowSUb,hg_g=Z5nXEmtMrQV@AVb/maADJN]l^,>j{|hk>v 05shr-X%fKm' );
define( 'NONCE_KEY',        'm.`iy9nbOK/#}NEC|@zrq9fI/=/`v]&qX6l ?`jaN<U~m|<HzpR;3sXVA-WB,;<&' );
define( 'AUTH_SALT',        'lUjwIZvsQHkZ~Z2V}~Q:+/$Yv1lHwT$.Z0](.o5&V8H?m_GK*uGS4<SB&kq2Q&g{' );
define( 'SECURE_AUTH_SALT', '{Z+#V:|nwtxMr#n{e%~(+J8)=%x8}s6luA0TAx8-:wB_:KEk{X)U}A9@ `N9@-#6' );
define( 'LOGGED_IN_SALT',   '*m:P=UEi4)T/,Ue0Sc80.~3DZ@~*@/WWC{F^v$!p%_4Bd ^=[(k#R}}w)l+?}2Vh' );
define( 'NONCE_SALT',       '6SojbTsG^Dv)_ uoC02&mL3$t&,;gV(chNo3EH@^@s6%wc%.ueSv TqXeXqEx&or' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_nopressure';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
