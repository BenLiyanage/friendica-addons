<?php

if(! function_exists("string_plural_select_ro")) {
function string_plural_select_ro($n){
	return ($n==1?0:((($n%100>19)||(($n%100==0)&&($n!=0)))?2:1));;
}}
;
$a->strings["Numfriends settings updated."] = "Configurările NumFriends au fost actualizate.";
$a->strings["Numfriends Settings"] = "Configurări NumFriends";
$a->strings["How many contacts to display on profile sidebar"] = "Câte contacte se afișează în bara laterală a profilului ";
$a->strings["Save Settings"] = "Salvare Configurări";
