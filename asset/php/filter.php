<?php 

    $errors= array();
        if(isset($_POST['button']) == true) {
          
            $firstname = filter_var($_POST['firstname'], FILTER_SANITIZE_STRING); 
            $firstname = trim($firstname);
                if($firstname == "") {
                    $errors['firstname'] = "Please enter your firstname";
                }
            
            $lastname = filter_var($_POST['lastname'], FILTER_SANITIZE_STRING); 
            $lastname = trim($lastname);
                    if($lastname == "") {
                        $errors['lastname'] = "Please enter your lastname";
                    }
       
            $gender = filter_var($_POST['gender'], FILTER_SANITIZE_STRING); 
            $gender = trim($gender);        
                    if($gender == "") {
                       $errors['gender'] = "Please select a gender";
                    }

            $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL); 
            $email = trim($email);
                    if($email == "") {
                        $errors['email'] = "Please enter your email adress";
                    }
    
            $country = filter_var($_POST['country'], FILTER_SANITIZE_STRING); 
            $country = trim($country);
                    if($country == "") {
                        $errors['country'] = "Please enter your country";
                    }
    
            $message = filter_var($_POST['message'], FILTER_SANITIZE_STRING); 
            $message = trim($message);
                    if($message == "") {
                            $errors['message'] = "Please enter your message";
                    }
    }    
?>