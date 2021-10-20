<?php

namespace Models;

use Repositories\CsvManipulator;

class IndexModel
{
    private $newArrCsv = null;
    private $csvName = "./DB/blogs.csv";
    public function getCsv()
    {
        $csv = new CsvManipulator();
        $arrCsv = $csv->csvToArrray($this->csvName);
        foreach ($arrCsv as $value) {
            $this->newArrCsv[] =  ["id" => $value[0], "blogname" => $value[1]];
        }
        return $this->newArrCsv;
    }
}