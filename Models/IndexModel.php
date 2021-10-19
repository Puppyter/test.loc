<?php

namespace Models;

use Repositories\CsvManipulator;

class IndexModel
{
    private $csvName = "./DB/blogs.csv";
    public function getCsv()
    {
        $csv = new CsvManipulator();
        $arrCsv = $csv->csvToArrray($this->csvName);
        foreach($arrCsv as $value)
        {

        }
        return array("id"=>$arrCsv[0], "blogname"=>$arrCsv[1]);
    }
}