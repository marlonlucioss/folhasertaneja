<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa user o site, você pode copiar este arquivo
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
define('DB_NAME', 'folha');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'root');

/** Nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/** O tipo de acesso aos arquivos locais. */
define('FS_METHOD','direct');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '0f2:*}S8<u/i#nk=x}V=+9E.3EcIJ4f|4C~/n90WA6k-gNNU8Egs^&Da| v5B0Pr');
define('SECURE_AUTH_KEY',  '*a66nCR,Sg<(*OvlRd4zEkU(=[ehPvk.K`.1q:{vedw2UZgOLr=o8&?7aZsxjOSz');
define('LOGGED_IN_KEY',    '^}~vK*+4wR26re9L/zzp?Cp${n]0jiklvC@Y+,6%1jA8|`UHS+@a<ojq,@cz_,vx');
define('NONCE_KEY',        '#;>yJtb<RA2OvPGCDyj8wz4Z;q2SOMQF@>]emq|jY0kF81DJ82eNK`TARIPu3cMN');
define('AUTH_SALT',        'TUmu^y5XM5L[cb>/oQuH Dsg55m{kR7? jV&jL)%uZg!B{y@qdq&b98quC5<(`kP');
define('SECURE_AUTH_SALT', 'QX%a5i}`w_LRz=H_uTpB6YR<1<@LS}p&+wW#r*/I_Z&uQa&UTEFI#pk`:$+m}Hj#');
define('LOGGED_IN_SALT',   '&pH_Kb`#TA:*1W>P5<:(6y#.AgkRX{/.AWY7Y3n*&*ez<T5h[T|-+E0ql2VZ&7mg');
define('NONCE_SALT',       'Kg>C<|?Z=N|<-!e{4RxB2wxan9M/y&E$%;iolLmyH.h?tEFRbveu;A6|$>94nl]B');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * para cada um um único prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

/**
 * Para desenvolvedores: Modo debugging WordPress.
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
