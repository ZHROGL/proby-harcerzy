<?php
$rys = 12;
$orl = 12.0001;

$pass = $_POST['passwd'];
if($pass == 'superhaslo'){
    echo("<table style='border-collapse: collapse'>");
    echo('<tr>');
    echo("<td style='border: 1px solid black'>Rysie:</td><td style='border: 1px solid black'>".$rys .'</td>');
    echo('</tr>');
    echo("<td style='border: 1px solid black'>Orły:</td><td style='border: 1px solid black'>". $orl .' </td>');









}
else{
    echo('złe hasełko');
}

?>