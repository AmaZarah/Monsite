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
define( 'DB_NAME', 'e-commerc bd' );

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
define( 'AUTH_KEY',         'SpdlSj5c{&/VNyxR9f1CN$MLLI!gPU(hbz1x#d)-l2N40{sF@`aFni%qx{SUs+{u' );
define( 'SECURE_AUTH_KEY',  'HSwu}0N3v4rjS]XPaZWgAi v:0E>(>AGP|W;mTnVsi{~o0tk%{1%`QWz6l:&=m_A' );
define( 'LOGGED_IN_KEY',    'g{ODa&s;}4P)Yez4>QW:}X imjZ2#!^Q1tiDQ:?)}U9,9$ku{e*=m,rY*j>a_<5!' );
define( 'NONCE_KEY',        '9ifou({gm&]AMOhTI,#3E>U6A/0/3B*_EI;8bjV/%y9|4Z+PofpFN|h?=9e*5{B|' );
define( 'AUTH_SALT',        'rjyrDeywkWeU.4zHvKXF|+4T7mnrW0t~*Ka+T!iIW!{|ZXb:jVA+.PVhm2!S$#!|' );
define( 'SECURE_AUTH_SALT', '[Zdro7(^e]+82 {M&AsY0{ |[-KRG`<IR>Dm1rQW`Yu3w}m3B6rAy8%i07{cmuFP' );
define( 'LOGGED_IN_SALT',   '3 k?#$c|(N-/A%s>XEzbgPJ+;aU)P$@#D&e@XwJ8-9pIo<fr7M,ec|WGz0.yk0[O' );
define( 'NONCE_SALT',       '5s`Hfpv5^=sO>G]7c@xAjmmT-?_5M@+Dxz Sh;#TR#!/Zkpng6xTxmIP&nYiSV&o' );
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
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
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
