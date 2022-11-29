<?php
function db_query($query) {
    $connection = mysqli_connect("localhost","jefe","jefe","clientes_db");
    $result = mysqli_query($connection,$query);

    return $result;
}

function edit($tblname,$form_data,$field_dni,$dni){
	$sql = "UPDATE ".$tblname." SET ";
	$data = array();

	foreach($form_data as $column=>$value){

		$data[] =$column."="."'".$value."'";

	}
	$sql .= implode(',',$data);
	$sql.=" where ".$field_dni." = "."'".$dni."'"."";
	return db_query($sql); 
}

function delete($tblname,$form_data,$field_dni,$dni){
	$sql = "DELETE FROM ".$tblname;
	$data = array();

	foreach($form_data as $column=>$value){

		$data[] =$column."="."'".$value."'";

	}

	$sql.=" where ".$field_dni." = "."'".$dni."'";
	return db_query($sql); 
}

function select_dni($tblname,$field_name,$field_dni){
	$sql = "Select * from ".$tblname." where ".$field_name." = "."'".$field_dni."'"."";
	$db=db_query($sql);
	$GLOBALS['row'] = mysqli_fetch_object($db);
	return $sql;

}


?>
