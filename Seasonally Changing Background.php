<?PHP 
// Season of year script 
$season = date("z"); 
// Code below is for spring 
if ($season 
<=1 72 and $season>= 79) { 
$m_season = "background-spring"; 
} else { 
// Code below is for Summer 
if ($season 
<=2 63 and $season>= 173) { 
$m_season = "background-summer"; 
} else { 
// Code below is for Autumn 
if ($season 
<=3 55 and $season>= 264) { 
$m_season = "background-fall"; 
} else { 
// Code below is for Winter 
$m_season = "background-winter"; 
} 
} 
} 
// End of season of year 
?> 
html, body { 
background: #E2EF97 url('images/<?PHP echo $m_season?>.jpg') no-repeat; 
} 
