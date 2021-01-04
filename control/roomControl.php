<?php

function roomControl($userAction){
    switch ($userAction){
        // Action a àjouter
        default:
            roomControl_defaultAction();
            break;
    }
}

function roomControl_defaultAction()
{
    $tabTitle="Listing des salles";
    $salles=salleData_getAll();
    include('../page/roomPage_default.php');
}