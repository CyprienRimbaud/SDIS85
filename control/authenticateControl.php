<?php

function authenticateControl($userAction){
    switch ($userAction){
        case "login":
            authenticateControl_loginAction();
            break;
        case "logout":
            authenticateControl_logoutAction();
            break;

        default:
            authenticateControl_defaultAction();
            break;
    }
}

function authenticateControl_defaultAction()
{
    $tabTitle="Connexion";
    $message='';
    include('../page/authenticatePage_default.php');
}

function authenticateControl_loginAction()
{
    // Code si action=login dans l'url

    $mail=$_POST['mail'];
    $pwd=hash('sha1',$_POST['pwd']);

    // Appel du modèle pour chercher le mail et le mdp crypté dans la bdd
    $user=userData_findOneWithCredentials($mail,$pwd);

    if (empty($user)){
        // Pas d'utilisateur avec ce mail et ce mot de passe. On prépare un message pour la vue
        $message="Vos identifiants sont incorrects. Merci de réessayer";
        // On appelle la vue par défaut
        $tabTitle="Connexion";
        include('../page/authenticatePage_default.php');
    }
    else{
        // Code si l'utilisateur existe dans la table user
        if ($user[0]['acces']){
            // L'utilisateur a le droit d'accès
            $_SESSION['id']=$user[0]['id'];
            $_SESSION['email']=$user[0]['email'];
            $_SESSION['nom']=$user[0]['nom'];
            $_SESSION['prenom']=$user[0]['prenom'];
            $_SESSION['ligue_id']=$user[0]['ligue_id'];
            header('location:?route=dashboard');   
        }
        else{
            // On informe l'utilisateur qu'il n'a pas le droit d'accès
            $message="Vous n'êtes pas autorisé à accéder à l'application. Veuillez contacter votre administrateur.";
            // On appelle la vue par défaut
            $tabTitle="Connexion";
            include('../page/authenticatePage_default.php');
        }
    }
}

function authenticateControl_logoutAction()
{
    // Code pour la déconnexion
    unset($_SESSION);
    session_destroy();
    header('location:?route=authenticate');
}