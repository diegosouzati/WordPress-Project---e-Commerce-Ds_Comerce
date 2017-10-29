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
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações
// com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'treinaweb_radical');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

/** Nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

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
define('AUTH_KEY',         'ZM*gikiRF&` oFVa9Qcl9{#= ixHI{%w2]3dAP6oa$GkmadjWvz{/~<qZfVU+3)h');
define('SECURE_AUTH_KEY',  '3.`k6N5)+T[R7i1;HafkuYes,FESnC^`3un7[6F9c5aFbGi#RdR?,NHH1lGv0G,>');
define('LOGGED_IN_KEY',    'hap)B4kdi,8e+s:?l1#i5dJ.7q<rC{S=,K=5^e[n4>Fc[[p>yiD1(ng,e;zc?|~=');
define('NONCE_KEY',        '*FBD4Zr1sL>4/b4jmB.0c NVs~^}Yfv/}wkyb, I6KmF~lf9FCFw:}>!]K|Ok<_9');
define('AUTH_SALT',        'Gt]HY4t1Pn:SSc=4&q8e%C{+&41gO:@m{:[+@hB]}?;r|{A*JiX.n.1AuQ64|/jn');
define('SECURE_AUTH_SALT', 'u/B4kbF<AmCO)_:_8R@3,}xO?s!QHJZ)ne-_7^1&{`w)t4$9(-waxA^G+ F:CxVK');
define('LOGGED_IN_SALT',   'G:GIHH<MPox%$sou)5)sP/m87`nR[hRRo@1dhv(T (}g|;uRWp-k^J!#h==lq>XX');
define('NONCE_SALT',       'vz0c>k+)&>[+n=t_<Q$9%V&Y>YIS_?kPl_(bcO:;R|yVFq0W{hzsPr*_[zt*ENgY');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix  = 'pw_';

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
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
