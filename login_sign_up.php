<?php
include('db.php');
if(isset($_POST['action']))
{          
    if($_POST['action']=="login")
    {
        echo " Hello I am in login part of page \n" ;
        $email = mysqli_real_escape_string($connection,$_POST['email']);
        $password = mysqli_real_escape_string($connection,$_POST['password']);
        $strSQL = mysqli_query($connection,"select First_Name from user_data where Email_address='".$email."' and password='".md5($password)."'");
        $Results = mysqli_fetch_array($strSQL);
        if(count($Results)>=1)
        {
            $message = $Results['name']." Login Sucessfully!!";
            //echo "hello u have logged in Sucessfully :) \n";
            //echo $message;
            header('Location: logInSuccess.php');
        }
        else
        {
            $message = "Invalid email or password!!";
            echo "Sorry something went wrong ):\n";
            echo $message;
        }        
    }
    elseif($_POST['action']=="signup")
    {
        #echo " Hello I am in signup part of page \n" ;
        $fname       = mysqli_real_escape_string($connection,$_POST['First_Name']);
        $lname       = mysqli_real_escape_string($connection,$_POST['Last_name']);
        $mobile   = mysqli_real_escape_string($connection,$_POST['Mobile']);
        $email      = mysqli_real_escape_string($connection,$_POST['Email']);
        $password   = mysqli_real_escape_string($connection,$_POST['Password']);
        

        $query = "SELECT Email_address FROM user_data where Email_address='".$email."'";
        #echo $query;
        $result = mysqli_query($connection,$query);
        
        $numResults = mysqli_num_rows($result);
        #echo strlen($mobile);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) // Validate email address
        {
            
            $message =  "Invalid email address please type a valid email!!";
            echo $message;
        }
        elseif (strlen($password) < 5) {
            $message = " Password is too small";
            echo $message;
        }
         elseif (strlen($fname) < 1) {
            $message = " First_Name is mendatory";
            echo $message;
        }
         elseif (!is_numeric($mobile)) {
            $message = " mobile number should be numeric only";
            echo $message;
        }
        elseif (strlen($mobile) !== 10) {
            $message = " mobile number should be of exactly 10 digits";
            echo $message;
        }
         elseif (strlen($lname) < 1) {
            $message = " Last_name is mendatory";
            echo $message;
        }
        elseif($numResults>=1)
        {
            
            $message = $email." Email already exist!!";
            echo $message;
        }
        else
        {
            $insert_query = "insert into user_data (First_Name,Last_name,mobile,Email_address,password) values('".$fname."', '".$lname."','".$mobile."','".$email."','".md5($password)."')";

            #echo $insert_query;
            mysqli_query($connection, $insert_query);
            //$message = "Signup Sucessfully!!";
            header('Location: signUpSuccess.php');
            //echo $message;
        }
    }
}

?>
