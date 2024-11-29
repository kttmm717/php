<?php 

for($i=1; $i <=10; $i++) {
    if($i % 2 == 1) {
        continue;
    }
    echo $i;
    echo "<br />";
}

$i = 0;

while($i <= 10) {
    if($i == 5) {
        break;
    }
    echo $i;
    $i++;
    echo "<br />";
}

for($i=1; $i<=100; $i++) {
    if($i % 3 == 0) {
        continue;
    }
    if($i === 20) {
        break;
    }
    echo $i;
    echo "<br />";
}

$i = 0;
do{
    echo $i;
    echo "<br />";
    $i++;
} while($i < 5);

$num = 0;
do{
    echo "num = " . $num ;
    echo "<br />";
    $num++;
}while($num <= 2);

for($i=1; $i<=50; $i++) {
    if($i % 3 == 0 && $i % 5 == 0) {
        echo "FizzBuzz";
    }elseif($i % 3 == 0) {
        echo "Fizz";
    }elseif($i % 5 == 0) {
        echo "Buzz";
    }else {
        echo $i;
    }
    echo "<br />";
}

for($i=1; $i<=5; $i++) {
    for($j=1; $j<=5; $j++) {
        echo"●";
    }
    echo "<br />";
}


?>