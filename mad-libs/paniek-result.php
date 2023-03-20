<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <nav>
        <button onclick="location.href='paniek.php'">Er heerst paniek...</button>
        <button onclick="location.href='onkunde.php'">Onkunde</button>
    </nav>
    <h1>Onkunde</h1>
    <?php
        if(count(array_filter($_POST))==count($_POST)) {
            echo 'Er heerst paniek in koninkrijk '. htmlspecialchars($_POST['3']). '. Koning '. htmlspecialchars($_POST['6']). ' is ten einde raad en als koning '. htmlspecialchars($_POST['6']). ' ten einde raad is, dan roept hij zijn ten-einde-raadsheer '. htmlspecialchars($_POST['2']). '.<br>';
            echo '"'. htmlspecialchars($_POST['2']). ', het is een ramp! Het is een schande!"<br>';
            echo '"Sire, Majesteit, Uwe luidruchtigheid, wat is er aan de hand?<br>';
            echo 'Mijn '. htmlspecialchars($_POST['1']). ' is verdwenen! Zo maar, zonder waarschuwing. En ik had net '. htmlspecialchars($_POST['5']). ' voor hem gekocht!<br>';
            echo 'Majesteit, uw '. htmlspecialchars($_POST['1']). ' komt vast vanzelf weer terug?<br>';
            echo 'Ja das leuk en aardig, maar hoe moet ik in de tussentijd '. htmlspecialchars($_POST['7']). ' leren?<br>';
            echo 'Maar sire, daar kunt u dan toch uw '. htmlspecialchars($_POST['8']). ' voor gebruiken?<br>';
            echo htmlspecialchars($_POST['2']). ', je hebt helemaal gelijk! Wat zou ik doen als ik jou niet had.<br>';
            echo 'Mij '. htmlspecialchars($_POST['7']). ', Sire.' ;
        } else {
            header('Location: onkunde.php');
        }
    ?>
    <footer>
        © Jurrian Schouten 2023
    </footer>
</body>
</html>