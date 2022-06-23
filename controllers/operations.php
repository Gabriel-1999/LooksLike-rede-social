<?php
    session_start();
    $action = $_GET["action"];
    $connection = include '../configs/connection.php';
    if($action == "create"){
        $name = $_POST["name"];
        $email = $_POST["email"];
        $password = $_POST["password"]; 
        $birthday = $_POST["birthday"];
        $phone = $_POST["phone"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $city = $_POST["city"];
        $user_exists = false;
        $email_exists = false;
        $phone_exists = false;
        $sql = "SELECT * from USER";
        $user=$connection->prepare($sql);
        $user->execute();
        $user = $user->fetchAll(PDO::FETCH_OBJ);

        // PHONE NUMBER LESS THAN 9 DIGITS
        if(strlen($phone) < 9){
            $_SESSION["created"] = 3;
            header("location:../register.php");
            return;
        }
        else{

            // PHONE NUMBER GREAT THAN 9
            if(strlen($phone) > 9){
                $_SESSION["created"] = 4;
                header("location:../register.php");
            }else{
                    foreach ($user as $key => $user) {
                        if(strtoupper($user->NAME) === strtoupper($name)){
                          $user_exists = true;
                        }
                        if(strtoupper($user->EMAIL) === strtoupper($email)){
                          $email_exists = true;
                        }
                        if($user->PHONE === $phone){
                            $phone_exists = true;
                        }
                        echo $user->PHONE."<br>";
                    }
                  if($email_exists === false && $user_exists === false && $phone_exists === false){
                      $sql = "INSERT INTO USER (email, name, city,password, phone, birthday)
                      VALUES ('".$email."','".$name."','".$city."','".md5($password)."','".$phone."','".$birthday."')";
                      if ($connection->query($sql)) {
                          //USER CREATED
                      $_SESSION["created"] = 0;
                     header("location:../register.php");
                      return;
                      }
                  }
                  else{
                    if($user_exists){
                        // USER ALREADY EXISTS
                      $_SESSION["created"] = 1;
                      header("location:../register.php");
                     return;
                    }else{
                      if($email_exists){
                          // EMAIL ALREADY EXISTS
                          $_SESSION["created"] = 2;
                          header("location:../register.php");
                        return;
                      }else{
                          if($phone_exists){
                              //PHONE NUMBER ALREADY TAKEN
                              $_SESSION["created"] = 5;
                              header("location:../register.php");
                              return;
                          }
                      }
                    }
                  }
                }
        }
    }
    else{
        //LOGIN
        if($action === "login"){
            $email = $_POST["email"];
            $password = $_POST["password"]; 
            $sql = "SELECT * from USER";
            $user=$connection->prepare($sql);
            $user->execute();
            $user = $user->fetchAll(PDO::FETCH_OBJ);
            $user_exists = false;

            foreach ($user as $user) {
                if(strtoupper($user->EMAIL) === strtoupper($email) && $user->PASSWORD === md5($password)){
                    $user_exists = true;
                    break;
                }
            }
            if($user_exists){
                $_SESSION["user-email"] = $email;
                $_SESSION["user-login"] = true;
                $_SESSION["login"] = 0;
                header("location:../home.php");
            }
            else{
                $_SESSION["login"] = -1;
                header("location:../signIn.php");
            }
        }
    }
?>