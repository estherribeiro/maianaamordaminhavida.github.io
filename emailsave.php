<?php
$email = $_POST['email'];
$fp = fopen("formemails.txt", "a");
$savestring = $email ."\n";
fwrite($fp, $savestring);
fclose($fp);
echo "Email Saved";
?>