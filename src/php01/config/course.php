<?php
$company = htmlspecialchars($_POST['company'], ENT_QUOTES);
print "会社名は" . $company . "ですね";


http://localhost/php01/config/course.php?company=%E6%A0%AA%E5%BC%8F%E4%BC%9A%E7%A4%BE+estra+&submit=%E9%80%81%E4%BF%A1%E3%81%99%E3%82%8B

http://localhost/php01/config/course.php