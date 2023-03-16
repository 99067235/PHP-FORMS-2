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
        <form>
            <h1>Naam</h1>
            <input type="text" name="name">
            <h1>Email</h1>
            <input type="text" name="email">
            <input type="submit" value="Submit" id="submit">
        </form>
        <?php
            if ((isset($_GET['name'])) && (isset($_GET['email']))) {
                echo 'Naam: ', $_GET['name'];
                echo "<br>";
                echo 'Email:', $_GET['email'];
            }
        ?>
    </div>
</body>
</html>