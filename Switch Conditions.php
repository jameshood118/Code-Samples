switch ($category){ 
case 'seasons': 
switch ($seasons){ 
case 'winter': 
$destination_file="images/".$seasons."/
".$seasons."".$wintercount.".jpg"; 
break; 
case 'spring': 
$destination_file="images/".$seasons."/
".$seasons."".$springcount.".jpg"; 
break; 
case 'summer': 
$destination_file="images/".$seasons."/
".$seasons."".$summercount.".jpg"; 
break; 
case 'fall': 
$destination_file="images/".$seasons."/
".$seasons."".$fallcount.".jpg"; 
break; 
} 
break; 
case 'products': 
$destination_file="images/itempics/".$products.".jpg"; 
break; 
case 'images': 
$destination_file="images/slides/".$slidescount.".jpg"; 
break; 
} 
