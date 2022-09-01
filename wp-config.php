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
// Used to automatically load the vendor when creating new classes
require_once dirname(__FILE__) . 'vendor/autoload.php';

// Instantiate the class
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

// Not needed but can be used to be extra sure of requiring the env file
$dotenv->required(['DB_HOST', 'DB_NAME', 'DB_USER', 'DB_PASSWORD']);

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', $_ENV["DB_NAME"]);

/** Database username */
define( 'DB_USER', $_ENV["DB_USER"]);

/** Database password */
define( 'DB_PASSWORD', $_ENV["DB_PASSWORD"]);

/** Database hostname */
define( 'DB_HOST', $_ENV["DB_HOST"]);

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
define( 'AUTH_KEY',         '8J^KPzSAm8}*F`2Ve*7^RV`Zyau/>>I.KJ+[4Me9P}E]2d4a@+<O%#IClL|qC?`m' );
define( 'SECURE_AUTH_KEY',  'hv3}1sA3QphdK{%DP.nf]98(Em[dxu<PG$|YtO<dvs/]]=I~QFy7C;Wb5{C-|z5,' );
define( 'LOGGED_IN_KEY',    'uo&IIR_* c8GKnn~j )Kx/B9$^F`.?Ya<<|sTSc-D@{kUgbR%Aj#{SZYZ?b}D##=' );
define( 'NONCE_KEY',        '=tQ]fSxHb+e3t Jxibs2c#$q57z=3Eb#.V3=zu@OobZR d<Ls|W9)fW#wst6>eNF' );
define( 'AUTH_SALT',        '#F}J=rj`| FGS[.JrYiO *VrWzI=90y5QhktUX6U4e:yR?V,P#UA9>6*EGDTRknm' );
define( 'SECURE_AUTH_SALT', '~oPIA_a401eSF)PR90b,JGz#>(Xw/A wbZd?9MF[%(t/s`O2o^:L8WG1]}CI7;IR' );
define( 'LOGGED_IN_SALT',   'i~=u>,S9E(afsRVWsD&4]x]O%5g).T**s^}67+f}>jx7Jf1>LTTSzoeJUWR0V|8m' );
define( 'NONCE_SALT',       'NpZV[L=@+4?TaIxVfF/d0.[QpR;~bBQY(XsJBl1lfjnH%P@*S(nFB)XYs!tQc,v)' );

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
