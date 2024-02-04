<?php
include("db.php");
include('titre.php');

// Vérifiez si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérez les services sélectionnés
    $services = isset($_POST["services"]) ? $_POST["services"] : [];

    // Réalisez des recherches pour chaque service sélectionné
    foreach ($services as $service) {
        // Utilisez le nom du service pour déterminer la table correspondante
        $table_name = str_replace(' ', '_', strtolower($service));

        // Effectuez une recherche dans la table spécifique
        $sql = "SELECT * FROM $table_name";
        $result = $conn->query($sql);

        echo "<p>Résultats pour $service :</p>";

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                // Affichez les résultats spécifiques à chaque table
                foreach ($row as $key => $value) {
                    echo "$key : $value <br>";
                }
                echo "<hr>";
            }
        } else {
            echo "Aucun résultat trouvé pour $service.";
        }
    }
}

// Fermez la connexion à la base de données
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Les dinosaures - Recherche</title>
    <!-- Ajoutez les balises meta et les liens nécessaires ici -->
    <style>
        .thematique {
            background-color: #4CAF50;
            padding: 20px;
            margin: 10px;
            text-align: center;
            color: #FFFFFF; /* Blanc */
            cursor: pointer;
            border-radius: 5px;
            display: inline-block; /* Pour rendre les éléments en ligne */
            font-size: 18px;
        }

        .thematique img {
            width: 100px;
            height: 100px;
            margin-bottom: 10px;
        }
    </style>
</head>

<body>
    <!-- En-tête, styles et autres éléments communs -->

    <div class="navbar">
        <!-- Votre barre de navigation -->
    </div>

    <form action="recherche.php" method="post">
        <label for="services">Choisissez les services à rechercher :</label><br>
        <div class="thematique">
            <input type="checkbox" name="services[]" value="Resto"> Resto<br>
            <img src="images/resto.jpg" alt="Resto">
            <p>Description courte du Resto</p>
        </div>

        <div class="thematique">
            <input type="checkbox" name="services[]" value="Biblio"> Biblio<br>
            <img src="images/biblio.jpg" alt="Biblio">
            <p>Description courte de la Biblio</p>
        </div>

        <!-- Ajoutez d'autres options de services avec leurs descriptions -->

        <br><br>
        <input type="submit" value="Rechercher">
    </form>

    <!-- Pied de page et autres éléments communs -->

</body>

</html>
