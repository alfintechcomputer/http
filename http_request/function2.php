<?php
function redirect($new_page) {
    header('Location: ' . $new_page);
    exit;
}
 
redirect('https://www.alfintechcomputer.com');
?>
