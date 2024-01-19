<?php
namespace pdo;
use PDO;
use PDOException;

class Mysql extends Database{

    private $con,
    $host,
    $base,
    $username,
    $password;

    public $qrs; // query result set
    public $totalResults;

    /**
     * Instancia uma conexão com o banco
     * @param array $config array com dados de conexão
     * @return void
     */
    public function __construct($config){
        $this->host = $config['host'];
        $this->base = $config['dbName'];
        $this->username = $config['username'];
        $this->password = $config['password'];
        $this->connect();
    }

    protected function connect(){
        try{
            $this->con = new PDO("mysql:host={$this->host};dbname={$this->base}", $this->username, $this->password);
            //configurar o PDO para lançar excessões de erro
            $this->con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch(PDOException $e){
            echo "Erro de conexão no banco de dados.";
        }
    }
    /**
     * executa uma consulta e devolve o resultado na $this->qrs
     * @param string $sql query de consulta
     * @return object retorna o proprio objeto
     */
    public function select($sql){
        $qry = $this->con->prepare($sql);
        $qry->execute();
        $this->qrs = $qry->fetchAll(PDO::FETCH_ASSOC);
        $this->totalResults = $qry->rowCount();
        return $this;
    }

    public function insert($sql){

    }

    public function update($sql){

    }

    public function delete($sql){

    }
}