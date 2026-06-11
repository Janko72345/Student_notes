<?php

require_once __DIR__ . "/../config/Database.php";
require_once __DIR__ . "/../interfaces/CrudInterface.php";

class NoteManager extends Database implements CrudInterface
{
   public function create($data)
{
    $title = $data['title'];
    $description = $data['description'];
    $subject_id = $data['subject_id'];

    $sql = "INSERT INTO notes
            (title,description,subject_id)
            VALUES
            ('$title','$description','$subject_id')";

    return $this->conn->query($sql);
}
public function read()
{
    return $this->conn->query("
        SELECT notes.*,
               subjects.naziv
        FROM notes
        LEFT JOIN subjects
        ON notes.subject_id = subjects.id
    ");
}

    public function update($id, $data)
    {
        $title = $data['title'];
        $description = $data['description'];

        $sql = "UPDATE notes
                SET title='$title',
                    description='$description'
                WHERE id=$id";

        return $this->conn->query($sql);
    }

    public function delete($id)
    {
        return $this->conn->query(
            "DELETE FROM notes WHERE id=$id"
        );
    }
}