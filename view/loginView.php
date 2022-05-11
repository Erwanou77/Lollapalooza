<?php $title = "Lollapalooza";

ob_start(); ?>

<section id="login">
    <h1>Explorer l'avenir avec nous</h1>
    <form action="" id="form-login">
        <div class="group">
            <div class="input-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" placeholder="Email address">
            </div>
            <div class="input-group">
                <label for="mdp">Mot de passe</label>
                <input type="password" name="password" id="mdp" placeholder="***********">
            </div>
        </div>
        <button type="submit" name="submit" class="primary">Connexion</button>
    </form>
    <p>Vous n'avez pas de compte ? Inscrivez vous <a href="inscription">ici</a></p>
</section>

<?php $page = ob_get_clean();

require('template.php'); ?>