<?php
require_once 'db.php';

class table
{

    static public function addUser($username, $email, $password, $age, $card, $pin)
    {
        $db = (new DataBase())->db();
        $password = password_hash($password, PASSWORD_DEFAULT);
        $check = mysqli_query($db, "SELECT id FROM users WHERE username = '$username'");
        $row = mysqli_fetch_assoc($check);
        if ($row == '') {
            $addUser = mysqli_query($db,
                "INSERT INTO users (username, email, password_hash, age, card, pin) 
                       VALUES ('$username', '$email', '$password', '$age', '$card', '$pin')");
            if ($addUser) {
                mysqli_close($db);
                return 0;
            } else {
                mysqli_close($db);
                return 1;
            }
        } else {
            mysqli_close($db);
            return 2;
        }
    }

    static public function checkLogin($username)
    {
        $db = (new DataBase())->db();
        $check = mysqli_query($db, "SELECT * FROM users 
                                    WHERE username = '$username'");
        if ($check) {
            $result_array = mysqli_fetch_assoc($check);
            mysqli_close($db);
            return $result_array;
        }
        else {
            mysqli_close($db);
            return false;
        }
    }
}