<?php

function dashboardControl($userAction){
    switch ($userAction){
        // Action a àjouter
        default:
            dashboardControl_defaultAction();
            break;
    }
}

function dashboardControl_defaultAction()
{
    $tabTitle="Tableau de bord";
    include('../page/dashboardPage_default.php');
}