
<?php
include_once('database.php');

$postdata = file_get_contents("php://input");
// echo $postdata;
$result = json_decode($postdata);

if (isset($result->name) && isset($result->email) && isset($result->subject) && isset($result->message)) {
    $name = $result->name;
    $email = $result->email;
    $subject = $result->subject;
    $message = $result->message;


    $db->query("INSERT INTO tblcontact VALUES(NULL, '$name', '$email', '$subject','$message')");

    if ($db->affected_rows > 0) {
        echo json_encode(['msg' => "Successfully Inserted"]);
    }

    // echo json_encode("My Message")

} else {
    echo json_encode(['msg' => "No fields can be blank"]);
}

?>