<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Littlest Mechshop</title>
</head>
<body>

<h1>Littlest Mechshop - keep track of your gunpla collection.</h1>

<ul>
    <?php foreach ($gunpla as $mech) : ?>
        <li><?= $mech['name'] ?></li>
    <?php endforeach; ?>
</ul>

</body>
</html>