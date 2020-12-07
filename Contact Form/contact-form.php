<?php

//Title (Mr., Mrs, Ms)
$Title = $_POST["title"];                                               

//First Name
$fName = $_POST["f_name"];                                            
if (!preg_match ("/^[a-zA-z]*$/", $fName) ) {  
    $Error_Msg = "First Name should only contain alphabets.";  
    echo '<script>alert("' . $Error_Msg . '");window.location.href="index.html";</script>';
}

//Last Name  
$lName = $_POST["l_name"];                                            
if (!preg_match ("/^[a-zA-z]*$/", $lName) ) {  
    $Error_Msg = "Last Name should only contain alphabets.";  
    echo '<script>alert("' . $Error_Msg . '");window.location.href="index.html";</script>';

}

//Date Of Birth
$DOB = $_POST["__DOB"];                                                 

//Telephone No.
$telNo = $_POST["phone_no"];                                            
if (!preg_match ("/^[0-9]*$/", $telNo) ) {  
    $telNoError = "Only numeric value is allowed.";  
    echo '<script>alert("' . $telNoError . '");window.location.href="index.html";</script>';
}  
  
if (strlen ($telNo) != 10) {  
   $telNoError = "Mobile no must contain 10 digits.";  
   echo '<script>alert("' . $telNoError . '");window.location.href="index.html";</script>';
}


//Email
$email = $_POST ["email_id"];  
if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  $Error_Msg = "Email not valid.";  
  echo '<script>alert("' . $Error_Msg . '");window.location.href="index.html";</script>';
}

//File
$allowed_types = array('pdf','jpg', 'png', 'jpeg'); 
$fileName = $_FILES['file__upload']['name'];
$ext = pathinfo($fileName, PATHINFO_EXTENSION);
if (!in_array($ext, $allowed_types)) {
    echo '<script>alert("Invaild File Format. Upload PDF or Image Files only");window.location.href="index.html";</script>';
}

//Message
$Message = $_POST["inputMessage"];


//Output
echo "<h1>Thank You $Title $fName $lName </h1>";
echo "<h1>You have submitted the following detail: </h1>";
echo "<h1>Date of Birth:    $DOB</h1>";
echo "<h1>Telephone number: $telNo</h1>";
echo "<h1>File Uploaded:    $fileName</h1>";
echo "<h1>Message: $Message</h1>";


?>