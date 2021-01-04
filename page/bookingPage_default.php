<?php include('template/header.php'); ?>
<?php include('template/menu.php'); ?>

        <?php
        if (isset($message)){
                echo "<small>".$message."</small>";
        }?>

        <h1>Réserver une salle</h1>
        <form method="POST" action="?route=booking&action=store">
                <label for="dataResa">Date </label>
                <input type="date" name="dateResa">
                <label for="heureDebutResa">Heure de début </label>
                <input type="time" name="heureDebutResa">
                <label for="heureFinResa">Heure de fin </label>
                <input type="time" name="heureFinResa">

                <label for="idSalleResa">Salle </label>
                <select name="idSalleResa">
<?php
$html ='';
foreach ($salles as $salle){
        $html.='<option value="'.$salle['id'].'">'.$salle['libelle'].'</option>';
}
echo $html;
?>
                </select>


                <input type="submit" value="Réserver la salle">
        </form>
<table>

        <caption>Liste des réservations</caption>
        <thead>
        <tr><th>#</th><th>date</th><th>heure de début</th><th>heure de fin</th><th>salle</th></tr>
        </thead>
        <tbody>
<?php
$html='';
foreach ($reservations as $reservation) {
        $html.='<tr>';
        $html.='<td>'.$reservation['id'].'</td>';
        $html.='<td>'.$reservation['date'].'</td>';
        $html.='<td>'.$reservation['heureDebut'].'</td>';
        $html.='<td>'.$reservation['heureFin'].'</td>';
        $html.='<td>'.$reservation['salle'].'</td>';
        $html.='</tr>';
}
echo $html;
?>
        </tbody>
        <tfoot>
        <tr><th>#</th><th>date</th><th>heure de début</th><th>heure de fin</th><th>salle</th></tr>
        </tfoot>
</table>

<?php include('template/footer.php'); ?>