<?php 

//define form variables
$firstname = $lastname = $email = $phone = $subject = $message = " ";

//define erro holders
$firstnameErr = $lastnameErr = $emailErr = $phoneErr = $subjectErr= $messageErr = " ";

//check if form is submitted
if($_SERVER['REQUEST_METHOD']=='POST'){
    
    //begin validation
    if (empty($_POST["firstname"])) {
        $firstnameErr = "First Name is required";
    } else {
        $firstname = validate_input($_POST["firstname"]);
    }

    if (empty($_POST["lastname"])) {
        $lastnameErr = "Last Name is required!";
    } else {
        $lastname = validate_input($_POST["lastname"]);
    }       
    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = validate_input($_POST["email"]);
    }
    
    if (empty($_POST["phone"])) {
        $phoneErr = "Phone is required";
    } else {
        $phone = validate_input($_POST["phone"]);
    }

    if(empty($_POST['subject'])){
        $subjectErr = "Subject is Required!";
    }else{
        $subject =validate_input($_POST('subject'));
    }
    
    if(empty($_POST['message'])){
        $messageErr = " message is Required!";
    }else{
        $message = validate_input($_POST['message']);
    }
}

function validate_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>
