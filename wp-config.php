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
define( 'DB_NAME', 'em' );

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
define( 'AUTH_KEY',         'KclVEq~oW?yn&7i* cDBHUT$z?9Vv*L7>qfu{P3M6We*HF{-R1yIrAK%D6I,8s*F' );
define( 'SECURE_AUTH_KEY',  '<N>yYdAIg`W3p;&Ar%M9msC?!A=`L~3,$cE RW;D}lSm@n}Cau`fxFkd-G_EP)Uu' );
define( 'LOGGED_IN_KEY',    '&ckzcRHiO8DH;:9N}d~`_wtP0HpZJ(oj;!d{,eZH?36}uP|rvyzP!R@o1,+rT^KT' );
define( 'NONCE_KEY',        'LiX)k0;Oxxy>%ve`kS&H[X@eezONv~hASyYYV:v!?:45Or#sR]`,2*8P%sw6B>!l' );
define( 'AUTH_SALT',        'x&V5glu^sXJiM}/3%&2+4wg`*/QGj ^iDG/>A+G3-X^n0<e.>-.E?&oL6Y>$r&+;' );
define( 'SECURE_AUTH_SALT', 'NpZ(LviaQ#%{_`i[xU4mcZFh^}JSXQJOznq{ozFDbxCC XiJp `@<0acB3:=.WX|' );
define( 'LOGGED_IN_SALT',   'Kal@4V!4%@n3pByZ=uzUdzQNY[hW~`g}g|,UP |~Vz(BL7f^6tEFR Fnm|$[N2)[' );
define( 'NONCE_SALT',       '!!P+#[Q5:x`h@o}k)7B6<u|bo?&rf5+a)=ZW7u^<QYRso[,5`$(T!LOX[(I02[pE' );

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
