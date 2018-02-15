<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add user</title>
</head>
<body>
<form action="doadd.php" method="post">
    <label for="nom">Name</label> <input type="text" name="name"><br>
    <label for="marque">First Name</label> <input type="text" name="firstname"><br>
    <label for="marque">Mail</label> <input type="text" name="mail"><br>
    <label for="marque">Birthday</label> <input type="text" name="birthday" value="0001-01-01"><br>
    <label for="marque">Civility</label> <input type="text" name="civility"><br>
    <label for="marque">Height</label> <input type="number" name="height"><br>
    <label for="marque">Weight</label> <input type="number" name="weight"><br>
    <input type="submit" value="Add">
</form>
</body>
</html>
