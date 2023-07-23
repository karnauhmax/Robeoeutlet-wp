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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'robeoutlet' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '6A:W3Xm%q3Ed!c;5(UQ0Q{.$x-a)LgO;$k<^sgMn%y;fNruO*]^cwnHZ_xt6ib&Z' );
define( 'SECURE_AUTH_KEY',  'It3>_<$Ao~%+;&owZoN9-TS$1+lbo}V0z4f7~7UO>ClbDG|xhns|(gb(>v<imb3&' );
define( 'LOGGED_IN_KEY',    'h2Q>6%jE9B9pU:~T3Cs1P^{a7)9i4d4B0J!po6y=;-&]eb%}99lxNJhc3-MW[u$r' );
define( 'NONCE_KEY',        '_$$E$umcq{_VII[!VI aByOknw[;K2HhDU3fU.g.m$(cMKwh+g q8tQ7Z~0~Pw.2' );
define( 'AUTH_SALT',        '{^w{dY:-{ L;W0|-}c}Zk4X%nL~B;7*)BP|%oztAsz7H`U) <IBgrf.CV[ubUv3,' );
define( 'SECURE_AUTH_SALT', '0SoC.n1[2xf&$GxzVw0.6l5/9VZcC]N%ZcJGfAM$bV/(mhSHw3ehu,srP1817F3Y' );
define( 'LOGGED_IN_SALT',   'DLoKzCTX)`G_Ia^:Q>3e &)LP?%0rB%QSRMYb-gL|ifSmRdfmsmukaz{!*I5m%xm' );
define( 'NONCE_SALT',       'm7A.;p1=a J+$Nbu&?yi^ur[`AFqZ_.%k/cya%h@Am%waL}Q|SxxU3R9$!Hyy=xx' );

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
