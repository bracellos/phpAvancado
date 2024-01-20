<?php

/* if(is_dir(__DIR__."/../teste/")){
    echo "o diretorio existe<br>";
}else{
    echo "não temos esse diretorio";
    //criar o diretorio
    mkdir(__DIR__."/../teste/", 0775);

} */

//remover um diretorio com arquivos
$caminho = __DIR__."/../arquivos/";
$arquivos = scandir($caminho);

echo "<pre>";
print_r($arquivos);
echo "</pre>";

foreach($arquivos as $arquivo){
    if($arquivo != '.' && $arquivo != '..'){
        //deleta um arquivo
        unlink($caminho.'/'.$arquivo);
    }
}
rmdir($caminho);