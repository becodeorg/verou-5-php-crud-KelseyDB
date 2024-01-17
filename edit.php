<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add Gunpla</title>
</head>
<body>
<header>
    <h1>Littlest Mechshop - EDIT GUNPLA</h1>
    <ul>
      <li><a href="./">Home</a></li>
    </ul>
  </header>
  <main>
  <?php foreach ($gunpla as $mech) : ?>

          <li> Name: <?= $mech['Name'] ?></li>
          <li> Grade: <?= $mech['Grade'] ?></li>
          <li> Series:  <?= $mech['Series'] ?></li>
          <li> Release Date: <?= $mech['Date'] ?></li>
          <br>
      <?php endforeach; ?>
    <form action="" method="post">
        <label for="name">Gundam Name:</label><br>
        <input type="text" name="name" id="name"><br>
        <label for="grade">Grade:</label><br>
        <input type="text" name="grade" id="grade"><br>
        <label for="series">Series:</label><br>
        <input type="text" name= "series" id="series"><br>
        <label for="date">Month and year of release:</label><br>
        <input type="text" name="date" id="date" placeholder= "may 2024"><br>
        <input type="submit" value="Edit">
      </form>
  </main>
</body>
</html>