<?php
/**
 * Mas por que manipular arquivos via PHP?
 * A princípio, você pode usar a manipulação de arquivos para várias coisas tais como:

 * Fazer um gerenciador de arquivos remoto;
 * Editar um arquivo .css remotamente em um sistema gerenciador de conteúdo qualquer;
 * Salvar informações de acesso em um arquivo de log;
 * Criar um contador para seu site.
 * sintaxe: fopen(nomeArquivo, modo);
 *   * nome: O nome do arquivo pode conter o caminho absoluto onde você deseja criar o seu arquivo. Por exemplo, ‘www/entra21/phpavancado/manipulandoArquivos/arquivo.txt’.
  * modo: O modo indica as permissões de acesso para o arquivo que foi criado. Por exemplo, ele pode ser criado apenas para leitura (consulta de dados) ou para escrita e leitura.
  * as permissões estão listadas no arquivo permissoes.hmtl
 */

// $arquivo = 'hello.txt';

//abrir ou criar arquivo
// $handle = fopen($arquivo, 'a');

/* if($handle){
    //escever algo no arquivo
    fwrite($handle, 'Diego Bracellos'.PHP_EOL);

    //fechar arquivo
    fclose($handle);
} */

//ler o arquivo
/* $conteudo = file_get_contents($arquivo);
echo $conteudo; */

/// gerar um arquivo nom lista de pessoas
$dados = [
    "Maria",
    "João",
    "José",
    "Jonas"
];

$arquivo = 'pessoas.txt';
$path = __DIR__.'/../arquivos/';

$handle = fopen($path.$arquivo, 'w');

if($handle){
    foreach($dados as $ln){
        fwrite($handle, $ln.PHP_EOL);
    }

    fclose($handle);
}

//ler os dados
$handle = fopen($path.$arquivo, 'r');
while(!feof($handle)){
    echo fgets($handle)."<br>";
}



