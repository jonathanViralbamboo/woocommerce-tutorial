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
define('DB_NAME', 'woocomm-tut');

/** MySQL database username */
define('DB_USER', 'woocomm-tut-user');

/** MySQL database password */
define('DB_PASSWORD', 'woocomm-tut-password');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '9ms_FkcZ88HHMf)]#&_$1c>TctL8m h/d.6;&VQEwxL,@>^2CBbg^XGkv-Pm1q0=');
define('SECURE_AUTH_KEY',  '(G8OqU34;t<!E2zjW-*ry.(JZIs|incZ_8:I#`qcwEj${Ncdju mt$S8g:Ywy#C%');
define('LOGGED_IN_KEY',    'xx9M@epZ{~`tf<g9lDy|C>V@{e2(B]W-cl+MKsLSGAq-iG7f]CFbKh^O}HaS^`Et');
define('NONCE_KEY',        '^i6$}9sP55&cU!0VPi[6wCH]VbVWC^SapLm8CiUzR1Og=%NvB3p-?C]vDladce(l');
define('AUTH_SALT',        '78;5S(m/6v*c}c#Xa-xHhcid%GjoCF(I*y,gp!V)4ZbZ9UH%W+nRI1bb1+CH%lY&');
define('SECURE_AUTH_SALT', '64jYM2)J.X,Bu}$MZHyVm;h13/2X{L~Kr`g(w-7`i4a:cmUzb4$tibr]7_C}q%Au');
define('LOGGED_IN_SALT',   '3nYufjSN2t67K;CCn|zRB)f6$h@7]{CO_^h)`.sk%W0/16`r#^TJ95@NhM,$|%GW');
define('NONCE_SALT',       'B`n:uZ ~:cwZlH6_eOr)z#Sa6v6~!qc-W#fJ7:u@u[}J.n>+kV-&If&-)U?%Pl?r');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
