<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>mySwitchMultiplication</title>
    <link rel="stylesheet" href="styles.css"/>
  </head>
  <body>
    <h1>Create a multiplication table of 1 thru 12</h1>
    <?php
    /*
     * create a multiplication table of 1 thru 12
     */
    echo '<table>';
    //loop for the top header
    echo '<tr>';
    echo "<th>&nbsp</th>";
    for ($i = 1; $i <= 12; $i++) {
      echo '<th>' . $i . '</th>';
    }
    echo '</tr>';

    // the multiplication table
    for ($i = 1; $i <= 12; $i++) {
      switch ($i) {
        case $i == 1:
          echo '<tr>';
          echo "<th> 1 </th>";
          for ($i = 1; $i <= 12; $i++) {
            $j = $i * 1;
            echo "<td> $j </td>";
          }
          echo '</tr>';
        //break;
        case $i == 2:
          echo '<tr>';
          echo "<th> 2 </th>";
          for ($i = 1; $i <= 12; $i++) {
            $j = $i * 2;
            echo "<td> $j </td>";
          }
          echo '</tr>';
        case $i == 3:
          echo '<tr>';
          echo "<th> 3 </th>";
          for ($i = 1; $i <= 12; $i++) {
            $j = $i * 3;
            echo "<td> $j </td>";
          }

        default:
          break;
      }
    }


    echo '</table>';
    ?>

  </body>
</html>

