<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Adoptundev</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Indie+Flower&display=swap">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
</head>
<body>
<main>
    <!--    header-->
    <div class="sub-header">
        <p class="en-tete">Adoptun<b>Dev</b></p>
        <h2 class="font-alt">Salut je suis</h2>
        <h1>Kevin hueri</h1>
        <h3 class="font-alt">Développeur web / web mobile</h3>
        <div class="socials-media">
            <a class="social-link" href="https://www.facebook.com/kevin.hueri/"><img src="maquettes/facebook-f.svg" alt="Facebook"></a>
            <a class="social-link" href="https://twitter.com/KHueri"><img src="maquettes/twitter.svg" alt="Twitter"></a>
            <a class="social-link" href="https://www.linkedin.com/in/kevin-hueri-077046169/"><img src="maquettes/linkedin-in.svg" alt="Linkedin"></a>
            <a class="social-link" href="https://www.instagram.com/kevinhueri/?hl=fr"><img src="maquettes/instagram.svg" alt="Instagram"></a>
            <a class="social-link" href="https://gitlab.com/kevin.hueri"><img src="maquettes/gitlab.svg" alt="gitlab"></a>
        </div>
<!--        <a class="id" href="#"><img src="maquettes/id.svg" alt="id"></a>-->
        <button class="connexion" type="button" onclick="$('#login').fadeIn();">Id</button>
        <div id="login">
            <form action="" method="post">
                <label id="identifiant" for="name">Identifiant</label>
                <input type="text" id="name" name="name">
                <br><br>
                <label for="password">Mot de passe</label>
                <input type="password" id="password" name="password">
                <br>
                <a href="#">Mot de passe oublié</a>
                <br><br>
                <input type="submit" value="connection">
            </form>
            <br/><br/>
            <button type="button" onclick="$('#login').fadeOut();">Fermer</button>
        </div>
    </div>

    <!--    Description-->
    <div class="presentation-content container">
        <div class="collumn collumn1">
            <div class="profile-picture">
                <img src="maquettes/Ski%202020%2001.JPG" alt="KH" class="profile-picture">
            </div>
        </div>
        <div class="collumn collumn2">
            <h2>Bonjour tout le monde!</h2>
            <p>Actuellement en formation pour le titre professionnel de développeur web / web mobile, je me prépare à rechercher un emploi dans cette branche qui me passionne. Je prépare les langages PHP, HTML, CSS, JavaScript et SQL. N'hésitez pas à venir vers moi pour tous renseignements.</p>
            <ul class="présentation-details">
                <li>
                    <p class="description-title"><strong>Nom</strong></p>
                    <p class="description-separator">:</p>
                    <p class="description-value">Kevin Hueri</p>
                </li>
                <li>
                    <p class="description-title"><strong>Age</strong></p>
                    <p class="description-separator">:</p>
                    <p class="description-value">33 ans</p>
                </li>
                <li>
                    <p class="description-title"><strong>Expérience</strong></p>
                    <p class="description-separator">:</p>
                    <p class="description-value">6 mois</p>
                </li>
                <li>
                    <p class="description-title"><strong>Pays</strong></p>
                    <p class="description-separator">:</p>
                    <p class="description-value">France</p>
                </li>
                <li>
                    <p class="description-title"><strong>Ville</strong></p>
                    <p class="description-separator">:</p>
                    <p class="description-value">La Ferté Bernard</p>
                </li>
                <li>
                    <p class="description-title"><strong>Email</strong></p>
                    <p class="description-separator">:</p>
                    <p class="description-value">kevin.hueri@gmail.com</p>
                </li>
                <li>
                    <p class="description-title"><strong>Tel.</strong></p>
                    <p class="description-separator">:</p>
                    <p class="description-value">06.74.31.58.49</p>
                </li>
            </ul>
            <div class="description-cta">
                <a href="maquettes/Kevin%20HUERI.pdf" class="download-link"><img src="maquettes/link.svg" alt="#">TELECHARGER CV</a>
                <a href="mailto:kevin.hueri@gmail.com" class="contact-link"><img src="maquettes/address-card.svg" alt="#">CONTACTEZ MOI</a>
            </div>
        </div>
    </div>

    <!--    Competences-->
    <div class="grey-section">
        <div class="container">
            <h2>Compétences</h2>
            <div class="small-collumn">
                <div class="card-collumn">
                    <img src="maquettes/front_end.png" alt="#">
                    <h3>FRONT-END</h3>
                    <ul class="little-collumn">
                        <li>Maquetter un application</li>
                        <li>Réaliser une interface utilisateur web statique et adaptable</li>
                        <li>Développer une interface utilisateur web dynamique</li>
                        <li>Réaliser une interface utilisateur avec une solution de gestion de contenu ou e-commerce</li>
                    </ul>
                </div>
            </div>
            <div class="small-collumn">
                <div class="card-collumn">
                    <img src="maquettes/back_end.png" alt="#">
                    <h3>BACK-END</h3>
                    <ul class="little-collumn">
                        <li>Créer une base de données</li>
                        <li>Développer les composants d'accès au données</li>
                        <li>Développer la partie back-end d'une application web ou web mobile</li>
                        <li>Elaborer et mettre en oeuvre des composants dans une application de gestion de contenu ou e-commerce</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</main>
</body>
</html>