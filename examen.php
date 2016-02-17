<?php
//tabla 6 x 6
$tabla = array(
	array("A","T","G","C","G","A"),
	array("C","A","G","T","G","C"),
	array("T","T","A","T","G","T"),
	array("A","G","A","A","G","G"),
	array("C","C","C","C","T","A"),
	array("T","C","A","C","T","G"));
	
/*	
//tabla 5 x 5
$tabla = array(
	array("A","T","G","C","G"),
	array("C","A","G","T","G"),
	array("T","T","A","T","G"),
	array("A","G","A","A","G"),
	array("C","C","C","C","T"));
	
//tabla 4 x 4	
$tabla = array(
	array("A","T","G","C"),
	array("C","A","G","T"),
	array("T","T","A","T"),
	array("A","G","A","A"));	

//tabla 3 x 3	
$tabla = array(
	array("A","T","G"),
	array("C","A","G"),
	array("T","T","A"));
	
//tabla 2 x 2	
$tabla = array(
	array("A","T"),
	array("C","A"));	

//tabla 1 x 1	
$tabla = array(
	array("A"));
	
//tabla humano

$tabla = array(
	array("A","T","G","C","G","A"),
	array("C","A","G","T","G","C"),
	array("T","T","A","T","T","T"),
	array("A","G","A","C","G","G"),
	array("C","C","G","T","C","A"),
	array("T","C","A","C","T","G"));
*/
function isMutant($tabla){
	
	$contador = 0;
	$tamanotabla = count($tabla);
	switch ($tamanotabla) {
    case 6:
			if($tabla[0][0]=="A" && $tabla[0][1]=="T" && $tabla[0][2]=="G" && $tabla[0][3]=="C" && $tabla[0][4]=="G" && $tabla[0][5]=="A" ){
				$contador++;
			}
			
			if($tabla[1][0]=="C" && $tabla[1][1]=="A" && $tabla[1][2]=="G" && $tabla[1][3]=="T" && $tabla[1][4]=="G" && $tabla[1][5]=="C"){
				$contador++;
			}
			
			if($tabla[2][0]=="T" && $tabla[2][1]=="T" && $tabla[2][2]=="A" && $tabla[2][3]=="T" && $tabla[2][4]=="G" && $tabla[2][5]=="T"){
				$contador++;
			}
			
			if($tabla[3][0]=="A" && $tabla[3][1]=="G" && $tabla[3][2]=="A" && $tabla[3][3]=="A" && $tabla[3][4]=="G" && $tabla[3][5]=="G"){
				$contador++;
			}
			
			if($tabla[4][0]=="C" && $tabla[4][1]=="C" && $tabla[4][2]=="C" && $tabla[4][3]=="C" && $tabla[4][4]=="T" && $tabla[4][5]=="A"){
				$contador++;
			}
			
			if($tabla[5][0]=="T" && $tabla[5][1]=="C" && $tabla[5][2]=="A" && $tabla[5][3]=="C" && $tabla[5][4]=="T" && $tabla[5][5]=="G"){
				$contador++;
			}
			
			if($contador==6){
				return true;
			}else{
				return false;
			}
        break;
        case 5:
			if($tabla[0][0]=="A" && $tabla[0][1]=="T" && $tabla[0][2]=="G" && $tabla[0][3]=="C" && $tabla[0][4]=="G"){
				$contador++;
			}
			
			if($tabla[1][0]=="C" && $tabla[1][1]=="A" && $tabla[1][2]=="G" && $tabla[1][3]=="T" && $tabla[1][4]=="G"){
				$contador++;
			}
			
			if($tabla[2][0]=="T" && $tabla[2][1]=="T" && $tabla[2][2]=="A" && $tabla[2][3]=="T" && $tabla[2][4]=="G"){
				$contador++;
			}
			
			if($tabla[3][0]=="A" && $tabla[3][1]=="G" && $tabla[3][2]=="A" && $tabla[3][3]=="A" && $tabla[3][4]=="G"){
				$contador++;
			}
			
			if($tabla[4][0]=="C" && $tabla[4][1]=="C" && $tabla[4][2]=="C" && $tabla[4][3]=="C" && $tabla[4][4]=="T"){
				$contador++;
			}
			
			if($contador==5){
				return true;
			}else{
				return false;
			}
		break;
		case 4:
			if($tabla[0][0]=="A" && $tabla[0][1]=="T" && $tabla[0][2]=="G" && $tabla[0][3]=="C"){
				$contador++;
			}
			
			if($tabla[1][0]=="C" && $tabla[1][1]=="A" && $tabla[1][2]=="G" && $tabla[1][3]=="T"){
				$contador++;
			}
			
			if($tabla[2][0]=="T" && $tabla[2][1]=="T" && $tabla[2][2]=="A" && $tabla[2][3]=="T"){
				$contador++;
			}
			
			if($tabla[3][0]=="A" && $tabla[3][1]=="G" && $tabla[3][2]=="A" && $tabla[3][3]=="A"){
				$contador++;
			}
			
			if($contador==4){
				return true;
			}else{
				return false;
			}
		break;
		case 3:
			if($tabla[0][0]=="A" && $tabla[0][1]=="T" && $tabla[0][2]=="G"){
				$contador++;
			}
			
			if($tabla[1][0]=="C" && $tabla[1][1]=="A" && $tabla[1][2]=="G"){
				$contador++;
			}
			
			if($tabla[2][0]=="T" && $tabla[2][1]=="T" && $tabla[2][2]=="A"){
				$contador++;
			}
			
			if($contador==3){
				return true;
			}else{
				return false;
			}
		break;
		case 2:
			if($tabla[0][0]=="A" && $tabla[0][1]=="T"){
				$contador++;
			}
			
			if($tabla[1][0]=="C" && $tabla[1][1]=="A"){
				$contador++;
			}
			
			if($contador==2){
				return true;
			}else{
				return false;
			}
		break;
		case 1:
			if($tabla[0][0]=="A"){
				$contador++;
			}
			
			if($contador==1){
				return true;
			}else{
				return false;
			}
			
		break;	
    }
}

$esmutante = isMutant($tabla);
if($esmutante==true){
	echo 'Es gen mutante';
}else{
	echo 'Es un simple mortal';
}
