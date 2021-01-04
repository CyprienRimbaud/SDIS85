<nav>
    <p><?php echo $_SESSION['prenom']." ".strtoupper($_SESSION['nom']) ?></p>
    <ul>
        <li><a href="?route=dashboard"> Tableau de bord </a></li>
        <li><a href="?route=booking"> Réserver une salle </a></li>
        <li><a href="?route=room"> Information sur les salles </a></li>
        <li><a href="?route=settings"> Paramètres </a></li>
        <li><a href="?route=authenticate&action=logout"> Déconnexion </a></li>
    </ul>
</nav>

