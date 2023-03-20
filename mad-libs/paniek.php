<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Onkunde</title>
</head>
<body>
    <nav>
        <button onclick="location.href='paniek.php'">Er heerst paniek...</button>
        <button onclick="location.href='onkunde.php'">Onkunde</button>
    </nav>
    <h1>Er heerst paniek</h1>
    <div>
        <form method="post" action="paniek-result.php">
            <div id="inputs">
                <p>Welk dier zou je nooit als huisdier willen hebben?</p>
                <input type="text" name="1" required>
            </div>
            <div id="inputs">
                <p>Wie is de belangrijkste persoon in je leven?</p>
                <input type="text" name="2" required>
            </div>
            <div id="inputs">
                <p>In welk land zou je graag willen wonen?</p>
                <input type="text" name="3" required>
            </div>
            <div id="inputs">
                <p>Wat doe je als je je verveelt?</p>
                <input type="text" name="4" required>
            </div>
            <div id="inputs">
                <p>Met welk speelgoed speelde je als kind het meest?</p>
                <input type="text" name="5" required>
            </div>
            <div id="inputs">
                <p>Bij welke docent spijbel je het liefst?</p>
                <input type="text" name="6" required>
            </div>
            <div id="inputs">
                <p>Als je 100.000 euro zou hebben, wat zou je dan kopen?</p>
                <input type="text" name="8" required>
            </div>
            <div id="inputs">
                <p>Wat is je favoriete bezigheid?</p>
                <input type="text" name="7" required>
            </div>
            <input type="submit" value="Submit" id="submit">
        </form>
    </div>
    <footer>
        © Jurrian Schouten 2023
    </footer>
</body>
</html>