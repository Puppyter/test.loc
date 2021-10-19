<?php

namespace Models;

use Repositories\CsvManipulator;

class NewBlogModel
{
    private $csv = null;
    private $id = 0;
    private $csvName = "./DB/blogs.csv";

    public function blogPost($data)
    {
        $csv = new CsvManipulator();
        $newData = array_merge(array($this->getID()), $data);
        $csv->addToCsv($this->csvName, $newData);
    }

    private function getID()
    {
        $csv = new CsvManipulator();
        $arrCsv = $csv->csvToArrray($this->csvName);
        if (empty($arrCsv)) {
            return $this->id;
        }
        $lastInArr = $arrCsv[array_key_last($arrCsv)];
        return $lastInArr[0] + 1;
    }
}