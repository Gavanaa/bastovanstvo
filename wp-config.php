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
define( 'DB_NAME', 'bastovanstvo' );

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
define( 'AUTH_KEY',         'V3*NT*Cg.F L_uh [42S}[`[QODlu:joH3Q58.GD(M:wOv6=UcyNo:DT4Wzb=8KO' );
define( 'SECURE_AUTH_KEY',  '.oI!Ge`Nkc.BcnN57afs>-.=`4.Y$7:o ;B6>J^k$(z=Ww=xdV3`N.J}9ax-?c_w' );
define( 'LOGGED_IN_KEY',    '5UjLeaG]!tna^ypP}8HqD9_%kxxaLfWCbFXMnTYMHMZk) ql31b=UNPhwuRK5|t+' );
define( 'NONCE_KEY',        '<J;%7_E1YjyK;XxJPH2/flYl~ ? Vg2q1^lrZ,y^K*KP`FbpEG6lol0P!2%O1L=a' );
define( 'AUTH_SALT',        '<YKVo.:g#:GQj8lviWMbhr,-fya5*$ m5o=z(|w?*28/Z!f5UNq42bt:3vd 1lGc' );
define( 'SECURE_AUTH_SALT', 'COqQ|*[T_wWVnT^F?O6brQ%ex86,Hkgu.SpO>Sr&Y0Zg+W~kf]&rc3$CM7=PYt53' );
define( 'LOGGED_IN_SALT',   'i`w&HOVtbJ?afE(KWTyLfqD~jE{^XJuAR=mL1:fL2wpHxkUS(X%mC1`rb`XH<Gpv' );
define( 'NONCE_SALT',       ',jpP0f16DCZ~-o!,?[:6L0LurKGM!5a/>0#xO!*Cz+ff]: =a$IJ5 qjhMYiR6O&' );

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
