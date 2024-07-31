<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/main.css">
    <title>Form Response</title>
</head>
<body>
Hi <?php echo htmlspecialchars($_POST['name']); ?>.
    <br>
You were born in <?php echo $_POST['birthday']; ?>.
</body>
</html>