<?php
//for文
for ($i = 1; $i <= 5; $i++) {
    echo $i * 2 ."<br/>";
}

//while文
$count = 0;
while($count < 20) {
    $count += 1;
    echo $count . '<br/>';
}


//while-break/continue
$count = 0;
while($count <= 100) {
    if($count === 20) {
    break;
    }
    if($count % 3 === 0) {
    $count++;
    continue;
    }
    echo $count . '<br/>';
    $count++;
}

//do...while
$num = 0;
do {
    echo 'num = '. $num . '<br/>';
    $num++;
}while ($num < 3);

//応用問題1
for ($i = 1; $i <= 50; $i++) {
    if($i % 3 === 0 && $i % 5 === 0) {
        echo 'FizzBuzz' . '<br/>';
    }elseif($i % 3 === 0){
        echo 'Fizz' . '<br/>';
    }elseif($i % 5 === 0 ){
        echo 'Buzz' . '<br/>';
    }else{
        echo $i . '<br/>';
    }
}

//応用問題2
$c = '⚫︎';
for ($a = 1; $a <= 5; $a++){
    for ($b = 1; $b <= 5; $b++){
    echo $c;
}
echo '<br/>';
}



?>

