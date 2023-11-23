<?php 
    include_once('database.php');

    $postdata = file_get_contents("php://input");
    // echo $postdata;
    $result = json_decode($postdata);
	

if ( isset($result->FullName) && isset($result->userEmail)  && isset($result->FromDate) && isset($result->ToDate) &&  isset($result->PostingDate)  && isset($result->phone)) {

    // $BookingNumber = $result->BookingNumber;
    $phone = $result->FullName;
    $userEmail = $result->userEmail;
    $phone = $result->phone;

    // $VehicleId = $result->VehicleId;
    $FromDate = $result->FromDate;
    $ToDate = $result->ToDate;
    // $message = $result->message;
    // $Status = $result->Status;
    $PostingDate = $result->PostingDate;
    // $LastUpdationDate = $result->LastUpdationDate;


    $db->query("INSERT INTO tblbooking VALUES(NULL,'$FullName', 0, '$userEmail', 0, '$FromDate', '$ToDate', '', 0 , '$PostingDate' , now , '$phone')");

    if ($db->affected_rows > 0) {
        echo json_encode(['msg' => " Booking Successfully"]);
    }

    // echo json_encode("My Message")

} else {
    echo json_encode(['msg' => "No fields can be blank"]);
}

?>