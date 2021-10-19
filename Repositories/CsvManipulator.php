<?php

namespace Repositories;

class CsvManipulator
{
    public function addToCsv($filename,$data)
    {
        var_dump($data);
        $db = fopen($filename, 'a+');
        var_dump($db);
        fputcsv($db, $data, ';');
        fclose($db);
    }
    public function csvToArrray($filename)
    {
        $csv = array_map('str_getcsv', file($filename));
        return $csv;
    }

}