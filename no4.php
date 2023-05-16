<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport"content="width=device-width,initial-scale=1.0">

<title>PHP FORM HANDLING</title>
</head>
<body>
<?php
$namalengkap = '';
$kelas = '';

if($_SERVER["REQUEST_METHOD"] === "POST"){
    $namalengkap = datatype($_POST['namalengkap']);
    $kelas = datatype($_POST['kelas']);
}

Function datatype($datakelas)
{
    $inputdata = trim($datakelas);
$inputdata = stripslashes($datakelas);
$inputdata = htmlspecialchars($datakelas);
return $inputdata;
}
