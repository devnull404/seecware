<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/main.css">
    <title>Form Response</title>
</head>
<body>
You added a machinery with SN:  <?php echo htmlspecialchars($_POST['name']); ?>.
    <br>
Which is a: <?php echo $_POST['model']; ?>.
<br>
Has <?php echo $_POST['hours'] ?> work hours.
<br>
Assignated to the project: <?php echo $_POST['proyect']?>
<br>
With: <?php echo $_POST['hours'] ?>  ours of work already.
</body>
</html>