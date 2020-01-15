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

    public static function getAllRides()
    {
        $sql = 'SELECT * FROM rides;';
        $result = Database::query($sql);
        while ($row = $result->fetch_assoc()) {
            $rides[] = $row;
        }
      
        return $rides;
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
        $sql="UPDATE cars(type, SPZ)
    VALUES ('', '')";
        return  Database::query($sql);
    
    }


    public static function editUser($id_user, $id_role, $firstname, $surname, $email, $password = "", $active)
  {
        if(empty($password)) { 
        $sql = "UPDATE users SET 
        firstname = 'firstname',
        surname = 'surname',
        email = 'email',
        WHERE id_user = $id_user;
        ";
    }
    else {
        $hashedPassword = md5(password . self::SALT);
        $sql = "UPDATE users SET 
        firstname = 'firstname',
        password = 'hashedPassword'
        WHERE id_user = $id_user;
    ";
    }
        return Database::query($sql);
 
        
        
}

public static function editRides($type, $SPZ)
    {
        $sql="UPDATE cars(type, SPZ)
    VALUES ('', '')";
        return  Database::query($sql);
    
    }

    public static function addCar($type, $SPZ)
    {
        $sql="INSERT INTO cars(type, SPZ)
    VALUES ('', '')";
        return  Database::query($sql);
    
    }

    public static function addUser($role, $firstname, $surname, $email, $password)
    {
        $sql="INSERT INTO employees (id_role, firstname, surname, email, password)
    VALUES ('', '', '', '', '')";
        return Database::query($sql);
    }


    public static function addRide($role, $user, $car, $timeLeft, $timeArrived, $placeLeft, $placeArrived, $kmBefore, $kmAfter, $note, $state)
    {
        $sql="INSERT INTO rides (id_role, id_user, id_car, time_left, time_arrived, place_left, place_arrived, km_before, km_after, note, state, )
    VALUES ('', '', '', '', '','', '', '', '', '','')";
        return Database::query($sql);
    }



    
}