<?php 
require_once("config/status_codes.php");

$randaom_numbers = array_rand($status_codes, 4);

foreach($randaom_numbers as $index) {
    $options[] = $status_codes[$index];
}

$question = $options[mt_rand(0,3)];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/sanitize.css">
</head>
<body>
    <header>
        <div class="header__inner">
            <a class="header__logo" href="/php04">Status Code Quiz</a>
        </div>
    </header>

    <main>
        <div class="quiz__content">
            <div class="question">
                <P class="question__text">Q. 以下の内容に当てはまるステータスコードを選んでください</P>
                <P class="question__text"><?php echo $question["description"]?></P>
            </div>
            <form class="quiz-form" action="result.php" method="post">
                <input type="hidden" name="answer_code" value="<?php echo $question["code"]?>">
                <div class="quiz-form__item">
                    <?php foreach($options as $option):?>
                    <div class="quiz-form__group">
                        <input class="quiz-form__radio" id="<?php echo $option["code"]?>" type="radio" name="option" value="<?php echo $option["code"]?>">
                        <label class="quiz-form__label" for="<?php echo $option["code"]?>"><?php echo $option["code"]?></label>
                    </div>
                    <?php endforeach?>
                </div>
                <div class="quiz-form__buttom">
                    <button class="quiz-form__buttom-submit" type="submit">回答</button>
                </div>
            </form>
        </div>

    </main>


</body>
</html>