<?php
function connect()
{
    $conn = new mysqli("localhost","root","","fietsenhandel");
    if ($conn -> connect_errno) {
        echo "Failed to connect to MySQL: " . $conn -> connect_error;
        exit();
    }else
    {
        return $conn;
    }
}
