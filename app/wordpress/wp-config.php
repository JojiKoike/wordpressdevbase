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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password' );

/** MySQL hostname */
define( 'DB_HOST', '192.168.33.10' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'A@j} .<yifeA@gwqo#$.8D:!]%;?u|D>N([;E&e&4^4wgoV%mSLPPJNoaEY3.Z{;' );
define( 'SECURE_AUTH_KEY',  '_;4`B;d;@=EE/(`,_bp7!hnmyP]gqK4JxAl!pkoU%v<tLpRDG`i|Zi1`jG}aQTG(' );
define( 'LOGGED_IN_KEY',    'Y7%?`DL1.7=@){pn>:WDrhY V|.)x<,Wnub8YZPc+dTltYNP:P9wo6]A:Xj1P^Qa' );
define( 'NONCE_KEY',        '|WB+(7~=_F#fmcV!kLzfW>v[8Vb7Oiq[v%[DhOKwy9(3nrqpde1Z|wccvF>>Xgb1' );
define( 'AUTH_SALT',        '~Z6@JhpIq59/H8p&!|Ao{1;feY-=c!u45gI^C{M/l:UcLYcaiir&1Le)tHY(|Keo' );
define( 'SECURE_AUTH_SALT', 'a-Njy4uY<YD/NrHH[01a{uc?A<^O2n?[W7]Zp~)*oz4$hE2dOyzPh>}NbYg,K9vg' );
define( 'LOGGED_IN_SALT',   'x(oblWFPb)eU>n/#`z7}9O6{nX?ZoU5(SU=42J&|`uG>c%l|Zbflwd8*6Q^5K>@w' );
define( 'NONCE_SALT',       'S2_Cp?EPvg`{y~Qr!`|>m0!iMUMihwfO93Yl*4snaQci,3P_K2~bm!CfNj;aK7+R' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
