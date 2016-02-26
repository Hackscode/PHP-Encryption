
<?php
	$file = file_get_contents("anonghost.php");   //Remove the "<?php" tag from the input file ( unencrypted file) 
    echo $qw = (base64_encode(gzdeflate($file)));
	?>
	