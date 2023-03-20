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
    <h1>Onkunde</h1>
    <div>
        <form method="post" action="onkunde-result.php">
            <div id="inputs">
                <p>Wat zou je graag willen kunnen?</p>
                <input type="text" name="1" required>
            </div>
            <div id="inputs">
                <p>Met welke persoon kun je goed opschieten?</p>
                <input type="text" name="2" required>
            </div>
            <div id="inputs">
                <p>Wat is je favoriete getal?</p>
                <input type="text" name="3" required>
            </div>
            <div id="inputs">
                <p>Wat heb je altijd bij je als je op vakantie gaat?</p>
                <input type="text" name="4" required>
            </div>
            <div id="inputs">
                <p>Wat is je beste persoonlijke eigenschap?</p>
                <input type="text" name="5" required>
            </div>
            <div id="inputs">
                <p>Wat is je slechtste persoonlijke eigenschap?</p>
                <input type="text" name="6" required>
            </div>
            <div id="inputs">
                <p>Wat is het ergste dat je kan overkomen?</p>
                <input type="text" name="7" required>
            </div>
            <input type="submit" value="Submit" id="submit">
        </form>
    </div>
</body>
</html>