<?php
/**
 * Created by PhpStorm.
 * User: kaido.tikk
 * Date: 13.12.2018
 * Time: 13:08
 */
// muutujate defineerimine
// $muutujaNimi = väärtus
$taisArv = 3;
$reaalArv = 3.3;
$sone = '3';
$toeVaartusTrue = true;
$toeVaartusFalse = false;
// väljastame muutujad koos selgitusega
echo'Täisarv '.$taisArv.'<br>';
echo'reaalArv '.$reaalArv.'<br>';
echo'Sõne '.$sone.'<br>';
echo'True '.$toeVaartusTrue.'<br>';
echo'False '.$toeVaartusFalse.'<br>';
echo '<hr>';
// tüübikontroll
echo gettype($sone);
echo '<hr>';
$summa = $sone + $sone;
settype($summa, 'string');
echo gettype($summa);
echo 'Summa = '.$summa.'<br>';