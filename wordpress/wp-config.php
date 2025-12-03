<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'learnwp' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'KG.,UyLk1)l4bb{,~E R$4huLE$~Dx}rOt#^HWk9l8OJO^{$ay7pbRudTvZWxR{t' );
define( 'SECURE_AUTH_KEY',  '`=,|*x|Nws@>#P*w#n/*;`N-55:KzWg3K),E,_>Z;. RizrJ#t8V)b ;U;<V2lyi' );
define( 'LOGGED_IN_KEY',    'Vz;B8XUqTQuu8%6@?nj:)ISuPoJ:]cy(:cZWh77k$n6|q5 Gy |ODeYdP$,4=;Ji' );
define( 'NONCE_KEY',        'qQ*bPX!LHmFhZ|DPvjr]aby[?30syoovS#`lX[@jw6+7=yDN;;W]g%?G0.3)Z5_n' );
define( 'AUTH_SALT',        '!bV_s8sC.6:_-.7p4^c_PH8|`M<_Ze>#oUpg+Zd;cP%4H7xMf`54ht_WM#$N{<fX' );
define( 'SECURE_AUTH_SALT', 'O%nR1%L<5y^wY I|.}7)F:8!ca5)&A]LDon?[]kuh4Q6I2 m$RH.,2Xs!)=uz@A4' );
define( 'LOGGED_IN_SALT',   'MZpuJaW1j{WjgW?|-SMvPL)5MR~NCr!| Fk8wzn,6(*Z$sDaE> iPrsyqL$QQ7Z;' );
define( 'NONCE_SALT',       '&TCZuo^4%crsGk]QBt6Q ?z:I@{WCC]+fe~trTq6!sq{*QaqF#hAFM*+dB}M/s|K' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * visit the documentation.
 *
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
