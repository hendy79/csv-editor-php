<?php

if (isset($_POST['submit'])) {
    // Collect the form data.
    $fdata = $_POST['head'];
    #$fdata = str_replace('"', '', $dat);

        #$fileName = "csv/data.csv"; 
        $fileName = fopen("csv/data.csv","w");

        #file_put_contents($fileName, $fdata);
        #fputcsv($fileName,$fdata,";");
        fwrite($fileName, implode(';',$fdata)."\n");
        #fputs($fileName, implode(';', $fdata)."\n");
    
}