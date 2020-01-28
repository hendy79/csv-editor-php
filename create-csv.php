<?php

if (isset($_POST['submit'])) {
    // Collect the form data.
    $fdata = $_POST['head'];

        #$fileName = "csv/data.csv";
        #file_put_contents($fileName, $fdata);
        $fileName = fopen("csv/data.csv","w");
        fputcsv($fileName,$fdata,";");
    
}