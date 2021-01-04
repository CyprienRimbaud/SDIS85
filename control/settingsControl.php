<?php

function settingsControl($userAction){
    switch ($userAction){
        // Action a àjouter
        default:
            settingsControl_defaultAction();
            break;
    }
}

function settingsControl_defaultAction()
{
    $tabTitle="Paramètres";

    include('../page/settingsPage_default.php');
}