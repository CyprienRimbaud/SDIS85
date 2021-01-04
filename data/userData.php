<?php

function userData_findOneWithCredentials($userMail,$userPwd){
    //$request ="SELECT * FROM user WHERE email='usersio@sio.fr'AND mdp='0ec960d4105605608894658ed65e81a85a34839e'";
    $request ="SELECT * FROM user WHERE email=? AND mdp=?";
    $requestParams=array($userMail,$userPwd);
    $result=Connection::safeQuery($request,$requestParams);
    return $result;
}