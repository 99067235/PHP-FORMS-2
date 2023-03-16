<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Welcome</title>
</head>
<body>
    <div>
        <form method="post">
            <div id="inputs">
                <h1>Naam</h1>
                <input type="text" name="name" required><p>*</p>
            </div>
            <div id="inputs">
                <h1>Email</h1>
                <input type="email" name="email" required><p>*</p>
            </div>
            <input type="submit" value="Submit" id="submit">
        </form>
        <?php
            if ((isset($_POST['name'])) && (isset($_POST['email']))) {
                echo htmlspecialchars('Naam: '. $_POST['name']);
                echo "<br>";
                echo htmlspecialchars('Email: '. $_POST['email']);
            }
        ?>
    </div>
</body>
</html>