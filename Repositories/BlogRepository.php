<?php

namespace Repositories;


class BlogRepository
{
    private static $arrCsv = null;
    private static $csvName = "./DB/blogs.csv";

    public static function arrayBuilder($blogName, $blog, $id = null): array
    {
        return ["id"=>$id, "blogName" => $blogName, "blog" => $blog];
    }

    private static function getNextAfterLastId()
    {
        $array = self::getAll();
        if ($array != null) {
            $lastInArr = end($array);
            return $lastInArr["id"] +1;
        }
        return null;
    }
    public static function  getAll()
    {
        foreach (CsvManipulator::csvToArrray(self::$csvName) as $value) {
            self::$arrCsv[] =  ["id" => $value[0], "blogName" => $value[1], "blog" => $value[2]];
        }
        return self::$arrCsv;
    }
    public static function getById($id)
    {
        foreach (self::getAll() as $value)
        {
            if ($value["id"] == $id)
            {
                return $value;
            }
        }
        return null;
    }
    public static function deleteById($id)
    {
        CsvManipulator::deleteData(self::$csvName,$id);
    }
    public static function putInDataBase($data)
    {
        if ($data["id"] == null)
        {
            $data["id"] = self::getNextAfterLastId();
        }
        CsvManipulator::addToCsv(self::$csvName,$data);
    }
}