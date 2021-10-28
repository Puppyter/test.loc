<?php

namespace Repositories;

class UserRepository
{
    private static $filename = "./DB/users.csv";
    public static function addNewUser($data)
    {
        if (self::isUserInDataBase($data["userName"]) == false) {
            CsvManipulator::addToCsv(self::$filename, $data);
        }
    }

    public static function authorized($userName, $userPassword)
    {
        if (self::isUserInDataBase([$userName,$userPassword]) == true){
            return true;
        }
        return false;
    }

    public static function getUserData($id)
    {
        $data = CsvManipulator::getRecordBySomething(self::$filename,$id);
        if ($data != null)
        {
            return $data;
        }
        return null;
    }

    public static function editUserData($data)
    {
        if (self::isUserInDataBase($data["userName"]) == true)
        {
            CsvManipulator::editData(self::$filename, $data);
        }
    }

    private static function isUserInDataBase($data)
    {
        if (CsvManipulator::getRecordBySomething(self::$filename,$data) == null) {
            return true;
        }
        return false;
    }
}