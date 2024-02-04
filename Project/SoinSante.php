<?php 
include ('titre.php');
include('db.php');

?>
<?php
session_start();

$x = 0;


$query = "SELECT * FROM soinsante  ";
$result = mysqli_query($conn, $query) or die("Echec de lister");

echo "<br><table style=width:100%>";
echo "<tr>";
while ($row = mysqli_fetch_array($result))
       {	   
    //echo	  "<td style='width: 10%';></td>";
    echo      "<td style='width: 20%';>";
    echo      "<div style='background-color: #4CAF50'>";
    echo      	"<div style='margin-left: 5%; margin-right: 5%;'>";
    echo      		"<h3 style='color: lightblue; text-align: center; padding-top: 10px;'>".$row["id"]."</h3>";
    echo 	  			"<p style='color: #FFFFFF;'><b>Realisateur: </b>".$row["SoinSante"]."</p>";
    echo 	  			"<p style='color: #FFFFFF;'><b>Duree: </b>".$row["rue"]."</p>";
    echo 	  			"<p style='color: #FFFFFF;'><b>Prix: </b>".$row["ville"]."</p>";
    echo 	  			"<p style='color: #FFFFFF;'><b>Temps: </b>".$row["temps"]."</p>";
    echo	  			"<img src=".$row["image"]." width='190px' height='280px' style='display: block; margin-left: auto; margin-right: auto; padding-bottom: 10px;'>";
    echo	  	"</div>";
    echo	  "</div>";
    echo 	  "</td>";
    $x = $x + 1;

        if ($x == 3) {
            echo "</tr>";
            $x = 0;
            echo "<tr>";
        }
       }
echo "</tr>";
echo "</table>";
echo "</body>";

mysqli_free_result($result);
mysqli_close($conn); //permite cerrar la conection sql
ob_end_flush();
?>