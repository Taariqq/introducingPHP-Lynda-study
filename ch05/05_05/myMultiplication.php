<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>myMultiplication</title>
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

    // for side header
    echo '<tr>';
    for ($i = 1; $i <= 12; $i++) {
      echo "<th> 1 </th>";
      for ($i = 1; $i <= 12; $i++) {
        $j = $i * 1;
        echo "<td> $j </td>";
      }
      echo "</tr>";
      echo '<tr>';
      for ($i = 1; $i <= 12; $i++) {
        echo "<th> 2 </th>";
        for ($i = 1; $i <= 12; $i++) {
          $j = $i * 2;
          echo "<td> $j </td>";
        }
      }
      echo '</tr>';
      echo '<tr>';
      for ($i = 1; $i <= 12; $i++) {
        echo "<th> 3 </th>";
        for ($i = 1; $i <= 12; $i++) {
          $j = $i * 3;
          echo "<td> $j </td>";
        }
      }
      echo '</tr>';
      echo '<tr>';
      for ($i = 1; $i <= 12; $i++) {
        echo "<th> 4 </th>";
        for ($i = 1; $i <= 12; $i++) {
          $j = $i * 4;
          echo "<td> $j </td>";
        }
      }
      echo '</tr>';
      echo '<tr>';
      for ($i = 1; $i <= 12; $i++) {
        echo "<th> 5 </th>";
        for ($i = 1; $i <= 12; $i++){
          $j = $i * 5;
          echo "<td> $j </td>";
        }
      }
      echo '</tr>';
      echo '<tr>';
    }


    // the whole of row code is going to have to be enclosed
    echo 'rows below coming from here';
    echo '<tr>';
    for ($i = 1; $i <= 12; $i++) {
      // echo '<td>';
      $th = $i; // for later
      switch ($th) {
        case $th == 1:
          echo "<td> $th </td>";
          break;
        case $th == 2:
          echo "<td> $th </td>";
          break;
        case $th == 3:
          echo "<td> $th </td>";

        default:
          break;
      }
      echo '</tr>';
    }


    // for row 1
    /*
      echo '<tr>';
      echo "<th> 1 </th>";
      for ($j = 1; $j <= 12; $j++){
      echo "<td> $j </td>";
      }
      echo '</tr>';

      // for row 2
      echo '<tr>';
      echo "<th> 2 </th>";
      for ($j = 1; $j <= 12; $j++) {
      $k = $j * 2;
      echo "<td> $k </td>";
      }
      echo '<tr>';

      // for row 3
      echo '<tr>';
      echo "<th> 3 </th>";
      for ($i = 1; $i <= 12; $i++) {
      $k = $i * 3;
      echo "<td> $k </td>";
      }
      echo '</tr>';
     */
//    for ($j = 1; $j <= 12; $j++) {
//      echo "<th> $j </th></tr>";
//    }
    // use if to fill the table
    // if <tr> == 1; multiply <td> by 1 and increment
    // if <tr> == 2; multiply <td> by 2 and increment
    // this has to be a nested loop! ... maybe not?



    echo '</table>';

    /*
     * Let's try and create colums (or rows) w/ correct multiplication ... so I guess we can print row-by-row and then enclose each value in <td>?
     */
    echo "<br><br><p>See how we can generate the numbers.</p>";

    for ($i = 1; $i <= 12; $i++) {
      echo "$i";
    }
    echo "<br>";


    for ($i = 1; $i <= 12; $i++) {
      $j = $i * 2;
      echo "$j";
    }
    echo "<br>";

    for ($i = 1; $i <= 12; $i++) {
      $j = $i * 3;
      echo "$j";
    }
    echo "<br>";

    for ($i = 1; $i <= 12; $i++) {
      switch ($i) {
        case $i == 1:
          $i *= 1;
          echo "<td> $i </td>";

          break;

        default:
          break;
      }
    }


    /*
     * try to do the above with switch.
     */
    ?>

  </body>
</html>

