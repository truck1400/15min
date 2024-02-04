<?php 
include ('titre.php');
include('db.php');
?>

<!DOCTYPE html>
<html lang="en">

<body>
    <div style="background-color: #4CAF50; width: 170px; margin-left: 44%;">
        <h2 style="text-align: center; color: rgb(255, 255, 255);">15 minutes chrono!</h2>
    </div>

    <div class="center" style="display: flex; justify-content: space-around; flex-wrap: wrap;">
        <div class="thematique" onclick="window.location.href='ecole.php'" style="width: 30%; margin: 10px;">
            <img src="ecole.jpg" alt="Écoles" style="width: 100%; height: 200px; object-fit: cover;">
            <p style="color: #FFFFFF;">École inclusive à deux pas, ouverte à tous,<br>
                favorisant la diversité, la collaboration,<br>
                et l'épanouissement individuel.</p>
        </div>

        <div class="thematique" onclick="window.location.href='SoinSante.php'" style="width: 30%; margin: 10px;">
            <img src="sante.jpg" alt="Santé" style="width: 100%; height: 200px; object-fit: cover;">
            <p style="color: #FFFFFF;">Guidance médicale rapide pour <br>
            vos préoccupations de santé, conseils <br>
            et informations pour une vie saine et <br>
            équilibrée.</p>
        </div>

        <div class="thematique" onclick="window.location.href='resto.php'" style="width: 30%; margin: 10px;">
            <img src="nourriture.jpg" alt="Nourriture" style="width: 100%; height: 200px; object-fit: cover;">
            <p style="color: #FFFFFF;">Savourez une variété de délices culinaires<br>
             avec nos restaurants partenaires, offrant des plats<br>
              succulents pour satisfaire toutes <br>
              vos envies gastronomiques.</p>
        </div>

        <div class="thematique" onclick="window.location.href='Parks.php'" style="width: 30%; margin: 10px;">
            <img src="parc.jpg" alt="Parc" style="width: 100%; height: 200px; object-fit: cover;">
            <p style="color: #FFFFFF;">Explorez la nature et détendez-vous<br>
             dans nos parcs voisins. Des espaces verts<br>
              accueillants pour des moments de loisirs <br>
              et de détente en plein air.</p>
        </div>
    </div>
</body>

</html>
