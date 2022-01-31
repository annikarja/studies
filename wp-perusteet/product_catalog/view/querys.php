<?php
    $filters = filters();
    $other_filters = false;

    if (isset($_GET['submit'])) {
        $query = 'SELECT * FROM hinnasto WHERE ';

        // TYYPPI
        if ($filters['tyyppi']) {
            $query .= ' tyyppi LIKE "%'.$filters['tyyppi'].'%"';
            $other_filters = true;
        }

        // VALMISTUSMAA
        if ($filters['maa']) {
            if($other_filters) {
                $query .= ' AND valmistusmaa = "'.$filters['maa'].'"';
            } else {
                $query .= ' valmistusmaa = "'.$filters['maa'].'"';
                $other_filters = true;
            }
        }

        // HINTA, ALA- JA YLÄRAJA
        if ($filters['hinta-ala'] && $filters['hinta-yla'] == null) {
            if ($other_filters) {
                $query .= ' AND hinta >= "'.$filters['hinta-ala'].'"';
            } else {
                $query .= ' hinta >= "'.$filters['hinta-ala'].'"';
                $other_filters = true; 
            }
        }
        if ($filters['hinta-ala'] && $filters['hinta-yla']){
            if ($other_filters) {
                $query .= ' AND hinta BETWEEN "'.$filters['hinta-ala'].'" AND "'.$filters['hinta-yla'].'"';
            } else {
                $query .= ' hinta BETWEEN "'.$filters['hinta-ala'].'" AND "'.$filters['hinta-yla'].'"';
                $other_filters = true; 
            }
        }
        if ($filters['hinta-yla']) {
            if ($other_filters) {
                $query .= ' AND hinta < "'.$filters['hinta-yla'].'"'; 
            } else {
                $query .= ' hinta < "'.$filters['hinta-yla'].'"';
                $other_filters = true; 
            }
        }

        // ENERGIA, ALA- JA YLÄRAJA
        if ($filters['energia-ala'] && $filters['energia-yla'] == null) {
            if ($other_filters) {
                $query .= ' AND energia >= "'.$filters['energia-ala'].'"';
            } else {
                $query .= ' energia >= "'.$filters['energia-ala'].'"'; 
                $other_filters = true; 
            }
        }
        if ($filters['energia-ala'] && $filters['energia-yla']){
            if ($other_filters) {
                $query .= ' AND energia BETWEEN "'.$filters['energia-ala'].'" AND "'.$filters['energia-yla'].'"';
            } else {
                $query .= ' energia BETWEEN "'.$filters['energia-ala'].'" AND "'.$filters['energia-yla'].'"';
                $other_filters = true; 
            }
        }

        if ($filters['energia-yla']) {
            if ($other_filters) {
                $query .= ' AND energia < "'.$filters['energia-yla'].'"';
            }else {
                $query .= ' energia < "'.$filters['energia-yla'].'"'; 
                $other_filters = true; 
            }
        }
        $count = mysqli_query($conn, $query);
        $total_records = mysqli_num_rows($count);

        $query .= 'LIMIT '.$start.', '.$rows;
        $httpquery = http_build_query($filters);
        
    } else if (isset($_GET['tyhjenna'])) {
        $count = 'SELECT COUNT(*) from hinnasto';
        $result = mysqli_query($conn, $count);     
        $total_records = mysqli_fetch_row($result)[0];

        $query = "SELECT * FROM hinnasto ORDER BY tyyppi LIMIT $start, $rows";
        $httpquery = "";
        $start = 0;
    } else {
        $count = 'SELECT COUNT(*) from hinnasto';
        $result = mysqli_query($conn, $count);     
        $total_records = mysqli_fetch_row($result)[0];

        $count = 'SELECT COUNT(*) from hinnasto';
        $query = "SELECT * FROM hinnasto ORDER BY tyyppi LIMIT $start, $rows";
    }
        
    $result = mysqli_query($conn, $query);