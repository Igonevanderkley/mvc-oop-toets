<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="http://mvc-oop-toets.com/css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reuzenraden</title>
</head>

<body>
    <h3><?= $data['title']; ?></h3>

    <table border='1'>
        <thead>
            <th>Naam reuzenrad</th>
            <th>Hoogte (m)</th>
            <th>Land</th>
            <th>Kosten (miljoen)</th>
            <th>Aantal Passagiers</th>
        </thead>

        <tbody>
            <?= $data['rows']; ?>
        </tbody>
    </table>



    </table>
</body>

</html>