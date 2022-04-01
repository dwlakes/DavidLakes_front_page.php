<?php
    $pictures = array('beanshoes.png', 'reseesesbeans.png', 'spidermanbeans.png');

    shuffle($pictures);
    ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Bob's Beans</title>
  </head>
  <body>
    <h1>Bob's Beans</h1>
        <div align = "center"> 
        <table style="width: 100%; border: 0">
            <tr>
            <?php
            for ($i = 0; $i < 3; $i++){
                echo "<td style=\"width: 33%; text-align: center\">
                      <img src=\"";
                echo $pictures[$i];
                echo "\"></td>";
            }
            ?>
            </tr>
        </table>
        </div>
  </body>
</html>