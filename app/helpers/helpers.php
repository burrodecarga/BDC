<?php

define('DIA',array('domingo','lunes','martes','miércoles','jueves','viernes','sábado'));

function price($value){
    return number_format($value, 2). ' L';
}

function randomIntFromInterval($min, $max) { // min and max included
    return  floor(rand() * ($max - $min + 1) + $min);
  }
