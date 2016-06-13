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
define('DB_NAME', 'plaitil');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'S_#i`A[;M>/7djy?^>,O&xK!M40iy}ImHPn.v-:0siz}yiTyB&@#}r0palEay5)-');
define('SECURE_AUTH_KEY',  '(:>U1=n0DcE0x~^4D4AQZSuJh.kzPB?&bcjn<;[TWjvC;,h sMC-a5%E,mdFIOH.');
define('LOGGED_IN_KEY',    '|<f,|cmDlb -.W*a5>a[}AV1)H1FPmv`/pCu|?R3b#QT|DwY_lw=g1)M!Z4@ep7Q');
define('NONCE_KEY',        'c+3(|?+MERu7>HJ^66g)[KVg/p-Ti<NL*?J?&OS_q,)p-qb4!u6q~uW**lY(PYfT');
define('AUTH_SALT',        '|9mNVW qa_@S_ BwhrWL%6Gd#r//2@y+G</4w1Tj1BG@Nhj8}rvE*RfCBAjG8/?G');
define('SECURE_AUTH_SALT', 'KF%F {A1C$5alT*3%f>)eTY3|$? `VMg7)JirH[R82IHn}+72,4;Y,2&5/&s$ng,');
define('LOGGED_IN_SALT',   'zvvy/tg7hv&#t-,[X&i276H3$W (?kuA~ztmBxFaWO96KZz9iQ*Wz44Rg$4e#$_g');
define('NONCE_SALT',       '*aus>x{1KB0wJ@qqSUM,YdDALH B|e<k(4P4G-/py W_s!4-+Zk>[a/V)YU)Ys[G');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'plaitil2k16_wp_';

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
