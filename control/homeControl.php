<?php

function homeControl($userAction){
    switch ($userAction){
        // Action a àjouter
        default:
            homeControl_defaultAction();
            break;
    }
}

function homeControl_defaultAction()
{
    $tabTitle="Accueil";
    include('../page/homePage_default.php');
}