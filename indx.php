<!DOCTYPE html>


<html>
    <head>
    <title> profile</title>
    <meta charset="UTF-8">

  
    <link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="bootstrap/css/jumbotron.css" rel="stylesheet">
    <link href="bootstrap/css/cssbootstrap.min.css" rel="stylesheet"> 
    


        <meta name="viewport" content="width=device-width, initial-scale=1">
 
    </head>
    <style>
        body{
          	
   background:url("cover2.jpg")  no-repeat center center; 
      background-size:100% 100%;  
   background-attachment:fixed;      
   background-color:#CCCCCC;  
        }
 h4{

text-align:center; 
font-size:22px; 
font-family:Elephant;
}
.form-horizontal{
font-family : Times New Roman;
text-align : center;
font-size: 20px;
font-weight: bold;
float : right;
 padding: 100px;
margin: 150px;
width:80%;
color: rgb(144, 191, 235);

}








 input[type = submit] {
            background-color: #b3d3eb;
            border: none;
            text-decoration: none;
            color: rgb(35, 34, 34);
            font-size:30px;

            cursor: pointer;
         }
</style>


    <body > 
        <script src="bootstrap/js/bootstrap.min.js"></script> 
        <script src="bootstrap/js/bootstrap.min.js"></script> 

        <script src="bootstrap/js/bootstrap.bundle.min.js"></script> 

        <script src="bootstrap/js/bootstrap.js"></script> 

    
    
    
    <!--  container  -->
    
    
    <div class="navbar navbar-expand-md  navbar-light  text-dark fixed-top h5" style="background-color: #e3f2fd; height: 20px;">
    <div class="container">
        
      <p class=" text-sm-start    ">    <a href="indx5.html" class="navbar-brand  fs-1  fst-italic">CIRAMEC ART 
        <span class=" text-sm-start  fs-2 fst-italic text-secondary">since 2008</a></span></p>
      
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
    <span class="navbar-toggler-icon"></span>
    </button>
    
    
    
    
        <div class="collapse navbar-collapse" id="mainmenu">
        <ul class="navbar-nav ms-auto ">
            <li class=" nav-item"><a href="indx5.php" class="nav-link">الرئيسية</a></li>
              <li class=" nav-item"><a href="stages of work.html" class="nav-link">مراحل العمل </a></li>

              <li class=" nav-item"><a href="indx5.html" class="nav-link">من نحن </a></li>
              <li class=" nav-item"><a href="our_products.php" class="nav-link">المنتجات  </a></li> 
              <li class=" nav-item"><a href="indx5.php" class="nav-link"> ادارة </a></li>
              <li class=" nav-item"><a href="blog.html" class="nav-link">المدونة </a></li>
            
        
            
              <li class=" nav-item" ><a href="login_user.php" class="nav-link">تسجيل دخول   </a></li>
    </ul>
  
    </div>
    </div>
    </div>
    <br>
  
    <br>
 

      
    <br><br>

    
    <div class="text-center">
        <form class="form-horizontal" method="post" action="loginuser_verify.php">
            <div class="form-group">
                <label for="name" class="control-label col-md-4">name</label>
                <div class="col-md-4">
                    <input type="text" name="name" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="password" class="control-label col-md-4 ">Password</label>
                <div class="col-md-4">
                    <input type="password" name="password" class="form-control">
                </div>
            </div> <br>
            <input type="submit" name="submit" class="btn btn-primary">
    <br>
    <p>Or <a href ="signup_user.php">Sign Up Now !</a></p>
        </form>
    
    
    </div>



