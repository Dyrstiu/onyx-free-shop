<?php
if(isset($_POST['register'])){

  $errors=array();

  //connect to database 
  
  require ('dbconnect.php');
  // register the users 
  
  $username = mysqli_real_escape_string($conn,$_POST["username"]);
  $email= mysqli_real_escape_string($conn,$_POST['email']);
  $password = mysqli_real_escape_string($conn,$_POST['password']);
  $password2 = mysqli_real_escape_string($conn,$_POST['password2']);
  
  // cheking errors form validation
  if (empty($username)){array_push($errors, "username is required ");}
  if (empty($email)){array_push($errors, "email is required ");}
  if (empty($password)){array_push($errors, "password  is required ");}
  if ($password!=$password2){ array_push($errors,"passwords need to be the same");}
  
  // does username exist in db
  
  $user_check_query = " SELECT * FROM user WHERE username = '$username' or email ='$email'LIMIT 1";
  $results=mysqli_query($conn ,$user_check_query);
  if($results>=1){
    $user= mysqli_fetch_assoc($results);
    if ($user){
      if($user['username']==$username){array_push($errors,"username already exists");}
      if($user['email']==$email){array_push($errors,"email already exists");}
          
  
    }
  }

  
  
   
  //register if no errors 
  if (count($errors)== 0){
      $pwd= password_hash($password,PASSWORD_DEFAULT);// encrypts the password
      $query="INSERT INTO `users` ( `username`, `email`, `password`,`role`) VALUES ( ?, ?, ?,?)";
      
      if($stmt = mysqli_prepare($conn,$query)){
        mysqli_stmt_bind_param($stmt,'ssss',$param_username,$param_email,$param_password,$param_role);
        $param_username = $username;
        $param_email=$email;
        $param_password=$pwd;
        $param_role= "customer";
        
         
        if (mysqli_stmt_execute($stmt)) {
          # code...
          echo "Registered Successfully";
          header('location:login.php');
        }else{
          echo "<h4 style='color:red'>Something went wrong</h4>";
        }
        
        mysqli_close($conn);
      }
      if (count($errors)>0){
  
           foreach($errors as  $error){
            echo$error;
           } 
       
       }
      
}
}
