<?php
$name = htmlspecialchars($_POST["name"], ENT_QUOTES);
print "私の名前は、" . $name;
echo '<br/>';

$radio = htmlspecialchars($_POST["radio"], ENT_QUOTES);
print "ご希望の商品は、". $radio;
echo '<br/>';

$number = htmlspecialchars($_POST["order"], ENT_QUOTES);
print "ご注文数は、".$number;