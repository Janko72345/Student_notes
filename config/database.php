<?php

class Database
{
    protected $conn;

    public function __construct()
    {
        $this->conn = new mysqli(
            "localhost",
            "root",
            "",
            "student_notes"
        );

        if($this->conn->connect_error)
        {
            die("Greška pri konekciji!");
        }
    }

    public function getConnection()
    {
        return $this->conn;
    }
}
?>