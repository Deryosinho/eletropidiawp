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
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'eletropidiawp' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         '|nA8^-X1C<zSG`Ml&,YB(NoSE7A.w8 H@:f(Az{~aAPQ:j|p~qg%z:Tz/*pZ0Jp(' );
define( 'SECURE_AUTH_KEY',  'g?nIj 60Gays7m:3xMiiN%a@jS~d<^5)8c`~8m6fuBYW*&,kp#f;<I!EU8y^{ssL' );
define( 'LOGGED_IN_KEY',    'ih?LaN1Bi;ByOSj/&t`Zk^w`iTr0~PGSApx.si$/L7zvbDk f4*[0h%VAiVZ3Jle' );
define( 'NONCE_KEY',        'V9@l<gx]#?$1R1(q|4#Anys[P[`1!/O1-}<]>%Vf+HY:MR&Lj]c6]>hO9;3l`5JU' );
define( 'AUTH_SALT',        '$cy=2wwj ,;]M61MS#+3>.q,s?30W4t^rFQ^j*zNr2|W(ON5[fB#zSAr|A?=ovl^' );
define( 'SECURE_AUTH_SALT', 'd@{Pv$){Rg1W(ddUR]hIS9@J~w]bB+A1C?jfmp#*AG|b6ji[UOjfd5W4G(9j(z8]' );
define( 'LOGGED_IN_SALT',   '~~@^=u2<Q9Mih,h$eu_c_BKBLCs7JqiKXeK?:zv@mZ^h&Dri#M;5^8N,]HRvX w:' );
define( 'NONCE_SALT',       '9/JVK?>,r$xB+q*Dubg^s(1(uI60Zxw9(@,}cP`jn|rUkC+5h)H;_0J|hB~7!l0R' );

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

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
