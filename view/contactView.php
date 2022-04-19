<?php $title = "Contact Lollapalooza";
$erreur = '';
if (isset($_POST['submit'])) {
    $nom = htmlspecialchars($_POST['nom']);
    $prenom = htmlspecialchars($_POST['prenom']);
    $mail = htmlspecialchars($_POST['mail']);
    $message = nl2br(htmlspecialchars($_POST['message']));

    if (empty($nom)) {
        $erreur = "Vous devez mettre un nom";
    } elseif (empty($prenom)) {
        $erreur = "Vous devez mettre un prenom";
    } elseif (empty($mail)) {
        $erreur = "Vous devez mettre un mail";
    } elseif (empty($message)) {
        $erreur = "Vous devez mettre un message";
    } else {
        contacte($nom, $prenom, $mail, $message);
        $erreur = "Votre message a bien été envoyé";
    }
}

ob_start(); ?>
<section id="contact">


    <form action="" method="post">
        <h1>Nous contacter</h1>
        <p><?php echo $erreur; ?></p>
        <div class="form-group">
            <div class="input-group">
                <label for="nom">Nom</label>
                <input type="text" name="nom" required placeholder="Entrez votre nom" id="nom" value="<?php if (!empty($_POST['nom'])) {
                                                                                                            echo $_POST['nom'];
                                                                                                        } ?>">
            </div>
            <div class="input-group">
                <label for="prenom">Prénom</label>
                <input type="text" name="prenom" required placeholder="Entrez votre prénom" id="prenom" value="<?php if (!empty($_POST['prenom'])) {
                                                                                                                    echo $_POST['prenom'];
                                                                                                                } ?>">
            </div>
        </div>
        <div class="input-group">
            <label for="email">Mail</label>
            <input type="email" name="mail" required placeholder="Entrez votre mail" id="email" value="<?php if (!empty($_POST['mail'])) {
                                                                                                            echo $_POST['mail'];
                                                                                                        } ?>">
        </div>
        <div class="input-group">
            <label for="message">Message</label>
            <textarea name="message" required id="message" cols="30" rows="10" placeholder="Entrez votre message"><?php if (!empty($_POST['message'])) {
                                                                                                                        echo $_POST['message'];
                                                                                                                    } ?></textarea>
        </div>
        <button type="submit" name="submit" class="primary">Envoyer</button>
    </form>
</section>

<?php $page = ob_get_clean();

require('template.php'); ?>