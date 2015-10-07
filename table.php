<?php
	
	require_once("functions.php");
	
	
	//kas kustutame midagi
	// ?delete=vastav id mida kustutada on addressireal
	if(isset($_GET["delete"])){
		
		echo "Kustutame id ".$_GET["delete"];
		//käivitan funktsiooni, saadan kaasa id!
		deleteCar($_GET["delete"]);
		
	}

	$array_of_cars=getCarData();
	
	//trükin välja esimese auto
	//echo $array_of_cars[0]->id." ".$array_of_cars[0]->plate;

?>

<h2>Tabel</h2>
<table>
	<tr>
		<th>id</th>
		<th>numbrimärk</th>
		<th>värvus</th>
		<th>kasutaja id</th>
		<th>kustuta</th>
	
	</tr>
	<?php
		//trükime välja read
		for($i=0; $i< count($array_of_cars) ; $i++){
			//echo $array_of_cars[$i]->id;
			echo"<tr>";
			echo"<td>".$array_of_cars[$i]->id."</td>";
			echo"<td>".$array_of_cars[$i]->plate."</td>";
			echo"<td>".$array_of_cars[$i]->color."</td>";
			echo"<td>".$array_of_cars[$i]->user_id."</td>";
			echo"<td><a href='?delete=".$array_of_cars[$i]->id."'>X</a><td>";
			echo"</tr>";
		}
	
	
	?>
</table>