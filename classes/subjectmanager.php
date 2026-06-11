<?php

require_once __DIR__ . "/../config/Database.php";
require_once __DIR__ . "/../interfaces/CrudInterface.php";

class SubjectManager extends Database implements CrudInterface
{
    public function create($data)
    {
        $naziv = $data['naziv'];
        $profesor = $data['profesor'];

        return $this->conn->query(
            "INSERT INTO subjects(naziv, profesor)
             VALUES('$naziv','$profesor')"
        );
    }

    public function read()
    {
        return $this->conn->query(
            "SELECT * FROM subjects"
        );
    }

    public function update($id, $data)
    {
        $naziv = $data['naziv'];
        $profesor = $data['profesor'];

        return $this->conn->query(
            "UPDATE subjects
             SET naziv='$naziv',
                 profesor='$profesor'
             WHERE id=$id"
        );
    }

    public function delete($id)
    {
        return $this->conn->query(
            "DELETE FROM subjects
             WHERE id=$id"
        );
    }
}