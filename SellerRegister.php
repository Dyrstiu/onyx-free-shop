
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">   
    <link rel="shortcut icon" href="images/logo.png " type="image/x-icon">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.css" rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"rel="stylesheet"/> 
    <link rel="stylesheet" href="seller.css">

    <title>Onyxgold | Signup</title>
</head>
<body>
    <div class="container">
        <div class="row">
          <div class="col-lg-10 col-xl-9 mx-auto">
            <div class="card card-signin flex-row my-5">
              <div class="card-img-left d-none d-md-flex">
                 <!-- Background image for card set in CSS! -->
              </div>
              <div class="card-body"  style="background-color:yellow  ;opacity: .6;">
                  
                <h5 class="card-title text-center"><img src="images/logo.png " alt="" >
                   <span> Sign UP </span> </h5>
                <form class="form-signin" action=" " method="POST">
                  
                  <div class="form-label-group">
                    <input name="username" type="text" id="inputUserame" class="form-control" placeholder="Username" required autofocus>
                    <label for="inputUserame">Username</label>
                  </div>
    
                  <div class="form-label-group">
                    <input name="email" type="email" id="inputEmail" class="form-control" placeholder="Email address" required>
                    <label for="inputEmail">Email address</label>
                  </div>
                  
                  <hr>
    
                  <div class="form-label-group">
                    <input  name="password" type="password" id="inputPassword" class="form-control" placeholder="Password" required>
                    <label for="inputPassword">Password</label>
                  </div>
                  
                  <div class="form-label-group">
                    <input name="password2" type="password" id="inputConfirmPassword" class="form-control" placeholder="Password" required>
                    <label for="inputConfirmPassword">Confirm password</label>
                  </div>
    
                  <button class="btn btn-lg btn-color btn-block text-uppercase ripple" type="submit" name="register" >Register</button>
                  <?php require('sellerreg.php');?>
                  
                </form>
                
              </div>
            </div>
          </div>
        </div>
      </div>
    
</body>
</html>