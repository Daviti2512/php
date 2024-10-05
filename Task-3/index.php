<!DOCTYPE html>
<html lang="ka">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>შეკითხვების შემოწმება</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        .question {
            margin-bottom: 20px;
        }
        .question h3 {
            font-size: 1.2em;
            margin-bottom: 10px;
        }
        .options label {
            display: block;
            margin-bottom: 5px;
        }
        .submit {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            cursor: pointer;
            font-size: 1em;
        }
        .submit:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $score = 0;

    $correctAnswers = [
        "k1" => "a",
        "k2" => "f",
        "k3" => "d",
        "k4" => "მა სი მიორქ",
        "k5" => "PHP"
    ];

    foreach ($correctAnswers as $question => $answer) {
        if (isset($_POST[$question]) && strtolower(trim($_POST[$question])) == strtolower($answer)) {
            $score++;
        }
    }

    echo "<h2>თქვენ დააგროვეთ: $score სწორი პასუხი 5-დან და მაგარი ადამიანი ხართ ცხოვრებაში ბევრს წარმტებას მიაღწევთ გეეენაცვალე.</h2>";
}
?>

<h1>სტუდენტის შემოწმების ფორმა</h1>
<form method="POST">
    <div class="question">
        <h3>როდის აქვს პუტკოს დაბადების დღე?</h3>
        <div class="options">
            <label><input type="radio" name="k1" value="a"> 15 ნოემბერი</label>
            <label><input type="radio" name="k1" value="b"> 25 ნოემბერი</label>
            <label><input type="radio" name="k1" value="c"> 10 დეკემბერი</label>
            <label><input type="radio" name="k1" value="d"> 15 ოქტომბერი</label>
        </div>
    </div>

    <div class="question">
        <h3>2. სად იყო სოხა ამ ზაფხულს?</h3>
        <div class="options">
            <label><input type="radio" name="k2" value="a"> აბაშა</label>
            <label><input type="radio" name="k2" value="b"> სენაკი</label>
            <label><input type="radio" name="k2" value="c"> ფოთი</label>
            <label><input type="radio" name="k2" value="d"> სამტრედია</label>
            <label><input type="radio" name="k2" value="e"> ბატუმი</label>
            <label><input type="radio" name="k2" value="f"> ყველგან</label>


        </div>
    </div>

    <div class="question">
        <h3>3. რომელ წელს გამოიცა PHP?</h3>
        <div class="options">
            <label><input type="radio" name="k3" value="a"> 2005</label>
            <label><input type="radio" name="k3" value="b"> 2010</label>
            <label><input type="radio" name="k3" value="c"> 1999</label>
            <label><input type="radio" name="k3" value="d"> 1995</label>
        </div>
    </div>

    <div class="question">
        <h3>4. როგორ იტყვით მეგრულად 'მე შენ მიყვარხარ'?</h3>
        <input type="text" name="k4">
    </div>

    <div class="question">
        <h3>5. რა ეწოდება ამ სკრიპტინგ ენას?</h3>
        <input type="text" name="k5">
    </div>

    <button type="submit" class="submit">შეამოწმე პასუხები</button>
</form>

</body>
</html>
