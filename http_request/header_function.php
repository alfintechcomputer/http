<?php
 
header('Content-Type: application/pdf');
 
header('HTTP/1.1 500 Internal Server Error');
 
header('HTTP/1.1 404 Not Found');
 
header('Content-Disposition: attachment;  filename="awesome.docx"')
 
?>