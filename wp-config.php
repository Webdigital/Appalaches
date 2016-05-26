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
define('DB_NAME', 'appalaches');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'root');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'localhost:8888');

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
define('AUTH_KEY',         '7<l-qIGk[nmrr&g&Pz@c=Os*GHJQv+r%CQeO&x<t(Q0,cO_m;u`6[&DcjX:Mv6%#');
define('SECURE_AUTH_KEY',  '9~uQ;=-fYPzB~:iU)hfQ`$eLqpA>fiQj(?rpx?YD2Nmc3FV&|<{eK18y|7p,|RM}');
define('LOGGED_IN_KEY',    '$q:&N}BIz>h{w`?QS&-9`cSnm,La*w]*h^7&VW<.3|J.c?f%|svL6AU+O(0[NL1u');
define('NONCE_KEY',        'vB o8-J+>PJB]nUA`Jf)MH.n(w-IXD^(].>Cmap~ZAUB:q2yt|^eTiH$G4=bf[xf');
define('AUTH_SALT',        'eSdqHb(cT+~:J^zd?4}AA(KcG}JLL98QhW7>Val;3RCz4wGGHFO$gol+B{&+b|Nd');
define('SECURE_AUTH_SALT', 'ob9b]}Y{|gsrg/BZ%x3y5={<a(P.X>(TA=`4%QT4$%;--v:/Fo*mRP LIxR6Bp{H');
define('LOGGED_IN_SALT',   'D$ngxDz-3oT<|x*{B}][w/q+*|*@CyK&-Lsg/h6wkB[4NUf/*Z(?wo<+ W0H%!RV');
define('NONCE_SALT',       'FjF=_Vh%8fu0=:2BxDQRH,BUtWdM?R?iwmmsMI!uHm?VH+zHab q#W% MO}_<<5N');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'appa_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d'information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 * 
 * @link https://codex.wordpress.org/Debugging_in_WordPress 
 */
define('WP_DEBUG', false);

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
define('WP_MEMORY_LIMIT', '64MB');