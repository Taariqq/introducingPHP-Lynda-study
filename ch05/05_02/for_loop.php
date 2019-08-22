<?php
$characters = ['Arthur Dent', 'Ford Prefect', 'Zaphod Beeblebrox', 'Marvin', 'Slartibartfast'];
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Using a for loop</title>
    <link rel="stylesheet" href="styles.css" type="text/css">
  </head>
  <body>
    <h1>Main Characters</h1>
    <ul>
      <?php
//      for ($i = 0; $i < count($characters); $i += 2) {
      for ($i = (count($characters) - 1); $i >= 0; $i--) { // reverse
        echo '<li>' . $characters[$i] . '</li>';
      }
      ?>
    </ul>
  </body>
</html>