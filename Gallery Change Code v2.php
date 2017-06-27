$(document).on("click", ".OpenWindow", function () { 
var ShownGallery = $(this).attr('gallery'); 
var ImageName = $(this).attr('title'); 
$(".modal-content").empty() 
.append('<img src="images/'+ShownGallery+'/'+ImageName+'"> '); 
});
 
<a href="#Window" class="OpenWindow" data-toggle="modal" 
gallery="<?php echo $gallery?>" title="<?php echo $name?>" > 
<img src="images/<?php echo $gallery?>/<?php echo $name?>" width=200></a> 
