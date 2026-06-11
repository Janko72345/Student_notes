<?php

class Session
{
    public static function start()
    {
        if(session_status() == PHP_SESSION_NONE)
        {
            session_start();
        }
    }

    public static function check()
    {
        self::start();

        if(!isset($_SESSION['user_id']))
        {
            header("Location: login.php");
            exit();
        }
    }

    public static function logout()
    {
        self::start();
        session_destroy();
    }
}
?>