<?php
class Conn {
    private $conn;

    // get the database connection
    public function getConn($conn_file, $username, $passward) {
        
        if (!isset($this->conn) || is_null($this->conn)) {
            try {
                $this->conn = new PDO($conn_file, $username, $passward);
                $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $exception) {
                echo "Connection error: " . $exception->getMessage();
            }
        }
        return $this->conn;
    }

}