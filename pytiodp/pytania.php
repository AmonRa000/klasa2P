<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Quiz</title>
</head>
<body>
    <?php
        $response='{"response_code":0,"results":[{"type":"multiple","difficulty":"medium","category":"Science: Mathematics","question":"Which of the following dice is not a platonic solid?","correct_answer":"10-sided die","incorrect_answers":["12-sided die","20-sided die","8-sided die"]}]}';

        //if($json){
            $data = json_decode($response,true);
            if($data['response_code'] == 0){
                $difficulty = $data['results'][0]['difficulty'];
                $category = $data['results'][0]['category'];
                $question = $data['results'][0]['question'];
                $correctAnswer = $data['results'][0]['correct_answer'];
                $answers = $data['results'][0]['incorrect_answers'];
                $answers[] = $correctAnswer;
                shuffle($answers);
                $_SESSION['difficulty'] = $difficulty;
                $_SESSION['category'] = $category;
                $_SESSION['question'] = $question;
                $_SESSION['correct_answer'] = $correctAnswer;
            }
        //}
    ?>
    <div>
    <form action="odpowiedzi.php" method="post">
        <h1>Prosty Quiz z OpenTDB</h1>
        <h3>pytanie: <?=$question?></h3>

        <?php foreach($answers as $answer){ ?>
            <input type="radio" name="user_answer" id="user_answer_"<?=$answer?> value="<?=htmlspecialchars($answer) ?? ''?>" required>
            <label for="user_answer_<?=$answer?>"><?=$answer?></label>
        <?php } ?>
        <br>
        <button type="submit">Sprawdź</button>
    </form>
    </div>
</body>
</html>