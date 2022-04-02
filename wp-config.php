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
define( 'DB_NAME', 'boilerplatetest' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'tmrvHe4qHgh_f7HiX9nktCup.RJLl)^d(),:hy0VIaYlc$jN%^{kF]_p}3$IC{0%' );
define( 'SECURE_AUTH_KEY',  'jww#p>,EEcJ<}9Eu=Nq+hes8L0,F[DjL{6Atc.8Yb<~X,]zfXzS3OQRf-}@@+hLu' );
define( 'LOGGED_IN_KEY',    'nR_g5NZOBJ .<)/(R?3l;rLQ8hQ/A}inhID, g<j7*T(%F>L+xZ3p Hi@gT%xh|v' );
define( 'NONCE_KEY',        'Of$Ls+XB>ot0U#_l]<m4}hjv/%P>9tKaBFc#[.AlvXS+d_Vv}T{9/&Zcekt&r!B:' );
define( 'AUTH_SALT',        'gw-(!#l7HpmL&/AYs;qKFesk-c@-qv2RhS9xcThl`rW~`SPK*[+~7N_v-HeJcN@f' );
define( 'SECURE_AUTH_SALT', '%Nd^d0lVwBHdlJzd5U+XO(-gUqL,u3{bT9O!4BtmBd)-~)pkw}dD)?3iiuHp-f,s' );
define( 'LOGGED_IN_SALT',   '1kU[5amN1eG-U^]Vz]]Y*|n1~CFr2k&qN,_cnS.t+{2I2sh&X7>4 cbQ--`NMOdV' );
define( 'NONCE_SALT',       'ict^]*ATLM:&XYB7vD?BW%d^PXO;P19z=wN}>~yys#;~,X9U4?c)0mZn!79KCelC' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
