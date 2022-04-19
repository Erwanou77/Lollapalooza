<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato&family=Open+Sans:wght@800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title><?php echo $title ?></title>
</head>

<body>
    <header>
        <div class="flex">
            <div class="burger-menu">
                <a id="link" href="#"><span id="burger"></span></a>
            </div>
            <a href="/lollapalooza/"><img src="https://dummyimage.com/200x100/e0e0e0/000000.png" alt=""></a>
            <a href="connexion" class="primary">Se connecter</a>
        </div>
    </header>
    <main>
        <ul id="menu">
            <li><a href="experience-realite-virtuel">Expérience Réalité</a></li>
            <li><a href="billet">Billeterie</a></li>
            <li><a href="info-pratique">Infos Pratiques</a></li>
            <li><a href="partenaires">Partenaires</a></li>
            <li><a href="contact">Contact</a></li>
        </ul>
        <?php echo $page ?>
    </main>
    <footer>
        <div class="annonce">
            <p><i class="fa-solid fa-globe"></i> <strong>Lolla is global</strong> <a href="" class="tertiary">Take the tour &#x2794;</a></p>
        </div>
        <div class="grid">
            <ul class="center">
                <li><a href="/lollapalooza/">Accueil</a></li>
                <li><a href="#!">Evenement</a></li>
                <li><a href="billet">Billeterie</a></li>
                <li><a href="experience-realite-virtuel">Expérience VR</a></li>
                <li><a href="partenaires">Partenaires</a></li>
            </ul>
            <ul class="row center">
                <li><a href="inscription">S'inscrire</a></li>
                <li><a href="contact">Contact</a></li>
                <li><a href="#!">Mentions Légales</a></li>
            </ul>
            <ul class="row center">
                <li><a href="#!"><i class="fa-brands fa-instagram"></i></a></li>
                <li><a href="#!"><i class="fa-brands fa-facebook"></i></a></li>
                <li><a href="#!"><i class="fa-brands fa-twitter"></i></a></li>
            </ul>
            <div class="center logo">
                <img src="https://dummyimage.com/100x100/e0e0e0/000000.png" alt="">
                <p>Présenté par VirtualFastcom</p>
            </div>
        </div>
    </footer>
    <script src="public/assets/js/app.js"></script>
</body>

</html>