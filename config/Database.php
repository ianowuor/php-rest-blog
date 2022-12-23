<?php

class Database {
    // DB Parameters

    private $host = 'localhost';
    private $db_name = 'myblog';
    private $username = 'owuorian';
    private $password = 'Valmamucera95';
    private $conn;

    // DB Connect

    public function connect() {
        $this -> conn = null;

        try {
            $this -> conn = new PDO('mysql:host=' . $this->host . '; dbname=' . $this->db_name, $this->username, $this->password);
            $this -> conn -> setAttribute(PDO:: ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo 'Connection Error: ' . $e -> getMessage() . '<br>';
        }

        return $this -> conn;
    }

}

?>