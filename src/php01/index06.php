<?php
function text($number1, $number2)
{
    $value = $number1 + $number2;
    return $value;
}

$total =text(2,3);
echo $total;
echo '<br/>';

//php1-7関数　問題1  ※惜しいのでもう一回やること!!
function score($score1, $score2, $score3)
{
    $allScore = $score1 + $score2 + $score3;
    return $allScore;
}

$total = score(50,100,50);
if($total > 210){
    echo '合計点は'. $total . 'なので合格です';
}else{
    echo '合計点は'. $total . 'なので不合格です';
}
echo '<br/>';

//php1-7関数　問題2 ※出力される答えはあってるからもう一歩ファイト!!
function triangular($bottom, $height){
    $triangular = ($bottom * $height) * 0.5;
    return $triangular;
}

function square($bottom, $height){
    $square = $bottom * $height;
    return $square;
}

function trapezoid($top,$bottom, $height){
    $trapezoid =($top + $bottom) * $height * 0.5;
    return $trapezoid;
}

echo triangular(10,10);
echo '<br/>';
echo square(10,10);
echo '<br/>';
echo trapezoid(10,10,10);



?>