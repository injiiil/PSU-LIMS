<?php
function dbcon(){
    $user = "root";
    $pass = "";
    $host = "localhost";
    $db = "psu";
    
    $conn = mysqli_connect($host, $user, $pass, $db);
    
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    
    return $conn;
}

// Get base URL
function getBaseUrl(){
    return "http://".$_SERVER['HTTP_HOST']."/psu/";
}

// Get root directory path
function getRootPath(){
    return $_SERVER['DOCUMENT_ROOT']."/psu/";
}

// Parse query string
function parseQueryString(){
    $queryString = $_SERVER['QUERY_STRING'];
    parse_str($queryString, $data);
    
    return $data;
}
?>