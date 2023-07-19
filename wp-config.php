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
define( 'DB_NAME', 'vitrine' );

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
define( 'AUTH_KEY',         '1W,}pA9Vh)dn^60E4u_?zmv*56RY!$y/+{/Y_-?sMpQ$0V^H(<W,+_LHKCjFIT08' );
define( 'SECURE_AUTH_KEY',  'D)mA5}T-H^}8G n>}~}PJc-iU1.G>(>Vg*y{r@:1}Gus5JVBb~ua!mhRt:IUnIzN' );
define( 'LOGGED_IN_KEY',    'mAeSX&PpvV-7B{K8pGXf#{s083d|XlIA|tqza/#x%Z {LBi~xwm7,E;R$M4P[ULC' );
define( 'NONCE_KEY',        'b|FCVgPQ)l?TAm?Q1}a~tZwyt)W%uq:T&3hq&#3xQl=2HFw o=)glP|,0$`I=n3N' );
define( 'AUTH_SALT',        'oZs9iPt3b)z>rRVmugA@7an2(?YNvPUa7G<s=M[Fyg%I{N*,Vo!@t.,:d]MLo8.5' );
define( 'SECURE_AUTH_SALT', '48j$G8>~&p{NS)yvHaw-PT;(NM5hhD$}9#!Ze*YzBMQx158L>|BgFIv]]Uk9!{q]' );
define( 'LOGGED_IN_SALT',   '|5eM,K}Nxfalg`=oCC=2l!w5Ck_>,z!pn3qCs9=[Nt^kaNeQ!1Bq~1Mr6$.jkb4x' );
define( 'NONCE_SALT',       'g?Y(Wl6Qj:=4B|PY<|;k.SB|afVvirD-uuAITgh8Isb|>$xjr1~6!zdoowW[.-q%' );
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
