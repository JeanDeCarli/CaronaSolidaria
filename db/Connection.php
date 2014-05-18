<?php

class Connection {

    protected $con = null;
    protected $connection_string = "host=localhost port=5432 dbname=CRNS0 user=postgres password=root";

#método que inicia conexao 

    function open() {
        $this->con = pg_connect($this->connection_string);
        return $this->con;
    }

#método que encerra a conexao

    function close() {
        pg_close($this->con);
    }

#método verifica status da conexao

    function statusCon() {
        if (!$this->con) {
            return FALSE;
            exit();
        } else {
            return TRUE;
        }
    }

}

?>