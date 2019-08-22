<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Final Multiplication Table</title>
    <link rel="stylesheet" href="styles.css"/>
  </head>
  <body>
    <h1>Create multiplication table 1 to 12</h1>
    <?php
    /*
     * create a multiplication table of 1 to 12
     */

    echo '<table>';

    // top table header
    echo "<tr>";
    echo "<th>&nbsp</th>";
    for ($i = 1; $i <= 12; $i++) {
      echo "<th>" . $i . "</th>";
    }
    echo "</tr>";


    // left header and the multiplication
    echo '<tr>';

    for ($i = 1; $i <= 12; $i++) {
      echo "<th> $i </th>";
      for ($j = 1; $j <= 12; $j++) {
        echo "<td>" . $j * $i . "</td>";
      }
      echo '</tr>';
    }

    echo '</table>';
    ?>

  </body>
</html>
