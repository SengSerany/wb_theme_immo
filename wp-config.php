<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'wordpress' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'LrWAv29I}GY@}XnTG@F4D6u.2Ao5<Kpqdq:M^ YLq/P7rw6EsXL|OUVShy5Olpr#' );
define( 'SECURE_AUTH_KEY',  'd+Za<Wef3ggs;x0+N{/(A-^;=2W3Qg3)H#Q#?)J4we53Q8jt2yUY02,8_8$)>8$8' );
define( 'LOGGED_IN_KEY',    'KOsp?9<<_F)K?x~>Nn]V,k[FnIdcS-tA_my orrE2CFUGk~[II%i?.;-(vqS-iRn' );
define( 'NONCE_KEY',        'rTZRgXCpc]k0S~+]6Q(lhm&t*F}_q2h,4gnj)ic}dk?d^mtS$,9Z#6{2dwK:gdPB' );
define( 'AUTH_SALT',        'xjGAMDsm0+r.11b6N:y?LlR*jecm>TgT0fnojn-wIdpRg_pz=z]QyYd]=lQi5b(k' );
define( 'SECURE_AUTH_SALT', 'yw=:&Jl~GD=QKo(yFci#b;d<1)%emct&Fru!wd=)Jzy!Pe7NeiOv&.i`Tk*R8RC.' );
define( 'LOGGED_IN_SALT',   'l(X5%K6afsK*>KPa[UnORua!Xf-bBccut;YV^lp6@?]1lTCjmW7.+o[SeCb6O$z:' );
define( 'NONCE_SALT',       'zljv0dJi5{S%>4Y[x^cg3DY7|yy@kb1ON75g)2m+m;k$Z1]C6(XG^B/.tjg8o[HG' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_blog';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );