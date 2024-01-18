<?php
/**
 * semelhante aos cookies as sessões sao utilizadas para armazenar informações, porém ficam salvas no servidor
 * sempre devo ativar o gerencidor de sessoes para poder usar sessions com session_start()
 */

session_start();

//definindo uma sessão
$_SESSION['usuario'] = 'Diego';

//ler uma sessao
echo $_SESSION['usuario'];

//destruindo uma sessao
unset($_SESSION['usuario']);

//destruindo todas as sessoes
session_destroy();

/* Em PHP, a validade de uma sessão é controlada por meio da configuração do tempo de expiração da sessão. O tempo de expiração da sessão pode ser ajustado por meio da configuração do parâmetro session.gc_maxlifetime no arquivo de configuração do PHP (php.ini) ou por meio de código no script PHP.

A função session_set_cookie_params() também pode ser usada para configurar o tempo de expiração da sessão. Aqui está um exemplo de como você pode ajustar a validade de uma sessão: 

o tempo padrão geralmente é 15 minutos
*/

session_set_cookie_params(3600);