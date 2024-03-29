<!DOCTYPE html>
<html lang="fr">
<head>
    <!-- Métadonnées de la page -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Lien vers le fichier CSS pour les styles -->
    
    <link rel="stylesheet" href="./resources/styles.css">
    <title>Invitation à la fête</title>
</head>
<body>
    <!-- Vidéo en arrière-plan -->
    <video autoplay muted loop id="bg-video">
        <source src="./resources/vecteezy_abstract-cyberpunk-animated-background_4846470.mp4" type="video/mp4">
        <!-- Message pour les navigateurs qui ne supportent pas la balise vidéo -->
        Votre navigateur ne supporte pas la balise vidéo.
    </video>

    <!-- Conteneur principal pour l'invitation -->
    <section class="invitation">
        <h1>KOTOV Oleksandr</h1>
        <p>Salut Runner !
        </br>
            C'est l'heure de brancher et de se connecter à la fête de l'année ! Préparez-vous pour une expérience immersive dans un univers cyberpunk où la technologie rencontre la noirceur des néons.
        </br>Nommez la date dans vos implants neuronaux : <span>17.07 17H</span></p>
        <!-- Thème de la fête avec un bouton pour afficher plus d'informations -->
        <p>Le thème de la soirée ?
        <button onclick="displayExplanations()">Cyberpunk</button></p>
        <!-- Conteneur pour les explications du thème -->
        <div id="explanation">
            <p>Bienvenue dans les années 80 futuristes ! Imaginez une fusion de rétro et de futurisme, où les synthétiseurs résonnent avec les pulsations des lumières cybernétiques.</p>
        </div>
        <!-- Lieu de la fête avec un lien vers le site web -->
        <p>Cliquez sur le lien pour localiser notre repaire : <a href="https://www.kartingbowling.com/le-mans/home.php" target="_blank">Salle de Fête</a></p>
        
        
        <form action="register.php" method="POST">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" placeholder="Ton nom" required>
            <label for="number">Number of Visitors:</label>
            <input type="number" id="number" name="number" placeholder="Combien des gens vont venir?" required>
            <input type="submit" value="Submit">
        </form>
    </section>

    <p>Total Guests: <?php include 'count_guests.php';?></p>

    <!-- Lien vers le fichier JavaScript pour les fonctionnalités -->
    <script src="./resources/script.js"></script>
</body>
</html>