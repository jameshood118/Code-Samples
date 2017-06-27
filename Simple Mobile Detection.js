var isMobile; 
var tester = navigator.userAgent; 
if (tester.match(/(Tablet PC)|(sprint) 
|(mobile)|(android)|(webos)|(iPhone)|(iPad) 
|(sprint)|mobile)|(android)|(ipod)|(blackberry) 
|(iemobile)|(Touch)|(opera mini)|(palm)|(opera mobi)/i)) { 
isMobile = true; 
} else { 
isMobile = false; 
}
