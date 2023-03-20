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
            echo 'Er zijn veel mensen die niet kunnen '. htmlspecialchars($_POST['1']). '. Neem nou '. htmlspecialchars($_POST['2']). '. Zelfs met de hulp van een '. htmlspecialchars($_POST['4']). ' of zelfs '. htmlspecialchars($_POST['3']). ' kan '. htmlspecialchars($_POST['2']). ' niet tekenen. Dat heeft niet te maken met een gebrek aan '. htmlspecialchars($_POST['5']). ' maar met een teveel aan '. htmlspecialchars($_POST['6']). '. Te veel '. htmlspecialchars($_POST['6']). ' leidt tot '. htmlspecialchars($_POST['7']). ' en dat is niet goed als je wilt '. htmlspecialchars($_POST['1']). '. Helaas voor '. htmlspecialchars($_POST['2']). '.';
        } else {
            header('Location: onkunde.php');
        }
    ?>
    <footer>
        © Jurrian Schouten 2023
    </footer>
</body>
</html>