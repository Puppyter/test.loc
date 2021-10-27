<?php

namespace Repositories;


use Models\BlogModel;

class BlogRepository
{
    private static $blogPageSize = 11;
    private static $arrCsv = null;
    private static $csvName = "./DB/blogs.csv";

    public static function allPages()
    {
        $lastBlogId = self::getBlogCount();
        $countPages = $lastBlogId / self::$blogPageSize;
        for($count = 1; $count<$countPages;$count++)
        {
            $pages[] = $count;
        }
        return $pages;
    }

    public static function dataInPage($page)
    {
        $countRecordingsOut = 0;
        if ($page == null) {
            $page = 1;
        }
        $arrPages = null;
        if ($page !=1) {
            $countRecordingsOut = $page * self::$blogPageSize;
        }
        foreach (CsvManipulator::getSomeCsvRecord(self::$csvName, $countRecordingsOut, self::$blogPageSize) as $value) {
            $arrPages[] = ["id" => $value[0], "blogName" => $value[1], "blog" => $value[2]];
        }
        return new BlogModel($arrPages);
    }

    private static function getBlogCount()
    {
            $lastBlog = CsvManipulator::getLastRecordInCsv(self::$csvName);
            return $lastBlog[0];
    }

    public static function getCurrentPage($page)
    {
        if ($page == null) {
            return 1;
        }
        return $page;
    }

    public static function getById($id)
    {
        $arr = CsvManipulator::getRecordBySomething(self::$csvName,$id);
        $newArr = ["id"=>$arr[0],"blogName"=>$arr[1],"blog"=>$arr[2]];
        return new BlogModel($newArr);
    }

    public static function deleteById($id)
    {
        CsvManipulator::deleteData(self::$csvName, $id);
    }

    public static function putInDataBase($blogName, $blog, $id = null)
    {
        if ($id === null) {
            $id = self::getNextAfterLastId();
        }
        $putData = ["id" => $id, "blogName" => $blogName, "blog" => $blog];
        CsvManipulator::addToCsv(self::$csvName, $putData);
    }

    private static function getNextAfterLastId()
    {
        $lastId = self::getBlogCount();
        if ($lastId != null) {
            return $lastId + 1;
        }
        return null;
    }
}