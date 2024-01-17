<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add Gunpla</title>
</head>
<body>
<header>
    <h1>Littlest Mechshop - keep track of your gunpla collection.</h1>
    <ul>
      <li><a href="?action=">Home</a></li>
    </ul>
  </header>
  <main>
    <form action="?action=create" method="post">
        <label for="name">Gundam Name:</label><br>
        <input type="text" name="name" id="name"><br>
        <label for="grade">Grade:</label><br>
        <input type="text" name="grade" id="grade"><br>
        <label for="series">Series:</label><br>
        <input type="text" name= "series" id="series"><br>
        <label for="date">Month and year of release:</label><br>
        <input type="text" name="date" id="date" placeholder= "may 2024"><br>
        <input type="submit" value="Add">
      </form>
  </main>
</body>
</html>