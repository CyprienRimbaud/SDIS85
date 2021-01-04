<?php

function reserverData_getAll(){
     $request="SELECT * FROM reserver";
     $results=Connection::query($request);
     return $results;
}

function reserverData_getAllWithNames(){
     $request="SELECT reserver.*,ligue.libelle AS 'ligue',salle.libelle AS 'salle' FROM reserver JOIN ligue ON reserver.ligue_id=ligue.id JOIN salle ON reserver.salle_id=salle.id ORDER BY date DESC";
     $results=Connection::query($request);
     return $results;
}


function reserverData_store($userDatas){
     //$request="INSERT INTO reserver VALUES(NULL,'2021-01-03','20:00','22:00',6,1)";
     $request="INSERT INTO reserver VALUES(NULL,'".$userDatas['date']."','".$userDatas['heureDebut']."','".$userDatas['heureFin']."',".$userDatas['ligue_id'].",".$userDatas['salle_id'].")";
     $result=Connection::exec($request);
     return $result;
}

function reserverData_getAllWithSalleNameByLigueId($ligueId){
     $request=" SELECT reserver.*,salle.libelle AS 'salle'";
     $request.=" FROM reserver JOIN salle ON reserver.salle_id=salle.id";
     $request.=" WHERE ligue_id=".$ligueId;
     $request.=" ORDER BY id DESC";
     $results=Connection::query($request);
     return $results;
}