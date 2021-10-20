<?php

namespace Models;

use Repositories\CsvManipulator;

class EditBlogModel
{
    private $newArrCsv = null;
    private $csvName = "./DB/blogs.csv";
    public function getCsv($id)
    {
        $csvManipulator = new CsvManipulator();
        $arrCsv = $csvManipulator->csvToArrray($this->csvName);
        foreach ($arrCsv as $value) {
            if ($value[0] == $id)
            {
                $this->newArrCsv[] = ["blogname" => $value[1], "blog" => $value[2]];
            }
        }
        return $this->newArrCsv;
    }
}