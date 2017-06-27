<a href="#" onClick="window.open('galleryviewer.php 
?gview=<?php echo $gallery?>&gimage=<?php echo $name?>', 
'Gallery Viewer','width=800,height=600')"> 
<img src="images/<?php echo $gallery?>/<?php echo $name?>" width=200></a> 

$gview=$_GET['gview']; 
$gimage=$_GET['gimage']; 
