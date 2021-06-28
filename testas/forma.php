<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="get" enctype="multipart/form-data">
    <label for="file" style="font-size:5mm; font-family:times-new-roman">Select up to 20 filenames:</label>
    <input type="file" name="file[]" id="file" multiple="multiple"/></br>
    <input type="submit" name="submit[]" value="submit" />
    <input type="hidden" id="LoggedIn" name="LoggedIn" value="<?php echo $_SESSION['LoggedIn'] ?>">
    <input type="hidden" id="setName" name="setName" value="<?php echo $setName ?>">
    <input type="hidden" id="UserName" name="UserName" value="<?php echo $_SESSION['UserName'] ?>">
</form>
</body>
</html>