<?php
//cookies sao utilizados para armazenar informações entre as requisições do usuario, o servidor envia e o navegador armazena

//sintaxe criação setcookie(nome, valor, duracao, caminho)

//criando um cookie com uma hora de validade
setcookie('usuario', 'Diego', time() + 3600, '/');

//ler um cookie
echo $_COOKIE['usuario'];

//remover um cookie
setcookie('usuario', '', time() - 3600, '/');