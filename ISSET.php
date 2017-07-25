<?PHP if (isset($_POST['Edit'])) { 
//Code to be rendered only if it finds Edit in the POST Super global 
}?> 

<?PHP 
if (isset($_POST['Abort_Edit'])) { 
unset ($_POST['Edit']); 
} 
?> 
