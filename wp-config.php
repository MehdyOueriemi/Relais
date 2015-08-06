<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clefs secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur 
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C'est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d'installation. Vous n'avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'relaisviumvigie');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'relaisviumvigie');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'vigie2015');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'mysql55-11.perso');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8');

/** Type de collation de la base de données. 
  * N'y touchez que si vous savez ce que vous faites. 
  */
define('DB_COLLATE', '');

/**#@+
 * Clefs uniques d'authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant 
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n'importe quel moment, afin d'invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'r3RTB6ABrIk{m7|+e<>3~4>;.eZ|#8piR`:$sh@r!pOX{. ?!~~}%E:x%<*uDNz~');
define('SECURE_AUTH_KEY',  '&XXaY19!*{=SbGNlmzjQo:9~vs&f ~/r!A.hjjIV}.Y85M}[j,39]x]_ya|`ILfH');
define('LOGGED_IN_KEY',    'PAoI~]iPRj_l.x+-c+kkv,3Yzu fW[T+pMjC#w|^L`W=]z?o*w+ -4?h^O_jHl%6');
define('NONCE_KEY',        'h^CTRTM|OKPocn4CNjQ*nfVD|;f~Yo%?m%B1-=w#=,=AE1YcB!1?.FNH2DkMtIBX');
define('AUTH_SALT',        'yxEk.r=C03+qSaG%-[|vtksDSP+#7%+eQBN Y*}TUF)Du0Bw(*x)LRpW62qi5Yu!');
define('SECURE_AUTH_SALT', 'L7(n#iQ-9Xs1)E4@3c9)A2EvmUI.}ltgfU_wFNF8jj^=(_%$;J^wSf9NT1?R{ ,X');
define('LOGGED_IN_SALT',   'u*u2%qD!7bJ 9C5}<ds%_A_ #rru+?Pk|4-#E|HUn~;-I1$$5dK*k=8N.m3hb3vX');
define('NONCE_SALT',       'V(x>}_mRL<|#i0cG#(73ZEN?1~.9z{SsiFDn:X::v)0@o`{dTJCPYjqNsO_]Ix2i');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique. 
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'wp_';

/** 
 * Pour les développeurs : le mode deboguage de WordPress.
 * 
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant votre essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de 
 * développement.
 */ 
define('WP_DEBUG', false); 

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');