<?php

namespace Repositories;

class CsvManipulator
{
    public function addToCsv($filename, $data)
    {
        $db = fopen($filename, 'a+');
        fputcsv($db, $data, ';');
        fclose($db);
    }

    public function csvToArrray($filename)
    {
        $csv = array_map('str_getcsv', file($filename));
        return $csv;
    }

}