<?php
$array=[20,30,40,40,569,49,59,03,20,63];
foreach($array as $php ){
    echo $php."<br>";
}
function creatphp($number1,$number2){
return $number1+$number2;
};
echo creatphp(50,54)."<br>";
$i=0;
$sum=0;
for($i=0;$i<=9;$i=$i+1){
    $sum=$sum+$array[$i];
};
echo $sum."<br>";
$numbers=70;
if($numbers>=80 && $numbers<=100){
    echo "you have a+".$numbers;
}
else if($numbers>=70 && $numbers<=79){
    echo "you have a"." ".$numbers;
}
else if($numbers>=60 && $numbers<=69){
    echo "you have a-".$numbers;
}
else if($numbers>=50 && $numbers<=59){
    echo "you have b".$numbers;
}
else if($numbers>=40 && $numbers<=49){
    echo "you have c".$numbers;
}
else if($numbers>=33 && $numbers<=39){
    echo "you have d".$numbers;
}
else{
    echo "fail";
}
for($a=1;$a<=100;$a=$a+10){
    for($b=$a;$b<$a+10;$b++){
        echo "I LOVE YOU "." ".$b." ";
    }
    echo "<br>";
}

?>