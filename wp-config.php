<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'siteone' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '31g:Bx*=OE?@2z^<]L|DI@Lp<MChEeE&V*do{Tq6,}mbJG%6-#1QlpG5Ff16kT$}' );
define( 'SECURE_AUTH_KEY',  'MLSHgM#x^_{XYa{U8o]L,)*?Ta2c.!NmoBP/{b[@:=7Xvl8gkYO3R5lW!&+Xk{YD' );
define( 'LOGGED_IN_KEY',    'XopJhn>U0J)0j/0.S}rsV}v+_(LXawD}v]jF99G;;k3P0 HS,qQ$W!pt}xf jm</' );
define( 'NONCE_KEY',        ',VKsiDdTB/GUkNr;7#M@}}|G{<gKe0&_j2_{^Ph%j6S6f|fSNo]n.*KZf<47FN)]' );
define( 'AUTH_SALT',        'Y1HjGBS/1oQ>Aa}3?DtF!2*wW=c9mBTSq)rfQ`baQR} ]!-2/4($w>u!NVk~4^m2' );
define( 'SECURE_AUTH_SALT', 'CvatfQ,&UNR(mpO6TwGI2MSW&g9E6h/Wv[x$osZSD1N`y1P,*@CaYwm?Am=o>-eW' );
define( 'LOGGED_IN_SALT',   'ivZlj_t1Wi8a*3q(im8@0I3US[.m}:@H.U{kyG4p[dj8}J!Z=E!~~i6l}PQ_8myb' );
define( 'NONCE_SALT',       'fbqf0)nI8T=/~(0+%X}Ka`eI+_*J4Nv>(]qg-V1%PPpNND<F,D$BG/;B7UR~N=A:' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
