<?php

namespace Repositories;

class CsvManipulator
{
    public static function deleteData($filename, $id)
    {
        $file = fopen($filename,"r");
        $tmpFile = tempnam("/DB","FOO");
        $fileTmp = fopen($tmpFile,"w");
        while (!feof($file))
        {
            $line = fgetcsv($file,0,";");
            if (!in_array($id,$line))
            {
                fputcsv($fileTmp,$line,";");
            }
        }
        if (rename($tmpFile,$filename)) {
            fclose($file);
            unlink($file);
        }
    }
    public static function editData($filename,array $data)
    {
        $file = fopen($filename,"r");
        $tmpFile = tempnam("/DB", "FOO");
        $fileTmp = fopen($tmpFile,'w');
        while (!feof($file))
        {
            $line =fgetcsv($file,0,";");
            if (in_array($data[0],$line))
            {
                fputcsv($fileTmp,$data,";");
            }
            else{fputcsv($fileTmp,$line,";");}
        }
        if (rename($tmpFile,$filename)) {
            fclose($file);
            unlink($file);
        }
        fclose($fileTmp);
    }
    public static function getLastRecordInCsv($filename)
    {

        $file = fopen($filename, 'r');
        while(!feof($file)) {

            $line = fgetcsv($file, 0, ";");
            if ($line!=false)
            {
                $lineTwo =$line;
            }
        }
        fclose($file);
        return $lineTwo;
    }

    public static function getSomeCsvRecord($filename, $countRecordingsOut, $countRecordings)
    {
        $file = fopen($filename,'r');
        $arrCsv = null;
        $row =0;
        $count=0;
        while (!feof($file))
        {
            $line =  fgetcsv($file, 0, ';');
            if ($line == false)
            {
                break;
            }
            if ($row>$countRecordingsOut) {
                $arrCsv[] = $line;
                if ($count == $countRecordings) {
                    break;
                }
                $count++;
            }

            $row++;
        }
        fclose($file);
        return $arrCsv;
    }

    public static function getRecordBySomething($filename, $needle)
    {
        $file = fopen($filename,'r');
        while(!feof($file))
        {
            $line = fgetcsv($file,0,';');
            if (in_array($needle,$line))
            {
                return$line;
            }
        }
        return null;
    }

    public static function addToCsv($filename, $data, $mode = "a+")
    {
        $newData = null;
        foreach ($data as $value) {
            $newString = preg_replace("/\r\n/i", "<br>", $value);
            $newData[] = $newString;
        }
        $file = fopen($filename, $mode);
        fputcsv($file, $newData, ';');
        fclose($file);
    }

}