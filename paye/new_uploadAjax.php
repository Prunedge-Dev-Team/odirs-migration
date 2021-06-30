<?php
if(isset($_POST['btn'])){
    $applicationNumber = "ODIRS/PAYE/".date("Y")."/".time();
   
    $attachmentType1 = trim($_POST['fileUploadName1']);
    $fileInput1 = $_FILES['fileUpload1']['name'];

    $attachmentType2 = trim($_POST['fileUploadName2']);
    $fileInput2 = $_FILES['fileUpload2']['name'];

    $attachmentType3 = trim($_POST['fileUploadName3']);
    $fileInput3 = $_FILES['fileUpload3']['name'];

    $attachmentType4 = trim($_POST['fileUploadName4']);
    $fileInput4 = $_FILES['fileUpload4']['name'];

    
    //UPLOAD FILE ONE
    $fileToUploadOne = prepareFileForUpload($_FILES['fileUpload1']['name'], $applicationNumber, $attachmentType1);
    $fileToUploadOneResult = move_uploaded_file($_FILES['fileUpload1']['tmp_name'], $fileToUploadOne);

    //UPLOAD FILE TWO
    $fileToUploadTwo = prepareFileForUpload($_FILES['fileUpload2']['name'], $applicationNumber, $attachmentType2);
    $fileToUploadTwoResult = move_uploaded_file($_FILES['fileUpload2']['tmp_name'], $fileToUploadTwo);

    //UPLOAD FILE THREE
    $fileToUploadThree = prepareFileForUpload($_FILES['fileUpload3']['name'], $applicationNumber, $attachmentType3);
    $fileToUploadThreeResult = move_uploaded_file($_FILES['fileUpload3']['tmp_name'], $fileToUploadThree);

    //UPLOAD FILE FOUR
    $fileToUploadFour = prepareFileForUpload($_FILES['fileUpload4']['name'], $applicationNumber, $attachmentType4);
    $fileToUploadFourResult = move_uploaded_file($_FILES['fileUpload4']['tmp_name'], $fileToUploadFour);

    //END UPLOAD FILES HERE
    
   // $url = "new-application-msg.php?applicationNumber=".$applicationNumber; 
    //echo '<script language="javascript">location.href ="'.$url.'"</script>';
}

?>