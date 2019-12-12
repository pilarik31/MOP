<?php
require_once 'inc/database.php';

class Model
{

    private const SALT = 'fsdnjuibfasuiasoibdiob2619adsas';

    public static function authenticate($email, $password) {
        $hashedPassword = md5($password . self::SALT);
        $sql = "
        SELECT * FROM USERS
        WHERE email LIKE '$email' AND password LIKE '$hashedPassword'
        ";
        $result = Database::query($sql);
        if(!$result) {
            return FALSE;
        }
        return TRUE;

    }

    public static function getAllCars()
    {
        $sql = 'SELECT * FROM cars;';
        $result = Database::query($sql);

        while ($row = $result->fetch_assoc()) {
            $cars[] = $row;
        }

        return $cars;
    }

    public static function getAllEmployees()
    {
        $sql = 'SELECT * FROM employees;';
        $result = Database::query($sql);
        while ($row = $result->fetch_assoc()) {
            $employees[] = $row;
        }

        return $employees;
    }

    public static function getAllRoles()
    {
        $sql = 'SELECT * FROM roles;';
        $result = Database::query($sql);
        while ($row = $result->fetch_assoc()) {
            $roles[] = $row;
        }

        return $roles;
    }

    public static function editCar($type, $SPZ)
    {
        $sql="INSERT INTO cars(type, SPZ)
    VALUES ('', '')";
        return  Database::query($sql);
    
    }


    public static function editUsers($role, $firstname, $surname, $email, $password)
    {
        $sql="INSERT INTO users(role, firstname, surname, email, password)
    VALUES ('', '', '', '', '')";
        return Database::query($sql);
    }

    public static function addCar($type, $SPZ)
    {
        $sql="INSERT INTO cars(type, SPZ)
    VALUES ('', '')";
        return  Database::query($sql);
    
    }

    public static function addUser($role, $firstname, $surname, $email, $password)
    {
        $sql="INSERT INTO users(role, firstname, surname, email, password)
    VALUES ('', '', '', '', '')";
        return Database::query($sql);
    }

    
}
