<?php
$myfile = "../../../../mail/edc";
echo readfile($myfile);
echo "test";
fclose($myfile);
?>