<head>
    <title>Les dinosaures</title>
    <meta name="Author" content="Oussama">
    <meta charset="UTF-8">
    <SCRIPT LANGUAGE=Javascript SRC="valider.js"> </SCRIPT>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <style>
        .navbar {
            overflow: hidden;
            background-color: #4CAF50; /* Vert */
        }
    
        .navbar a {
            float: left;
            font-size: 16px;
            color: #FFFFFF; /* Blanc */
            text-align: center;
            padding: 10px 10px;
            text-decoration: none;
        }
    
        .navbar a:hover {
            color: #000000; /* Noir */
            background-color: #FFFFFF; /* Blanc */
        }
    
        .center {
            text-align: center;
            margin: 0 auto;
        }
    
        body {
            background-image: url('int.jpg');
            background-size: cover;
            color: #333333; /* Noir */
        }
    
        /* Ajoutez ces styles pour le contenu spécifique */
        h2, p {
            color: #4CAF50; /* Vert */
        }

        .thematique {
            background-color: #4CAF50;
            padding: 10px;
            margin: 10px;
            text-align: center;
            color: #FFFFFF; /* Blanc */
            cursor: pointer;
            border-radius: 5px;
            display: inline-block; /* Pour rendre les éléments en ligne */
        }

        .thematique img {
            width: 100px; /* Ajustez la largeur de l'image selon vos besoins */
            height: 100px; /* Ajustez la hauteur de l'image selon vos besoins */
            margin-bottom: 10px;
        }

        /* Ajoutez d'autres styles spécifiques aux éléments thématiques */
    </style>
    
</head>

<body>
    <div class="navbar">
        <a class="navbar-brand" href="#"><img id="logo" src="logo.jpg" style="height: 35px; width: 35px;"></a>
        <a href="index.php">Home</a>
        <a href="Resto.php">Resto</a>
        <a href="Biblio.php">Biblio</a>
        <a href="Parks.php">Parks</a>
        <a href="SoinSante.php">Soins Sante</a>
        <a href="ecole.php">École</a>
        <h4 style="text-align: right; color: rgb(249, 249, 249);">Près de Poly!</h4>
    </div>