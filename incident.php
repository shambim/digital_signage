<?php
$incident=simplexml_load_file("incident.xml") or die("Error: Cannot create object");
$message_id=$incident->IncidentMessage->MessageID;
$content=$incident->IncidentMessage->Content;
$res=array();
foreach($incident->IncidentMessage as $name=>$value){
    $res[$name]=$value;
}
echo json_encode($res);
exit;