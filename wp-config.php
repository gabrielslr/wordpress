<?php
/**
 * A configuração de base do WordPress
 *
 * Este ficheiro define os seguintes parâmetros: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, e ABSPATH. Pode obter mais informação
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} no Codex. As definições de MySQL são-lhe fornecidas pelo seu serviço de alojamento.
 *
 * Este ficheiro contém as seguintes configurações:
 *
 * * Configurações de  MySQL
 * * Chaves secretas
 * * Prefixo das tabelas da base de dados
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Definições de MySQL - obtenha estes dados do seu serviço de alojamento** //
/** O nome da base de dados do WordPress */
define( 'DB_NAME', 'wordpress1' );

/** O nome do utilizador de MySQL */
define( 'DB_USER', 'root1' );

/** A password do utilizador de MySQL  */
define( 'DB_PASSWORD', 'root2' );

/** O nome do serviddor de  MySQL  */
define( 'DB_HOST', 'localhost' );

/** O "Database Charset" a usar na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O "Database Collate type". Se tem dúvidas não mude. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação.
 *
 * Mude para frases únicas e diferentes!
 * Pode gerar frases automáticamente em {@link https://api.wordpress.org/secret-key/1.1/salt/ Serviço de chaves secretas de WordPress.org}
 * Pode mudar estes valores em qualquer altura para invalidar todos os cookies existentes o que terá como resultado obrigar todos os utilizadores a voltarem a fazer login
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '~SbTUaO` e2hKC>3HlH r1q69zI :n;$pjNHnmIyD~3&q/7@nkKB;5h/)72/kt%,' );
define( 'SECURE_AUTH_KEY',  'v_Ss1@.073iA|*EGO[ke/l36M%Pt{H?YJqb;X>i3tyUu#[)ETPEYMwqE4V4F@gdI' );
define( 'LOGGED_IN_KEY',    'j@T&p?74.];~F;<wJz4HsqMfp=2,3IWF1`Qe(?58h!_B[-]tr-))(Z5K U8|$qLq' );
define( 'NONCE_KEY',        'S,dvW2j^YgrSuQ.6=|ZsRcYNA-IB~~lM&ZxM!S<G3 >a[V4P>T|O?i5L::qwYyeh' );
define( 'AUTH_SALT',        '*^B#iEH4(M{l=EtX=k`QXt)09r9Eu9K_j]cg6Pb|yva8[WQ4|+|*.cyqc>J:LRE%' );
define( 'SECURE_AUTH_SALT', '!Yf J=xl!p8&.yYA+7!]YTtTP/wPr}7:]1{y)@>I>`f_}</4fa;)[x6V;;:L!-Yr' );
define( 'LOGGED_IN_SALT',   'f#PD}q(Qc|sI(I*Z6DyadXmMfU,s>&#WH[,gCQ:5AF%j8>9jGQKn_dP?%ah,-CZY' );
define( 'NONCE_SALT',       'YWKd8XP/3?C]}bFJG_?~!PCfJ]ek~L8 )A( 5|+RZC+52kDe#Ok:wGQwZK),Ke?_' );

/**#@-*/

/**
 * Prefixo das tabelas de WordPress.
 *
 * Pode suportar múltiplas instalações numa só base de dados, ao dar a cada
 * instalação um prefixo único. Só algarismos, letras e underscores, por favor!
 */
$table_prefix = 'wp_';

/**
 * Para developers: WordPress em modo debugging.
 *
 * Mude isto para true para mostrar avisos enquanto estiver a testar.
 * É vivamente recomendado aos autores de temas e plugins usarem WP_DEBUG
 * no seu ambiente de desenvolvimento.
 *
 * Para mais informações sobre outras constantes que pode usar para debugging,
 * visite o Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* E é tudo. Pare de editar! */

/** Caminho absoluto para a pasta do WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Define as variáveis do WordPress e ficheiros a incluir. */
require_once(ABSPATH . 'wp-settings.php');
