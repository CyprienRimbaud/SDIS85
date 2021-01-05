<nav>
    <p><?php echo $_SESSION['prenom']." ".strtoupper($_SESSION['nom']) ?></p>
    <ul>
        <li><a href="?route=home"> Accueil </a></li>
        <li><a href="?route=authenticate&action=logout"> Déconnexion </a></li>
    </ul>
</nav>

