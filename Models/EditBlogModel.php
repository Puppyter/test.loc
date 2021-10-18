<?php
namespace Models;

use Repositories\CsvManipulator;

class EditBlogModel
{
    private $id = 0;
    private $csvName = 'DB/blogs.cvs';
    public function blogPost($data)
    {
        $csv = $this->callCsv();
        $newData = array_merge(array("id"=>$this->getID()), $data);
        var_dump($newData);
        $csv->addToCsv($newData, $this->csvName);
    }
    private function getID()
    {
        $csv = $this->callCsv();
        $arrCsv = $csv->csvToArrray($this->csvName);
        if (!empty($arrCsv))
        {
        $lastInArr = $arrCsv[array_key_last($arrCsv)];
            return $lastInArr[0] + 1;
        }
        return $this->id;
    }
    private function callCsv()
    {
        return new CsvManipulator();
    }
}