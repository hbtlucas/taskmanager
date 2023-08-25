<?php
class Task {
    private $host = 'localhost';
    private $username = 'root';
    private $password = '';
    private $database = 'taskmanager';

    public function conecta_mysqli() {
        $con = mysqli_connect($this->host, $this->username, $this->password, $this->database);
        mysqli_set_charset($con, 'utf8');
        
        if (!$con) {
            die('Cannot connect to database: ' . mysqli_connect_error());
        }
        
        return $con;
    }

}

?>