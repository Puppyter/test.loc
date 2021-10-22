<?php

namespace Repositories;


use Models\BlogModel;

class BlogRepository
{
    private static $blogPageSize = 9;
    private static $arrCsv = null;
    private static $csvName = "./DB/blogs.csv";

    private static function getNextAfterLastId()
    {
        $lastId = self::getBlogCount();
        if ($lastId != null) {
            return $lastId + 1;
        }
        return null;
    }
    private static function getBlogCount(){
        $allBogs = self::getAll()->data;
        if ($allBogs != null) {
            $lastBlog = end($allBogs);
            return $lastBlog["id"];
        }
        return null;
    }

    public static function blogPages(){
        $arrPages = null;
        $dataCount =0;
        $lastBlogId = self::getBlogCount();
        $data = self::getAll()->data;
        $countPages = $lastBlogId / self::$blogPageSize;
        for($count = 1; $count<=$countPages; $count++)
        {
            for ($countTwo=0;$countTwo<=self::$blogPageSize;$countTwo++)
            {

                    $dataInPage[] = $data[$dataCount];
                    $dataCount++;

            }

            $arrPages[$count] = $dataInPage;
            $dataInPage = [];
        }
        return new BlogModel($arrPages);
    }
    public static function  getAll()
    {
        foreach (CsvManipulator::csvToArrray(self::$csvName) as $value) {
            self::$arrCsv[] =  ["id" => $value[0], "blogName" => $value[1], "blog" => $value[2]];

        }
        return new BlogModel(self::$arrCsv);
    }
    public static function getById($id)
    {
        foreach (self::getAll() as $value)
        {
            if ($value["id"] == $id)
            {
                return new BlogModel($value);
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