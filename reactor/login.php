<?php
/**
 * Created by PhpStorm.
 * User: Andrew Quaye
 * Date: 13/09/2018
 * Time: 5:25 PM
 */
include "config/config.php";
include "config/connection.php";

class login{

    public function register($conn){

        $email = $_POST['email'];
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "Invalid email format";
        }else{
            $sql= "SELECT * FROM `get_user_account`where username ='".$email."'";
            $result = $conn->query($sql);
            $row = $result->fetch_assoc();
            if ( $row['username'] !== $email){

                $stmt = "INSERT INTO `user_account` (`username`) VALUES ('$email')";
                $result = $conn->query($stmt);

                $last_id = $conn->insert_id;

                if ($result === TRUE){
                    $m ="Your Username : ". $email ."\r\n password :". rand();

                    $subject = "Cosmos Reactor Login Detail";
                    $from = "request@iquipe.000webhostapp.com";
                    $message =$m;
                    $header ="From: $from \r\n";
                    $header .= "Content-Type: text/html \r\n";

                    $mail = mail($email,$subject,$message,$header);

                    if ($mail == TRUE){
                        header("location: rout.php?q-rout=dash");
                    }else{
                        $result = $conn->query("DELETE FROM `user_account` WHERE (`userID`='$last_id')");
                        if ($result == True){
                            $header("location: reactor/index.php?rout=login");
                        }
                    }
                }
            }else{
                echo "User already exist";
                exit(0);
            }
        }
    }

    public function login_in($conn){
        $username = $_POST['username'];
        $password = $_POST['password'];

        $stmt = $conn->prepare("INSERT INTO `user_account` (`username`,`password`,`email`) VALUES (?,?,?)");
        $stmt->bind_param("sss",$username,$password,$password);

        if ($stmt->execute()== True){
            $stmt->close();
            header("location: rout.php?q-rout=dash");
        }else{
            echo"error";
        }

    }
}
if ($_POST['submit'] === "sign up"){
    login::register($conn);
}elseif ($_POST['submit'] === "login"){
    login::login_in($conn);
}else{
    echo "error";
}

