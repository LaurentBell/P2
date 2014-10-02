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
define('DB_NAME', 'project');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'project');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '0000');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         ')s6k=C.YjO7Pe$}oRkb4vGsZ>!&beF{&e5!Dol}Hf5p*>2u~^EFQgKb0,i^#A>cs');
define('SECURE_AUTH_KEY',  ';:`XYRH$Np{o@0xkf*<`%gw;H?U0u2HyF{%<OW~!=!h w(#69{4JtaSQ1x|`]pnF');
define('LOGGED_IN_KEY',    'BY3hza1PMWY~@=;<!pD;$Nk*YO]Hu]E68cf,]{);(WvBKn:g2B]f|UuHiV,D99mR');
define('NONCE_KEY',        'F0h?e&xX>+V3mbn9>WrKt0z`]#_yFb9c6rd:SpY_uJnj{x!4%WDzkX#WT:n|hn!)');
define('AUTH_SALT',        '@72@$%=1 4 )N9.gN%Nhj jecD_>[K^=qW?38,b8( yIyVhTke50*=3-7nT{2<XM');
define('SECURE_AUTH_SALT', '_.4x&G@x7wRQT=l9aJ6^cp&J WfJtyuM%@yniE5Y(#w/K1WcE4LJ6N1DZRVl2QU2');
define('LOGGED_IN_SALT',   'ZfiJ+X=bqm^?leY<{R_>YObi#(q3YkECog&6>/DU<j,e?C2/t^WMm! V.rmyMY;v');
define('NONCE_SALT',       'ROpL,xk,%kQH{C-pwR3N.LaRy56EeK1l<Pp6,!t]B`+`b]q=@34|D)3:C,@J`gu>');
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