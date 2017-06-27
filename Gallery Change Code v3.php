$('#myModal').on('show.bs.modal', function (event) { 
var button = $(event.relatedTarget) 
var title = button.data('passedname') 
var gallery = button.data('gallery') 
var passed_name = button.data('passedname') 
var modal = $(this) 
modal.find('.modal-title').text(gallery + ' - ' + passed_name) 
modal.find('.modal-body').html(' 
<img src="images/' + gallery + '/' + passed_name + '" style="max-height:500px; max-width:500px;">') 
}) 


<a href="#Window" id="<?php echo $Idnum?>" data-gallery="<?php echo $gallery?>" 
data-passedname="<?php echo $passed_name?>" data-title="<?php echo $name?>" 
data-linkname="<?php echo $linkname?>" data-toggle="modal" data-target="#myModal"> 
<img class="GalleryThumbs" src="images/<?php echo $gallery?>/<?php echo $name?>" width=200></a> 
