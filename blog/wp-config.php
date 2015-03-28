<?php
/** 
 * As configurações básicas do WordPress.
 *
 * Esse arquivo contém as seguintes configurações: configurações de MySQL, Prefixo de Tabelas,
 * Chaves secretas, Idioma do WordPress, e ABSPATH. Você pode encontrar mais informações
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. Você pode obter as configurações de MySQL de seu servidor de hospedagem.
 *
 * Esse arquivo é usado pelo script ed criação wp-config.php durante a
 * instalação. Você não precisa usar o site, você pode apenas salvar esse arquivo
 * como "wp-config.php" e preencher os valores.
 *
 * @package WordPress
 */

// ** Configurações do MySQL

// Dev
define('DB_NAME', 'portfolio');
define('DB_USER', 'root');
define('DB_PASSWORD', '500927');
define('DB_HOST', 'localhost');
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');

// Prod
/*
define('DB_NAME', 'portfolio');
define('DB_USER', 'root');
define('DB_PASSWORD', '500927');
define('DB_HOST', 'localhost');
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');
*/

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer cookies existentes. Isto irá forçar todos os usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'R|pu-DXO|55&j#u2Zw&+^4V<]Jiibol!x~Ix;ry@dJs`j;aIZ}!qDcE9/IM70Fi<');
define('SECURE_AUTH_KEY',  '8FqcR@d+PH3:;7mu~[6-w-@B|%Q/5JTh Y>J1bH8{Ot,c_O{0g<>fh P3dP.g-U`');
define('LOGGED_IN_KEY',    'KoE(Sc9TkQ%GIi_(>P}=k_min?I*|Yh`^O<{2*GaV9V;N>}d8+~De:U%#?V|0l%9');
define('NONCE_KEY',        'K<Q+7Y8>pN6Kj^wLpB# M:.Hv&{CC6N!mEYmq9i4-vl15omYX$jSC>^9/eXgcC7-');
define('AUTH_SALT',        'b|f-E=YYA&l`%`y+_Ro-WF7oy&|UmUIv~0KG3|OX+,fhCRknDJ}%]mWj>-N){Fb+');
define('SECURE_AUTH_SALT', '}Qre KnJa_~%mCQ*#Dq.7@;o:5+0LsCMr5N+Qn>/T#M:lc<8P,Wd.Nqk[7{bi8MD');
define('LOGGED_IN_SALT',   't:$=fR8H/?m{K{sTl]C9$`K+ZOV6l5vO$Pphl}UjUS(#0  GfYid0tN~!%H~wYg`');
define('NONCE_SALT',       '>I^L-m+t},9D+D}>A>t)+H LE/L}XU3<4K{Duvk^lEjl@GjYNLTFlItrS$/F,O& ');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = '_';


/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * altere isto para true para ativar a exibição de avisos durante o desenvolvimento.
 * é altamente recomendável que os desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 */
define('WP_DEBUG', false);
define('FS_METHOD', 'direct');

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	
/** Configura as variáveis do WordPress e arquivos inclusos. */
require_once(ABSPATH . 'wp-settings.php');

