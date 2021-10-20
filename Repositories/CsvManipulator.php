<?php

namespace Repositories;

class CsvManipulator
{
    public function addToCsv($filename, $data)
    {
        $newData = null;
        foreach ($data as $value)
        {
            $newString = preg_replace("/\r\n/i","<br>",$value);
            $newData[] = $newString;
        }
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