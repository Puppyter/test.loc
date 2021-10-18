<?php

namespace Repositories;

class CsvManipulator
{
    private $db = null;
//    private function openDB($filename){
//        if ($this->db === null)
//        {
//            return $this->db = fopen($filename,'a+');
//        }
//        return null;
//    }
//    private function closeDB()
//    {
//        if ($this->db !== null)
//        {
//            return fclose($this->db);
//        }
//        return null;
//    }
    public function addToCsv($filename,$data)
    {
        $db = fopen($filename, 'a+');
        foreach ($data as $fields)
        {
            fputcsv($db,$fields, ';');
        }
        fclose($db);
    }
    public function csvToArrray($filename)
    {
        $list=null;
        $db = fopen($filename, 'a+');
        while (($data = fgetcsv($db, 0, ";")) !== FALSE) {
            $list[] = $data;
        }
        fclose($db);
        return $list;
    }

}