<?php

namespace Repositories;

class CsvManipulator
{
    public function addToCsv($filename, $data)
    {
        foreach ($data as $value)
        {
         $val = preg_replace('/\s/', '<br>', $value);
         $newData[] = $val;
        }
        var_dump($newData);
        $db = fopen($filename, 'a+');
        fputcsv($db, $newData, ';');
        fclose($db);
    }

    public function csvToArrray($filename)
    {
        $arrCsv =null;
        $arrOfCsvString = array_map('str_getcsv', file($filename));
        foreach ($arrOfCsvString as $value)
        {
           $csv = explode(";", $value[0]);
           $arrCsv[] = $csv;
        }
        return $arrCsv;
    }

}