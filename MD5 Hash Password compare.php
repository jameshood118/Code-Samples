<?PHP $hashtofind=$_POST['hash']; 
?> 
<form action="" method="post" name="hash dicovery"> 
Input word to find the hash: <input name="hash" type="text" /> 
<input name="Submit" type="submit" value="Uncover" /> 
<input name="Reset" type="submit" value="Reset" /> 
</form> 
<?PHP 
if ($hashtofind==''){ 
print ('You Really need to input a value'); 
exit; 
} else { 
$hash = md5($hashtofind); 
} 
?> 
<?PHP if (isset($_POST['Submit'])) { ?> 
Hash Discovered! 
<?PHP echo $hash ?> 
<?PHP} ?> 
<?PHP if (isset($_POST['Reset'])) { 
unset ($_POST['Submit']); 
}?> 
