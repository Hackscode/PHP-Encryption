<?php
$code = '
?> 
<?php
	
 @eval (gzinflate(base64_decode("")));
?>
	
<?php
';
$key = '133057facf49cbe6520b15a4d96ee395';
$iv =  '58903745273487261456345245789043';
$length = strlen($code);
$cipher = mcrypt_module_open(MCRYPT_RIJNDAEL_256,'','cbc','');
	
mcrypt_generic_init($cipher, $key, $iv);
$encrypted = base64_encode(mcrypt_generic($cipher,$code));
echo $encrypted;
?>