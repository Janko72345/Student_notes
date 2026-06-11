<?php

require_once __DIR__ . "/../config/Database.php";

class User extends Database
{
    public function register($username, $email, $password)
    {
        $password = password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO users(username,email,password)
                VALUES('$username','$email','$password')";

        return $this->conn->query($sql);
    }

    public function login($email, $password)
    {
        $sql = "SELECT * FROM users WHERE email='$email'";

        $result = $this->conn->query($sql);

        if($result->num_rows > 0)
        {
            $user = $result->fetch_assoc();

            if(password_verify($password, $user['password']))
            {
                return $user;
            }
        }

        return false;
    }
}
?>