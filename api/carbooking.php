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
		$products[$i]['PricePerDay'] = $row['PricePerDay'];
		$products[$i]['FuelType'] = $row['FuelType'];
		$products[$i]['ModelYear'] = $row['ModelYear'];
		$products[$i]['SeatingCapacity'] = $row['SeatingCapacity'];
		$products[$i]['Vimage1'] = $row['Vimage1'];
		$products[$i]['Vimage2'] = $row['Vimage2'];
		$products[$i]['Vimage3'] = $row['Vimage3'];
		$products[$i]['AirConditioner'] = $row['AirConditioner'];
		$products[$i]['PowerDoorLocks'] = $row['PowerDoorLocks'];
		$products[$i]['AntiLockBrakingSystem'] = $row['AntiLockBrakingSystem'];
		$products[$i]['BrakeAssist'] = $row['BrakeAssist'];
		$products[$i]['PowerSteering'] = $row['PowerSteering'];
		$products[$i]['DriverAirbag'] = $row['DriverAirbag'];
		$products[$i]['PassengerAirbag'] = $row['PassengerAirbag'];
		$products[$i]['PowerWindows'] = $row['PowerWindows'];
		$products[$i]['CDPlayer'] = $row['CDPlayer'];
		$products[$i]['CentralLocking'] = $row['CentralLocking'];
		$products[$i]['CrashSensor'] = $row['CrashSensor'];
		$products[$i]['LeatherSeats'] = $row['LeatherSeats'];
		$products[$i]['RegDate'] = $row['RegDate'];
		$products[$i]['UpdationDate'] = $row['UpdationDate'];
		$i++;
	}
	echo json_encode(['data'=> $products]);
}
else
{
	http_response_code(404);
}
?>