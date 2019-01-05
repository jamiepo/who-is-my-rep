
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


<?php

$json_rep = file_get_contents('https://whoismyrepresentative.com/getall_mems.php?zip='.$_GET['zip'].'&output=json');
$rep_array = json_decode($json_rep);
var_dump($rep_array);

?>







 



</body>
</html>