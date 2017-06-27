<?php $firstArray = array("random", "Strings"); 
$secondArray = array("Second Set", "second set 2"); 
$rand_keys1 = array_rand($firstArray, 1); 
$rand_keys2 = array_rand($secondArray, 1); 
?>

<form action="q=<?php echo $firstArray[$rand_keys1] 
?><?php echo $secondArray[$rand_keys2] 
?>" method="post" target="_blank"> 
<INPUT TYPE="button" onClick="history.go(0)" VALUE="Refresh"> 
<input name="submit" type="submit" Value="Submit!"/> 
</form> 
