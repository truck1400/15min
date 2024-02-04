<?php
include ('titre.php');
include('db.php');
?>
<?php
session_start();

echo "<div style='text-align: center;'>"; 

$query = "SELECT * FROM resto ";
$result = mysqli_query($conn, $query) or die("Echec de lister");

while ($row = mysqli_fetch_array($result)) {
    echo "<div style='background-color: #4CAF50; color: white; display: inline-block; margin: 10px; width: 25%;'>";
    echo "<div style='margin-left: 5%; margin-right: 5%;'>";
    echo "<h3 style='text-align: center; padding-top: 10px; color: white;'>".$row["Id"]."</h3>";
    echo "<pstyle='color: #FFFFFF;'>Nom: </b>".$row["resto"]."</p>";
    echo 	  			"<p style='color: #FFFFFF;'><b>Rue: </b>".$row["rue"]."</p>";
    echo 	  			"<p style='color: #FFFFFF;'><b>Ville: </b>".$row["ville"]."</p>";
    echo 	  			"<p style='color: #FFFFFF;'><b>Temps: </b>".$row["temps"]."</p>";
    echo "<img src=".$row["image"]." width='190px' height='280px' style='display: block; margin-left: auto; margin-right: auto; padding-bottom: 10px;'>";
    echo "</div>";
    echo "</div>";
}

echo "</div>"; 

mysqli_free_result($result);
mysqli_close($conn);
ob_end_flush();
?>
