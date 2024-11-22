<?php
//if文
$a = 5;
$a = 7;
if($a === 5){
    echo "\$aは5です";
}elseif($a === 7){
    echo "\$aは7です";
}else{
    echo "no";
}
echo "<br/>";

//switch文
$people = "Saburo";
switch($people) {
    case "Jiro":
        echo "二郎です";
        break;
    case "Saburo":
        echo "三郎です";
        break;
}
echo "<br/>";

//三項演算子
$result = ($a == 7) ? "TRUE" : "FALSE";
echo $result;

?>