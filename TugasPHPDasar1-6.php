<?php

echo '<h2 align="center">' . 'Saya Belajar PHP' .'</h2>';
echo '<br>'.'<br>';
$a=100;
echo $a. ' x '. $a . ' = ';

$aa=$a*$a;

echo $aa;

$angka= array(10,100,1000,$aa);
echo '<br>'.'<br>';

$nm= array(
    'Jalu' => $angka[0],
    'Ghifran'=> $angka[1],
    'Kaido'=> $angka[2],
    'Shanks'=> $angka[3]);

    foreach($nm as $key =>$value){
        echo $key . ' Memiliki Uang ' . $value . '<br><br>'; 
    }

    require_once "nav.php";




















?>