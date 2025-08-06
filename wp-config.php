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
define( 'DB_NAME', 'shabbir_porfolio' );

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
define( 'AUTH_KEY',         'H&&sa q;L(en%h{@Dt+f)x0mGHRT,f6!V#WlX2p#qAVF%o9dD}&iAL8GQodo{JYT' );
define( 'SECURE_AUTH_KEY',  'X~{W)y1H/pCt)Aujj4DJe.XhtKe?VPl}<~)-LO{/>NOt/8}1Xe^3RkZNTN;VD{=6' );
define( 'LOGGED_IN_KEY',    ')/?`53vQeaT+}sI@X17N!5UB/T_;.2!oB=r4#:t5.+x[cLb,tjV#[>JFz:Z~nInH' );
define( 'NONCE_KEY',        '7[jN,`r:/4$!H(Jf=Siw+:/)sfgs|},C0q@*+H.0iSFF7#f.?E1%g_EERj/wt}P4' );
define( 'AUTH_SALT',        '`(}xq&07l)VOZ7~gj+l9pM7xsBXBmY?CHjX0m@Vdy>yiNM=R@-I5#P+ds@E]yUW&' );
define( 'SECURE_AUTH_SALT', 'ixwA,2N2:$L`s?b5KL*bpoGA&#w~4Taxpk7L];XsSe*A%Fbj&~Aa@]k(Nq;uOC14' );
define( 'LOGGED_IN_SALT',   'LEL5BJ6W`*OA7Nb;p/xPRxJ=~9RDZSry,H*d$54Z&O?A?8iC$#8aNM$TRtZd_im6' );
define( 'NONCE_SALT',       'c6 gS3wb]479vl0gY7M:uj@n5,Ga?G>`caz+j2!6(m:#L~Hl}ma2yiF[)aK- nA8' );

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
