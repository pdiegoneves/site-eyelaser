<?php
$mode = 'development';
// $mode = 'production';
if($mode === 'development'){
    define('BASEURL', 'http://localhost/eyelaser/app/');
} elseif($mode === 'production') {
    define('BASEURL', 'https://eyelaser.maceioti.com.br/app/');
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eye Laser Center</title>
    <link rel="stylesheet" href="<?=BASEURL?>assets/css/styles.css">
</head>
<body>