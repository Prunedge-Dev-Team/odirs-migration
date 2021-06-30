<?php
$servername = 'localhost';
$username = 'irsongov_irspaye';
$password = 'ODIRS_Paye2020';
$dbname = 'irsongov_paye';

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//session_start();
/*$servername = "localhost";
$username = "root";
$password = "";
$dbname= "paye";

$conn = new mysqli($servername, $username, $password,$dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}*/

function prepareFileForUpload($fileInput, $applicationNumber, $attachmentType){
	global $conn ;
	$appNo = str_replace("/","-",$applicationNumber);
	$ext = explode('.', basename($fileInput));   // Explode file name from dot(.)
	if (!file_exists("uploads/".$appNo)){
		$mkdir = mkdir("uploads/".$appNo) ;
	}
	$filename = rand(10, 100000).".".$ext[1];
	$target_path = "uploads/".$appNo."/";   // Declaring Path for uploaded images.
	$target_file = ($target_path.$filename);

	$sql = "INSERT INTO attachments(application_number, attachment_type, attachment, status) 
	VALUES ('$applicationNumber', '$attachmentType', '$target_file', 'active')";
	$execQry = mysqli_query($conn, $sql);
	
	return $target_file;
}

//GET DOCUMENTS
function getUploadedDocuments($applicationNumber,  $attachmentType){
	global $conn ;
	$sql = "SELECT * FROM attachments where application_number = '$applicationNumber' AND attachment_type='$attachmentType'";
	$execQry = mysqli_query($conn, $sql);
	return $execQry;
}
 

 ?>