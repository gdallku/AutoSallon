<?php
//Krijimi i databazes
$serverName= "localhost";
$dbUsername = "root";
$dbPassword="";
$dbName="Projekti";

$conn = mysqli_connect($serverName,$dbUsername,$dbPassword,$dbName);
if(!$conn){
    die("Konektimi deshtoi: ".mysqli_connect_error());
}