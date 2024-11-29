<?php

require_once("functions/search_city_time.php");

$tokyo = searchCityTime("東京");

$city = htmlspecialchars($_GET["city"], ENT_QUOTES);
$comparison = searchCityTime($city);

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/result.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/sanitize.css">
</head>
<body>

<header class="header">
    <div class="header__inner">
      <a class="header__logo" href="/php03/index.php">
        World Clock
      </a>
    </div>
</header>

<div class="result__container">
    <div class="result__cards">
        <div class="result__card">
            <div class="img__wrapper">
                <img class="result-card__img" src="img/<?php echo $tokyo["img"]?>" alt="">
            </div>
            <div class="result-card__body">
                <p class="result-card__city"><?php echo $tokyo["name"]?></p>
                <p class="result-card__time"><?php echo $tokyo["time"]?></p>
            </div>
        </div>
        <div class="result__card">
            <div class="img__wrapper">
                <img class="result-card__img" src="img/<?php echo $comparison["img"]?>" alt="">
            </div>
            <div class="result-card__body">
                <p class="result-card__city"><?php echo $comparison["name"]?></p>
                <p class="result-card__time"><?php echo $comparison["time"]?></p>
            </div>
        </div>
    </div>
</div>


</body>
</html>