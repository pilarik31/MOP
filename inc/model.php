<?php
require_once 'inc/database.php';

class Model
{
    private const SALT = 'fsdnjuibfasuiasoibdiob2619adsas';

   
    
    public static function getAllDrivers()
    {
        $sql = "SELECT * FROM users
                WHERE id_role = '4'";
        $result = Database::query($sql);
        while ($row = $result->fetch_assoc()) {
            $drivers[] = $row;
        }
        return $drivers;
    }


    public static function getRidesByCar($idCar)
    {
        $sql = "SELECT c.id_car, r.id_ride, r.id_car, r.time_left, r.time_arrived, r.place_left, r.place_arrived, r.km_before,
        r.km_after, r.note
                FROM cars c 
                JOIN cars_rides cr ON c.id_car = cr.id_car
                JOIN rides r ON cr.id_ride = r.id_ride
                WHERE c.id_car = '$idCar'";
        $result = Database::query($sql);
        while ($row = $result->fetch_assoc()) {
            $carRides[] = $row;
        }
        return ($result->num_rows > 0) ? $carRides : false;
    }

    
    public static function getAllDriverRides($idUser)
    {
        $sql = "SELECT u.id_user, r.id_ride, r.id_car, r.time_left, r.time_arrived, r.place_left, r.place_arrived, r.km_before,
                r.km_after, r.note
                FROM rides r
                JOIN users_rides ur ON r.id_ride = ur.id_ride
                JOIN users u ON ur.id_user = u.id_user
                WHERE u.id_user = '$idUser'";
        $result = Database::query($sql);
        while ($row = $result->fetch_assoc()) {
            $userRides[] = $row;
        }
        return $userRides;
    }

    public static function getIdByEmail($email)
    {
        $sql = "SELECT id_user
                FROM users
                WHERE email = '$email'";
        
        $result = Database::query($sql);
        while ($row = $result->fetch_assoc()) {
            $id = $row;
        }
        return $id;
    }

    public static function authenticate($email, $password)
    {
        $hashedPassword = md5($password . self::SALT);
        $sql = "
        SELECT * FROM USERS
        WHERE email LIKE '$email' AND password LIKE '$hashedPassword'
        ";
        $result = Database::query($sql);
        if ($result->num_rows > 0) {
            return true;
        }
    }

    public static function getUserById($idUser)
    {
        $sql = "SELECT * FROM users
                WHERE id_user = '$idUser'";
        $result = Database::query($sql);
        while ($row = $result->fetch_assoc()) {
            $user = $row;
        }
        return $user;
    }

    public static function getRideById($idRide)
    {
        $sql = "SELECT * FROM rides
                WHERE id_ride = '$idRide'";
        $result = Database::query($sql);
        while ($row = $result->fetch_assoc()) {
            $ride = $row;
        }
        return $ride;
    }

    public static function getCarById($idCar)
    {
        $sql = "SELECT * FROM cars
                WHERE id_car = '$idCar'";
        $result = Database::query($sql);
        while ($row = $result->fetch_assoc()) {
            $car = $row;
        }
        return $car;
    }

    
    public static function getUserRole($email)
    {
        $sql = "SELECT * FROM users
        WHERE email LIKE '$email'";
        $result = Database::query($sql);
        while ($row = $result->fetch_assoc()) {
            return $row ['id_role'];
        }
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

    public static function getAllUsers()
    {
        $sql = 'SELECT * FROM users;';
        $result = Database::query($sql);
        while ($row = $result->fetch_assoc()) {
            $employees[] = $row;
        }

        return $employees;
    }

    

    public static function getAllRides()
    {
        $sql = "SELECT * FROM rides;";
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
        $sql = "UPDATE cars SET 
        type = '$type',
        SPZ = '$SPZ'";

        
        return  Database::query($sql);
    }

    
    public static function editUser($id_user, $id_role, $firstname, $surname, $email, $password = "")
    {
        if (empty($password)) {
            $sql = "UPDATE users SET 
            id_role = $id_role,
            firstname = '$firstname',
            surname = '$surname',
            email = '$email'
            WHERE id_user = $id_user
        ";
        } else {
            $hashedPassword = md5($password . self::SALT);
            $sql = "UPDATE users SET 
            id_role = '$id_role',
            firstname = '$firstname',
            surname = '$surname',
            email = '$email',
            password = '$hashedPassword'
            WHERE id_user = $id_user
            ";
        }
        return Database::query($sql);
    }

    public static function editRides($idUser, $idCar, $timeLeft, $timeArrived, $placeLeft, $placeArrived, $kmBefore, $kmAfter, $note, $state)
    {
        $sql = "UPDATE rides SET
              id_user = '$idUser',
              id_car= '$idCar',
              time_left = '$timeLeft',
              time_arrived = '$timeArrived',
              place_left = '$placeLeft',
              place_arrived = '$placeArrived',
              km_before = '$kmBefore',
              km_after = '$kmAfter',
              note = '$note',
              state = '$state',
        WHERE id_ride = $id_ride";

        return  Database::query($sql);
    }

    public static function addCar($type, $SPZ)
    {
        $sql = "INSERT INTO cars(type, SPZ)
        VALUES ('$type', '$SPZ')";
        return  Database::query($sql);
    }

    public static function addUser($role, $firstname, $surname, $email, $password)
    {
        $hashedPassword = md5($password . self::SALT);
        $sql = "INSERT INTO users (id_role, firstname, surname, email, password)
        VALUES ('$role', '$firstname', '$surname', '$email', '$hashedPassword')";
        return Database::query($sql);
    }


    public static function addRide($car, $timeLeft, $timeArrived, $placeLeft, $placeArrived, $kmBefore, $kmAfter, $note)
    {
        $timeLeft = date("Y-m-d H:i:s", strtotime($timeLeft));
        $timeArrived = date("Y-m-d H:i:s", strtotime($timeArrived));
    
        $sql = "INSERT INTO rides 
        (`id_car`, `time_left`, `time_arrived`, `place_left`, `place_arrived`, `km_before`, `km_after`, `note`)
        VALUES ('$car', '$timeLeft', '$timeArrived','$placeLeft', '$placeArrived', '$kmBefore', '$kmAfter', '$note')";
        return Database::query($sql);
    }
}
