<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', '' );


/** Usuário do banco de dados MySQL */
define( 'DB_USER', '' );


/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );


/** Nome do host do MySQL */
define( 'DB_HOST', '' );


/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );


/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'b>a9.|nH9rt%u>r#.MK9aLZ}GHVir.qCY!^pm|,a5>R+E52I,qQFnD<R}*wT)#s7' );

define( 'SECURE_AUTH_KEY',  '^oc0G U~QC(p>I8RVs#G2SOk$7~{}Z)dDX$59;VNieBRz9/.=)%`Zvz_(rS1W-E-' );

define( 'LOGGED_IN_KEY',    ')$b~|?B?9[ZU (p/C:{oZ!yZ@o!R{T*~0ojcCSKAY*)%EYN1jr!(+kq%>kF#fy}D' );

define( 'NONCE_KEY',        'oSC.XF$+,UMKU}%6IZx3ET?fVkpUsdX)9n&@p.|elDWt2y:W~mO5/O=64Q8P/A/?' );

define( 'AUTH_SALT',        '+SbU-_7DaoxcGuIkx/$TdDGWdUfHT~)oITolyG HJklIms;2z{x2[<Z9H)/@|)Ra' );

define( 'SECURE_AUTH_SALT', 'NTAbA`!pZpk+qo*]8^e[Xwm-hA[}X>1ep5YLY~`(}E)Fg5|u}B}AH){-Fx#:&9a?' );

define( 'LOGGED_IN_SALT',   '|7+A%cSFOZ_.TX*8%lpjk2-q>[,qA*5$4p>9KIBf+A4U14}($9n^q,U%m*X;]1WZ' );

define( 'NONCE_SALT',       'WErzSd?83pv MS!m^lp)J[DKCH*yJw/B=IDj!EZqbJL|!sWs`{-O[-rr?DUd(^$@' );


/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';


/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
