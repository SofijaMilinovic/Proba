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
define( 'DB_NAME', 'woocommerceprodavnica' );

/** MySQL database username */
define( 'DB_USER', 'admin5' );

/** MySQL database password */
define( 'DB_PASSWORD', 'admin5' );

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
define( 'AUTH_KEY',         'Z^ p[WK {%xnv5a]@JirBM^5F,4pwSpd9a%T9nY6T8%HLV!:8TO955%rjnkpa=]?' );
define( 'SECURE_AUTH_KEY',  'PB{T9ng$0p4+_7+X0{Z+T+mTJA*7nP{`Xx *2sqLm)F>#.;oo?m3T%9:QwzPW}DA' );
define( 'LOGGED_IN_KEY',    'm]/c6bFhliW:dik.~X`!Y53Y/%F4jG,uIW@x$8Mn !NN~75,LWn>YNhgXapw_{g@' );
define( 'NONCE_KEY',        'HaZlJZESf4x,]Ttb<662r-N3|f..t,ovQ=4zl9`?_W35%zx]r-#!c4~Kg^*_1[cr' );
define( 'AUTH_SALT',        'Dt,F*Qarv/mh;(fQH+@?l?PwiKOn2.;m%{3bc[$UaIA#x6Ml?rhZ*hScF2kJV!->' );
define( 'SECURE_AUTH_SALT', '|PkXr`AoQ~7g^eW*b@x72:N>1J[ffDK!gPyrPNyrRs=9.&i*8_ha5C1_c@vnMHF`' );
define( 'LOGGED_IN_SALT',   '~<i[,Ju5{HDV-].&9J6{$;MH}_4C8{0T3G,#HV0(5`,j`q4(1c,.=$e! &J8/}=D' );
define( 'NONCE_SALT',       ')Rl@Eh#Hxvpm=~N_af9*5DdMjEjz0>]?`)zbM~C4N|pZxMzJrjlig*^za!wL8Z+B' );

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
