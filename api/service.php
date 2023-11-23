<?php
include 'database.php';
$products = [];

$sql = "SELECT * FROM tblvehicles";
if($result = $db->query($sql))
{
	$i = 0;
	while($row = $result->fetch_assoc())
	{
		$products[$i]['id'] = $row['id'];
		$products[$i]['VehiclesTitle'] = $row['VehiclesTitle'];
		$products[$i]['VehiclesBrand'] = $row['VehiclesBrand'];
		$products[$i]['VehiclesOverview'] = $row['VehiclesOverview'];
		$products[$i]['PricePerDay	'] = $row['PricePerDay	'];
		$products[$i]['FuelType	'] = $row['FuelType	'];
		$products[$i]['ModelYear'] = $row['ModelYear'];
		$products[$i]['Vimage1'] = $row['Vimage1'];
		$i++;
	}
	echo json_encode($products);
}
else
{
	http_response_code(404);
}


// id	
// VehiclesTitle	
// VehiclesBrand	
// VehiclesOverview	
// PricePerDay	
// FuelType	
// ModelYear	
// Vimage1