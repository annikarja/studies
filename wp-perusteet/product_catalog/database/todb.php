<?php 
    require_once 'connection.php';

    $filename = "data/alkon-hinnasto.csv";
    $table = "hinnasto";

    $file = fopen($filename, 'r');
    $first = true;

    fgetcsv($file);

    $columns = ['numero', 'nimi', 'valmistaja', 'pullokoko', 'hinta', 'litrahinta', 'tyyppi', 'valmistusmaa', 'vuosikerta', 'alkoholi', 'energia'];
    
    while ($data = fgetcsv($file, 1000, ";", "\n")) {
        for($i = 0; $i < 11; $i++) {
           if (empty($data[$i])) {
            $data[$i] = 'NULL';
           }      
        }   

        $sql = 'INSERT INTO '.$table.' (numero, nimi, valmistaja, pullokoko, hinta, litrahinta, tyyppi, valmistusmaa, vuosikerta, alkoholi, energia) VALUES' 
                 .'('.$data[0].', "'.$data[1].'", "'.$data[2].'", "'.$data[3].'", '.$data[4].', '.$data[5].', "'.$data[6].'", "'.$data[7].'", '.$data[8].', '.$data[9].', '.$data[10].')';

        
        echo "<script>console.log('$data[0], $data[1], $data[2], $data[3], $data[4], $data[5], $data[6], $data[7], $data[8], $data[9], $data[10]');</script>";
        
        if(!mysqli_query($conn, $sql)){
           //die('There was an error running the query [' . $conn->error . '])');
           continue;
        }
    }
    echo "<script>console.log('All good! :)');</script>";
    fclose($file);
    mysqli_close($conn);

