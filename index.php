<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Math Quiz: Addition</title>
    <link href="https://fonts.googleapis.com/css?family=Schoolbell&display=swap" rel="stylesheet" type='text/css'>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/styles.css">
    <style>
        body {
            font-family: 'Schoolbell', cursive;
            background: url(https://www.middleburgsteakhouse.com/wp-content/uploads/chalkboard-background.jpg);
            color: white;
        }
        .btn {
            border: 2px solid #fff;
            color: #000;
            background-color: #fff;
            font-weight: bold;
            font-size: 1.5rem;
        }
        .btn:hover {
            background-color: palegoldenrod;
            color: #000;
        }
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php include 'inc/quiz.php'; ?>
    </div>
</body>
</html>