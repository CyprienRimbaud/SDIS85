<?php include('template/header.php'); ?>

        <h1>Connexion</h1>

        <form method="POST" action="?route=authenticate&action=login">
                <label for="mail">Adresse mail </label>
                <input type="email" name="mail" placeholder="Saisissez votre adresse mail">
                <label for="pwd">Mot de passe </label>
                <input type="password" name="pwd" placeholder="Saisissez votre mot de passe">
                <input type="submit" value="Se connecter">

        </form>
        <small><?php echo $message ?></small>

<?php include('template/footer.php'); ?>
