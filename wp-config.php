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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'smarti' );

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
define( 'AUTH_KEY',         '7;i6pd],-+?]f|`/;(L7?;mJd7H((~[ErSE5`JRTv+Vlb/S{``d,AnmvQo4;0=5@' );
define( 'SECURE_AUTH_KEY',  '%LuE[Ux$MO8Qhuw+J{fyf_dqDP)]Q0%N:UvyGtM{lo(A(4L~&MRTFBY-|@6E5Z!}' );
define( 'LOGGED_IN_KEY',    'X>0`/C/g&$fa[t9O+Pv2<[q.+f:67X#5]:y#Nsnj,qe|8T7A#:3?*C-snP#Lja~!' );
define( 'NONCE_KEY',        '.&7QJ^:lxCAs04k*#WEmuLx.YXm5-$-;m(j+@Jt5fxt%vuF/vUQd^q|Mbleib5$M' );
define( 'AUTH_SALT',        'H<ob2E`OKS5h~(~X t=yE20[xRISIqyf!&y$LO I/B$/>(D[b@CK[~dv&ua(0/cZ' );
define( 'SECURE_AUTH_SALT', '9lk?CXDl[lb(WDt^p^4PgZ;#4HI{PS9m3T$JPK>-W4bVetX+bOU+4t=e~]WZjMO7' );
define( 'LOGGED_IN_SALT',   'zyN~hKYCr*fJ$GE}&7z(5NXS8sfiyS]n&wbX#[PyGP~zEOR2?rFkty?#=:C]DnA#' );
define( 'NONCE_SALT',       'Kl?5%bi&|7{R`|ji]*}i`<u_=8q_ZQ0]4e*,|}8 VV/D<:W`dmO`E}9ACvD,o &=' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'smartiwp_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
