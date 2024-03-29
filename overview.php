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
  <header>
    <h1>Littlest Mechshop - keep track of your gunpla collection.</h1>
    <ul>
      <li><a href="?action=create">Add a Gundam</a></li>
      <li><a href="?action=edit">Edit existing entry</a></li>
    </ul>
  </header>
  <main>
    <ul>
      <?php foreach ($gunpla as $mech) : ?>
          <li><?= $mech['Name'] ?></li>
          <li><?= $mech['Grade'] ?></li>
          <li><?= $mech['Series'] ?></li>
          <li><?= $mech['Date'] ?></li>
          <!-- <img src="./img/ $mech['img_url']; ?>"> -->
          <p><a href="?action=edit&id=<?= $mech["ID"] ?>">Edit</a>
          <br>
          <a href="?action=remove&id=<?= $mech["ID"] ?>">Remove</a></p>
          <br>
      <?php endforeach; ?>
      
    </ul>
  </main>
</body>
</html>