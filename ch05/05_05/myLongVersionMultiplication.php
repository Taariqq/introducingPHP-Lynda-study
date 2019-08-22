<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>myLongVersionMultiplication</title>
    <link rel="stylesheet" href="styles.css"/>
  </head>
  <body>
    <h1>Create a multiplication table of 1 thru 12</h1>
    <?php
    /*
     * create a multiplication table of 1 thru 12
     */
    echo '<table>';
    echo '<tr>';
    echo "<th>&nbsp</th>";
    for ($i = 1; $i <= 12; $i++) {
      echo '<th>' . $i . '</th>';
    }
    echo '</tr>';

    // for row 1
    echo '<tr>';
    echo "<th> 1 </th>";
    for ($i = 1; $i <= 12; $i++) {
      echo "<td> $i </td>";
    }
    echo '</tr>';

    // for row 2
    echo '<tr>';
    echo "<th> 2 </th>";
    for ($i = 1; $i <= 12; $i++) {
      $j = $i * 2;
      echo "<td> $j </td>";
    }
    echo '<tr>';

    // for row 3
    echo '<tr>';
    echo "<th> 3 </th>";
    for ($i = 1; $i <= 12; $i++) {
      $j = $i * 3;
      echo "<td> $j </td>";
    }
    echo '</tr>';

    echo '</table>';
    ?>
  </body>
</html>

