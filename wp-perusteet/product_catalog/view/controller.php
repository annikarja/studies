<?php

function filters() {
    $filters['tyyppi'] = $_GET['tyyppi'] ?? null;
    $filters['maa'] = filter_var($_GET['maa'], FILTER_SANITIZE_STRING) ?? null;
    //$filters['pullokoko'] = $_GET['pullokoko'] ?? null;
    $filters['hinta-ala'] = filter_var($_GET['hinta-ala'], FILTER_SANITIZE_NUMBER_INT) ?? null;
    $filters['hinta-yla'] = filter_var($_GET['hinta-yla'], FILTER_SANITIZE_NUMBER_INT) ?? null;
    $filters['energia-ala'] = filter_var($_GET['energia-ala'], FILTER_SANITIZE_NUMBER_INT) ?? null;
    $filters['energia-yla'] = filter_var($_GET['energia-yla'], FILTER_SANITIZE_NUMBER_INT) ?? null;
    $filters['submit'] = $_GET['submit'] ?? null;
    return $filters;    
}